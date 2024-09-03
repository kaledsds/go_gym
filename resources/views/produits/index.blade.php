@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li class="current">Produits</li>
            </ol>
        </nav>
        <h1>Gestion des produits</h1>
    </div>
</div><!-- End Page Title -->
<div class="row m-0 p-4">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('produits.create')}}" class="btn btn-success"><b>Ajouter une produit</b></a>
    </div>
    <div class="container text-center p-4">
        <div class="row row-cols-5">
            @foreach($produits as $produit)
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/' . $produit->image) }}" height="140px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ $produit->stock }}</p>
                        <p class="card-text">{{ $produit->description }}</p>
                        <p class="card-text">{{ $produit->prix }}</p>
                        <form action="{{ route('produits.destroy', $produit->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer cette produit</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>

</div>


@endsection