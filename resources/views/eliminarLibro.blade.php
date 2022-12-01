
<!-- Modal -->
<div class="modal fade" id="eliminarAutor{{ $libros->idLibro }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarAutor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    
    <div class="modal-content">
      
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Seguro Que Deseas Eliminar Este Registro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <p class="card-text"> Estaras eliminando al autor: <br><b> {{ $libros->titulo }} </b></p>
            <form action="{{route('autor.destroy', $libros->idLibro)}}" method="POST">
                @csrf
                @method('delete')
      </div>
      
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
       </div>
    </div>
  
   </div>
</div>
