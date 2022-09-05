@extends('layout.app')
@section('title', 'Horse Details')
@section('heading', 'Horse Details')
@section('link_text', 'Goto All Horses')
@section('link', '/horse')

@section('content')

<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="{{ asset('storage/images/'.$horse->image) }}" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="btn btn-dark rounded-pill">{{ $horse->id }}</p>
          <p class="lead">{{ \Carbon\Carbon::parse($horse->created_at)->diffForHumans() }}</p>
        </div>

        <hr>
        <h3 class="fw-bold text-primary">{{ $horse->name }}</h3>
        <p>Colour: {{ $horse->colour }}</p>
        <p>Age: {{ $horse->age }}</p>
        <p>Country: {{ $horse->country }}</p>
        <p>SEx: {{ $horse->sex }}</p>
        <p>Father: {{ $horse->father }}</p>
        <p>Mother: {{ $horse->mother }}</p>
        <p>Microchip No: {{ $horse->microNo }}</p>
        <p>Passport No: {{ $horse->passportNo }}</p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="/horse/{{$horse->id}}/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="/horse/{{$horse->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection