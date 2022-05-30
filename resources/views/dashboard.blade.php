@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Sweetalert2', true)

@section('content_header')
<h1>Bienvenido al Panel Principal</h1>
@stop

@section('content')

<p></p>
<section class="content">
    <div class="container-fluid">

        <div class="row" >
            <div class="col-lg-3 col-6" onclick="Redirectp()">
                <!-- Funcion para Redirijir-->
            <script>function Redirectp() { location.href = "/proveedores"; }</script>

                <div class="small-box border bg-gradient-primary">
                    <div class="inner">
                        <h3 class="text-dark">Proveedores</h3>
                        <p></p>
                    </div>
                    
                    <div class="icon">
                        <i class="fa fa-user-circle position-static"></i>
                    </div>
                </div>
               
            </div>

            <div class="col-lg-3 col-6" onclick="RedirectI()" >
            <script>function RedirectI() { location.href = "/inventario"; }</script>

                <div class="small-box border bg-success">
                    <div class="inner">
                        <h3 class="text-dark">Inventario</h3>
                        <p></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa fa-calendar position-static"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 " onclick="RedirectS()">
            <script>function RedirectS() { location.href = "/salir"; }</script>

                <div class="small-box border bg-gradient-danger">
                    <div class="inner">
                        <h3 class="text-dark">Salir</h3>
                        <p></p>
                    </div>
                    <div class="icon">
                       <i class=" fa fa-window-close position-static "></i>
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
