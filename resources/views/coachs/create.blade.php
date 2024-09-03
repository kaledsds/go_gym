@extends('layouts.app')


@section('content')

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li><a href="/coachs">Coachs</a></li>
                <li class="current">Ajouter</li>
            </ol>
        </nav>
        <h1>Ajouter un coach</h1>
    </div>
</div><!-- End Page Title -->
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
            <form method="post" action="{{ route('coachs.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="coach">Nom:</label>
                            <input type="text" class="form-control" name="nom" />
                        </div>
                        <div class="form-group">
                            <label for="coach">Prenom:</label>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-top: 2rem;">
                            <button type="submit" class="btn btn-success">Ajouter le coach</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection