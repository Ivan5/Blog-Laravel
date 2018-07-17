@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <div class="row">
    <div class="col-md-6 col-lg-6">
      <h1 class="mt-2">Lista de Articulos</h1>
      @foreach($posts as $post)
        <div class="card mt-2">
          <div class="card-body">
            <h2>{{ $post->name }}</h2>
            @if($post->file)
              <img src="{{$post->file}}" alt="" class="card-img-top">
            @endif

            <p class="card-text">{{$post->excerpt}}</p>
            <a href="{{ route('post',$post->slug) }}" class="btn btn-primary">Leer más</a>
          </div>
        </div>
      @endforeach
      {{$posts->render()}}
    </div>
   </div>
  </div>
@endsection
