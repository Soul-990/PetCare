@extends('PO.layout')
@section('title', 'My Pets Reports')
@section('reports', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
    <h3 class="text-secondary ms-4">Viewing All Reports</h3>
    <a href="/reports/add" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Add Report <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="container">
        <div class="row">
                        @php
                $status = 0;                
            @endphp
    @foreach ($reports as $r)
        @foreach ($pets as $p)
            @if ($p->user_id == Auth::user()->id)
                @if ($p->id == $r->pet_id)
                    @php
                        $status = 1;                
                    @endphp
                    <div class="col-12 col-md-6">
                        <div class="card card-stat p-4" style="height: fit-content; background-color: #ffffff2d;">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('Reports/'.$r->report)}}" style="height: 250px; width: 100%; border-radius: 10px; object-fit: cover" alt=""> 
                            </div>
                            <h3 class="text-center text-success mt-2">{{$r->name}}</h3>
                            <div class="d-flex align-items-center mt-2">
                                <h5 class="me-2" style="opacity: 60%">Report Of:</h5>
                                <h5 class="text-secondary">{{$p->name}}</h5>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <h5 class="me-2" style="opacity: 60%">Updated At:</h5>
                                <h5 class="text-secondary">{{$r->updated_at->format('d M Y, h:i A')}}</h5>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <h6 class="me-2" style="opacity: 60%">Uploded At:</h6>
                                <h6 class="text-secondary">{{$r->created_at->format('d M Y, h:i A')}}</h6>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <a href="{{asset('Reports/'.$r->report)}}" download="report" class="btn btn-primary me-3">Download</a>
                                <a href="/reports/delete/{{$r->id}}" class="btn btn-danger me-3">Delete</a>
                                <a href="/reports/edit/{{$r->id}}" class="btn btn-success">Edit</a>
                            </div>
                        </div>
                    </div>
                @endif

            @endif
        @endforeach
    @endforeach
                @php
                if($status == 0){
                    echo "<h1 class='text-center mt-3'>
                        You Currently have no reports <i class='ms-2 bi bi-emoji-frown'></i> </h1>
                        <div class='d-flex justify-content-center'>
                        <a href='/reports/add' class='mt-3 pt-2 pb-2 ps-3 pe-3 btn btn-success'>Add Report <i class='ms-2 bi bi-patch-plus'></i> </a>
                        </div>
                        ";
                }
            @endphp
        </div>
    </div>
@endsection