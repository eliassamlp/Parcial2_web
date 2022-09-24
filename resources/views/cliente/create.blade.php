@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTRO</h2>

<form class= table table-black table-striped mt-4 action="/clientes" method="POST">
    @csrf
        <div class="mb-5">
        <label for="" class="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="2">
        </div>
        
        <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="Apellido" name="Apellido" type="text" class="form-control" tabindex="3">
        </div>
        
        <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="Direccion" name="Direccion" type="text" class="form-control" tabindex="4">
        </div>
        
        <div class="mb-3">
        <label for="" class="form-label">NIT</label>
        <input id="NIT" name="NIT" type="text" class="form-control" tabindex="5">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="5">
        </div>

        <a href="/clientes" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>    

</form>
@endsection