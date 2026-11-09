@extends('PO.layout')
@section('title', 'My Pets Gallery :3 ')
@section('petG', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
    <h3 class="text-secondary ms-4">Viewing All Images</h3>
    <a href="/pets/gallery/add" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Add an Image <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
            @php
                $status = 0;                
            @endphp
    <div class="container">
        <div class="row">
            @foreach ($gal as $g)
                @if ($g->user_id == Auth::user()->id)
                @php
                    $status = 1;                
                @endphp
                    <div class="col-6 col-md-3">
                            <div class="d-flex justify-content-center mt-1">
                                <img src="{{asset('petimages/'.$g->image)}}" style="height: 100%; width: 100%; border-radius: 10px; object-fit: cover" alt=""> 
                            </div>
                            @foreach ($pet as $p)
                                @if ($g->pet_id == $p->id)
                                    <h5 class="text-center text-secondary mt-1">{{$p->name}}</h5>
                                @endif
                            @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
            @php
                if($status == 0){
                    echo "<h1 class='text-center mt-3'>
                        You Currently have no Images <i class='ms-2 bi bi-emoji-frown'></i> </h1>
                        <div class='d-flex justify-content-center'>
                        <a href='/pets/gallery/add' class='mt-3 pt-2 pb-2 ps-3 pe-3 btn btn-success'>Add Images <i class='ms-2 bi bi-patch-plus'></i> </a>
                        </div>
                        ";
                }
            @endphp
@endsection