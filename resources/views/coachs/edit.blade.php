@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li><a href="/coachs">Coachs</a></li>
                <li class="current">Modifier</li>
            </ol>
        </nav>
        <h1>Modification d'un coach</h1>
    </div>
</div><!-- End Page Title -->
<div class="row m-0 p-4">
    <div class="col-12">
        <div style="width:800px;">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <div class="row">
            <div class="col-12">
                <form name="coach" method="post" action="{{ route('coachs.update', $coach->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="card" style="border: 0; padding: 2rem;">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="nom">Nom:</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $coach->nom }}" />
                                </div>
                                <div class="form-group">
                                    <label for="nom">Prenom:</label>
                                    <input type="text" class="form-control" name="prenom" value="{{ $coach->prenom }}" />
                                </div>

                            </div>

                            <div class="col-md-6 ">

                                <div class="form-group">
                                    <label for="ville">Datenais:</label>
                                    <input type="text" class="form-control" name="datenais" value="{{ $coach->datenais }}" />
                                </div>
                                <div class="form-group">
                                    <label for="ville">CIN:</label>
                                    <input type="text" class="form-control" name="cin" value="{{ $coach->cin }}" />
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="nom">Tel:</label>
                                    <input type="text" class="form-control" name="tel" value="{{ $coach->tel }}" />
                                </div>
                                <div style="margin-top: 2rem;">
                                    <button type="submit" class="btn btn-success">Modification du coach</button>
                                </div>

                            </div>


                        </div>

                    </div>
                </form>
            </div>
        </div>

        @endsection