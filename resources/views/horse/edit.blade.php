@extends('layout.app')
@section('title', 'Edit Horse')
@section('heading', 'Edit This Horse')
@section('link_text', 'Goto All Horses')
@section('link', '/horse')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Horse</h3>
      </div>
      <div class="card-body p-4">
        <form action="/horse/{{ $horse->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $horse->name }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="colour" id="colour" class="form-control" placeholder="Colour" value="{{ $horse->colour }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="age" id="age" class="form-control" placeholder="Age" value="{{ $horse->age }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="{{ $horse->country }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="sex" id="sex" class="form-control" placeholder="Sex" value="{{ $horse->sex }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="father" id="father" class="form-control" placeholder="Father" value="{{ $horse->father }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="mother" id="mother" class="form-control" placeholder="Mother" value="{{ $horse->mother }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="microNo" id="microNo" class="form-control" placeholder="Micro No" value="{{ $horse->microNo }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="passportNo" id="passportNo" class="form-control" placeholder="Passport No" value="{{ $horse->passportNo }}" required>
          </div>

          <div class="my-2">
            <input type="file" name="image" id="image" accept="image/*" class="form-control">
          </div>

          <img src="{{ asset('storage/images/'.$horse->image) }}" class="img-fluid img-thumbnail" width="150">

          <div class="my-2">
            <input type="submit" value="Update Horse" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection