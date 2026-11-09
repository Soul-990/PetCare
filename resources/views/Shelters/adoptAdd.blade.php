@extends('Shelters.layout')
@section('title', 'Add Pets for Adoption')
@section('adoptAdd', 'active')
@section('content')
<div class="d-flex">
    <a href="{{route('adoptList')}}" class="btn btn-primary mb-3 ms-auto me-5" style="width: fit-content">Go back</a>
    </div>
    <div class="row g-4 mb-4">
      <!-- Column 1: Basic controls -->
      <div class="col-12 col-lg-7">
        <div class="card border-light shadow-sm p-4 h-100">
          <h5 class="card-title mb-4">Add Your Adoption :3</h5>
            <form action="/adoption/add-adoption" method="POST">
                @csrf
                <!-- Text input -->
                <div class="mb-3">
                    <label for="name" class="form-label-custom">Pet Name</label>
                    <input type="text" name="name" class="form-control-custom" id="name" placeholder="Enter Pet Name" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="spec" class="form-label-custom">Species</label>
                    <input type="text" class="form-control-custom" id="spec" name="species" placeholder="Enter Species" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="breed" class="form-label-custom">Breed</label>
                    <input type="text" class="form-control-custom" name="breed" id="breed" placeholder="Enter Breed" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="age" class="form-label-custom">Age</label>
                    <input type="number" name="age" class="form-control-custom" id="age" placeholder="Enter Age" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="allergies" class="form-label-custom">Allergies</label>
                    <input type="text" name="allergies" class="form-control-custom" id="allergies" placeholder="Enter allergies">
                </div>
                <!-- Custom dropdown select -->
                <div class="mb-3">
                    <label for="gender" class="form-label-custom">Gender</label>
                    <select class="form-select-custom" name="gender" id="gender" required>
                    <option selected disabled>Choose a Gender...</option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    </select>
                </div>
                <input type="hidden" name="adopt_status" value="0">
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" id="basicText" value="Add Pet">
                </div>
            </form>
        </div>
      </div>
      <div class="col-12 col-lg-5 d-flex justify-content-center" style="height: fit-content;">
            <div class="card alert-green-card">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('Dashboard/assets/images/Add Pet.jpg')}}" style="height: 300px; width:300px; border-radius: 20px" alt="">
                </div>
              <h2 class="text-secondary text-center mt-3">All lives matter!</h2>
            </div>
          </div>
    </div>
@endsection