@extends('layouts.app')
@section('page-title', 'Create DC-Comics')

@section('main')


  <div class="container p-5">

    <h1 class="text-center p-4">Create New Comic</h1>

    {{-- @if ( $errors->any() )
    <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error )
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}


    <form method="POST" action="{{ route('comics.store') }}">

      @csrf

      <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Thumb/image</label>
        <input name="thumb" type="text" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" type="text" class="form-control @error('price') is-invalid @enderror">
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Series</label>
        <input name="series" type="text" class="form-control @error('series') is-invalid @enderror">
        @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Sale Date</label>
        <input name="sale_date" type="text" class="form-control @error('sale_date') is-invalid @enderror">
        @error('sale_date')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Type</label>
        <input name="type" type="text" class="form-control @error('type') is-invalid @enderror">
        @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>

  </div>

@endsection
