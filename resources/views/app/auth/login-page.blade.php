@extends('app')

@section('content')

    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow-lg border-0" style="width: 473px; border-radius: 16px;">
            <div class="card-body p-4">
                <!-- Logo & Title -->
                <div class="text-center mb-4">
                    <img src="assets/images/LOGO LABSCO.png" alt="Labsco Sport" style="height:29px;">
                    <h3 class="mt-3 fw-bold text-primary">SIGN IN</h3>
                </div>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label" style="color:#66666;">Username</label>
                    <div class="input-group">
                        <div class="d-flex align-items-center w-100 px-4 custom-input-group"
                            style="border:1.5px solid #666666; border-radius:12px; height:48px;">
                            <span class="d-flex align-items-center justify-content-center" style="width:20px; height:20px;">
                                <img src="{{ asset('assets/images/icons/ic-person.svg') }}" alt="person"
                                    style="width:20px; height:20px;">
                            </span>
                            <input type="text" class="form-control border-0 bg-transparent fw-semibold" id="username"
                                placeholder="Enter your username" style="font-size:14px; color:#6b7280; box-shadow:none;" />
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <label for="password" class="form-label fw-bold" style="color:#375AD9;">Password</label>
                    <div class="input-group">
                        <div class="d-flex align-items-center w-100 ps-4 custom-input-group"
                            style="background:#fff; border:1.5px solid #666666; border-radius:12px; height:48px;">
                            <span class="d-flex align-items-center justify-content-center" style="width:20px; height:20px;">
                                <img src="{{ asset('assets/images/icons/ic-lock.svg') }}" alt="lock"
                                    style="width:20px; height:20px;">
                            </span>
                            <input type="password" class="form-control border-0 bg-transparent fw-semibold" id="password"
                                placeholder="Enter your password" style="font-size:14px; color:#6b7280; box-shadow:none;" />
                            <span class="d-flex align-items-center justify-content-center password-toggle"
                                style="width:48px; height:48px; background:#94B2FF; border-top-right-radius:12px; border-bottom-right-radius:12px; cursor:pointer;">
                                <img id="togglePasswordIcon" src="{{ asset('assets/images/icons/ic-eye-open.svg') }}"
                                    alt="eye" style="width:20px; height:20px;">
                            </span>
                        </div>

                    </div>
                    <div class="text-end mt-1">
                        <a href="#" class="small text-decoration-none fw-semibold" style="font-size: 14px;">Forgot
                            Password?</a>
                    </div>
                </div>

                <!-- Sign In Button -->
                <div class="d-grid my-3">
                    <button class="btn fw-bold btn-signin">SIGN IN</button>
                </div>

                <div class="text-center mb-3">
                    <div>OR</div>
                </div>

                <!-- Google Sign In -->
                <div class="d-grid mb-3">
                    <button class="btn btn-outline-secondary btn-google-signin" style="height: 50px">
                        <img src="{{ asset('assets/images/icons/ic-google.svg') }}" class="me-2"
                            style="width:20px; height:20px;">
                        Sign in with Google
                    </button>
                </div>

                <!-- Footer -->
                <div class="text-center">
                    <small>Dont have an account?
                        <a href="{{ route('register-page') }}" class="fw-bold text-primary text-decoration-none">SIGN
                            UP</a>
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var passwordInput = document.getElementById('password');
            var togglePassword = document.querySelector('.password-toggle');
            var toggleIcon = document.getElementById('togglePasswordIcon');
            if (togglePassword && passwordInput && toggleIcon) {
                togglePassword.addEventListener('click', function() {
                    var isShown = passwordInput.type === 'text';
                    passwordInput.type = isShown ? 'password' : 'text';
                    toggleIcon.src = isShown ? "{{ asset('assets/images/icons/ic-eye-open.svg') }}" :
                        "{{ asset('assets/images/icons/ic-eye-close.svg') }}";
                });
            }
        });
    </script>
@endsection
