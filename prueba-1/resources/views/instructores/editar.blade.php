@extends('layout')
@section('titulo', 'Editar - Instructor')

@section('contenido')
<div class="card" style="opacity:0.7">
<div class="card-body">
  <h5 class="card-title">Editar instructor</h5>
  <p class="card-text">
    <form action="{{route('instructores.actualizar', $instructor->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres:</label>
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{$instructor->nombres}}">
        @if($errors->has('nombres'))
            <label for="" style="color:red;">{{ $errors->first('nombres') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$instructor->apellidos}}">
        @if($errors->has('apellidos'))
            <label for="" style="color:red;">{{ $errors->first('apellidos') }}</label>
            <br>
        @endif
      </div>
      <div class="mb-3">
        <label for="documento" class="form-label">Documento:</label>
        <input type="text" class="form-control" id="documento" name="documento" value="{{$instructor->documento}}">
        @if($errors->has('documento'))
            <label for="" style="color:red;">{{ $errors->first('documento') }}</label>
            <br>
        @endif
      </div>
      <!--
      <div class="mb-3">
        <label for="fotografia" class="form-label">Fotografia:</label>
        <input type="text" class="form-control" id="fotografia" name="fotografia">
      </div>
      -->
      <div class="mb-3">
        <label for="fotografia" class="form-label">Fotografia:</label>
        <input class="form-control" type="file" id="fotografia" name="fotografia" value="{{$instructor->fotografia}}">
        @if($errors->has('fotografia'))
            <label for="" style="color:red;">{{ $errors->first('fotografia') }}</label>
            <br>
        @endif
      </div>
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
        <a class="btn btn-outline-dark position-absolute bottom-0 end-0" href="{{route('instructores.index')}}" style="margin-bottom: 25px; margin-right: 15px; border-radius: 5px 15px">Cancelar</a>
      </div>
    </form>
  </p>
</div>
</div>
<script type="text/javascript">
  document.getElementById("ficha_id").selectedIndex = "{{$instructor->ficha_id}}";
</script>
@endsection
