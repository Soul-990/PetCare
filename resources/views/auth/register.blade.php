@extends('layouts.app')
@section('content')

<div class="register-wrapper">
    <div class="register-bg-shape register-bg-shape-1"></div>
    <div class="register-bg-shape register-bg-shape-2"></div>

    <div class="register-card">
        <div class="register-brand">
            <i class="fas fa-paw"></i>
            <span>PetCare</span>
        </div>
        <h2 class="register-title">Create Your Account</h2>

        <p class="register-subtitle">
            Join PetCare and take better care of your pets
        </p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-form-group">
                <label for="name" class="register-form-label">Name</label>
                <div class="register-input-group">
                    <i class="fas fa-user input-icon"></i>
                    <input
                        id="name"
                        type="text"
                        class="register-input @error('name') is-invalid @enderror"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                        autofocus
                        placeholder="Enter your full name"
                    >
                </div>

                @error('name')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="register-form-group">
                <label for="email" class="register-form-label">
                    Email Address
                </label>

                <div class="register-input-group">
                    <i class="fas fa-envelope input-icon"></i>

                    <input
                        id="email"
                        type="email"
                        class="register-input @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="Enter your email"
                    >
                </div>

                @error('email')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="register-form-group">
                <label for="address" class="register-form-label">
                    Address
                </label>
                <div class="register-input-group">
                    <i class="fas fa-map-marker-alt input-icon"></i>
                    <input
                        id="address"
                        type="text"
                        class="register-input @error('address') is-invalid @enderror"
                        name="address"
                        value="{{ old('address') }}"
                        required
                        placeholder="Enter your address"
                    >
                </div>

                @error('address')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="register-form-group">
                <label for="phone" class="register-form-label">
                    Phone Number
                </label>

                <div class="register-input-group">
                    <i class="fas fa-phone input-icon"></i>

                    <input
                        id="phone"
                        type="text"
                        maxlength="11"
                        class="register-input @error('phone') is-invalid @enderror"
                        name="phone"
                        value="{{ old('phone') }}"
                        required
                        placeholder="03XXXXXXXXX"
                    >
                </div>

                @error('phone')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="register-form-group">
                <label for="role" class="register-form-label">
                    Register As
                </label>

                <div class="register-input-group">
                    <i class="fas fa-users input-icon"></i>

                    <select
                        name="role"
                        id="role"
                        class="register-input register-select"
                        required
                    >
                        <option value="0" {{ old('role') == '0' ? 'selected' : '' }}>
                            Pet Owner
                        </option>

                        <option value="1" {{ old('role') == '1' ? 'selected' : '' }}>
                            Vet
                        </option>

                        <option value="2" {{ old('role') == '2' ? 'selected' : '' }}>
                            Shelter
                        </option>
                    </select>
                </div>

                @error('role')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="register-form-group">
                <label for="password" class="register-form-label">
                    Password
                </label>

                <div class="register-input-group">
                    <i class="fas fa-lock input-icon"></i>

                    <input
                        id="password"
                        type="password"
                        class="register-input register-input-password @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Create a password"
                    >
                </div>

                @error('password')
                    <span class="register-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <!-- Confirm Password -->
            <div class="register-form-group">
                <label for="password-confirm" class="register-form-label">
                    Confirm Password
                </label>

                <div class="register-input-group">
                    <i class="fas fa-lock input-icon"></i>

                    <input
                        id="password-confirm"
                        type="password"
                        class="register-input register-input-password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirm your password"
                    >
                </div>
            </div>


            <!-- Register Button -->
            <button type="submit" class="register-button">
                <span>Create Account</span>
                <i class="fas fa-arrow-right"></i>
            </button>

        </form>


        <!-- Login Link -->
        <p class="register-footer-text">
            Already have an account?
            <a href="{{ route('login') }}">Login here</a>
        </p>

    </div>
</div>

@endsection