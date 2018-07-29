<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>LoggedIn User</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="active">
          <a href="{{url('/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="{{url('/homeworks')}}">
            <i class="fa fa-book"></i> <span>Homework Management</span>
          </a>
        </li>

        <!-- <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-home"></i> <span>Homeworks</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{url('/homeworks')}}">
              <i class="fa fa-circle-o"></i> Homeworks
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <i class="fa fa-circle-o"></i> Add Homework
              </a>
            </li>
          </ul>
        </li> -->
        
        <li>
          <a href="{{url('/users')}}">
            <i class="fa fa-users"></i> <span>User Management</span>
          </a>
        </li>

        <!-- <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-table"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
        
        <!-- MULTILEVEL EXAMPLE START-->
        <!-- <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
        <!-- MULTILEVEL EXAMPLE END-->

        <!-- ADMIN LTE LINK -->
        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Home Work Management</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>