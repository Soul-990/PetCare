@extends('PO.layout')
@section('title', 'My Appointments')
@section('allapp', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-3">
    <h3 class="text-secondary ms-4">Viewing All Appointments</h3>
    <a href="{{route('appoint')}}" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Book a vet <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="table-card-custom">
      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>Vet Name</th>
              <th>Sent at</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            @foreach ($app as $a)
              @if ($a->user_id == Auth::user()->id)  
              <tr>
              <td class="table-order-id">#{{$a->id}}</td>
              @foreach ($vet as $v)
                  @if ($v->id == $a->vet_id)
                      @foreach ($user as $u)
                          @if ($v->user_id == $u->id)
                              <td class="table-product-name">{{$u->name}}</td>
                          @endif
                      @endforeach
                  @endif
              @endforeach
              <td>{{$a->created_at->format('d M Y, h:i A')}}</td>
              <td class="{{($a->status)?'text-success':'text-secondary'}}">{{($a->status)?"Done":"Pending"}}</td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection