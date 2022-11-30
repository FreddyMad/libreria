@extends('plantilla')

    @section('titulo','Registro Autores')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Consulta de Libros</h1>
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
                            <tr>
                                <td>Alfredo Madrigal Tercero</td>
                                <td>121059641</td>
                                <td>25-08-2001</td>
                                <td>121059641</td>
                                <td>25-08-2001</td>
                                <td>121059641</td>
                                <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                                <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                            </tr>
                            <tr>
                                <td>Gabriel Galván Niño</td>
                                <td>154756632</td>
                                <td>23-09-2002</td>
                                <td>121059641</td>
                                <td>25-08-2001</td>
                                <td>121059641</td>
                                <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                                <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                            </tr>
                            <tr>
                                <td>Benjamín Enríquez Téllez</td>
                                <td>121040060</td>
                                <td>29-11-2000</td>
                                <td>121059641</td>
                                <td>25-08-2001</td>
                                <td>121059641</td>
                                <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                                <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>

        </main>

    @endsection