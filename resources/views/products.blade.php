@extends('layouts.main')
@section('home', '')
@section('products', 'color: lime; font-weight: 900;')
@section('title', 'Browse Products')
@section('content')
<style>
    /* Container */
    .products-container {
        max-width: 1200px;
        margin: 100px auto 40px;
        padding: 25px;
        background: #f8fff3;
        border-radius: 20px;
        box-sizing: border-box;
    }

    /* Row */
    .products-row {
        display: flex;
        flex-wrap: wrap;
        margin: -12px;
    }

    /* col-4 equivalent */
    .product-col {
        width: 33.333333%;
        padding: 12px;
        box-sizing: border-box;
    }

    /* Card */
    .product-card {
        height: 100%;
        background: white;
        border-radius: 15px;
        padding: 15px;
        box-sizing: border-box;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .product-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 12px;
    }

    .buy-btn {
        display: block;
        text-align: center;
        text-decoration: none;
        background: #a3e635;
        color: #1a2e05;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
    }

    /* Tablet - col-6 */
    @media (max-width: 900px) {
        .product-col {
            width: 50%;
        }
    }

    /* Mobile - col-12 */
    @media (max-width: 600px) {
        .products-container {
            margin: 70px 10px 20px;
            padding: 15px;
        }

        .product-col {
            width: 100%;
        }

        .product-card img {
            height: 200px;
        }
    }
</style>


<div class="products-container">

    <h2 style="text-align:center; color:#3f6212; margin:0 0 30px;">
        Everything your pet needs <3
    </h2>

    <div class="products-row">

        @foreach ($prod as $p)

            <div class="product-col">

                <div class="product-card">

                    <img src="{{ asset('products/'.$p->image) }}"
                         alt="{{ $p->name }}">

                    <h3 style="margin:15px 0 8px; color:#222;">
                        {{ $p->name }}
                    </h3>


                    @foreach ($vet as $v)
                        @if ($v->id == $p->vet_id)

                            @foreach ($user as $u)
                                @if ($u->id == $v->user_id)

                                    <p style="margin:0 0 10px; color:#6b7280; font-size:14px;">
                                        By: {{ $u->name }}
                                    </p>

                                @endif
                            @endforeach

                        @endif
                    @endforeach


                    <p style="font-size:20px; font-weight:bold; color:#65a30d; margin:0 0 15px;">
                        Rs. {{ $p->price }}
                    </p>


                    <a href="{{ $p->link }}"
                       target="_blank"
                       class="buy-btn">
                        Buy Now
                    </a>

                </div>

            </div>

        @endforeach

    </div>

</div>
@endsection