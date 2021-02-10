@extends('layout')
@section('titulo', 'Editar - Aprendiz')

@section('contenido')
<div class="card" style="opacity:0.7">
<div class="card-body">
  <h5 class="card-title">Editar aprendiz</h5>
  <p class="card-text">
    <form action="{{route('aprendices.actualizar', $aprendiz->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres:</label>
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{$aprendiz->nombres}}">
        @if($errors->has('nombres'))
            <label for="" style="color:red;">{{ $errors->first('nombres') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$aprendiz->apellidos}}">
        @if($errors->has('apellidos'))
            <label for="" style="color:red;">{{ $errors->first('apellidos') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="documento" class="form-label">Documento:</label>
        <input type="text" class="form-control" id="documento" name="documento" value="{{$aprendiz->documento}}">
        @if($errors->has('documento'))
            <label for="" style="color:red;">{{ $errors->first('documento') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="tipo_documento" class="form-label">Tipo de documento:</label>
        <select name="tipo_documento" id="tipo_documento" class="form-control">
            <option value="">Seleccionar...</option>
            <option value="1">Cedula de ciudadania</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3">Pasaporte</option>
        </select>
        @if($errors->has('tipo_documento'))
            <label for="" style="color:red;">{{ $errors->first('tipo_documento') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="text" class="form-control" id="correo" name="correo" value="{{$aprendiz->correo}}">
        @if($errors->has('correo'))
            <label for="" style="color:red;">{{ $errors->first('correo') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento:</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$aprendiz->fecha_nacimiento}}">
        @if($errors->has('fecha_nacimiento'))
            <label for="" style="color:red;">{{ $errors->first('fecha_nacimiento') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="genero" class="form-label">Genero:</label>
        <select name="genero" id="genero" class="form-control">
            <option value="">Seleccionar...</option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">Otro</option>
        </select>
        @if($errors->has('genero'))
            <label for="" style="color:red;">{{ $errors->first('genero') }}</label>
            <br>
        @endif
      <div class="mn-3">
          <label for="ficha_id" class="form-label">Ficha:</label>
          <select name="ficha_id" id="ficha_id" class="form-control">
              <option value="">Seleccionar...</option>
              @foreach($fichas as $ficha)
                  <option value="{{$ficha->id}}">{{$ficha->nombre}}</option>
              @endforeach
          </select>
          @if($errors->has('ficha_id'))
              <label for="" style="color:red;">{{ $errors->first('ficha_id') }}</label>
              <br>
          @endif
      </div>
      <div class="mb-3">
        <button class="btn btn-warning" type="submit" style="margin-top: 40px; border-radius: 5px 15px">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
          </svg>
          <span style="margin-left: 20px">Actualizar</span>
        </button>
        <a class="btn btn-outline-dark position-absolute bottom-0 end-0" href="{{route('aprendices.index')}}" style="margin-bottom: 25px; margin-right: 15px; border-radius: 5px 15px">Cancelar</a>
      </div>
    </form>
  </p>
</div>
</div>
<script type="text/javascript">
  document.getElementById("tipo_documento").selectedIndex = "{{$aprendiz->tipo_documento}}";
  document.getElementById("genero").selectedIndex = "{{$aprendiz->genero}}";
  document.getElementById("ficha_id").selectedIndex = "{{$aprendiz->ficha_id}}";
</script>
@endsection
