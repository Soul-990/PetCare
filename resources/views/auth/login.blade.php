@extends('layouts.app')
@section('content')

<div class="login-wrapper">
    <div class="login-bg-shape login-bg-shape-1"></div>
    <div class="login-bg-shape login-bg-shape-2"></div>
    <div class="login-card">
        <a href="{{ url('/') }}" class="login-brand text-decoration-none">
            <i class="fas fa-paw"></i>
            <span>PetCare</span>
        </a>
        <p class="login-subtitle">
            Welcome Back!!
        </p>

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST" id="loginForm">
            @csrf
            <div class="login-form-group">
                <label for="email" class="login-form-label">
                    Email Address
                </label>
                <div class="login-input-group">
                    <i class="bi bi-envelope input-icon"></i>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="login-input @error('email') is-invalid @enderror"
                        placeholder="name@company.com"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                    >
                </div>

                @error('email')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

            </div>


            <!-- Password -->
            <div class="login-form-group">
                <label for="password" class="login-form-label">
                    Password
                </label>
                <div class="login-input-group">
                    <i class="bi bi-shield-lock input-icon"></i>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="login-input login-input-password @error('password') is-invalid @enderror"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                    >

                    <button
                        type="button"
                        class="password-toggle-btn"
                        id="toggle-password"
                        aria-label="Show password"
                    >
                        <i class="bi bi-eye"></i>
                    </button>

                </div>

                @error('password')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

            </div>


            <!-- Remember Me + Forgot Password -->
            <div class="login-options">
                <label class="custom-control-label">
                    <input
                        type="checkbox"
                        class="custom-checkbox-input"
                        id="rememberMe"
                        name="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <span>Remember Me</span>
                </label>

                @if (Route::has('password.request'))
                    <a
                        href="{{ route('password.request') }}"
                        class="forgot-password-link"
                    >
                        Forgot Password?
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <button
                type="submit"
                class="btn-login"
                id="btn-submit"
            >
                <span>Sign In to Dashboard</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        <!-- Register -->
        <p class="login-footer-text">
            Don't have an account?
            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    id="link-register"
                >
                    Register Now
                </a>
            @endif
        </p>
    </div>
</div>


<!-- Password Show/Hide -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const togglePassword = document.getElementById('toggle-password');
    const password = document.getElementById('password');

    if (togglePassword && password) {

        togglePassword.addEventListener('click', function () {

            const icon = this.querySelector('i');

            if (password.type === 'password') {

                password.type = 'text';

                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');

                this.setAttribute('aria-label', 'Hide password');

            } else {

                password.type = 'password';

                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');

                this.setAttribute('aria-label', 'Show password');

            }

        });

    }

});
</script>

@endsection