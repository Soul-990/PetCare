@extends('Shelters.layout')
@section('title', 'My Dashboard')
@section('dashboard', 'active')
@section('content')
    @php
        $pe = 0;        
    @endphp
            @foreach ($pet as $p)
                @if ($p->user_id == Auth::user()->id)
                   @php
                       $pe += 1;
                   @endphp
                @endif
            @endforeach
        <h1 class="text-center">Hello, <span class="text-success">{{Auth::user()->name}}!</span></h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <h2 class="text-secondary text-center">Adoption Listed</h2>
                    <h1 class="text-success text-center">@php
                        echo $pe;
                    @endphp</h1>
                </div>
            </div>
        </div>
@endsection