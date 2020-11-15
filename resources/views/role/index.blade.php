@extends('layout.master')
@section('title', 'ROLES')

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

     @include('coustom.message')
 
<table class="table table-hover">
   
  <thead>
    <td colspan="7"><center><label>LISTA DE ROLES </div></label></center></td>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">acceso total</th>
      <CENTER><th colspan="3">ACCION</th></CENTER>
    
  </thead>
  <tbody class="body1">
    <tr>
       @foreach ($roles as $role)
       </tr>
        <th scope="row">{{ $role->id }}</th>
        <td>{{ $role->name }}</td>
        <td>{{ $role->description }}</td>
        <td>{{ $role['full-access'] }}</td> 

        
        <td>
          @can('haveaccess','role.show')
          <a class="btn btn-success" href="{{ route('role.show',$role->id)}}">Ver</a>
          @endcan
        </td>

        <td>
          @can('haveaccess','role.edit')
          <a class="btn btn-warning" href="{{ route('role.edit',$role->id)}}">Editar</a>
          @endcan
        </td>
        
        <td>
          @can('haveaccess','role.destroy')
          <form action="{{ route('role.destroy',$role->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Eliminar</button>
          </form>
        @endcan
         </tr>
      @endforeach
   
   
  </tbody>
</table>

    {{ $roles->links() }}
<div class="boton">
  @can('haveaccess','role.create')
<center><a href="{{ route('role.create') }}" role="button" class="btn btn-large btn-info" data-toggle="modal">Crear</a></center>
@endcan
</div>

</div>
  </div>

    
@endsection
