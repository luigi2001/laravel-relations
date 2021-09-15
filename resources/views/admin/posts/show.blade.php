@extends('layouts.app')

@section('content')
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $post->title }}</li>
    <li class="list-group-item">{{ $post->content }}</li>
  </ul>
</div>
@endsection