@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card mt-4">
          <div class="card-text">
            <h1>Crear Post</h1>
          </div>
          <div class="card-body">
            {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
              @include('admin.posts.partials.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
