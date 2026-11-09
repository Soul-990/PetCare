@extends('layouts.main')
@section('home', '')
@section('adopt', 'color: lime; font-weight: 900;')
@section('title', 'Adopt a pet')
@section('content')
<style>
    .products-container {
        max-width: 1200px;
        margin: 100px auto 40px;
        padding: 25px;
        background: #f8fff3;
        border-radius: 20px;
        box-sizing: border-box;
    }

    .products-row {
        display: flex;
        flex-wrap: wrap;
        margin: -12px;
    }

    .product-col {
        width: 33.333333%;
        padding: 12px;
        box-sizing: border-box;
    }

    .product-card {
        height: 100%;
        background: white;
        border-radius: 15px;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .product-card h3 {
        margin: 0 0 18px;
        color: #3f6212;
        font-size: 22px;
    }

    .pet-info {
        margin: 9px 0;
        color: #6b7280;
        font-size: 15px;
    }

    .pet-info strong {
        color: #222;
    }

    .buy-btn {
        display: block;
        margin-top: 20px;
        padding: 12px;
        background: #a3e635;
        color: #1a2e05;
        text-align: center;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
    }

    .buy-btn:hover {
        background: #84cc16;
    }

    @media (max-width: 900px) {
        .product-col {
            width: 50%;
        }
    }

    @media (max-width: 600px) {
        .products-container {
            margin: 70px 10px 20px;
            padding: 15px;
        }

        .product-col {
            width: 100%;
        }
    }
</style>


<div class="products-container">

    <h2 style="text-align:center; color:#3f6212; margin:0 0 30px;">
        Adopt a Pet &lt;3
    </h2>

    <div class="products-row">

        @foreach ($user as $u)

            @if ($u->role == 2)

                @foreach ($pet as $p)

                    @if ($p->user_id == $u->id)

                        @if ($p->adopt_status == 0)
                                                    <div class="product-col">

                            <div class="product-card">

                                <h3>
                                    {{ $p->name }}
                                </h3>

                                <p class="pet-info">
                                    <strong>Species:</strong> {{ $p->species }}
                                </p>

                                <p class="pet-info">
                                    <strong>Breed:</strong> {{ $p->breed }}
                                </p>

                                <p class="pet-info">
                                    <strong>Age:</strong> {{ $p->age }}
                                </p>

                                <p class="pet-info">
                                    <strong>Gender:</strong> {{ ($p->gender)?"Female":"Male"}}
                                </p>

                                <p class="pet-info">
                                    <strong>Allergies:</strong> {{ $p->allergies ?? 'None' }}
                                </p>

                                <p class="pet-info">
                                    <strong>Shelter:</strong> {{ $u->name }}
                                </p>

                                <p class="pet-info">
                                    <strong>Location:</strong> {{ $u->address }}
                                </p>

                                <a href="https://api.whatsapp.com/send/?phone={{$u->phone}}&text=Hello%21+I+am+interested+in+your+pet+{{$p->name}}.+Let%27s+talk+more" target="_blank" class="buy-btn">
                                    Request Adoption
                                </a>

                            </div>

                        </div>
                        @endif

                    @endif

                @endforeach

            @endif

        @endforeach

    </div>

</div>
@endsection