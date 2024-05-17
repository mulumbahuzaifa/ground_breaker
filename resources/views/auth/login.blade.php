<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}
          <section  id="login-section" class="contact-area ptb-70">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                          <div class="form-head login-form">
                              <h4 class="title mb-30">Login</h4>
                              <p>Please register in order to apply more quickly</p>
                              <x-validation-errors class="mb-4" />

                              @if (session('status'))
                                  <div class="mb-4 font-medium text-sm text-green-600" style="color:red !important;">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              <div class="content">
                                <form class="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row user-details">

                                        <div class="input-box">
                                            <span class="details">Email</span>
                                            <input type="email"  class="form-control" name="email" placeholder="Email" autofocus required :value="old('email')">
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Password</span>
                                            <input type="password"  class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                                        </div>
                                        <div class="check-and-pass mb-3">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    {{-- <div class="form-check">
                                                        <input name="remember" id="2" value="forever" type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                                        <label class="form-check-label">Remember me</label>
                                                    </div> --}}
                                                    <div class="block mt-4">
                                                        <label for="remember_me" class="flex items-center">
                                                            <x-checkbox id="remember_me" name="remember" />
                                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12 text-right">
                                                    @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button ms-4">
                                            <input type="submit" value="Login">
                                        </div>
                                        <p>Don't have an account? <a href="{{ route('register') }}" class="register-link">Register here</a>
                                        </p>

                                    </div>
                                </form>
                                <!--/ End Form -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
</x-guest-layout>
