@extends('layout.home')

@section('title', 'Next Cursos')

@section('container')
<div class="container">
  <h3 class="center">Adicionar Curso</h3>

  <div class="row">
    <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
      <!-- Crearte validate token  -->
      {{ csrf_field() }}
      @include('admin.cursos._form')
      <button class="btn deep-orange">Salvar</button>
    </form>    
  </div>
</div>


@endsection