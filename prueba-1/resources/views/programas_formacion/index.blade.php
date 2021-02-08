
@extends('layout')
@section('titulo', 'Programas Formacion')

@section('contenido')
  <div class="card" style="opacity:0.7">
  <div class="card-body">
    <h5 class="card-title">Programas de formacion</h5>
    <p class="card-text">
      <a class="btn btn-outline-danger btn-lg" href="{{route('programas_formacion.crear')}}" style="margin-top: 40px; border-radius: 10px 30px">Crear nuevo registro</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE DEL PROGRAMA</th>
            <th scope="col">SIGLAS</th>
            <th scope="col">OPCIONES</th>
          </tr>
        </thead>
        <tbody>
           @foreach($programas as $programa)
            <tr>
              <td>{{$programa->codigo}}</td>
              <td>{{$programa->nombre}}</td>
              <td>{{$programa->siglas}}</td>
              <td>
                <a class="btn btn-link" href="{{route('programas_formacion.editar', $programa->id)}}" style="margin-top: -8px" data-toggle="tooltip" data-placement="right" title="Editar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                  </svg>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $programas->links() }}
    </p>
  </div>
  </div>
@endsection
