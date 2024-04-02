<?php 
include "restrict.php";
include "php/cons.php";
$curr_page = 4;


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TACCHRO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/buttons.dataTables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="plugins/ionicons/css/ionicons.css">
    <!-- DataTables -->    
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have cho0sen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<link rel="icon" href="logo.png">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|


  -------SENDIIIIIIIIING HEEEEEEEELLLLLLLLPPPPPPP-------------------------
  -->
  <body class="hold-transition skin-blue sidebar-mini">


    <div class="wrapper">

      <!-- Main Header -->
      <?php  include 'header.php';  ?>  
      <!-- Main Header -->

      <!-- Left side column. contains the logo and sidebar -->
      <?php  include 'sidebar.php';  ?>  


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            New User
            <small>
            
            </small>
            
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-calendar"></i> New User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
			<h2><!--Title--></h2>
			<p><span><small><!--small title--></small></span></p>

			<div class="row">
				<div class="col-md-12">
	            <div class="box box-info">
	                <div class="box-header with-border">
	                	<h3 class="box-title" >New User</h3>
	                	<small></small>	

	                </div><!-- /.box-header -->
	                <div class="box-body">
						        <form id="joform" class="form-horizontal" action="insert-user.php" method="post">
                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Username</label>
                          <div class="col-sm-10">
                            <input name="username" type="text" class="form-control" id="username" >
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="password" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Nick Name</label>
                          <div class="col-sm-10">
                            <input name="nickname" type="text" class="form-control" id="nickname" required="true">
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="col-sm-6" style="text-align:center "><a class="btn btn-warning btn-lg" href="users.php" >Cancel</a></div>
                          <div class="col-sm-6" style="text-align: center;">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                          </div>
                        </div>

                    </form>
					
	                </div><!-- box body -->
	                
            <!-- /.box-footer -->
                	<div class="box-footer" >
					</div>
              	</div><!-- box -->  
				</div> <!-- col -->
			</div> <!-- row -->          



          <!-- Your Page Content Here -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




      <!-- Main Footer -->
      <?php include 'footer.php'; ?>  


      <!-- Control Sidebar -->
      <?php include 'control-sidebar.php'; ?>  
      
     </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

	<!-- ChartJS 1.0.1 -->
	<script src="plugins/chartjs/Chart.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
	<script type="text/javascript" src="js/myscripts.js" ></script>
  <script>
   $(function () { 



    });//------------end of script ---------------   

  </script>

  </body>
</html>
<?php 
//mysql_free_result($meals);
//mysql_free_result($worders);
//mysql_close($connect);
?>