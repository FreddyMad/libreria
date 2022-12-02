@extends('plantilla')

    @section('titulo','Registro de Libros')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Editar Libro Registrado</h1>
            </div>
            
            <div class="container text-center mt-2">
                <div class="col"> 
                  <img src="{!! asset('img/icon.svg') !!}" alt="icono" style="width: 100px">
                </div>

                <div class="card card-boby mt-3 mb-3" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%)">
                  <form class="row g-3 mt-1" action = "{{route('libro.update', $conLib->idLibro)}}" method="POST">
                    @csrf
                    {!!method_field('PUT')!!}
                    <div class="col-8">
                      <label class="form-label">Titulo</label>
                      <input type="text" class="form-control" value="{{$conLib->titulo}}" name="txtTitulo" placeholder="Ingresa el titulo del libro">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtTitulo')}}</p>
                    </div>
                    <div class="col-4">
                      <label class="form-label">ISBN</label>
                      <input type="text" class="form-control" value="{{$conLib->isbn}}" name="txtIsbn" placeholder="Ingresa el ISBN del libro">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtIsbn')}}</p>
                    </div>
                    <div class="col-8">
                      <label class="form-label">Autor</label>
                      <select class="form-select" aria-label="Default select example" name="txtAutor">
                        <option selected disabled = "disabled" value="">Selecciona al Autor</option>
                        @foreach ($cAutores as $autores)
                          <option value="{{$autores->idAutor}}"
                            @if ($autores->idAutor == $conLib->autor_id) 
                            selected  
                            @endif>
                            {{$autores->nombre}}</option>
                        @endforeach
                      </select>
                      <p class="text-warning fst-Italic">{{ $errors->first('txtAutor')}}</p>
                    </div>
                    <div class="col-4">
                      <label class="form-label">Páginas</label>
                      <input type="text" class="form-control" value="{{$conLib->paginas}}" name="txtPaginas" placeholder="Ingresa el número de páginas del libro">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtPaginas')}}</p>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Editorial</label>
                      <input type="text" class="form-control" value="{{$conLib->editorial}}" name="txtEditorial" placeholder="Ingresa la editorial del libro">
                      <p class="text-warning fst-Italic">{{ $errors->first('txtEditorial')}}</p>
                    </div>
                    <div class="col-6">
                       <label class="form-label">Email de Editorial</label>
                       <input type="text" class="form-control" value="{{$conLib->email}}" name="txtEmail" placeholder="Ingresa el email de la editorial del libro">
                       <p class="text-warning fst-Italic">{{ $errors->first('txtEmail')}}</p>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="boton">Editar</button>
                    </div>
                  </form>
                </div>
              </div>

        </main>

    @endsection