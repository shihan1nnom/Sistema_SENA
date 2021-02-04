@extends('layout')
@section('titulo', 'Inicio')

@section('contenido')
  <div class="row">
      <div class="card" style="opacity: 0.6; padding: 30px; border-radius: 30px 100px">
        <div class="card-body">
          <!--
          <h5 class="card-title">El Servicio Nacional de Aprendizaje - SENA</h5>
          <p class="card-text">Este es un sistema de informacion en donde se puede saber con exactitud la cantidad de fichas actualmente activas, de que programa de formacion son las fichas, la jornada, los aprendices inscritos y el instructor tecnico a cargo.</p>
          -->
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 30px 100px">
              <div class="carousel-item active">
                <a href="#"><img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Programas de formacion</h5>
                  <p>El SENA brinda programas de formaciion en las diferentes areas requeridas por la industria.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fichas</h5>
                  <p>Para cada programa de formacion existe determinado numero de fichas.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Instructores</h5>
                  <p>Cada ficha esta dirigida por un instructor el cual esta encargado de instruir a los aprendices.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('contenido/imagenes/fondo_68.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Aprendices</h5>
                  <p>Los aprendices pertecen a una ficha determinada la cual a su vez esta ligada con un programa de formacion.</p>
                </div>
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
  </div>
@endsection
