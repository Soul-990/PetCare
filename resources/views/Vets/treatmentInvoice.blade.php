@extends('Vets.layout')
@section('title', 'Create Treatment Invoice')
@section('ctreat', 'active')
@section('content')
<h1 class="text-center text-success">Treatment Invoice</h1>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="login-card">
                    <!-- Login Form -->
                    <form action="/treatment/create-invoice" method="POST" id="loginForm">
                        @csrf
                        <!-- Name Input Group -->
                        <div class="login-form-group">
                            <label for="pid" class="form-label-custom">Pet Name</label>
                            <select class="form-select-custom" name="pet_id" id="pid" required>
                                <option selected disabled>Choose Name with ID...</option>
                                @foreach ($pet as $p)
                                <option value="{{$p->id}}">{{$p->name}} - #{{$p->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($vet as $v)
                            @if ($v->user_id == Auth::user()->id)
                            <input type="hidden" name="vet_id" value="{{$v->id}}">
                            @endif
                        @endforeach
                        <!-- Email Input Group -->
                        <div class="login-form-group">
                            <label for="tID" class="form-label-custom">Treatment Type</label>
                            <select class="form-select-custom" name="type" id="tID" required>
                                <option selected disabled>Select One</option>
                                <option value="0">Maintainance</option>
                                <option value="1">Diagnosis</option>
                            </select>
                        </div>
                        
                        <!-- Password Input Group -->
                        <div class="login-form-group">
                            <label for="next" class="login-form-label">Next Treatment - Optional</label>
                                <input type="date" name="next" id="next" class="login-input">

                        </div>      
                        <!-- Submit Button -->
                        <button type="submit" class="btn-login" id="btn-submit">
                            <span>Create Invoice</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                        
                    </form>           
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection