{{-- For Title Set  --}}
@section('title')
    || Login
@endsection
<x-guest-layout>
    <div class="container-scroller auth login-bg">
        <div class="container-fluid page-body-wrapper full-page-wrapper p-0">
            <div class="row w-100 m-0">
                <div class=" full-page-wrapper d-flex align-items-center">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-center mb-3 ">Login Here</h3>
                            <x-jet-validation-errors class="mb-4 text-danger" />
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control p_input" name="email"
                                        :value="old('email')" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input class="form-control p_input" type="password" name="password" required
                                        autocomplete="current-password">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" id="remember_me"
                                                name="remember"> Remember me </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot
                                            password</a>
                                    @endif
                                </div>

                                <div class="text-center" id="login_btn_id">
                                    <x-jet-button class="btn btn-primary  btn-md login_btn">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>

                                {{-- <div class="d-flex">
                                    <button class="btn btn-facebook me-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div> --}}
                                <p class="sign-up">Don't have an Account? &nbsp;<a href="{{ route('register') }}">
                                        Register</a></p>
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
