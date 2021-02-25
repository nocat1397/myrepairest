<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
  <a href="{{'/dashboard'}}" class="brand-link navbar-light text-center">
      <img src="{{asset('/images/logo1-top.png')}}" alt="AdminLTE Logo" class="brand-image float-none">
      
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar" style="position: absolute; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="row">
          <div class="col-md-6">
            <div class="image">
              <img src="{{asset('images/user-logo.png')}}"class="img-circle elevation-2" alt="User Image">
            </div>
          </div>
          <div class="col-md-6 mt-2">
            <h5>{{Auth::user()->name}}</h5>
          </div>
        </div>
      </div>
  
     <!-- Sidebar Menu -->
     <nav class="mt-2 mb-5">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <li class="nav-item has-treeview menu-open">
          <a class="nav-link">
            <i class="fas fa-calendar-alt"></i>
            <p>
             Block Date
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
       
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('add_blockdate')}}" class="nav-link">
                <i class="fas fa-plus icon2"></i>
                <p class="p-cont2">Add Block Date</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('show-blockdate')}}" class="nav-link">
                <i class="fas fa-eye icon2"></i>
                <p class="p-cont2">Show Block Date</p>
              </a>
            </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <li class="nav-item has-treeview menu-open">
          <a  href="{{url('showuser')}}" class="nav-link">
            <i class="fas fa-user"></i>
            <p>
             User Detail
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
       
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('showuser')}}" class="nav-link">
                <i class="fas fa-eye icon2"></i>
                <p class="p-cont2">Show User Detail</p>
              </a>
            </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>