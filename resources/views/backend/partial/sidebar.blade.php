<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user-index') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Manage User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('service-index') }}">
          <i class="ti-pencil-alt menu-icon"></i>
          <span class="menu-title">Pendaftaran</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="ui-basic">
          <i class="ti-server menu-icon"></i>
          <span class="menu-title">Data Induk</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('toddler-index') }}">Data Balita</a></li>
          </ul>
        </div>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('pregnant-index') }}">Data Ibu Hamil</a></li>
          </ul>
        </div>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('postpartum-index') }}">Data Ibu Nifas</a></li>
          </ul>
        </div>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('kb-index') }}">Data KB</a></li>
          </ul>
        </div>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('fertile-index') }}">Data PUS</a></li>
          </ul>
        </div>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('posyandu-index') }}">Data Posyandu</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('chart-index') }}">
          <i class="ti-stats-up menu-icon"></i>
          <span class="menu-title">Statistik Bayi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('report-index') }}">
          <i class="ti-gallery menu-icon"></i>
          <span class="menu-title">Laporan Kegiatan</span>
        </a>
      </li>
    </ul>
  </nav>