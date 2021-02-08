@extends('layout')
@section('titulo', 'Editar - Ficha')

@section('contenido')
<div class="card" style="opacity:0.7">
<div class="card-body">
  <h5 class="card-title">Editar ficha</h5>
  <p class="card-text">
    <form action="{{route('fichas.actualizar', $ficha->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$ficha->nombre}}">
      </div>
      <div class="mb-3">
        <label for="jornada" class="form-label">Jornada:</label>
        <select name="jornada" id="jornada" class="form-control">
            <option value="">Seleccionar...</option>
            <option value="1">Diurno</option>
            <option value="2">Nocturno</option>
            <option value="3">Fines de semana</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="siglas" class="form-label">Aula:</label>
        <input type="text" class="form-control" id="aula" name="aula" value="{{$ficha->aula}}">
      </div>
      <div class="mn-3">
          <label for="programa_id" class="form-label">Programa de formacion:</label>
          <select name="programa_id" id="programa_id" class="form-control">
              <option value="">Seleccionar...</option>
              @foreach($programas as $programa)
                  <option value="{{$programa->id}}">{{$programa->nombre}}</option>
              @endforeach
          </select>
      </div>
      <div class="mb-3">
        <button class="btn btn-warning" type="submit" style="margin-top: 40px; border-radius: 5px 15px">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
          </svg>
          <span style="margin-left: 20px">Actualizar</span>
        </button>
        <a class="btn btn-outline-dark position-absolute bottom-0 end-0" href="{{route('fichas.index')}}" style="margin-bottom: 25px; margin-right: 15px; border-radius: 5px 15px">Cancelar</a>
      </div>
    </form>
  </p>
</div>
</div>
<script type="text/javascript">
  document.getElementById("jornada").selectedIndex = "{{$ficha->jornada}}";
  document.getElementById("programa_id").selectedIndex = "{{$ficha->programa_id}}";
</script>
@endsection
