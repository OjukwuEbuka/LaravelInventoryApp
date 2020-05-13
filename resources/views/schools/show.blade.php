@extends('schools.layout.schoollayout')

@section('title', "$school->name")

@section('content')

<section class="section section-icons center">
  <div class="container">
    <div class="row">
    
      <a href="/{{ $school->id }}/students/create">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">person_add</i>
            <h6>Register Student</h6>
          </div>
        </div>
      </a>

      <a href="/{{ $school->id }}/result">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">done</i>
            <h6>Enter Scores</h6>
          </div>
        </div>
      </a>

      <a href="/{{$school->id}}/results/students">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">print</i>
            <h6>Print Results</h6>
          </div>
        </div>
      </a>

    </div>
  </div>
  
  <div class="container">
    <div class="row">

      <a href="/{{ $school->id }}/students/class">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">group_add</i>
            <h6>Manage Class Members</h6>
          </div>
        </div>
      </a>

      <a href="/{{$school->id}}/subjects/assign">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">library_books</i>
            <h6>Select Subject Members</h6>
          </div>
        </div>
      </a>

      <a href="/{{$school->id}}/class/results">
        <div class="col m4 s12">
          <div class="card-panel">
            <i class="material-icons large {{$school->themeColor ?: 'blue'}}-text">grid_on</i>
            <h6>View Class Broadsheet</h6>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

@endsection