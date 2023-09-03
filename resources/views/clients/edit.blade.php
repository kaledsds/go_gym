@extends('layouts.app')

@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Modification d'un Client</h2>

            <ol>
                <li><a href="/">Home</a></li>
                <li>Clients</li>
            </ol>
        </div>

    </div>
</section><!-- End Blog Section -->
<div class="row m-0 p-4">
    <div class="col-12">

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
                <form name="client" method="post" action="{{ route('clients.update', $client->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="card" style="border: 0;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom:</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $client->nom }}" />
                                </div>
                                <div class="form-group">
                                    <label for="nom">Prenom:</label>
                                    <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}" />
                                </div>
                                <div class="form-group">
                                    <label for="ville">Datenais:</label>
                                    <input type="text" class="form-control" name="datenais" value="{{ $client->datenais }}" />
                                </div>

                            </div>
                            <div class="col-md-6 ">

                                <div class="form-group">
                                    <label for="adresse">tel:</label>
                                    <input type="text" class="form-control" name="tel" value="{{ $client->tel }}" />
                                </div>

                                <div class="form-group">
                                    <label for="adresse">cin:</label>
                                    <input type="text" class="form-control" name="cin" value="{{ $client->cin }}" />
                                </div>

                                <div class="form-group">
                                    <label for="tel">Sport:</label>
                                    <select name="sport_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Open sport menu</option>
                                        @foreach ($sports as $sport)
                                        <option value="{{ $sport->id }}">{{ $sport->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group py-4">
                                    <button type="submit" class="btn btn-primary">Modification du client</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>





















    @endsection