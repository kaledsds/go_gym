@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li><a href="/sports">Sports</a></li>
                <li class="current">Modifier</li>
            </ol>
        </nav>
        <h1>Modification d'un sport</h1>
    </div>
</div><!-- End Page Title -->
<div class="row justify-content-center">
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
                <form name="sport" method="post" action="{{ route('sports.update', $sport->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="card p-4" style="border: 0;">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="nom">Nom:</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $sport->nom }}" />
                                </div>
                                <div class="form-group">
                                    <label for="tel">Sport:</label>
                                    <select name="coach_id" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Open coach menu</option>
                                        @foreach ($coachs as $coach)
                                        <option value="{{ $coach->id }}">{{ $coach->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="nom">Time:</label>
                                    <input type="text" class="form-control" name="time" value="{{ $sport->time }}" />
                                </div>

                            </div>
                            <div class="col-md-6 ">

                                <div class="form-group py-4">
                                    <button type="submit" class="btn btn-success">Modification du sport</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
















        @endsection