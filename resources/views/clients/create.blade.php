@extends('layouts.app')


@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Ajouter un client</h2>

            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/clients">Client</a></li>
                <li>create</li>
            </ol>
        </div>

    </div>
</section><!-- End Blog Section -->
<div class="row m-0 p-4">
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
            <form method="post" action="{{ route('clients.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="client">Nom:</label>
                            <input type="text" class="form-control" name="nom" />
                        </div>
                        <div class="form-group">
                            <label for="client">Prenom:</label>
                            <input type="text" class="form-control" name="prenom" />
                        </div>
                        <div class="form-group">
                            <label for="ville">Datenais:</label>
                            <input type="text" class="form-control" name="datenais" />
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="edresse">Tel:</label>
                            <input type="text" class="form-control" name="tel" />
                        </div>
                        <div class="form-group">
                            <label for="edresse">CIN:</label>
                            <input type="text" class="form-control" name="cin" />
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-top: 2rem;">
                            <button type="submit" class="btn btn-primary">Ajouter le client</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>









@endsection