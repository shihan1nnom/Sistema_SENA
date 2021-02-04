@extends('layout')
@section('titulo', 'Inicio')

@section('contenido')
  <div class="row">
      <div class="card" style="opacity: 0.6; padding: 30px">
        <div class="card-body">
          <h5 class="card-title">El Servicio Nacional de Aprendizaje - SENA</h5>
          <p class="card-text">Este es un sistema de informacion en donde se puede saber con exactitud la cantidad de fichas actualmente activas, de que programa de formacion son las fichas, la jornada, los aprendices inscritos y el instructor tecnico a cargo.</p>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#"><img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="..."></a>

    </div>
    <div class="carousel-item">
      <img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
      </div>
  </div>
@endsection
