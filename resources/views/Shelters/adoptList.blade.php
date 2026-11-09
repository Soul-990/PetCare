@extends('Shelters.layout')
@section('title', 'My Adoption List')
@section('adoptList', 'active')
@section('content')
    <div class="d-flex align-items-center justify-content-center mb-3">
    <h3 class="text-secondary ms-4">Viewing All Adoption</h3>
    <a href="{{route('adoptAdd')}}" class="p-2 ms-auto me-0 btn btn-success" style="width: fit-content;">
        Add Adoption <i class="ms-2 bi bi-plus-circle"></i>
    </a>
    </div>
    <div class="table-card-custom">
      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>Pet Name</th>
              <th>Species</th>
              <th>Breed</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Allergies</th>
              <th>Adopt Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pet as $p)
                @if ($p->user_id == Auth::user()->id)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->species}}</td>
                        <td>{{$p->breed}}</td>
                        <td>{{$p->age}}</td>
                        <td>{{($p->gender)?"Female":"Male"}}</td>
                        <td>{{$p->allergies}}</td>
                        <td><a href="/adoption/status/{{$p->id}}" class="btn btn-{{($p->adopt_status)?"success":"secondary"}}">{{($p->adopt_status)?"Adopted":"Waiting"}}</a></td>
                        <td>
                            <a href="/pets/delete/{{$p->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection