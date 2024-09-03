@extends('layouts.app')


@section('content')

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container">
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/home">Home</a></li>
        <li><a href="/sports">Sports</a></li>
        <li class="current">Ajouter</li>
      </ol>
    </nav>
    <h1>Ajouter un sport</h1>
  </div>
</div><!-- End Page Title -->
<div class="row" style="padding: 2rem;">
  <div class="col-md-12">

    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form method="post" action="{{ route('sports.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="nom" />
            </div>
            <div class="form-group">
              <label for="time">Time:</label>
              <input type="text" class="form-control" name="time" />
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="coach">Coach:</label>
              <select name="coach_id" class="form-select" id="floatingSelect"
                aria-label="Floating label select example">
                <option selected>Open coach menu</option>
                @foreach ($coachs as $coach)
                <option value="{{ $coach->id }}">{{ $coach->nom }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="margin-top: 2rem;">
              <button type="submit" class="btn btn-success">Ajouter le sport</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


















@endsection