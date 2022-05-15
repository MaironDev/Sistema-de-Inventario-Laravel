
@extends('adminlte::page')

@section('title', 'Salir')

@section('plugins.Sweetalert2', true)

@section('content_header')
   
@stop

@section('content')

<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Salir
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cerrar Sesión !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Estas seguro de cerrar la sesión ?  &#128532;
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Si, salir !') }}
                                     

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="resources\css\project.css">
@stop

@section('js')
<script>
$( document ).ready(function() {
    $('#exampleModalCenter').modal('toggle')
});

</script>

@stop
