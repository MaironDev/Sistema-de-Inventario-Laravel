@extends('adminlte::page')

@section('title', 'Ajustes')

@section('content_header')
<h1>Ajustes</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h1><br></h1>
                        <p>Actualizar Datos</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h1><br></h1>
                        <p>Agregar Usuario</p>

                    </div>
                    <div class="icon">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>


@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')
<script>console.log('Hi!');</script>
@stop
