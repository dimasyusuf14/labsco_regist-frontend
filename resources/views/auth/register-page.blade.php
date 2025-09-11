@extends('layouts.index')

@section('content')
    <style>
        .custom-input-group {
            transition: border-color 0.2s;
            border-color: #666666 !important;
        }

        .custom-input-group:focus-within {
            border-color: #2563EB !important;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.15);
        }

        .btn-google-signin {
            transition: background 0.2s;
            color: #666666 !important;
            border-color: #666666 !important;
        }

        .btn-google-signin:hover {
            background: #ECECEC !important;
            color: #666666 !important;
        }

        .btn-signup {
            background: #375AD9;
            color: #fff;
            border-radius: 8px;
            height: 50px;
            transition: background 0.2s;
        }

        .btn-signup:hover {
            background: #3F65EC !important;
            color: #fff !important;
        }

        .password-toggle img {
            transition: filter 0.2s;
        }
    </style>
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow-lg border-0" style="width: 473px; border-radius: 16px;">
            <div class="card-body p-4">
                <!-- Logo & Title -->
                <div class="text-center mb-4">
                    <img src="assets/images/LOGO LABSCO.png" alt="Labsco Sport" style="height:29px;">
                    <h3 class="mt-3 fw-bold text-primary">SIGN UP</h3>
                </div>

                <!-- E-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold" style="color:#375AD9;">E-mail</label>
                    <div class="input-group">
                        <div class="d-flex align-items-center w-100 px-4 custom-input-group"
                            style="border:1.5px solid #666666; border-radius:12px; height:48px;">
                            <span class="d-flex align-items-center justify-content-center" style="width:20px; height:20px;">
                                <img src="{{ asset('assets/icons/ic-mail.svg') }}" alt="person"
                                    style="width:20px; height:20px;">
                            </span>
                            <input type="text" class="form-control border-0 bg-transparent fw-semibold" id="username"
                                placeholder="Enter your email" style="font-size:14px; color:#6b7280; box-shadow:none;" />
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
                                <img src="{{ asset('assets/icons/ic-lock.svg') }}" alt="lock"
                                    style="width:20px; height:20px;">
                            </span>
                            <input type="password" class="form-control border-0 bg-transparent fw-semibold" id="password"
                                placeholder="Enter your password" style="font-size:14px; color:#6b7280; box-shadow:none;" />
                            <span class="d-flex align-items-center justify-content-center password-toggle"
                                data-target="password"
                                style="width:48px; height:48px; background:#94B2FF; border-top-right-radius:12px; border-bottom-right-radius:12px; cursor:pointer;">
                                <img id="togglePasswordIcon" src="{{ asset('assets/icons/ic-eye-open.svg') }}"
                                    alt="eye" style="width:20px; height:20px;">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Confirmation Password -->
                <div class="mb-2">
                    <label for="confirm_password" class="form-label fw-bold" style="color:#375AD9;">Confirmation
                        Password</label>
                    <div class="input-group">
                        <div class="d-flex align-items-center w-100 ps-4 custom-input-group"
                            style="background:#fff; border:1.5px solid #666666; border-radius:12px; height:48px;">
                            <span class="d-flex align-items-center justify-content-center" style="width:20px; height:20px;">
                                <img src="{{ asset('assets/icons/ic-lock.svg') }}" alt="lock"
                                    style="width:20px; height:20px;">
                            </span>
                            <input type="password" class="form-control border-0 bg-transparent fw-semibold"
                                id="confirm_password" placeholder="Enter your confirmation password"
                                style="font-size:14px; color:#6b7280; box-shadow:none;" />
                            <span class="d-flex align-items-center justify-content-center password-toggle"
                                data-target="confirm_password"
                                style="width:48px; height:48px; background:#94B2FF; border-top-right-radius:12px; border-bottom-right-radius:12px; cursor:pointer;">
                                <img id="toggleConfirmPasswordIcon" src="{{ asset('assets/icons/ic-eye-open.svg') }}"
                                    alt="eye" style="width:20px; height:20px;">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Sign Up Button -->
                <div class="d-grid my-3">
                    <button class="btn fw-bold btn-signup">SIGN UP</button>
                </div>

                <div class="text-center mb-3">
                    <div>OR</div>
                </div>

                <!-- Google Sign Up -->
                <div class="d-grid mb-3">
                    <button class="btn btn-outline-secondary btn-google-signin" style="height: 50px">
                        <img src="{{ asset('assets/icons/ic-google.svg') }}" class="me-2"
                            style="width:20px; height:20px;">
                        Sign up with Google
                    </button>
                </div>

                <!-- Footer -->
                <div class="text-center">
                    <small>Already have an account?
                        <a href="{{ route('login-page') }}" class="fw-bold text-primary text-decoration-none">SIGN IN</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupTogglePassword(inputId, iconId, toggleClass) {
                var passwordInput = document.getElementById(inputId);
                var togglePassword = document.querySelector('.' + toggleClass + '[data-target="' + inputId + '"]');
                var toggleIcon = document.getElementById(iconId);
                if (togglePassword && passwordInput && toggleIcon) {
                    togglePassword.addEventListener('click', function() {
                        var isShown = passwordInput.type === 'text';
                        passwordInput.type = isShown ? 'password' : 'text';
                        toggleIcon.src = isShown ? "{{ asset('assets/icons/ic-eye-open.svg') }}" :
                            "{{ asset('assets/icons/ic-eye-close.svg') }}";
                    });
                }
            }
            setupTogglePassword('password', 'togglePasswordIcon', 'password-toggle');
            setupTogglePassword('confirm_password', 'toggleConfirmPasswordIcon', 'password-toggle');
        });
    </script>
@endsection
