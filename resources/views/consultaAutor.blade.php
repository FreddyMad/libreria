@extends('plantilla')

    @section('titulo','Registro Autores')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Consulta de Autores</h1>
            </div>
            
            <div class="container text-center">
                <div class="col"> 
                  <img src="{!! asset('img/icon.svg') !!}" alt="icono" style="width: 100px">
                </div>

                @if (session()->has('confirm'))
                <?php $autor = session()->get('autor')?>
                  <div class="alert alert-success" role="alert">
                    El autor {{$autor}} ha sido agregado con exito
                  </div>
                @endif

                @if (session()->has('edit'))
                <?php $autor = session()->get('autor')?>
                  <div class="alert alert-warning" role="alert">
                    El autor {{$autor}} ha sido actualizado con exito
                  </div>
                @endif

                @if (session()->has('delete'))
                <?php $autor = session()->get('autor')?>
                  <div class="alert alert-danger" role="alert">
                    El autor {{$autor}} ha sido eliminado con exito
                  </div>
                @endif

                  <div class="table__contenedor">
                    <table class="table__consultar">
                        <thead>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            <th>No. Libros Publicados</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </thead>
                        <tbody>
                            @foreach ($consulAut as $autores)
                                <tr>
                                    <td>{{$autores->nombre}}</td>
                                    <td>{{$autores->fecha}}</td>
                                    <td>{{$autores->publi}}</td>
                                    <td><a href="{{route('autor.edit', $autores->idAutor)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                                    <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarAutor{{ $autores->idAutor }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                                    @include('eliminarAutor')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>

        </main>

    @endsection