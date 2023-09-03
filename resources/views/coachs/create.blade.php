@extends('layouts.app')


@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Ajouter un coach</h2>

            <ol>
                <li><a href="/home">Home</a></li>
                <li><a href="/coachs">Coachs</a></li>
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
                            <button type="submit" class="btn btn-primary">Ajouter le coach</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection