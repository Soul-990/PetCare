@extends('PO.layout')
@section('title', 'My Pets')
@section('pet', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
    <h3 class="text-secondary ms-4">Viewing All Pets</h3>
    <a href="/pets/add" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Add a Pet <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="container">
        <div class="row">
            @php
                $status = 0;                
            @endphp
            @foreach ($pets as $p)
                @if ($p->user_id == Auth::user()->id)
                @php
                    $status = 1;                
                @endphp
                    <div class="col-12 col-md-6">
                                <div class="card card-stat" style="height: fit-content">
                                    <div class="d-flex align-items-center">
                                        @php
                                            $status2 = 0;                
                                        @endphp
                                        @foreach ($gal as $g)
                                            @if ($g->pet_id == $p->id)
                                            <img src="{{asset('petimages/'.$g->image)}}" class="pb-2 me-3" style="height: 80px; width: 80px; border-radius: 6px" alt="">
                                            <h3 class="text-success">{{$p->name}} <span class='text-secondary'> - {{$p->species}}</span></h3>             
                                            @php
                                                $status2 = 1;                
                                            @endphp
                                            @break
                                            @endif
                                        @endforeach
                                        @php
                                            if($status2 == 0){
                                                $image = asset('Dashboard/assets/images/Paw.jpg');
                                                echo "
                                                    <img src='$image' class='pb-2 me-3' style='height: 50px; width: 50px; border-radius: 6px'>
                                                    <h3 class='text-success'>{{$p->name}} <span class='text-secondary'> - {{$p->species}}</span></h3>
                                                ";
                                            }                                            
                                        @endphp

                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="me-2" style="opacity: 60%">ID:</h6>
                                        <h6 class="text-secondary">#{{$p->id}}</h6>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h5 class="me-2" style="opacity: 60%">Breed:</h5>
                                        <h5 class="text-secondary">{{$p->breed}}</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Age:</h5>
                                        <h5 class="text-secondary">{{$p->age}} Years Old</h5>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Gender:</h5>
                                        <h5 class="text-secondary">{{($p->gender)?"Female":"Male"}}</h5>
                                    </div>
                                    @if ($p->allergies == null)
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Allergies:</h5>
                                        <h5 class="text-secondary">None</h5>
                                    </div>
                                    @else
                                    <div class="d-flex align-items-center mt-2">
                                        <h5 class="me-2" style="opacity: 60%">Allergies:</h5>
                                        <h5 class="text-secondary">{{$p->allergies}}</h5>
                                    </div>
                                    @endif
                                    <div class="d-flex align-items-center mt-3">
                                        <a href="/pets/update/{{$p->id}}" class="btn btn-success me-3">Update</a>
                                        <a href="/pets/delete/{{$p->id}}" class="btn btn-danger me-auto">Delete</a>
                                    </div>
                                </div>
                    </div>
                @endif
            @endforeach
            @php
                if($status == 0){
                    echo "<h1 class='text-center mt-3'>
                        You Currently have no pets <i class='ms-2 bi bi-emoji-frown'></i> </h1>
                        <div class='d-flex justify-content-center'>
                        <a href='/pets/add' class='mt-3 pt-2 pb-2 ps-3 pe-3 btn btn-success'>Add Pets <i class='ms-2 bi bi-patch-plus'></i> </a>
                        </div>
                        ";
                }
            @endphp
        </div>
    </div>
    @endsection