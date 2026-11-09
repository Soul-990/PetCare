@extends('PO.layout')
@section('title', 'Edit Pet Reports')
@section('reports', 'active')
@section('content')
<div class="d-flex">
    <a href="{{route('reports')}}" class="btn btn-primary mb-3 ms-auto me-5" style="width: fit-content">Go back</a>
    </div>
    <div class="row g-4 mb-4">
      <!-- Column 1: Basic controls -->
      <div class="col-12 col-lg-7">
        <div class="card border-light shadow-sm p-4" style="height: fit-content">
          <h5 class="card-title mb-4">Edit Your Pet's Report :3</h5>
            <form action="/reports/edit/report/{{$r->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Text input -->
                <div class="mb-3">
                    <label for="id" class="form-label-custom">Pet</label>
                    <select class="form-select-custom" name="p_id" id="id" required>
                    <option selected disabled>Choose a Pet...</option>
                    @foreach ($pet as $p)
                        @if ($p->user_id == Auth::user()->id)
                            <option value="{{$p->id}}" {{($r->pet_id == $p->id)?"selected":""}}>{{$p->name}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="name" class="form-label-custom">Title</label>
                    <input type="text" class="form-control-custom" value="{{$r->name}}" id="name" name="name" required>
                </div>
                <!-- Text input -->
                <div class="mb-3">
                    <label for="rep" class="form-label-custom">Report</label>
                    <input type="file" class="form-control-custom" id="rep" name="report">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" id="basicText" value="Update Report">
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