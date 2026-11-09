@extends('PO.layout')
@section('title', 'My Treatments')
@section('treat', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-3">
    <h3 class="text-secondary ms-4">Viewing All Treatment</h3>
    </div>
    <div class="table-card-custom">
      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>Vet Name</th>
              <th>Pet Name</th>
              <th>Treatment Type</th>
              <th>Next Appointment</th>
              <th>Treated On</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($treat as $t)
              @foreach ($pets as $p)
                @if ($t->pet_id == $p->id)
                  @if ($p->user_id == Auth::user()->id)
                    <tr>
                    <td>#{{$t->id}}</td>
                    @foreach ($vet as $v)
                      @if ($t->vet_id == $v->id)
                        @foreach ($user as $u)
                          @if ($v->user_id == $u->id)
                            <td>{{$u->name}}</td>
                          @endif                          
                        @endforeach
                      @endif
                    @endforeach
                    <td>{{$p->name}}</td>
                    <td>{{($t->type)?'Diagnosis':'Maintainance'}}</td>
                    @if ($t->next_appointment == '')
                      <td>None</td>                      
                      @else
                      <td>{{ \Carbon\Carbon::parse($t->next_appointment)->format('d M, Y')}}</td>                    
                    @endif
                    <td>{{$t->created_at->format('d M Y')}}</td>
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