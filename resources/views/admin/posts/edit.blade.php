@extends('layouts.app')

@section('content')
<form action="{{ route('admin.posts.update', $post->id) }}" method="post">
    @method('PATCH')
    @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="titolo" name="title" value="{{ old('title', $post->title) }}">
    @error('title') <div class="btn btn-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label for="categories" class="form-label">categorie</label>
    <select name="category_id" id="categories" class="form-control @error('category_id') is-invalid @enderror">
      <option value=""></option>
      @foreach($categories as $category)
      <option value="{{$category->id}}" @if($category->id == old('category_id', $post->category_id)) selected @endif>{{$category->name}}</option>
      @endforeach
    </select>
    @error('category_id') <div class="btn btn-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label for="contenuto" class="form-label">contenuto</label>
    <textarea name="content" id="contenuto" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
    @error('content') <div class="btn btn-danger">{{ $message }}</div> @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection