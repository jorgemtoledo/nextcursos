@extends('layout.home')

@section('title', 'Next Cursos')

@section('container')
<div class="container">
  <h3 class="center">Editar Curso</h3>

  <div class="row">
    <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
      <!-- Crearte validate token  -->
      {{ csrf_field() }}
      <!-- Alter method put -->
      <input type="hidden" name="_method" value="put">
      @include('admin.cursos._form')
      <button class="btn deep-orange">Atualizar</button>
    </form>    
  </div>
</div>


@endsection