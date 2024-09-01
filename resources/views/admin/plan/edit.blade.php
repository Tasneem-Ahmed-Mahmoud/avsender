@extends('layouts.main.app')
@section('head')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css') }}" />
@endpush
@include('layouts.main.headersection',[
'title'=> __('Edit Plan'),
'buttons'=>[
[
'name'=>__('Back'),
'url'=>route('admin.plan.index'),
]
]
])
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <strong>{{ __('Plan') }}</strong>
        <p>{{ __('Edit subscription plan for charging from the customer') }}</p>
    </div>
    <div class="col-12 m-auto">
        <form  class="ajaxform_instant_reload"  action="{{ route('admin.plan.update',$plan->id) }}" method="post" enctype="multipart/form-data">
        	@csrf
        	@method('PUT')
            <div class="card">
                <div class="card-body">

                    {{-- success alert --}}
                    @if (session('success'))
                         <div class="alert alert-success">
                            {{ session('success') }}</div>                        
                    @endif
                    {{-- errot alert --}}
                    @if (session('error'))
                         <div class="alert alert-danger">
                            {{ session('error') }}</div>
                    @endif
                    <!-- Plan Title in English and Arabic -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="plan_title_en">{{ __('Plan Title (EN)') }}</label>
                            <input type="text" class="form-control" id="plan_title_en"
                                value="{{ old('title.en')??$plan->getTranslation('title', 'en') }}" name="title[en]"
                                required>
                            @error('title.en')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="plan_title_ar">{{ __('Plan Title (AR)') }}</label>
                            <input type="text" class="form-control" id="plan_title_ar"
                                value="{{ old('title.ar')??$plan->getTranslation('title', 'ar') }}" name="title[ar]"
                                required>
                            @error('title.ar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>





                    <!-- Business Size in English and Arabic -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="business_size_en">{{ __('Business Size (EN)') }}</label>
                            <input type="text" class="form-control" id="business_size_en"
                                value="{{ old('business_size.en')??$plan->getTranslation('business_size', 'en') }}"
                                name="business_size[en]" required>
                            @error('business_size.en')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="business_size_ar">{{ __('Business Size (AR)') }}</label>
                            <input type="text" class="form-control" id="business_size_ar"
                                value="{{ old('business_size.ar')??$plan->getTranslation('business_size', 'ar') }}"
                                name="business_size[ar]" required>
                            @error('business_size.ar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Plan Description in English and Arabic -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="plan_description_en">{{ __('Plan Description (EN)') }}</label>
                            <input type="text" class="form-control" id="plan_description_en"
                                value="{{ old('description.en')??$plan->getTranslation('description', 'en') }}"
                                name="description[en]" required>
                            @error('description.en')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="plan_description_ar">{{ __('Plan Description (AR)') }}</label>
                            <input type="text" class="form-control" id="plan_description_ar"
                                value="{{ old('description.ar') ??$plan->getTranslation('description', 'en')}}"
                                name="description[ar]" required>
                            @error('description.ar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="messages_limit">{{ __('Messages limit') }}</label>
                            <input type="text" class="form-control" id="messages_limit"
                                value="{{ old('limits.messages_limit') ?? $plan->limits['messages_limit'] }}"
                                name="limits[messages_limit]" required>
                            @error('limits.messages_limit')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_limit">{{ __('Contact limit') }}</label>
                            <input type="text" class="form-control" id="contact_limit"
                                value="{{ old('limits.contact_limit') ?? $plan->limits['contact_limit']}}"
                                name="limits[contact_limit]" required>
                            @error('limits.contact_limit')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="device_limit">{{ __('Device limit') }}</label>
                            <input type="text" class="form-control" id="device_limit"
                                value="{{ old('limits.device_limit') ?? $plan->limits['device_limit']}}"
                                name="limits[device_limit]" required>
                            @error('limits.device_limit')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="template_limit">{{ __('Template limit') }}</label>
                            <input type="text" class="form-control" id="template_limit"
                                value="{{ old('limits.template_limit') ?? $plan->limits['template_limit']}}"
                                name="limits[template_limit]" required>
                            @error('limits.template_limit')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="apps_limit">{{ __('Apps limit') }}</label>
                            <input type="text" class="form-control" id="apps_limit"
                                value="{{ old('limits.apps_limit') ?? $plan->limits['apps_limit'] }}"
                                name="limits[apps_limit]" required>
                            @error('limits.apps_limit')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Plan Icon and Price -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="plan_icon">{{ __('Plan Icon') }}</label>
                            <input type="file" class="form-control" id="plan_icon" name="icon"
                                value="{{ old('icon') ?? '' }}">
                            @error('icon')
                            <span class="text-danger ">{{ $message }}</span>
                            @enderror
                            @if ($plan->icon)
                            <figure class="mt-3">

                                <img src="{{ asset($plan->icon) }}" width="30" height="30">
                            </figure>
                            @endif
                        </div>


                        <div class="form-group col-6">
                            <label for="plan_price">{{ __('Price') }}</label>
                            <input type="number" class="form-control" id="plan_price" name="price" step="any" required
                                value="{{ old('price') ?? $plan->price }}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Select Duration and Other Options -->
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="plan_duration">{{ __('Select Duration') }}</label>
                            <select class="form-control" id="plan_duration" name="days" required>
                                <option value="30" {{ $plan->days ==30 ? 'selected' : '' }}>{{ __('Monthly') }}</option>
                                <option value="365" {{ $plan-> days ==365 ? 'selected' : '' }}>{{ __('Yearly') }}
                                </option>
                            </select>
                            @error('days')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="access_group_list">{{ __('Access Group List') }}</label>
                            <select class="form-control" id="access_group_list" name="limits[access_group_list]"
                                required>
                                <option value="1" {{ $plan->limits['access_group_list']=='yes' ? 'selected' : '' }}>{{
                                    __('Enable') }}
                                </option>
                                <option value="0" {{$plan->limits['access_group_list']=='no'? 'selected' : '' }}>{{
                                    __('Disable')
                                    }}</option>
                            </select>
                            @error('limits.access_group_list')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="chatbot">{{ __('Chatbot') }}</label>
                            <select class="form-control" id="chatbot" name="limits[chatbot]" required>
                                <option value="1" {{ $plan->limits['chatbot']=='yes' ? 'selected' : '' }}>{{
                                    __('Enable') }}</option>
                                <option value="0" {{$plan->limits['chatbot']=='no' ? 'selected' : '' }}>{{ __('Disable')
                                    }}</option>
                            </select>
                            @error('chatbot')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="bulk_message">{{ __('Bulk Message') }}</label>
                            <select class="form-control" id="bulk_message" name="limits[bulk_message]" required>
                                <option value="1" {{ $plan->limits['bulk_message']=='yes' ? 'selected' : '' }}>{{
                                    __('Enable') }}
                                </option>
                                <option value="0" {{ $plan->limits['bulk_message']=='no'? 'selected' : '' }}>{{
                                    __('Disable') }}
                                </option>
                            </select>
                            @error('limits.bulk_message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="schedule_message">{{ __('Schedule Message') }}</label>
                            <select class="form-control" id="schedule_message" name="limits[schedule_message]" required>
                                <option value="1" {{$plan->limits['schedule_message']=='yes'? 'selected' : '' }}>{{
                                    __('Enable') }}
                                </option>
                                <option value="0" {{ $plan->limits['schedule_message']=='no' ? 'selected' : '' }}>{{
                                    __('Disable') }}
                                </option>
                            </select>
                            @error('limits.schedule_message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="access_chat_list">{{ __('Access Chat List') }}</label>
                            <select class="form-control" id="access_chat_list" name="limits[access_chat_list]" required>
                                <option value="1" {{ $plan->limits['access_chat_list']=='yes'? 'selected' : '' }}>{{
                                    __('Enable') }}
                                </option>
                                <option value="0" {{ $plan->limits['access_chat_list']=='no'? 'selected' : '' }}>{{
                                    __('Disable') }}
                                </option>
                            </select>
                            @error('limits.access_chat_list')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Popular, Recommended, Featured, and Status -->
                    <div class="row justify-content-between">
                        <div class="form-group col-3">
                            <div class="d-flex">
                                <label class="custom-toggle custom-toggle-primary">
                                    <input type="checkbox" name="is_popular" id="is_popular"
                                        @checked($plan->is_popular)>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="mt-1 ml-1" for="is_popular">
                                    <h4>&nbsp {{ __('Is Popular?') }}</h4>
                                </label>
                            </div>
                        </div>
                       
                        <div class="form-group col-3">
                            <div class="d-flex">
                                <label class="custom-toggle custom-toggle-primary">
                                    <input type="checkbox" name="is_recommended" id="is_recommended"
                                        @checked($plan->is_recommended)>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="mt-1 ml-1" for="is_recommended">
                                    <h4>&nbsp {{ __('Is Recommended?') }}</h4>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <div class="d-flex">
                                <label class="custom-toggle custom-toggle-primary">
                                    <input type="checkbox" name="is_featured" id="is_featured"
                                        @checked($plan->is_featured)>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="mt-1 ml-1" for="is_featured">
                                    <h4>&nbsp {{ __('Is Featured?') }}</h4>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <div class="d-flex">
                                <label class="custom-toggle custom-toggle-primary">
                                    <input type="checkbox" name="status" id="status" @checked($plan->status) >
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="mt-1 ml-1" for="status">
                                    <h4>&nbsp {{ __('Status') }}</h4>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Trial Days -->
                    <div class="row align-items-center">
                        <div class="form-group col-12">
                            <div class="d-flex">
                                <label class="custom-toggle custom-toggle-primary">
                                    <input type="checkbox" name="is_trial" id="is-trial" data-target=".trial-days"
                                        @checked($plan->is_trial) >
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                        data-label-on="Yes"></span>
                                </label>
                                <label class="mt-1 ml-1" for="is-trial">
                                    <h4>&nbsp {{ __('Accept Trial?') }}</h4>
                                </label>
                            </div>
                        </div>
                        <div class="form-group trial-days col-12 d-none">
                            <label class="col-lg-12">{{ __('Trial Days') }}</label>
                            <input type="number" name="trial_days" value="{{ old('trial_days') ?? $plan->trial_days }}"
                                class="form-control">
                            @error('trial_days')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="form-group row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-neutral submit-button btn-sm w-50 text-center mb-4 py-2">{{
                            __('Update')
                            }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@push('js')
<script src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/admin/plan-edit.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const isTrialCheckbox = document.getElementById('is-trial');
    const trialDaysDiv = document.querySelector('.trial-days');

    // Function to toggle the visibility of trial days input
    const toggleTrialDays = () => {
        if (isTrialCheckbox.checked) {
            trialDaysDiv.classList.remove('d-none');
        } else {
            trialDaysDiv.classList.add('d-none');
        }
    };

    // Toggle on page load if checkbox is pre-checked
    toggleTrialDays();

    // Toggle on checkbox change
    isTrialCheckbox.addEventListener('change', toggleTrialDays);
});
</script>
@endpush