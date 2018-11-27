 <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="{{route('dashboard.landing')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span title="setting profile">Profile</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard.managePost')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Manage Post</span></a>
        </li>
         <li class="nav-item ">
          <a class="nav-link" href="{{route('dashboard.writePost')}}">
           <i class="fas fa-feather-alt"></i>
            <span>Write New Post</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dashboard.image')}}">
           <i class="far fa-image"></i>
            <span>Upload Images</span></a>
        </li>
      </ul>