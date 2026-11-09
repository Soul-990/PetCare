@extends('PO.layout')
@section('title', 'My Apppointments')
@section('app', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
    <h3 class="text-secondary ms-4">Book Appointment, Select your vet</h3>
    <a href="/appointments/view" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        View Appointments <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($vets as $v)
                @foreach ($users as $u)
                    @if ($v->user_id == $u->id)
                    <div class="col-12 col-md-6">
                                <div class="card card-stat" style="height: fit-content">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('Dashboard/assets/images/Doctor.jpg')}}" class="pb-2 me-3" style="height: 50px; width: 50px; border-radius: 6px" alt="">
                                        <h4 class="text-success">{{$u->name}} - {{$v->speciality}}</h4>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h5 class="me-2" style="opacity: 60%">Experince:</h5>
                                        <h5 class="text-secondary">{{$v->experience}} years</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Location:</h5>
                                        <h5 class="text-secondary">{{$u->address}}</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Timings:</h5>
                                        <h5 class="text-secondary">{{ \Carbon\Carbon::createFromFormat('H:i:s', $v->shift_start)->format('g:i A') }} - {{ \Carbon\Carbon::createFromFormat('H:i:s', $v->shift_end)->format('g:i A') }}</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <form action="/appointment/book/" method="POST">
                                            @csrf
                                            <input type="hidden" name="vet_id" value="{{$v->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <input type="hidden" name="status" value="0">
                                            <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
                                            <input type="hidden" name="user_phone" value="{{Auth::user()->phone}}">
                                            <input type="submit" value="Book Appointment" class="btn btn-success">
                                        </form>
                                    </div>
                                </div>
                    </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
    @endsection