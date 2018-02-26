<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
  <label for="titulo">Titulo</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  <label for="descricao">Descricao</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  <label for="valor">Valor</label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
  <img src="{{asset($registro->imagem)}}" width="150">
</div>
@endif

<div>
  <p>
    <input type="checkbox" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} id="test5" value="true">
    <label for="test5">Publicar?</label>
  </p><br><br>
</div>

