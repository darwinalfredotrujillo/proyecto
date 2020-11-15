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
 <CENTER><h2>EDITAR ROL</h2></CENTER>

 <div class="card-body">
  @include('coustom.message')
   

 </div>
<form action="{{ route('role.update', $role->id) }}" method="POST">
  @csrf
  @method('PUT')

    <div class="container">

      <h3>Datos Requeridos</h3>
      <div class="form-group">
      <label for="name">Nombre</label>
       <input type="text" class="form-control" id="name" placeholder="nombre del rol"
       name="name" 
       value="{{ old('name', $role->name) }}"
       >
  </div>

   <div class="form-group">
      <label for="slug">Slug</label>
       <input type="text" class="form-control" id="slug" placeholder="slug"
       name="slug"
       value="{{ old('slug',$role->slug) }}"
       >
  </div>
  
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" placeholder="Descripcion" name="description" id="description" rows="3">{{old('description', $role->description)}}</textarea>
  </div>
   <hr>

   <h3>Acceso Total</h3>

   <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
    @if( $role['full-access']=='yes')
    checked 
    @elseif(old('full-access')=='yes')
    checked 
    @endif
    >
    <label class="custom-control-label" for="fullaccessyes">Yes</label>
  </div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
  @if( $role['full-access']=='no')
    checked 
    @elseif(old('full-access')=='no')
    checked 
    @endif

  
  >
  <label class="custom-control-label" for="fullaccessno">No</label>
</div>
   <hr>
<h3>Lista de Permisos</h3>

@foreach($permissions as $permission)
<div class="custom-control custom-checkbox">
  <input type="checkbox" 
  class="custom-control-input" 
  id="permission_{{$permission->id}}"
  value="{{$permission->id}}" 
  name="permission[]"

  @if(is_array(old('permission')) && in_array("$permission->id",old('permission') )    )
    checked 

  @elseif(is_array($permission_role) && in_array("$permission->id", $permission_role)    )
    checked 
  @endif

  >
  <label class="custom-control-label" for="permission_{{$permission->id}}">
    {{ $permission->id }}
    -
    {{ $permission->name }}
    <em>(  {{ $permission->description }} )</em>

  </label>
</div>
@endforeach
<hr>
    
    <input class='btn btn-success' type="submit" value="Guardar" >

    </div>

</form>

    

</div>
</div>

    
@endsection
