<?php

?>
     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <!--
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Testing</p>
              <!-- Status 
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div> -->
			
          <!-- search form (Optional) 
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!--<li class="header">Dashboard</li>
            <!-- Optionally, you can add icons to the links -->



            <li class="header">Out Of Warranty</li>
            <!-- Optionally, you can add icons to the links -->

            <li <?php echo ($curr_page == 10 ? 'class="active"' : '' ); ?> ><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="<?php echo ((($curr_page == 11) ||($curr_page == 3) || ($curr_page == 6)  ) ? 'active' : '' ); ?> treeview" >
                <a href="#">
                  <i class="glyphicon glyphicon-th-large"></i> <span>Transactions</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li <?php echo ($curr_page == 11 ? 'class="active"' : '' ); ?> ><a href="add-job-order.php" ><i class="glyphicon glyphicon-calendar"></i> <span>New Job Order</span></a></li>

                    <li <?php echo ($curr_page == 3 ? 'class="active"' : '' ); ?> ><a href="backjob.php" ><i class="glyphicon glyphicon-refresh"></i> <span>Back Job</span></a></li>

                    <li <?php echo ($curr_page == 6 ? 'class="active"' : '' ); ?> ><a href="Payments.php" ><i class="glyphicon glyphicon-usd"></i> <span>Payments</span></a></li>
                </ul>
            </li>

            <li <?php echo ($curr_page == 1 ? 'class="active"' : '' ); ?> ><a href="open.php"><i class="glyphicon glyphicon-folder-open"></i> <span>Open</span></a></li>
            <li <?php echo ($curr_page == 2 ? 'class="active"' : '' ); ?> ><a href="diagnose.php"><i class="glyphicon glyphicon-wrench"></i> <span>Check and Diagnose</span></a>
              <!--
            <li <?php echo ($curr_page == 7 ? 'class="active"' : '' ); ?> ><a href="under-repair.php"><i class="glyphicon glyphicon-cog"></i> <span>Check and Repair</span></a>
            -->
            <li <?php echo ($curr_page == 8 ? 'class="active"' : '' ); ?> ><a href="repair-pullout.php"><i class="glyphicon glyphicon-link"></i> <span>For Pull Out with Check Up</span></a>


            <li <?php echo ($curr_page == 9 ? 'class="active"' : '' ); ?> ><a href="repaired.php"><i class="glyphicon glyphicon-ok"></i> <span>Repaired</span></a></li>

            <li <?php echo ($curr_page == 3 ? 'class="active"' : '' ); ?> ><a href="archive.php"><i class="glyphicon glyphicon-book"></i> <span>Claimed & Pull-out JobOrder</span></a></li>

            <li class="<?php echo (( ($curr_page == 12) ||($curr_page == 13)  ) ? 'active' : '' ); ?> treeview" >
                <a href="#">
                  <i class="glyphicon glyphicon-list-alt"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
              <ul class="treeview-menu">
                    <li <?php echo ($curr_page == 12 ? 'class="active"' : '' ); ?> ><a href="daily-payments.php" ><i class="glyphicon glyphicon-tasks"></i> <span>Daily Payments</span></a></li>

                   


              </ul>              


            </li>



            <li class="header">In Warranty</li>


            <li class="header">User Management</li>
            <li <?php echo ($curr_page == 4 ? 'class="active"' : '' ); ?> ><a href="users.php" ><i class="glyphicon glyphicon-user"></i> <span>Users</span></a></li>
            <!--
            <li class="header">Gap Analysis</li>
            <li <?php echo ($curr_page == 4 ? 'class="active"' : '' ); ?> ><a href="#"><i class="glyphicon glyphicon-calendar"></i> <span>Module-LNs</span></a></li>
            <li <?php echo ($curr_page == 5 ? 'class="active"' : '' ); ?> ><a href="#"><i class="glyphicon glyphicon-calendar"></i> <span>Teaching Guides -TGs</span></a></li>
            -->
			
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
