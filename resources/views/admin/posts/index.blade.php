@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card mt-4">
          <div class="card-text">
            Lista de mis Posts
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-info float-right m-auto">Crear</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th>Body</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->body }}</td>
                    <td width="10px">
                      <a href="{{ route('posts.show',$post->id)}}" class="btn btn-sm btn-primary">Ver</a>
                    </td>
                    <td width="10px">
                      <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                    <td width="10px">
                      {!! Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'DELETE']) !!}
                        <button class="btn btn-sm btn-danger">
                          Eliminar
                        </button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $posts->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
