@extends('Vets.layout')
@section('title', 'My Dashboard')
@section('dashboard', 'active')
@section('content')
    @php
        $treatments = 0;
        $appointments = 0;
        $products = 0;        
    @endphp
            @foreach ($vet as $v)
              @if ($v->user_id == Auth::user()->id)
                @foreach ($treat as $t)
                  @if ($t->vet_id == $v->id)
                    @php
                        $treatments += 1;
                    @endphp
                  @endif
                @endforeach
              @endif
            @endforeach
            @foreach ($vet as $v)
                @if ($v->user_id == Auth::user()->id)
                    @foreach ($prod as $p)
                        @if ($p->vet_id == $v->id)
                            @php
                                $products += 1;
                            @endphp
                        @endif
                    @endforeach
                @endif
            @endforeach
    @foreach ($app as $a)
                @foreach ($vet as $v)
                @if ($a->vet_id == $v->id)
                @if ($v->user_id == Auth::user()->id)
                        @php
                            $appointments += 1;
                        @endphp
                        @endif
                    @endif
                    @endforeach
                @endforeach
        <h1 class="text-center">Hello, <span class="text-success">{{Auth::user()->name}}!</span></h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <h2 class="text-secondary text-center">Treatments Done</h2>
                    <h1 class="text-success text-center">@php
                        echo $treatments;
                    @endphp</h1>
                </div>
                <div class="col-4">
                    <h2 class="text-secondary text-center">Products Listed</h2>
                    <h1 class="text-success text-center">@php
                        echo $products;
                    @endphp</h1>
                </div>
                <div class="col-4">
                    <h2 class="text-secondary text-center">Total Appointments</h2>
                    <h1 class="text-success text-center">@php
                        echo $appointments;
                    @endphp</h1>
                </div>
            </div>
        </div>
@endsection