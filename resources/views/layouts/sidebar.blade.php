<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{route('dashboard')}}" class="sidebar-brand">
        educa<span>libre</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        @can('Crear Articulo')
        <li class="nav-item nav-category">ESCRITOR</li>
        <li class="nav-item">
          <a href="{{route('articulos.index')}}" class="nav-link">
            <i class="link-icon" data-feather="clipboard"></i>
            <span class="link-title">Articulos</span>
          </a>
        </li>         
        @endcan
        @can('Ver Publicaciones')
        <li class="nav-item nav-category">EDITORIAL</li>
        <li class="nav-item">
          <a href="{{route('admin.articulos.index')}}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Publicaciones </span>
          </a>
        </li>     
        @endcan
        @can('Ver Portada')
        <li class="nav-item">
          <a href="{{route('admin.articulos.portada')}}" class="nav-link">
            <i class="link-icon" data-feather="file-minus"></i>
            <span class="link-title">Portada </span>
          </a>
        </li>   
        @endcan
        @can('Ver Usuarios')
        <li class="nav-item nav-category">ADMINISTRADOR</li>
        <li class="nav-item">
          <a href="{{route('admin.users.index')}}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Usuarios </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.permissions.index')}}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">permisos </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.roles.index')}}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">Roles </span>
          </a>
        </li>    
        @endcan
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
            <i class="link-icon" data-feather="cloud-off"></i>
            <span class="link-title">Error</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="errorPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/error/404.html" class="nav-link">404</a>
              </li>
              <li class="nav-item">
                <a href="pages/error/500.html" class="nav-link">500</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>