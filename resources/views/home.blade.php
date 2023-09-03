@extends('layouts.app')

@section('content')
<!-- ======= Blog Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Dashboard</h2>

      <ol>
        <li><a href="/">Home</a></li>
        <li>dashboard</li>
      </ol>
    </div>

  </div>
</section><!-- End Blog Section -->
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
