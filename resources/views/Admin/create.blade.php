@extends('Layout.app')

@section('title', 'create')

@section('content')
    

<div class="container">
  <div class="row">
	 <div class="col">
     <div class="col-md-12">
            <div class="well well-sm">
            <div class="card uper">
    <div class="card-header">
        Agregar Producto
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="POST" action="{{ route('store') }} " 
        enctype="multipart/form-data">
            {{ csrf_field() }}
             <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text" class="form-control" id="nombre" name="nombre">
              </div>
              <label for="nombre" class="form-label">Precio: </label>
              <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input type="text" class="form-control" id="precio" name="precio" aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">.00</span>
              </div>
             <div class="mb-3">
             <label for="categoria">Categoria: </label>
             <select class="form-select" name="categoria">
               <option selected>Seleccionar Categoria</option>
               <option value="1">Electrodomésticos</option>
               <option value="2">Ropa</option>
               <option value="3">Calzado</option>
               <option value="4">Computadoras</option>
             </select>
             </div>
             <div class="mb-3">
             <label for="descripcion" class="form-label">Descripcion: </label>
             <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
             </div>
             <div class="mb-3">
               <label for="imagen" class="form-label">Imagen: </label>
               <input class="form-control" id="imagen" name="imagen" type="file" accept="image/png, image/jpeg">
             </div>

            <button type="submit" class="btn btn-dark">Guardar</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection