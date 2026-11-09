@extends('PO.layout')
@section('title', 'Edit Pets')
@section('pet', 'active')
@section('content')
    <div class="d-flex">
    <a href="{{route('pets')}}" class="btn btn-primary mb-3 ms-auto me-5" style="width: fit-content">Go back</a>
    </div>
    <div class="row g-4 mb-4">
      <!-- Column 1: Basic controls -->
      <div class="col-12 col-lg-7">
        <div class="card border-light shadow-sm p-4 h-100">
          <h5 class="card-title mb-4">Let's Update {{$pet->name}} :3</h5>
            <form action="/pets/update/{{$pet->id}}/save" method="POST">
                @csrf
                <!-- Text input -->
                <div class="mb-3">
                    <label for="name" class="form-label-custom">Pet Name</label>
                    <input type="text" name="name" value="{{$pet->name}}" class="form-control-custom" id="name" placeholder="Enter Pet Name" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="spec" class="form-label-custom">Species</label>
                    <input type="text" value="{{$pet->species}}" class="form-control-custom" id="spec" name="species" placeholder="Enter Species" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="breed" class="form-label-custom">Breed</label>
                    <input type="text" value="{{$pet->breed}}" class="form-control-custom" name="breed" id="breed" placeholder="Enter Breed" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="age" class="form-label-custom">Age</label>
                    <input type="number" value="{{$pet->age}}" name="age" class="form-control-custom" id="age" placeholder="Enter Age" required>
                </div>
                <!-- Custom dropdown select -->
                <div class="mb-3">
                    <label for="gender" class="form-label-custom">Gender</label>
                    <select class="form-select-custom" name="gender" id="gender">
                    <option value="0" {{($pet->gender)?"":"selected"}}>Male</option>
                    <option value="1" {{($pet->gender)?"selected":""}}>Female</option>
                    </select>
                </div>
                <!-- -->
                <div class="mb-3">
                    <label for="allergies" class="form-label-custom">Allergies</label>
                    <input type="text" value="{{$pet->allergies}}" class="form-control-custom" name="allergies" id="allergies" placeholder="Enter allergies" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" id="basicText" value="Save Changes">
                </div>
            </form>
        </div>
      </div>
      <div class="col-12 col-lg-5 d-flex justify-content-center" style="height: fit-content;">
            <div class="card alert-green-card">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('Dashboard/assets/images/Add Pet.jpg')}}" style="height: 300px; width:300px; border-radius: 20px" alt="">
                </div>
              <h2 class="text-secondary text-center mt-3">Your Pet, Your Life</h2>
            </div>
          </div>
    </div>
@endsection