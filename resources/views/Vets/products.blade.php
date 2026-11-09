@extends('Vets.layout')
@section('title', 'My Products')
@section('prods', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
    <h3 class="text-secondary ms-4">Viewing All Products</h3>
    <a href="/products/add" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Add Product <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="table-card-custom">
      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vet as $v)
                @if ($v->user_id == Auth::user()->id)
                    @foreach ($prod as $p)
                        @if ($p->vet_id == $v->id)
                            <tr>
                                <td>#{{$p->id}}</td>
                                <td>{{$p->name}}</td>
                                <td>Rs. {{$p->price}}</td>
                                <td><img src="{{asset('products/'.$p->image)}}" alt="" height="50px" width="50px"></td>
                                <td>
                                    <a href="/products/delete/{{$p->id}}" class="btn btn-danger me-2">Delete</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection