@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li><a href="/produits">Produits</a></li>
                <li class="current">produits</li>
            </ol>
        </nav>
        <h1>Ajouter un produit</h1>
    </div>
</div><!-- End Page Title -->
<div class="row m-0 p-4">
    <div class="col-md-12" style="padding: 3rem;">
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
            <form method="post" action="{{ route('produits.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="coach">Nom:</label>
                            <input type="text" class="form-control" name="nom" />
                        </div>
                        <div class="form-group">
                            <label for="coach">Stock:</label>
                            <input type="text" class="form-control" name="stock" />
                        </div>
                        <div class="form-group">
                            <label for="edresse">Image:</label>
                            <div class="input-group">
                                <input name="image" type="file" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="coach">Prix:</label>
                            <input type="text" class="form-control" name="prix" />
                        </div>
                        <div class="form-group">
                            <label for="coach">Description:</label>
                            <input type="text" class="form-control" name="description" />
                        </div>
                        <div class="form-group">
                            <div class="card pt-4 border-0">
                                <button type="submit" class="btn btn-success">Ajouter le produit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




































@endsection