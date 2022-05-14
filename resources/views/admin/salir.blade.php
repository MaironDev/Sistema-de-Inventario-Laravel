
@extends('adminlte::page')

@section('title', 'Salir')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Salir</h1>
@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="resources\css\project.css">
@stop

@section('js')
<script> Swal.fire({
  title: 'Cerrar Sesion',
  text: "Estas seguro de cerrar sesion?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Sesion Cerrada!',
      'Has salido satisfactoriamente.',
      'success'
    )
  }
}) </script>
@stop
