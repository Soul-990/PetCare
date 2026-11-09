@extends('Vets.layout')
@section('title', 'My Appointments')
@section('appoint', 'active')
@section('content')
    <div class="table-card-custom">
      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>User Email</th>
              <th>User Phone</th>
              <th>Sent at</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($app as $a)
            @foreach ($vet as $v)
            @if ($a->vet_id == $v->id)
            @if ($v->user_id == Auth::user()->id)
                    <tr>
                      <td>#{{$a->id}}</td>
                      @foreach ($user as $u)
                        @if ($u->id == $a->user_id)
                          <td>{{$u->name}}</td>
                          @endif
                          @endforeach
                       <td>{{$a->user_email}}</td>
                       <td>{{$a->user_phone}}</td>
                       <td>{{$a->created_at->format('d M Y, h:i A')}}</td>
                       <td>
                        <a href="/appointment/status/{{$a->id}}" class="btn btn-{{($a->status)?'success':'warning'}}">{{($a->status)?"Done":"Pending"}}</a>
                      </td>
                    </tr>
                    @endif
                  @endif
                @endforeach
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection