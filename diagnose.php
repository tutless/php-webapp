<?php 
include "restrict.php";
include "php/cons.php";
$curr_page = 2;

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

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


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
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <?php  include 'header.php';  ?>  
      <!-- Main Header -->

      <!-- Left side column. contains the logo and sidebar -->
      <?php  include 'sidebar.php';  ?>  
      <?php include 'modals.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Check and Diagnose 
            <small>
            
            </small>
            
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i>Check and Diagnose</li>
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
	                	<h3 class="box-title" >Check and Diagnose</h3>
	                	<small></small>	

	                </div><!-- /.box-header -->
	                <div class="box-body">
					<?php
						/*
					    $query_users = "SELECT * from users where userid = {$_SESSION['MM_adminid']}";
						$users=$ilm->query($query_users);
					 
						if($users === false) {
						  trigger_error('Wrong SQL: ' . $query_users . ' Error: ' . $ilm->error, E_USER_ERROR);
						} else {
						  $totalRows_Users = $users->num_rows;
						  $row = $users->fetch_assoc();
						}
						*/
					?>

					<table class="table table-hover table-bordered table-striped" id="jotable" >
						<thead>
							<tr style="font-size: 11px;">
								<th>JO Number</th>
								<th>Customer Name</th>
                <th>Model</th>    
                <th>Date In</th>
                <th>Date Diagnosed</th>
                <th>Pending</th>
								<th>Repair Action</th>
                <th>Cust. Informed</th>
                <th>Actions</th>
                <th>Tag</th>
							</tr>
						</thead>
						<tbody>
              <?php
                $sql = 'SELECT * from vw_jotrans where repairaction = "check and diagnose" 
                ORDER BY jonumber DESC';
                $result = $mycon->query($sql);
                if($result->num_rows > 0){
                  while($row= $result->fetch_assoc()){  
              ?>
                <tr style="font-size: 11px;">
                  <td><?php echo sprintf( '%05d', $row['jonumber']); ?></td>                  
                  <td><?php echo $row['custname']; ?></td>                  
                  <td><?php echo $row['model']; ?></td>                 
                  <td><?php echo date('m/d/Y',strtotime($row['jodate'])); ?></td> 
                  <td><?php echo date('m/d/Y',strtotime($row['jodiagnosed'])); ?></td> 
                  <td><?php 
                      $date1 = new DateTime($row['jodiagnosed']);
                      $date2 = new DateTime(date('Y-m-d'));
                      $interval = $date1->diff($date2);
                      echo $interval->days;

                  ?> days</td>  
                  <td><?php echo $row['repairaction']; ?></td>
                  <td><?php
                        if($row['customerinformed']=='yes'){
                          echo date('m/d/Y',strtotime($row['cidate']));
                        }else{ 
                          echo $row['customerinformed']; 
                        }
                  ?></td>
                  <td>
                    <a href="edit-joborder.php?transid=<?php echo $row['transid']; ?>" class="btn btn-warning btn-xs"> Edit</a> 
                    <a href="print-jo.php?transid=<?php echo $row['transid']; ?>" target="_blank" class="btn btn-success btn-xs"> View</a>
                  </td>    
                  <td>
                    <button data-transid="<?php echo $row['transid']; ?>" type="button" class="btn btn-primary btn-xs repaired">Repaired</button>

                    <button data-transid="<?php echo $row['transid']; ?>" type="button" class="btn btn-danger btn-xs forPullOut">For Pull Out</button>
                    <!--
                    <a href="pull-out.php?transid=<?php echo $row['transid']; ?>" target="_blank" class="btn btn-danger btn-xs pullme">For Pull Out</a>-->
                  </td>              
                </tr>
              <?php 
                  } 
                }
              ?>
						</tbody>
					</table>



					
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
   <!-- bootstrap datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


	<!-- ChartJS 1.0.1 -->
	<script src="plugins/chartjs/Chart.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
<script>
$(function () { 

    $('[data-mask]').datepicker({
      autoclose: true
    });



  $(".repaired").click(function(){
    //alert($(this).data('transid'));
    $("#transid").val($(this).data('transid'));
    $("#updatefield").val("jorepaired");
    $("#formMode").val("repaired");

    $("#mdDate").modal("show");
  });


  $(".forPullOut").click(function(){
    //alert($(this).data('transid'));
    $("#transid").val($(this).data('transid'));
    $("#updatefield").val("jopullout");
    $("#formMode").val("for pull out with check up");

    $("#mdDate").modal("show");
  });


  $("#closeDate").click(function(){
    $("#transid").val('');
    $("#updatefield").val('');
    $("#formMode").val('');

    $("#mdDate").modal("hide");


  });



        $("#jotable").DataTable({
      dom: 'Blfrtip',
      buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
      ],  
      "searching": true,
      "ordering": false,
      "paging" : true
    });
    $('.claimme').click(function(){
        if(!confirm('Are you sure you want to close this job order as claimed? ')){
          return false;
        }
    });    

    $('.pullme').click(function(){
        if(!confirm('Are you sure you want to close this job order as pull out? ')){
          return false;
        }
    });    

});//------------end of script ---------------   
</script>         
  </body>
</html>
<?php 
//mysql_free_result($meals);
//mysql_free_result($worders);
//mysql_close($connect);
?>