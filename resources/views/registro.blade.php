@extends('plantilla')

    @section('titulo','Registro')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Nuevo Registro</h1>
            </div>
            
            <div class="container text-center mt-2">
                <div class="col">  
                  <img src="{!! asset('img/icon.svg') !!}" alt="icono" style="width: 140px">
                </div>
                <div class="card card-boby mt-3 mb-3" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%)">
                  <form class="row g-3 mt-1" action = "#" method="POST">
                    @csrf
                    <div class="col-8">
                      <label class="form-label">Titulo</label>
                      <input type="text" class="form-control" value="{{old('txtTitulo')}}" name="txtTitulo" placeholder="Ingresa el titulo del libro">
                      
                    </div>
                    <div class="col-4">
                      <label class="form-label">ISBN</label>
                      <input type="text" class="form-control" value="{{old('txtIsbn')}}" name="txtIsbn" placeholder="Ingresa el ISBN del libro">
                      
                    </div>
                    <div class="col-8">
                      <label class="form-label">Autor</label>
                      <input type="text" class="form-control" value="{{old('txtAutor')}}" name="txtAutor" placeholder="Ingresa el autor del libro">
                      
                    </div>
                    <div class="col-4">
                      <label class="form-label">Páginas</label>
                      <input type="number" class="form-control" value="{{old('txtPaginas')}}" name="txtPaginas" placeholder="Ingresa el número de páginas del libro">
                      
                    </div>
                    <div class="col-6">
                      <label class="form-label">Editorial</label>
                      <input type="text" class="form-control" value="{{old('txtEditorial')}}" name="txtEditorial" placeholder="Ingresa la editorial del libro">
                      
                    </div>
                    <div class="col-6">
                       <label class="form-label">Email de Editorial</label>
                       <input type="email" class="form-control" value="{{old('txtEmail')}}" name="txtEmail" placeholder="Ingresa el email de la editorial del libro">
                        
                    </div>
                    <div class="col-12">
                      <button type="submit" class="boton">Añadir</button>
                    </div>
                  </form>
                </div>
              </div>

        </main>

    @endsection