<?php
/*
if (!isset($_SESSION)) {
  session_start();
}
*/
?>
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>TACCHRO</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TACCHRO</b> </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="pics/taccro.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">
				  <?php 
					echo $_SESSION['MM_nick'];
					/*	
					  if ($_SESSION['MM_group']=="superadmin"){
						echo $_SESSION['MM_username'];
					  }else{
						echo $_SESSION['MM_school'] ; 
					  }
					*/  
                  ?>
				  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="pics/taccro.png" class="img-circle" alt="User Image">
                    <p>
                      <?php 
							/*
		                  if ($_SESSION['MM_group']=="superadmin"){
		                  	echo $_SESSION['MM_username'];
		                  }else{
		                  	echo $_SESSION['MM_fullname'] ; 
						  }
						  */
                      ?>
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--
                  <li class="user-body">
                    
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                    
                  </li>
                  -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!--
                    <div class="pull-left">
                      <a href="storeprofile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                  -->
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="glyphicon glyphicon-cog"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
