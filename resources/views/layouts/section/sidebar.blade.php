 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ URL :: asset ('img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      
      <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>About</span>
        </a>
      </li>
      <hr>
        
     <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="{{url('shop')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Shop</span>
        </a>
      </li>
      <hr>
     <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="{{url('gallery')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Gallery</span>
        </a>
      </li>
      <hr>
    <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('pelanggan')}}">Pelanggan</a>
            <a class="collapse-item" href="{{url('pemasok')}}">Pemasok</a>
          </div>
        </div>
      </li>

      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>