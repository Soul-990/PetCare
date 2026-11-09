@extends('PO.layout')
@section('title', 'My Dashboard')
@section('dashboard', 'active')
@section('content')
    @php
        $petss = 0;
        $appointments = 0;
        $report = 0;        
    @endphp
            {{--  --}}
            @foreach ($app as $a)
              @if ($a->user_id == Auth::user()->id)  
                @php
                    $appointments += 1;
                @endphp
              @endif
            @endforeach
            {{--  --}}
            @foreach ($pets as $p)
                @if ($p->user_id == Auth::user()->id)
                @php
                    $petss += 1;
                @endphp
                 @endif
            @endforeach
            {{--  --}}
    @foreach ($reports as $r)
        @foreach ($pets as $p)
            @if ($p->user_id == Auth::user()->id)
                @if ($p->id == $r->pet_id)
                    @php
                        $report += 1;
                    @endphp
                @endif

            @endif
        @endforeach
    @endforeach
            {{--  --}}
        <h1 class="text-center">Hello, <span class="text-success">{{Auth::user()->name}}!</span></h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <h2 class="text-secondary text-center">Appointments</h2>
                    <h1 class="text-success text-center">@php
                        echo $appointments;
                    @endphp</h1>
                </div>
                <div class="col-4">
                    <h2 class="text-secondary text-center">Pets</h2>
                    <h1 class="text-success text-center">@php
                        echo $petss;
                    @endphp</h1>
                </div>
                <div class="col-4">
                    <h2 class="text-secondary text-center">Reports</h2>
                    <h1 class="text-success text-center">@php
                        echo $report;
                    @endphp</h1>
                </div>
            </div>
        </div>
@endsection