@extends('layout.master')
@section('title', 'ADMINISTRADOR')

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
<div class="panel shadow">
  <div class="inside">
    <table class="table">
  <thead> 
 <td colspan="7"><center><label>AGREGAR CATEGORIAS</div></label></center></td>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">imagen</th>
      <th colspan="3"><CENTER>ACCION</CENTE></th>
    </tr>

  </thead>
  <tbody class="body1">
    @forelse($categorias as $categoria)
    <tr>
      <th scope="row">{{ $categoria->id }}</th>
    <td scope="row">{{ $categoria->nombre}}</td>
    <td >{{ $categoria->descripcion}}</td>
    <td >
      <img src="{{ asset('storage').'/'.$categoria->imagen}}" alt="" width="300">
    </td>
     <td>
      <a href="{{ url('/categoria/'.$categoria->id.'/edit') }}" role="button" class="btn btn-success" data-toggle="modal">Editar</a>
    </td>

        <td><a href="{{ url('/categoria/'.$categoria->id.'/show') }}" role="button" class="btn btn-warning" data-toggle="modal">Mostrar</a>

        </td>
         <td>
           <form method="post" action="{{ url('/categoria/'.$categoria->id) }}">
            {{csrf_field() }}
             {{ method_field('DELETE') }}
             <button type="submit" class="btn btn-large btn-danger" onclick="return confirm('desea Eliminar este elemento?'); ">Eliminar</button>
           </form>
         </td>
    </tr>

     @empty
   <tr>
     <td colspan="5">Sin Categoria  Registrado</td>
   </tr>
      @endforelse
        
  </tbody>
  

</table>
<div class="boton">
<center><a href="{{ url('/categoria/create') }}" role="button" class="btn btn-large btn-info" data-toggle="modal">crear</a></center>
</div>
</div>
  </div>
    
@endsection
