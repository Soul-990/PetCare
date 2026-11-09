@extends('Vets.layout')
@section('title', 'My Products')
@section('prods', 'active')
@section('content')
<div class="d-flex">
    <a href="{{route('prod')}}" class="btn btn-primary mb-3 ms-auto me-5" style="width: fit-content">Go back</a>
    </div>
    <div class="row g-4 mb-4">
      <!-- Column 1: Basic controls -->
      <div class="col-12 col-lg-7">
        <div class="card border-light shadow-sm p-4" style="height: fit-content">
          <h5 class="card-title mb-4">Add Your Product</h5>
            <form action="/products/add-product" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Text input -->
                @foreach ($vet as $v)
                    @if ($v->user_id == Auth::user()->id)
                        <input type="hidden" name="vet_id" value="{{$v->id}}">
                    @endif
                @endforeach
                <!-- Text input -->
                <div class="mb-3">
                    <label for="name" class="form-label-custom">Name </label>
                    <input type="text" class="form-control-custom" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label-custom">Price </label>
                    <input type="number" class="form-control-custom" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="rep" class="form-label-custom">Image</label>
                    <input type="file" class="form-control-custom" id="rep" name="image" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" id="basicText" value="Add product">
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