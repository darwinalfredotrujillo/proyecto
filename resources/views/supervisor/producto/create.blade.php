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
    <form action="{{ url('/producto') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <center><h3>Añada un producto</h3></center>
   <div class="form-group">
    <label for="exampleFormControl">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">descripcion</label>
    <textarea type="text" name="descripcion" class="form-control" id="descripcion"> </textarea> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">categoria_id</label>
    <input type="number" name="categoria_id" class="form-control" id="categoria_id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">imagen</label>
    <input type="file" name="imagen" class="form-control" id="imagen">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">cantidad</label>
    <input type="number" name="cantidad" class="form-control" id="cantidad">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">precio</label>
    <input type="number" name="precio" class="form-control" id="precio">
  </div>
<div class="form-group">
    <label for="exampleFormControlInput1">estado</label>
    <input type="text" name="estado" class="form-control" id="estado">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">activo</label>
    <input type="text" name="activo" class="form-control" id="activo">
  </div>
  
  
  <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
  
</form>
<a href="{{ url('/producto') }}"><button class="btn btn-danger">Regresar</button></a>
</div>
  

@endsection
