@extends('PO.layout')
@section('title', 'My Account')
@section('account', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="card card-stat d-flex flex-column justify-content-between bg-success" style="height: fit-content">
              <div>
                <div class="card-header">
                  <span class="stat-label text-light">{{Auth::user()->address}}</span>
                  <span class="stat-label text-light ">{{Auth::user()->phone}}</span>
                </div>
                <div class="d-flex" style="justify-content: space-around">
                    <img src="{{asset('Dashboard/assets/images/Avatar.jpg')}}" style="border-radius: 20px" height="70px" width="70px" alt="">
                    <div>
                    <h4 class="text-light">{{Auth::user()->name}}</h4>
                    <p class="text-light fw-lighter">{{Auth::user()->email}}</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-7">
                <div class="login-card">
                    <a href="{{route('account')}}" class="login-brand text-decoration-none">
                        <i class="bi bi-pencil-square"></i>
                        <span>Edit Account</span>
                    </a>
                    <!-- Login Form -->
                    <form action="/account/update/{{Auth::user()->id}}" method="POST" id="loginForm">
                        @csrf
                        <!-- Name Input Group -->
                        <div class="login-form-group">
                            <label for="name" class="login-form-label">Full Name</label>
                            <div class="login-input-group">
                                <i class="bi bi-person input-icon"></i>
                                <input type="text" id="name" name="name" class="login-input" value="{{Auth::user()->name}}" required>
                            </div>
                        </div>

                        <!-- Email Input Group -->
                        <div class="login-form-group">
                            <label for="email" class="login-form-label">Email Address</label>
                            <div class="login-input-group">
                                <i class="bi bi-envelope input-icon"></i>
                                <input type="email" id="email" class="login-input" name="email" value="{{Auth::user()->email}}" required>
                            </div>
                        </div>
                        
                        <!-- Password Input Group -->
                        <div class="login-form-group">
                            <label for="password" class="login-form-label">Password</label>
                            <div class="login-input-group">
                                <i class="bi bi-shield-lock input-icon"></i>
                                <input type="password" name="password" id="password" class="login-input login-input-password" placeholder="Enter New Password">
                            </div>
                        </div>
                        
                        <!-- Address Input Group -->
                        <div class="login-form-group">
                            <label for="address" class="login-form-label">Address</label>
                            <div class="login-input-group">
                                <i class="bi bi-geo-alt-fill input-icon"></i>
                                <input type="text" id="address" name="address" class="login-input" value="{{Auth::user()->address}}" required>
                            </div>
                        </div>
                        
                        <!-- Phone Input Group -->
                        <div class="login-form-group">
                            <label for="phone" class="login-form-label">Phone Number</label>
                            <div class="login-input-group">
                                <i class="bi bi-telephone input-icon"></i>
                                <input type="number" id="phone" name="phone" maxlength="11" class="login-input" value="{{Auth::user()->phone}}" required>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn-login" id="btn-submit">
                            <span>Save Changes</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                        
                    </form>           
                </div>
        </div>
    </div>
</div>
@endsection