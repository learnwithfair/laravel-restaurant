{{-- For Title Set  --}}
@section('title')
    || Register
@endsection
<x-guest-layout>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper p-0">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-center mb-3">Register</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control p_input" id="name" name="name"
                                        :value="old('name')" required autofocus autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control p_input" id="email" name="email"
                                        :value="old('email')" required>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control p_input" id="password" name="password"
                                        required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password *</label>
                                    <input type="password" class="form-control p_input" id="password"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="text-center mt-4">
                                    <x-jet-button class="btn btn-primary  btn-md">
                                        {{ __('Register') }}
                                    </x-jet-button>
                                </div>
                                <p class="sign-up text-center">Already have an Account? &nbsp;<a
                                        href="{{ route('login') }}">
                                        Log In</a>
                                </p>


                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' =>
                                                            '<a target="_blank" href="' .
                                                            route('terms.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                            __('Terms of Service') .
                                                            '</a>',
                                                        'privacy_policy' =>
                                                            '<a target="_blank" href="' .
                                                            route('policy.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                            __('Privacy Policy') .
                                                            '</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif
                                {{-- <p class="terms">By creating an account you are accepting our<a href="#"> Terms &
                                        Conditions</a></p> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</x-guest-layout>
