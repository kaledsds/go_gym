@extends('layouts.app')


@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Ajouter un sport</h2>

            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/sports">sport</a></li>
                <li>create</li>
            </ol>
        </div>

    </div>
</section><!-- End Blog Section -->
<div class="row" style="padding: 2rem;">
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
            <form method="post" action="{{ route('sports.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" class="form-control" name="nom" />
                        </div>
                        <div class="form-group">
                            <label for="time">Time:</label>
                            <input type="text" class="form-control" name="time" />
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="coach">Coach:</label>
                            <select name="coach_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open coach menu</option>
                                @foreach ($coachs as $coach)
                                <option value="{{ $coach->id }}">{{ $coach->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-top: 2rem;">
                            <button type="submit" class="btn btn-primary">Ajouter le sport</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


















@endsection