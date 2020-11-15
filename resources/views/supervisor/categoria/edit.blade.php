@extends('layout.master')
@section('title', 'Editar')
@section('content')

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

<div class="container-fluid">
  <div class="panel shadow">
    
  <div class="inside">
   <form action="{{ url('/categoria/'.$categoria->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      @method('PUT')
    <center><h3>EDITAR </h3></center>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $categoria->nombre }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">descripcion</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{ $categoria->descripcion }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Imagen</label>
    <br />
    <img src="{{ asset('storage').'/'.$categoria->imagen}}" alt="" width="100">
    <br />
    <input type="file" name="imagen" class="form-control" id="imagen">
    <br />
    
  </div>
 <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
</form>
      <a href="{{ url('/categoria') }}"><button class="btn btn-danger">Regresar</button></a>    
       
</div>
   
@endsection
