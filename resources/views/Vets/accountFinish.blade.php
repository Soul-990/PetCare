@extends('Vets.layout')
@section('title', 'Finish Account')
@section('account', 'active')
@section('content')
<h1 class="text-center text-success">Some More Details..</h1>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="login-card">
                    <!-- Login Form -->
                    <form action="/vet/finishdetails/{{Auth::user()->id}}" method="POST" id="loginForm">
                        @csrf
                        <!-- Name Input Group -->
                        <div class="login-form-group">
                            <label for="experience" class="login-form-label">Experience</label>
                            <div class="login-input-group">
                                <i class="bi bi-file-medical-fill input-icon"></i>
                                <input type="number" id="experience" name="experience" class="login-input" placeholder="Enter Experience In Years" required>
                            </div>
                        </div>

                        <!-- Email Input Group -->
                        <div class="login-form-group">
                            <label for="time" class="login-form-label">Shift Start</label>
                            <div class="login-input-group">
                                <i class="bi bi-clock input-icon"></i>
                                <input type="time" id="time" class="login-input" name="t_start" required>
                            </div>
                        </div>
                        
                        <!-- Password Input Group -->
                        <div class="login-form-group">
                            <label for="timee" class="login-form-label">Shift End</label>
                            <div class="login-input-group">
                                <i class="bi bi-stopwatch input-icon"></i>
                                <input type="time" name="t_end" id="timee" class="login-input">
                            </div>
                        </div>
                        
                        <!-- Address Input Group -->
                        <div class="login-form-group">
                            <label for="speciality" class="login-form-label">Speciality</label>
                            <div class="login-input-group">
                                <i class="bi bi-brightness-alt-high-fill input-icon"></i>
                                <input type="text" id="speciality" name="speciality" class="login-input" required>
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
        <div class="col-md-3"></div>
    </div>
</div>
@endsection