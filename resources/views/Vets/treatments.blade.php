@extends('Vets.layout')
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
              <th>Pet Name</th>
              <th>Treatment Type</th>
              <th>Next Appointment</th>
              <th>Treated On</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vet as $v)
              @if ($v->user_id == Auth::user()->id)
                @foreach ($treat as $t)
                  @if ($t->vet_id == $v->id)
                    <tr>
                    <td>#{{$t->id}}</td>
                    @foreach ($pets as $p)
                      @if ($t->pet_id == $p->id)
                        <td>{{$p->name}}</td>
                      @endif
                    @endforeach
                    <td>{{($t->type)?'Diagnosis':'Maintainance'}}</td>
                    @if ($t->next_appointment == '')
                      <td>None</td>                      
                      @else
                      <td>{{ \Carbon\Carbon::parse($t->next_appointment)->format('d M, Y')}}</td>                      
                    @endif
                    <td>{{$t->created_at->format('d M Y')}}</td>
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