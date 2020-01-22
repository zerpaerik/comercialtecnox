@if(\Auth::user()->role_id == 4)
<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Clientes</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('clientes.index')}}"><i class="fa fa-users"></i> Listado</a>
    </li>
       
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Llamadas</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('llamados.index')}}"><i class="fa fa-users"></i> Listado</a>
    </li>
       
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle">
    <i class="fa fa-inbox"></i>
    <span class="hidden-xs">Solicitudes de Servicio</span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="{{route('personal.index')}}"><i class="fa fa-users"></i> Listado</a>
    </li>
       
  </ul>
</li>





  <li class="dropdown">
    <a href="#" class="dropdown-toggle">
      <i class="fa fa-cog"></i>
      <span class="hidden-xs">Administración</span>
    </a>
    <ul class="dropdown-menu">
       <li>
        <a href="{{route('users.password')}}"><i class="fa fa-users"></i> Modificar Contraseña</a>
      </li> 
     
      <li>
        <a href="{{route('users.index')}}"><i class="fa fa-users"></i> Usuarios</a>
      </li>
      <li>
        <a href="{{route('role.index')}}"><i class="fa fa-user-md"></i> Roles</a>
      </li>     
      
    </ul>
  </li>
 
@else

@endif
  
  

