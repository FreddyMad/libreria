@extends('plantilla')

    @section('titulo','Registro Autores')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Nuevo Registro de Autor</h1>
            </div>
            
            <div class="container text-center mt-2">
                <div class="col"> 
                  <img src="{!! asset('img/icon.svg') !!}" alt="icono" style="width: 100px">
                </div>

                @if (session()->has('confirm'))
                <?php $autor = session()->get('autor')?>
                  <div class="alert alert-success" role="alert">
                    El autor {{$autor}} ha sido agregado con exito
                  </div>
                @endif

                <div class="card card-boby mt-3 mb-3" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%)">
                  <form class="row g-3 mt-1" action = "{{route('saveAutor')}}" method="POST">
                    @csrf
                    <div class="col-12">
                      <label class="form-label">Nombre del Autor</label>
                      <input type="text" class="form-control" value="{{old('txtAutor')}}" name="txtAutor" placeholder="Ingresa el titulo del Autor">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtAutor')}}</p>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" value="{{old('txtFecha')}}" name="txtFecha" placeholder="Ingresa la fecha de nacimiento del autor">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtFecha')}}</p>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Libros Publicados</label>
                      <input type="text" class="form-control" value="{{old('txtCant')}}" name="txtCant" placeholder="Ingresa la cantidad de libros publicadospor el autor">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtCant')}}</p>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="boton">Añadir</button>
                    </div>
                  </form>
                </div>
              </div>

        </main>

    @endsection