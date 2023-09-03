@extends('layouts.app')

@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Gestion des machines</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>machines</li>
            </ol>
        </div>
    </div>
</section><!-- End Blog Section -->
<div class="row m-0 p-4">
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('machines.create')}}" class="btn btn-primary"><b>Ajouter une machine</b></a>
    </div>
    <div class="container text-center p-4">
        <div class="row row-cols-5">
            @foreach($machines as $machine)
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/' . $machine->image) }}" height="140px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $machine->nom }}</h5>
                        <p class="card-text">{{ $machine->type }}</p>
                        <form action="{{ route('machines.destroy', $machine->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer cette machine</button>
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