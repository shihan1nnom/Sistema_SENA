@extends('layout')
@section('titulo', 'Crear - Programas Formacion')

@section('contenido')
<div class="card" style="opacity:0.7">
<div class="card-body">
  <h5 class="card-title">Crear programas de formacion</h5>
  <p class="card-text">
    <form action="{{route('programas_formacion.guardar')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="codigo" class="form-label">Codigo:</label>
        <input type="text" class="form-control" id="codigo" name="codigo">
        @if($errors->has('codigo'))
            <label for="" style="color:red;">{{ $errors->first('codigo') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del programa:</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
        @if($errors->has('nombre'))
            <label for="" style="color:red;">{{ $errors->first('nombre') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="siglas" class="form-label">Siglas:</label>
        <input type="text" class="form-control text-uppercase" id="siglas" name="siglas">
        @if($errors->has('siglas'))
            <label for="" style="color:red;">{{ $errors->first('siglas') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <button class="btn btn-warning" type="submit" style="margin-top: 40px; border-radius: 5px 15px">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
          </svg>
          <span style="margin-left: 20px">Guardar</span>
        </button>
        <a class="btn btn-outline-dark position-absolute bottom-0 end-0" href="{{route('programas_formacion.index')}}" style="margin-bottom: 25px; margin-right: 15px; border-radius: 5px 15px">Cancelar</a>
      </div>

    </form>
  </p>
</div>
</div>
@endsection
