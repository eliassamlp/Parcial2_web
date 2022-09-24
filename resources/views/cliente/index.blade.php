@extends('layouts.plantillabase');

@section('contenido')
<a hfer="clientes/create" class="btn btn-danger">CREAR</a>

<div class=col-sm-9>
    <input type="text" placeholder="Buscar.....">
</div>

<table class="table table-black table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">NIT</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr> 
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->Nombre }}</td>
            <td>{{ $cliente->Apellido }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->NIT }}</td>
            <td>{{ $cliente->Descripcion }}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection