@extends('layouts.app')
@section('page-title', 'Edit DC-Comics')


@section('main')


  <div class="container p-5">

    <h1 class="text-center p-4">Modify Comic</h1>

    <form method="POST" action="{{ route('comics.update', $comic->id) }}">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" value="{{$comic->title}}" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror">
          {{$comic->description}}
        </textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Thumb/image</label>
        <input name="thumb" value="{{$comic->thumb}}" type="text" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" value="{{$comic->price}}" type="text" class="form-control @error('price') is-invalid @enderror">
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Series</label>
        <input name="series" value="{{$comic->series}}" type="text" class="form-control @error('series') is-invalid @enderror">
        @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Sale Date</label>
        <input name="sale_date" value="{{$comic->sale_date}}" type="text" class="form-control @error('sale_date') is-invalid @enderror">
        @error('sale_date')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Type</label>
        <input name="type" value="{{$comic->type}}" type="text" class="form-control @error('type') is-invalid @enderror">
        @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Modify Comic</button>

    </form>

  </div>

@endsection
