<?php 
include "restrict.php";
include "php/cons.php";
include "myfunctions.php";
$curr_page = 6;

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
            Payment Details 
            <small>
            
            </small>
            
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-usd"></i> Payment Details</li>
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
	                	<h3 class="box-title" >Payment Details</h3>
	                	<small></small>	

	                </div><!-- /.box-header -->
	                <div class="box-body">
					<?php
              $transid = $_GET['transid'];
					    $query_users = "SELECT * from vw_jotrans where transid = {$transid}";
						$result=$mycon->query($query_users);
					 
						if($result === false) {
						  trigger_error('Wrong SQL: ' . $query_users . ' Error: ' . $mycon->error, E_USER_ERROR);
						} else {
						  $row = $result->fetch_assoc();
						}

            $partcost = getTotalRepairs($transid);
            $overall = getOverallTotal($transid);
					?>
          <h3>Details</h3>
          <form class="form-horizontal">

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Customer Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['custname'] ;?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Parts Cost</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $partcost ; ?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Labor</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['labor'] ;?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Transportation</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['transportation'] ;?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Shipping Cost</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['shippingcost'] ;?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Other Charges</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['othercharges'] ;?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Check Up Fee</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $row['checkupfee'] ;?>" disabled>
              </div>
            </div>


            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Grand Total</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $overall;?>" disabled>
              </div>
            </div>


          </form>

          <h3>Payments </h3>
					<table class="table table-hover table-bordered table-striped" >
						<thead>
							<tr>
								<th>Payment ID</th>
                <th>Date Payed</th>
                <th>Article</th>    
                <th>Amount</th>
                <th>Actions</th>
							</tr>
						</thead>
						<tbody>
              <?php
                $sql = "SELECT * from payments where paytransid = {$transid}";
                $result = $mycon->query($sql);
                if($result->num_rows > 0){
                  $paytotal = 0;
                  while($rowpay= $result->fetch_assoc()){  
              ?>
                <tr>
                  <td><?php echo $rowpay['paymentid']; ?></td>                  
                  <td><?php echo date('m/d/Y',strtotime($rowpay['paydate'])); ?></td>                  
                  <td><?php echo $rowpay['article']; ?></td>                  
                  <td><?php echo $rowpay['payamount']; ?></td>                 
                  <td>
                    <a href="edit-payment.php?paymentid=<?php echo $rowpay['paymentid']; ?>" class="btn btn-warning btn-xs"> Edit</a> 
                    <a href="print-reciept.php?paymentid=<?php echo $rowpay['paymentid']; ?>" target="_blank" class="btn btn-success btn-xs"> View</a>
                  </td>                  
                </tr>
              <?php 
                  } 
                }
              ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td><h4> Total Payments</h4></td>
                  <td><?php echo getPayments($transid); ?></td>                  
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><h4> Balance</h4></td>
                  <td><?php 
                        $balance = getBalance($transid); 
                        echo $balance; ?></td>                  
                </tr>

						</tbody>
					</table>

                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                      <a href="payments.php" class="btn btn-danger">Cancel</a>
                      <?php 
                        if($balance > 0){ ?>  
                      <a href="add-payment.php?transid=<?php echo $transid;?>" class="btn btn-info">Add Payment</a>
                      <?php } ?>
                    
                    </div>
                    <div class="col-md-4"></div>                    
                  </div>  

					
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