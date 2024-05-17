<x-guest-layout>
    {{-- <x-authentication-card>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}
    <div class="container">
        <div class="title">Registration</div>
        <x-validation-errors class="mb-4" />
        <div class="content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text"  class="form-control" name="name" placeholder="Full Name" required :value="old('name')" autofocus autocomplete="name">
              </div>

              <div class="input-box">
                <span class="details">Email</span>
                <input type="email"  class="form-control" name="email" placeholder="Email" required :value="old('email')" autofocus>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text"  class="form-control" name="phone" placeholder="Enter your number" required :value="old('phone')">
              </div>
              <div class="input-box">
                <span class="details">Gender</span>
                <select id="et_pb_contact_country_0" class="form-control et_pb_contact_select input" name="gender" data-required_mark="required" data-field_type="select" data-original_id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="password"  class="form-control" name="password" placeholder="Password" required autocomplete="new-password">
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password"  class="form-control" name="password_confirmation" placeholder="Comfirm Password" required autocomplete="new-password">
              </div>
            </div>
            {{-- <div class="gender-details">
              <input type="radio" name="gender" id="dot-1">
              <input type="radio" name="gender" id="dot-2">
              <input type="radio" name="gender" id="dot-3">
              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
                </label>
              </div>
            </div> --}}
            <div class="button">
              <input type="submit" value="Register">
            </div>
            <p>Have an account? <a href="{{ route('login') }}" class="register-link">Login</a>
            </p>
          </form>
        </div>
      </div>

</x-guest-layout>
