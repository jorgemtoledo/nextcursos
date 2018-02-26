@extends('layout.home')

@section('title', 'Next Cursos')

@section('container')

<h3>Essa e a view index</h3>

@foreach($contatos as $contato)
  <p>{{ $contato->nome }}</p>
  <p>{{ $contato->tel }}</p>
@endforeach

@endsection