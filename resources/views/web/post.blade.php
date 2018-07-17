@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="card mt-2">
          <div class="card-body">
            <h1 class="card-text">{{$post->name}}</h1>
            <div class="">
              <h5>Categoria</h5>
              <a href="{{ route('category', $post->category->slug)}}">{{$post->category->name}}</a>
            </div>
            @if($post->file)
              <img src="{{$post->file}}" alt="" class="card-img-top">
            @endif
            <hr>
            {!! $post->body !!}
            <hr>
            <h5>Etiquetas</h5>
            @foreach ($post->tags as $tag)
              <a href="{{ route('tag', $tag->slug)}}">{{ $tag->name }}</a>
            @endforeach
          </div>
        </div>
    </div>
   </div>
  </div>
@endsection
