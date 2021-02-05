@extends('layout')
@section('titulo', 'Inicio')

@section('contenido')
      <div class="card" style="opacity: 0.6; padding: 30px; border-radius: 30px 100px">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" style="border-radius: 30px 100px;">
            <div class="carousel-item active">
              <a href="{{url('programas_formacion')}}">
                <img src="{{asset('contenido/imagenes/programas.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption" style="color: black; background: white; border-radius: 20px">
                  <h5>Programas de formacion</h5>
                  <p>El SENA brinda programas de formaciion en las diferentes areas requeridas por la industria.</p>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="#">
                <img src="{{asset('contenido/imagenes/ficha.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption" style="color: black; background: white; border-radius: 20px">
                  <h5>Fichas</h5>
                  <p>Para cada programa de formacion existe determinado numero de fichas.</p>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="#">
                <img src="{{asset('contenido/imagenes/instructor.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption" style="color: black; background: white; border-radius: 20px">
                  <h5>Instructores</h5>
                  <p>Cada ficha esta dirigida por un instructor el cual esta encargado de instruir a los aprendices.</p>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="#">
                <img src="{{asset('contenido/imagenes/aprendiz.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption" style="color: black; background: white; border-radius: 20px">
                  <h5>Aprendices</h5>
                  <p>Los aprendices pertecen a una ficha determinada la cual a su vez esta ligada con un programa de formacion.</p>
                </div>
              </a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: orangered; border-radius: 5px 5px"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: orangered; border-radius: 5px 5px"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
@endsection
