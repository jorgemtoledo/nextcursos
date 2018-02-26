@extends('layout.home')

@section('title', 'Next Cursos')

@section('container')
<div class="container">
  <h3 class="center">Login</h3>

  <div class="row">
    <form action="{{route('site.login.entrar')}}" method="post" enctype="multipart/form-data">
      <!-- Crearte validate token  -->
      {{ csrf_field() }}

      <div class="input-field">
        <input type="text" name="email">
        <label for="email">E-mail</label>
      </div>

      <div class="input-field">
        <input type="password" name="senha">
        <label for="senha">Senha</label>
      </div>

      <button class="btn deep-orange">Login</button>
    </form>    
  </div>
</div>


@endsection