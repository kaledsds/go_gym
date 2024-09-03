@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container">
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/home">Home</a></li>
        <li class="current">Clients</li>
      </ol>
    </nav>
    <h1>Gestion des Clients</h1>
  </div>
</div><!-- End Page Title -->
<div class="row m-0 p-4">
  <div class="col-md-12">
    <a style="margin: 19px;" href="{{ route('clients.create')}}" class="btn btn-success"><b>Ajouter un
        client</b></a>
  </div>
  <div class="col-md-12">
    <div style="display:block;position:relative;height:300px;overflow:auto;">
      <table class="table table-hover table-condensed ">
        <thead>
          <tr>
            <th style="background-color:#8bb83b;">
              <font color="white"><b>ID client</b></font>
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
            <th style="background-color:#8bb83b;">
              <font color="white"><b>Sport</b></font>
            </th>
            <th style="background-color:#8bb83b;text-align:center;" colspan="4">
              <font color="white"><b>Actions</b></font>
            </th>
          </tr>
        </thead>

        <tbody>
          @foreach($clients as $client)
          <tr>
            <td style="vertical-align:middle;">{{$client->id}}</td>
            <td style="vertical-align:middle;">{{$client->nom}}</td>
            <td style="vertical-align:middle;">{{$client->prenom}}</td>
            <td style="vertical-align:middle;">{{$client->datenais}}</td>
            <td style="vertical-align:middle;">{{$client->tel}}</td>
            <td style="vertical-align:middle;">{{$client->cin}}</td>
            <td style="vertical-align:middle;">{{$client->sport_nom}}</td>
            <td colspan="2"></td>
            <td>
              <a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
              <form action="{{ route('clients.destroy', $client->id)}}" method="post">
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