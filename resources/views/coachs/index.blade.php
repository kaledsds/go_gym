@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container">
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/home">Home</a></li>
        <li class="current">Coachs</li>
      </ol>
    </nav>
    <h1>Gestion des coachs</h1>
  </div>
</div><!-- End Page Title -->

<div class="row m-0 p-4">
  <div class="col-md-12">
    <a style="margin: 19px;" href="{{ route('coachs.create')}}" class="btn btn-success"><b>Ajouter un nouveau
        coach</b></a>
  </div>
  <div class="col-md-12">
    <div style="display:block;position:relative;height:300px;overflow:auto;">
      <table class="table table-hover table-condensed ">
        <thead>
          <tr>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>ID coach</b></font>
            </th>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>Nom</b></font>
            </th>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>Prenom</b></font>
            </th>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>Datenais</b></font>
            </th>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>Tel</b></font>
            </th>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>CIN</b></font>
            </th>
            <th style="background-color:#8bb83b;text-align:center;" colspan="4">
              <font color="white"><b>Actions</b></font>
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach($coachs as $coach)
          <tr>
            <td style="vertical-align:middle;">{{$coach->id}}</td>
            <td style="vertical-align:middle;">{{$coach->nom}}</td>
            <td style="vertical-align:middle;">{{$coach->prenom}}</td>
            <td style="vertical-align:middle;">{{$coach->datenais}}</td>
            <td style="vertical-align:middle;">{{$coach->tel}}</td>
            <td style="vertical-align:middle;">{{$coach->cin}}</td>
            <td colspan="2"></td>
            <td>
              <a href="{{ route('coachs.edit',$coach->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
              <form action="{{ route('coachs.destroy', $coach->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">X</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-sm-12">
      @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
      @endif
    </div>
  </div>
</div>
@endsection