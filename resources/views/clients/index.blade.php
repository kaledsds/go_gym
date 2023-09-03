@extends('layouts.app')

@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Gestion des Clients</h2>

            <ol>
                <li><a href="/">Home</a></li>
                <li>Clients</li>
            </ol>
        </div>

    </div>
</section><!-- End Blog Section -->
<div class="row m-0 p-4">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('clients.create')}}" class="btn btn-primary"><b>Ajouter un nouveau
                client</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>ID client</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Nom</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Prenom</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Datenais</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Tel</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>CIN</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Sport</b></font>
                        </th>
                        <th style="background-color:#0d2735;text-align:center;" colspan="4">
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
                            <a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary">Edit</a>
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