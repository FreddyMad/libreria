@extends('plantilla')

    @section('titulo','Registro Autores')

    @section('contenido')

    @if (session()->has('confirm'))
        <?php $libro = session()->get('titulo')?>
            {!!"<script> Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se ha agregado un nuevo libro; {$libro}',
                showConfirmButton: false,
                timer: 3500
            })</script>"!!}
    @endif

    @if (session()->has('edit'))
        <?php $libro = session()->get('titulo')?>
            {!!"<script> Swal.fire({
                position: 'center',
                icon: 'info',
                title: 'Se ha editado el libro; {$libro}',
                showConfirmButton: false,
                timer: 3500
            })</script>"!!}
    @endif

    @if (session()->has('delete'))
        <?php $libro = session()->get('titulo')?>
            {!!"<script> Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Se ha eliminado el libro {$libro}',
                showConfirmButton: false,
                timer: 3500
            })</script>"!!}
    @endif

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Consulta de Libros</h1>
            </div>
            
            <div class="container text-center mt-2">
                <div class="col"> 
                  <img src="{!! asset('img/icon.svg') !!}" alt="icono" style="width: 100px">
                </div>

                  <div class="table__contenedor">
                    <table class="table__consultar">
                        <thead>
                            <th>Titulo</th>
                            <th>ISBN</th>
                            <th>Autor</th>
                            <th>Páginas</th>
                            <th>Editorial</th>
                            <th>Email de Editorial</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </thead>
                        <tbody>
                            @foreach ($consulLibro as $libros)
                                <tr>
                                    <td>{{$libros->titulo}}</td>
                                    <td>{{$libros->isbn}}</td>
                                    <td>{{$libros->nombreAutor->nombre}}</td>
                                    <td>{{$libros->paginas}}</td>
                                    <td>{{$libros->editorial}}</td>
                                    <td>{{$libros->email}}</td>
                                    <td><a href="{{route('libro.edit', $libros->idLibro)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                                    <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarLibro{{ $libros->idLibro }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                                    @include('eliminarLibro')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>

        </main>

    @endsection