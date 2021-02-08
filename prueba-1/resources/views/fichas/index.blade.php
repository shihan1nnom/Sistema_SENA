
@extends('layout')
@section('titulo', 'Fichas')

@section('contenido')
  <div class="card" style="opacity:0.7">
  <div class="card-body">
    <h5 class="card-title">Fichas</h5>
    <p class="card-text">
      <a class="btn btn-outline-danger btn-lg" href="{{route('fichas.crear')}}" style="margin-top: 40px; border-radius: 10px 30px">Crear nuevo registro</a>
      <form action="{{route('fichas.index')}}" method="GET">
          <div class="form-group row">
              <label for="buscar" class="col-sm-1 col-form-label text-white" style="margin-left: 30px">Buscar:</label>
              <div class="col-sm-7" style="margin-bottom: 20px">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Jornada y/o caracter" value="{{$buscar}}">
              </div>
              <button class="btn btn-primary" type="submit" style="width: 120px; height: 38px; border-radius: 8px 24px">Buscar</button>
          </div>
      </form>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">JORNADA</th>
            <th scope="col">AULA</th>
            <th scope="col">PROGRAMA [ID]</th>
            <th scope="col">OPCIONES</th>
          </tr>
        </thead>
        <tbody>
           @foreach($fichas as $ficha)
            <tr>
              <td>{{$ficha->nombre}}</td>
              <td>{{$ficha->jornada}}</td>
              <td>{{$ficha->aula}}</td>
              <td>{{$ficha->programa_id}}</td>
              <td>
                <form action="{{route('fichas.desactivar', $ficha->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-link" href="{{route('fichas.editar', $ficha->id)}}" style="margin-top: -8px" data-toggle="tooltip" data-placement="left" title="Editar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                      <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                    </svg>
                  </a>
                  <button type="submit" name="submit" class="btn btn-link" style="margin-top: -10px" data-toggle="tooltip" data-placement="left" title="Desactivar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-node-minus" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025zM1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM8 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 8 8z"/>
                    </svg>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
          <tr>
            <th>FICHAS DESACTIVADAS</th>
          </tr>
          @foreach($fichas_desactive as $ficha)
           <tr>
             <td>{{$ficha->nombre}}</td>
             <td>{{$ficha->jornada}}</td>
             <td>{{$ficha->aula}}</td>
             <td>{{$ficha->programa_id}}</td>
             <td>
               
             </td>
           </tr>
         @endforeach
        </tbody>
      </table>
    </p>
  </div>
  </div>
@endsection
