@extends('frontend.inc.master')

@section('content')

<div class="faq_hero_container_section" style="height: 100%;">
    <div style="text-align: center; padding-top: 9%;" class="container pb-5">
        <img style="max-width: 100%;" src="{{ asset('frontend/assets/images/forget.svg') }}" alt="not found" />
        <h3 class="forget-h3">Forget password?</h3>
        <p class="forget-p">Please check the sent email at your inbox to change password.</p>
        <p class="forget-mail">{{ session('email') }}</p>
        <div class="forget-span">Didn't receive an Email?</div>

       @if (session('email'))
       <form id="resend-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="hidden" name="email" value="{{ session('email') }}">
        
        <button class="linkExpired-btn">Resend email</button>
        <img src="{{ asset('frontend/assets/images/reload.svg') }}" alt="Reload" class="loading" style="display:none;" />
    </form>   
       @endif

      <div class="alert alert-success" id="success-alert" style="display:none;">
          The password reset email has been resent successfully!
      </div>
      <div class="alert alert-danger" id="error-alert" style="display:none;">
          Failed to resend the email. Please try again later.
      </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#resend-form').on('submit', function(event) {
        event.preventDefault();

        var $form = $(this);
        var $spinner = $('.loading'); // Spinner class
        var $successAlert = $('#success-alert');
        var $errorAlert = $('#error-alert');

        // Show spinner
        $spinner.show();
        $spinner.addClass('rotating');

        // Reset alerts
        $successAlert.hide();
        $errorAlert.hide();

        $.ajax({
            url: $form.attr('action'),
            method: 'POST',
            data: $form.serialize(),
            success: function(response) {
                $spinner.removeClass('rotating').hide();
                $successAlert.text(response.message || 'The password reset email has been resent successfully!').show();
            },
            error: function(xhr) {
                $spinner.removeClass('rotating').hide();
                var errorMessage = 'Failed to resend the email. Please try again later.';
                if (xhr.responseJSON && xhr.responseJSON.errors && xhr.responseJSON.errors.email) {
                    errorMessage = xhr.responseJSON.errors.email[0];
                }
                $errorAlert.text(errorMessage).show();
            }
        });
    });
});
</script>
@endsection
