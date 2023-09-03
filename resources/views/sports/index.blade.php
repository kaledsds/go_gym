@extends('layouts.app')

@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Gestion des sports</h2>

            <ol>
                <li><a href="/">Home</a></li>
                <li>sports</li>
            </ol>
        </div>

    </div>
</section><!-- End Blog Section -->
<div class="row m-0 p-4" style="display: flex;justify-content: center;">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('sports.create')}}" class="btn btn-primary"><b>Ajouter un sport</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>ID sport</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Nom</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Time</b></font>
                        </th>
                        <th style="background-color:#0d2735;">
                            <font color="white"><b>Coach Name</b></font>
                        </th>
                        <th style="background-color:#0d2735;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($sports as $sport)
                    <tr>
                        <td style="vertical-align:middle;">{{$sport->id}}</td>
                        <td style="vertical-align:middle;">{{$sport->nom}}</td>
                        <td style="vertical-align:middle;">{{$sport->time}}</td>
                        <td style="vertical-align:middle;">{{$sport->coach_nom}} {{$sport->coach_prenom}}</td>
                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('sports.edit',$sport->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('sports.destroy', $sport->id)}}" method="post">
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