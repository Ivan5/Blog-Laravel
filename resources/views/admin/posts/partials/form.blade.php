{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
  {{ Form::label('category_id', 'Categorias') }}
  {{ Form::select('category_id',$categories,null,['class' => 'form-control'])}}
</div>

<div class="form-group">
  {{ Form::label('name', 'Nombre del Post') }}
  {{ Form::text('name',null,['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
  {{ Form::label('slug', 'URL') }}
  {{ Form::text('slug',null,['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
  {{ Form::label('file', 'Imagen') }}
  {{ Form::file('file',['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('status', 'Estado del Post: ') }}
  <label>
    {{ Form::radio('status','PUBLISHED') }} Publicado
    {{ Form::radio('status','DRAFT') }} Borrador
  </label>
</div>
<div class="form-group">
  {{ Form::label('tags', 'Etiquetas') }}
  <div class="">
    @foreach ($tags as $tag)
      <label>
        {{ Form::checkbox('tags[]',$tag->id)  }} {{ $tag->name }}
      </label>
    @endforeach
  </div>
</div>
<div class="form-group">
  {{ Form::label('excerpt', 'Extracto') }}
  {{ Form::textarea('body',null,['class' => 'form-control', 'rows' => '2']) }}

</div>
<div class="form-group">
  {{ Form::label('body', 'Descripcion') }}
  {{ Form::textarea('body',null,['class' => 'form-control', 'id' => 'body']) }}

</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
</div>

@section('scripts')
  <script>
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
          callback: function(text){
            $("#slug").val(text);
          }
        });
    });
  </script>
@endsection
