@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Sweetalert2', true)

@section('content_header')
<h1>Bienvenido al Panel Principal</h1>
@stop

@section('content')

<p>Que desa hacer hoy?</p>
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">


                <div class="small-box bg-info">
                    <div class="inner">
                        <h3></h3>
                        <p>Proveedores</p>
                    </div>
                    <div class="icon"><br>
                        <i class="fas fa fa-user-circle"></i>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Inventario</p>
                    </div>
                    <div class="icon"><br>
                        <i class="fas fa fa-calendar"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><br></h3>
                        <p>Ajustes</p>
                    </div>
                    <div class="icon"><br>
                        <i class="fas fa fa-cog"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><br></h3>
                        <p>Salir</p>
                    </div>
                    <div class="icon"><br>
                        <i class="fas fa fa-window-close"></i>
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

@stop
