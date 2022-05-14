@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')

@stop

@section('content')
<br>


<!-- 
<button type="button" class="btn btn-outline-primary">Agregar proveedor</button>
<br>
<br>
<h1>Lista de Proveedores</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Fecha de entrega</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Juan Pérez</td>
            <td>P092530</td>
            <td>Sincelejo</td>
            <td>25 de cada mes</td>
            <td class="project-state"><span class="badge badge-success">Activo</span></td>
            <td>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Felipe Sierra</td>
            <td>P065930</td>
            <td>Sincelejo</td>
            <td>30 de cada mes</td>
            <td class="project-state"><span class="badge badge-danger">Inactivo</span></td>
            <td>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Pedro Martinez</td>
            <td>P078943</td>
            <td>Sincelejo</td>
            <td>15 de cada mes</td>
            <td class="project-state"><span class="badge badge-success">Activo</span></td>
            <td>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>

    </tbody>
</table> -->

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
