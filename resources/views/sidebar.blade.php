  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ URL::to('raw') }}">
            <i class="fa fa-th"></i> <span>Raw Data</span>
          </a>
        </li>
        <li>
          <a href="{{ URL::to('chart') }}">
            <i class="fa fa-signal"></i> <span>Chart</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>