@extends('PO.layout')
@section('title', 'Book Appointment')
@section('app', 'active')
@section('content')
    <h1 class="text-center text-success">Your Appointment has been booked!</h1>
    <h3 class="text-center mt-3">The Vet will be in touch shortly!</h3>
    <div class="d-flex justify-content-center mt-2">
    <a href="{{route('home')}}" class="btn btn-primary">Go Back</a>
    </div>
@endsection