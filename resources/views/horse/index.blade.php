@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Horses')
@section('link_text', 'Add New Horse')
@section('link', '/horse/create')

@section('content')

@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row g-4 mt-1">
  @forelse($horses as $key => $row)
  <div class="col-lg-4">

      <div class="card shadow">
        <a href="horse/{{ $row->id }}">
          <img src="{{ asset('storage/images/'.$row->image) }}" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <p class="btn btn-success rounded-pill btn-sm">{{ $row->id }}</p>
          <div class="card-title fw-bold text-primary h4">Name: {{ $row->name }}</div>
          <div class="text-secondary h5">Colour: {{ $row->colour }}</div>
          <div class="text-secondary h5">Age: {{ $row->age }}</div>
          <div class="text-secondary h5">Country: {{ $row->country }}</div>
          <div class="text-secondary h5">Sex: {{ $row->sex }}</div>
          <div class="text-secondary h5">Father: {{ $row->father }}</div>
          <div class="text-secondary h5">Mother: {{ $row->mother }}</div>
          <div class="text-secondary h5">Microchip No:{{ $row->microNo }}</div>
          <div class="text-secondary h5">Passport No:{{ $row->passportNo }}</div>
          <p class="text-secondary">{{ Str::limit($row->content, 100) }}</p>
        </div>
      </div>

  </div>
  @empty
    <h2 class="text-center text-secondary p-4">No horse found in the database!</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $horses->onEachSide(1)->links() }}
  </div>

</div>

@endsection