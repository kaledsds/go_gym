@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="page-title light-background">
    <div class="container">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/home">Home</a></li>
                <li class="current">dashboard</li>
            </ol>
        </nav>
        <h1>Dashboard</h1>
    </div>
</div><!-- End Page Title -->
<div class="container">
    <div class="row justify-content-center" style="height: 400px; align-items: center;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection