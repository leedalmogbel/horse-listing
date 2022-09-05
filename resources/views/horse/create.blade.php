@extends('layout.app')
@section('title', 'Add New Horse')
@section('heading', 'Create a New Horse')
@section('link_text', 'Goto All Horses')
@section('link', '/horse')

@section('content')

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Add New Horse</h3>
      </div>
      <div class="card-body p-4">
        <form action="/horse" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="my-2">
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="colour" id="colour" class="form-control @error('colour') is-invalid @enderror" placeholder="Colour" value="{{ old('colour') }}">
            @error('colour')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="age" id="age" class="form-control @error('age') is-invalid @enderror" placeholder="Age" value="{{ old('age') }}">
            @error('age')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="country" id="country" class="form-control @error('country') is-invalid @enderror" placeholder="Country" value="{{ old('country') }}">
            @error('country')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror" placeholder="Sex" value="{{ old('sex') }}">
            @error('sex')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="father" id="father" class="form-control @error('father') is-invalid @enderror" placeholder="Father" value="{{ old('father') }}">
            @error('father')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="mother" id="mother" class="form-control @error('mother') is-invalid @enderror" placeholder="Mother" value="{{ old('mother') }}">
            @error('mother')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="microNo" id="microNo" class="form-control @error('microNo') is-invalid @enderror" placeholder="Microchip No" value="{{ old('microNo') }}">
            @error('microNo')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="text" name="passportNo" id="passportNo" class="form-control @error('passportNo') is-invalid @enderror" placeholder="Passport No" value="{{ old('passportNo') }}">
            @error('passportNo')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="file" name="image" id="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
            @error('image')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="my-2">
            <input type="submit" value="Add Horse" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection