
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
              <td>Editar</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </p>
  </div>
  </div>
@endsection
