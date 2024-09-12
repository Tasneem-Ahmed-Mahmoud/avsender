
@if(session($type))

<div class="alert alert-{{ $alert }}">
    <small>{{ session($type) }}</small>
</div>


@endif