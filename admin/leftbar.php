<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name;?></p>
          
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class="treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        
        
		
		<li class="treeview">
          <a href="account.php">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="account.php"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="add_account.php"><i class="fa fa-circle-o"></i>Add User</a></li>
           
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="room.php">
            <i class="fa fa-folder"></i> <span>Rooms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="room.php"><i class="fa fa-circle-o"></i> Rooms</a></li>
            <li><a href="add_room.php"><i class="fa fa-circle-o"></i>Add Room</a></li>
           
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="reserve.php">
            <i class="fa fa-folder"></i> <span>Reservations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reserve.php"><i class="fa fa-circle-o"></i>Pendings</a></li>
            <li><a href="checkin.php"><i class="fa fa-circle-o"></i>Checkin</a></li>
           <li><a href="checkout.php"><i class="fa fa-circle-o"></i>Checkout</a></li>
          </ul>
        </li>
		
		
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>