<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>

    <header class="hero">
        <nav class="hero__nav contenedor">
            <figure class="hero__fig">
                <img src="{!! asset('img/growth-book.svg') !!}" alt="icono" class="hero__icon">
            </figure>
            <div class="hero__options">
                <a href="{{route('main')}}" class="hero__navlink {{request()->routeIs('main')?'text-primary':'active'}}">Inicio</a>
                <a href="{{route('libro.index')}}" class="hero__navlink {{request()->routeIs('libro.index')?'text-primary':'active'}}">Consultar Libros</a>
                <a href="{{route('libro.create')}}" class="hero__navlink {{request()->routeIs('libro.create')?'text-primary':'active'}}">Agregar Libro</a>
                <a href="{{route('autor.index')}}" class="hero__navlink {{request()->routeIs('autor.index')?'text-primary':'active'}}">Consultar Autores</a>
                <a href="{{route('autor.create')}}" class="hero__navlink {{request()->routeIs('autor.create')?'text-primary':'active'}}">Agregar Autor</a>

            </div>
        </nav>
    </header>

    @yield('contenido')

    <footer class="foot contenedor">
        <img src="{!! asset('img/growth-book.svg') !!}" alt="icono" class="foot__icon">
        <div class="foot__cd">
            <div id="current_date">
                <h4 class="foot_date">
                    <script type="text/javascript">
                        //<![CDATA[
                        function makeArray() {
                        for (i = 0; i<makeArray.arguments.length; i++)
                        this[i + 1] = makeArray.arguments[i];}
                        var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
                        'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write("Hoy es " + day + " de " + months[month] + " del " + year);
                        //]]>
                        </script>
                    </h4>
                <h4 class="foot__copy">Copyright ??</h4>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    

</body>
</html>