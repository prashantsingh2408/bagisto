@extends('shop::layouts.master')
@section('page_title')
  {{ __('shop::app.customer.signup-form.page-title') }}
@endsection

@section('content-wrapper')
  <div class="auth-content form-container">
    <div class="container">
      <div class="col-lg-10 col-md-12 offset-lg-1">
        <div class="heading">
          <h2 class="fs24 fw6">
            {{-- {{ __('velocity::app.customer.signup-form.user-registration') }} --}}
            Smart User Registration
          </h2>

          <a href="{{ route('customer.session.index') }}"
             class="btn-new-customer">
            <button type="button"
                    class="theme-btn light">
              {{ __('velocity::app.customer.signup-form.login') }}
            </button>
          </a>
        </div>

        <div class="body col-12">
          <h3 class="fw6">
            {{-- {{ __('velocity::app.customer.signup-form.become-user') }} --}}
            Become Smart User
          </h3>

          <p class="fs16">
            {{-- {{ __('velocity::app.customer.signup-form.form-sginup-text') }} --}}
            Register to use MLM Feature and crete your network
          </p>

          {!! view_render_event('bagisto.shop.customers.signup.before') !!}

          <form method="post"
                action="{{ route('customer.register.create_smart') }}"
                @submit.prevent="onSubmit">

            {{ csrf_field() }}

            {!! view_render_event('bagisto.shop.customers.signup_form_controls.before') !!}

            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                {{-- {{ __('shop::app.customer.signup-form.firstname') }} --}}
                Member 1 (optional)
              </label>

              <input list="member_1"
                     type="text"
                     class="form-style"
                     name="member_1"
                     {{-- v-validate="'required'" --}}
                     value="{{ old('first_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;" />

              <datalist id="member_1">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->email }}">
                @endforeach
              </datalist>

              <span class="control-error"
                    v-if="errors.has('first_name')">
                @{{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                {{-- {{ __('shop::app.customer.signup-form.firstname') }} --}}
                Member 2 (optional)
              </label>

              <input list='member_2'
                     type="text"
                     class="form-style"
                     name="member_2"
                     {{-- v-validate="'required'" --}}
                     value="{{ old('first_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;" />
              <datalist id="member_2">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->email }}">
                @endforeach
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                @{{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                {{-- {{ __('shop::app.customer.signup-form.firstname') }} --}}
                Member 3 (optional)
              </label>

              <input list='member_3'
                     type="text"
                     class="form-style"
                     name="member_3"
                     {{-- v-validate="'required'" --}}
                     value="{{ old('first_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;" />
              <datalist id="member_3">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->email }}">
                @endforeach
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                @{{ errors . first('first_name') }}
              </span>
            </div>

            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                {{-- {{ __('shop::app.customer.signup-form.firstname') }} --}}
                Member 4 (optional)
              </label>

              <input list='member_4'
                     type="text"
                     class="form-style"
                     name="member_4"
                     {{-- v-validate="'required'" --}}
                     value="{{ old('first_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;" />
              <datalist id="member_4">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->email }}">
                @endforeach
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                @{{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                {{-- {{ __('shop::app.customer.signup-form.firstname') }} --}}
                Member 5 (optional)
              </label>

              <input list='member_5'
                     type="text"
                     class="form-style"
                     name="member_5"
                     {{-- v-validate="'required'" --}}
                     value="{{ old('first_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.firstname') }}&quot;" />
              <datalist id="member_5">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->email }}">
                @endforeach
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                @{{ errors . first('first_name') }}
              </span>
            </div>

            {{-- {!! view_render_event('bagisto.shop.customers.signup_form_controls.firstname.after') !!}

            <div class="control-group"
                 :class="[errors.has('last_name') ? 'has-error' : '']">
              <label for="last_name"
                     class="required label-style">
                {{ __('shop::app.customer.signup-form.lastname') }}
              </label>

              <input type="text"
                     class="form-style"
                     name="last_name"
                     v-validate="'required'"
                     value="{{ old('last_name') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.lastname') }}&quot;" />

              <span class="control-error"
                    v-if="errors.has('last_name')">
                @{{ errors . first('last_name') }}
              </span>
            </div>

            {!! view_render_event('bagisto.shop.customers.signup_form_controls.lastname.after') !!}

            <div class="control-group"
                 :class="[errors.has('email') ? 'has-error' : '']">
              <label for="email"
                     class="required label-style">
                {{ __('shop::app.customer.signup-form.email') }}
              </label>

              <input type="email"
                     class="form-style"
                     name="email"
                     v-validate="'required|email'"
                     value="{{ old('email') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.email') }}&quot;" />

              <span class="control-error"
                    v-if="errors.has('email')">
                @{{ errors . first('email') }}
              </span>
            </div>

            {!! view_render_event('bagisto.shop.customers.signup_form_controls.email.after') !!}

            <div class="control-group"
                 :class="[errors.has('password') ? 'has-error' : '']">
              <label for="password"
                     class="required label-style">
                {{ __('shop::app.customer.signup-form.password') }}
              </label>

              <input type="password"
                     class="form-style"
                     name="password"
                     v-validate="'required|min:6'"
                     ref="password"
                     value="{{ old('password') }}"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.password') }}&quot;" />

              <span class="control-error"
                    v-if="errors.has('password')">
                @{{ errors . first('password') }}
              </span>
            </div>

            {!! view_render_event('bagisto.shop.customers.signup_form_controls.password.after') !!}

            <div class="control-group"
                 :class="[errors.has('password_confirmation') ? 'has-error' : '']">
              <label for="password_confirmation"
                     class="required label-style">
                {{ __('shop::app.customer.signup-form.confirm_pass') }}
              </label>

              <input type="password"
                     class="form-style"
                     name="password_confirmation"
                     v-validate="'required|min:6|confirmed:password'"
                     data-vv-as="&quot;{{ __('shop::app.customer.signup-form.confirm_pass') }}&quot;" />

              <span class="control-error"
                    v-if="errors.has('password_confirmation')">
                @{{ errors . first('password_confirmation') }}
              </span>
            </div>

            @if (core()->getConfigData('customer.settings.newsletter.subscription'))
              <div class="control-group">
                <input type="checkbox"
                       id="checkbox2"
                       name="is_subscribed">
                <span>{{ __('shop::app.customer.signup-form.subscribe-to-newsletter') }}</span>
              </div>
            @endif

            {!! view_render_event('bagisto.shop.customers.signup_form_controls.after') !!} --}}
            <button class="theme-btn"
                    type="submit">
              {{ __('shop::app.customer.signup-form.title') }}
            </button>
          </form>

          {!! view_render_event('bagisto.shop.customers.signup.after') !!}
        </div>
      </div>
    </div>
  </div>
@endsection
