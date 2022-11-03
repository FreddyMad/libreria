@extends('plantilla')

    @section('titulo','Principal')

    @section('contenido')

        <main>
            <div class="titulo">
                <h1 class="titulo--principal">Noticia Literaria</h1>
            </div>
            
            <section class="note contenedor">
                <div class="note__item">
                    <img src="{!! asset('img/sorjuana.jpeg') !!}" alt="Libro ganador del premio Sor Juana 2022" class="note__pic">
                    <h4 class="note_title">Premio Sor Juana 2022</h4>
                    <p class="note__paragraph">El Premio de Literatura Sor Juana Inés de la Cruz 2022 de la FIL Guadalajara es para la mexicana Daniela Tarazona por su novela Isla partida</p>
                </div>

                <div class="note__item">
                    <img src="{!! asset('img/nobel.jpg') !!}" alt="Premio Nobel" class="note__pic">
                    <h4 class="note_title">Nobel de Literatura 2022</h4>
                    <p class="note__paragraph">El premio Nobel de Literatura 2022 fue otorgado a la autora francesa Annie Ernaux. La escritora fue reconocida por la Academia Sueca por el coraje y la agudeza clínica con la que descubre las raíces y restricciones colectivas de la memorial personal</p>
                </div>

                <div class="note__item">
                    <img src="{!! asset('img/ladrona.jpg') !!}" alt="Libro La Ladrona de Libros" class="note__pic">
                    <h4 class="note_title">Libro de la Semana</h4>
                    <p class="note__paragraph">La ladrona de libros es uno de los bestsellers más vendidos en todo el mundo esto tras venderse más de 30 millones de ejemplares de la novela homónima en todo el mundo.</p>
                </div>
            </section>

        </main>

    @endsection