@extends('layout.master')
@section('title', 'Crear')

@section('menu')
<ul class="nav menu">
    <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
    <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>PRPUESTAS</a></li>
    <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>PREGUNTAS</a></li>
    <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>ESTADO DE CUENTA</a></li>
    <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> LOGOUT</a></li>
</ul>
@endsection

@section('content')

<div class="container-fluid">
  <div class="panel shadow">
  <div class="inside">
    <div class="card-body">
  @include('coustom.message')
   

 </div>
    <form action="{{ url('/categoria') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <center><h3>Nueva Categoria</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Imagen</label>
    <input type="file" name="imagen" class="form-control" id="imagen">
  </div>

  
  <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
  
</form>
<a href="{{ url('/categoria') }}"><button class="btn btn-danger">Regresar</button></a>
</div>
  

@endsection
