<?php 
include "restrict.php";
include "php/cons.php";
$curr_page = 1;

$sql = "Select * from joborder where jonumber =". $_GET['jonumber'];
$result = $mycon->query($sql);
if($result->num_rows > 0){
  $row = $result->fetch_assoc();

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

      <!-- /.example-modal -->

      <div class="example-modal">
        <div class="modal modal-info" id="md-unitinfo">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">Add Unit Model</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Unit / Brand</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtunitbrand">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtmodel">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Serial No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtserial">
                    </div>
                  </div>


                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" id="closeunitinfo">Close</button>
                <button type="button" class="btn btn-outline" id="addunitinfo" > Add </button>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      <!-- /.example-modal -->

<!---------------------- Repair Details ------------------------------

      <!-- /.example-modal -->

      <div class="example-modal">
        <div class="modal modal-success" id="md-repair">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">Add Parts</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtrdno">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Part Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtpartnumber">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtpartdescription">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Qty</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtquantity">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Unit Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtunitprice">
                    </div>
                  </div>


                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" id="closerepair">Close</button>
                <button type="button" class="btn btn-outline" id="addrepair" > Add </button>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      <!-- /.example-modal -->





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
            Edit Job Order 
            <small>
            
            </small>
            
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-calendar"></i> Edit Job Order</li>
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
	                	<h3 class="box-title" >Edit Job Order</h3>
	                	<small></small>	

	                </div><!-- /.box-header -->
	                <div class="box-body">
						        <form id="joform" class="form-horizontal" action="update-joborder.php" method="post">
                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Date</label>
                          <div class="col-sm-4">
                            <input name="jodate" type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" value="<?php echo date('m/d/Y',strtotime($row['jodate']));  ?>"  id="jodate" data-mask>
                            <input type="hidden" name="jonumber" value="<?php echo $row['jonumber']; ?>">
                          </div>

                          <label for="username" class="col-sm-2 control-label">Repair Action</label>
                          <div class="col-sm-4">
                            <select name="repairaction" class="form-control">
                              <option value="open" <?php echo $row['repairaction']=='open'? 'selected':'' ; ?>>Open</option>
                              <option value="check and diagnose" <?php echo $row['repairaction']=='check and diagnose'? 'selected':'' ; ?>>Check and Diagnose</option>
                              <option value="check and repair" <?php echo $row['repairaction']=='check and repair'? 'selected':'' ; ?>>Check and Repair</option>
                              <option value="for pull out with check up" <?php echo $row['repairaction']=='for pull out with check up'? 'selected':'' ; ?>>For Pull Out with Check Up</option>

                              
                            </select>
                            <input type="hidden" name="jorepairstart" value="<?php echo $row['jorepairstart']; ?>" >  
                          </div>




                        </div>

                        <h5>Customer Information</h5>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Customer Name</label>
                          <div class="col-sm-10">
                            <input name="custname" type="text" class="form-control" id="custname" value="<?php echo $row['custname']; ?>" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Address</label>
                          <div class="col-sm-10">
                            <input name="address" type="text" class="form-control" id="address" value="<?php echo $row['address']; ?>" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Telephone</label>
                          <div class="col-sm-10">
                            <input name="telno" type="text" class="form-control" value="<?php echo $row['telno']; ?>" id="telno">
                          </div>
                        </div>

                       <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Type of Service</label>
                          <div class="col-sm-4">
                            <select class="form-control" name="servicetype">
                              <option value="carry-in" <?php echo $row['servicetype'] == 'carry-in'? 'selected':''; ?>>Carry In</option>
                              <option value="home-service" <?php echo $row['servicetype'] == 'home-service'? 'selected':''; ?>>Home Service</option>
                              <option value="pull-out" <?php echo $row['servicetype'] == 'pull-out'? 'selected':''; ?>>Pull Out/Deliver</option>
                            </select>
                          </div>
                          <label for="username" class="col-sm-2 control-label">Warranty Information</label>
                          <div class="col-sm-4">
                            <select class="form-control" name="warrantyinfo" id="warrantyinfo">
                              <option value="in warranty" <?php echo $row['warrantyinfo'] == 'in warranty'? 'selected':''; ?>>In Warranty (1 - 2 Years) </option>
                              <option value="extended warranty" <?php echo $row['warrantyinfo'] == 'extended warranty'? 'selected':''; ?>>Extended Warranty</option>
                              <option value="dealer unit" <?php echo $row['warrantyinfo'] == 'dealer unit'? 'selected':''; ?>>Dealer Unit</option>
                              <option value="void warranty" <?php echo $row['warrantyinfo'] == 'void warranty'? 'selected':''; ?>>Void Warranty</option>
                              <option value="repeat repair" <?php echo $row['warrantyinfo'] == 'repeat repair'? 'selected':''; ?>>Repeat Repair/Back Job</option>
                              <option value="out of warranty" <?php echo $row['warrantyinfo'] == 'out of warranty'? 'selected':''; ?>>Out of Warranty</option>
                              <option value="other" <?php echo $row['warrantyinfo'] == 'other'? 'selected':''; ?>>Other</option>
                            </select>
                          </div>

                        </div>

                        <div class="form-group" id="otherinfodiv">
                          <label for="username" class="col-sm-2 control-label">Pls Specify</label>
                          <div class="col-sm-10">
                            <input name="otherinfo" value="<?php echo $row['otherinfo']; ?>" type="text" class="form-control" id="otherinfo">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Customer Informed</label>
                          <div class="col-sm-10">
                            <input name="telno" type="text" class="form-control" value="<?php echo $row['telno']; ?>" id="telno">
                          </div>
                        </div>

                        
                        <h5>Unit Information</h5>

                        <div class="col-md-12" >
                            <table class="table table-hover table-bordered table-striped" id="tblunitinfo">
                              <thead>
                                <tr>
                                  <th>Unit/Brand</th>
                                  <th>Model</th>
                                  <th>Serial No.</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $modsql = "SELECT * from unitinfo where uijonumber =".$row['jonumber'];
                                    $result = $mycon->query($modsql);
                                    if($result->num_rows > 0 ){  
                                        $result->data_seek(0);
                                       while ($modrow= $result->fetch_assoc()){
                                 ?> 
                                    <tr>
                                      <td><?php echo $modrow['brand']; ?></td>
                                      <td><?php echo $modrow['model']; ?></td>
                                      <td><?php echo $modrow['serialno']; ?></td>
                                      <td><button type="button" class="btn btn-danger btn-xs removemodel" >Remove</button></td>
                                    </tr>

                                 <?php 
                                      }
                                    }  
                                 ?>
                              </tbody>
                            </table>
                            <button type="button" class="btn btn-info" id="btnaddunitinfo" >Add Model</button>
                            <input type="hidden" name="mymodel" id="mymodel">                           
                            <p></p>  
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Accessories</label>
                          <div class="col-sm-10">
                            <input name="accessories" value="<?php echo $row['accessories']; ?>"  type="text" class="form-control" id="accessories">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Complain</label>
                          <div class="col-sm-10">
                            <input name="complain" value="<?php echo $row['complain']; ?>"  type="text" class="form-control" id="complain" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Dealer</label>
                          <div class="col-sm-10">
                            <input name="dealer" value="<?php echo $row['dealer']; ?>" type="text" class="form-control" id="dealer">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Date Purchase</label>
                          <div class="col-sm-10">
                            <input name="datepurchase" value="<?php echo ($row['datepurchase']== '1970-01-01')? '': date('m/d/Y',strtotime($row['datepurchase'])) ; ?>" type="text" class="form-control" id="datepurchase" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                          </div>
                        </div>

                        <h5>Repair Details</h5>

                        <div class="col-md-12" >
                            <table class="table table-hover table-bordered table-striped" id="tblrepair">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Part Number</th>
                                  <th>Part Description</th>
                                  <th>Qty</th>
                                  <th>Price</th>
                                  <th>Total Amount</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $modsql = "SELECT * from repairdetail where rdjonumber =".$row['jonumber'];
                                    $result = $mycon->query($modsql);
                                    if($result->num_rows > 0 ){  
                                        $result->data_seek(0);
                                        $mypartstotal = 0;
                                       while ($modrow= $result->fetch_assoc()){
                                 ?> 
                                    <tr>
                                      <td><?php echo $modrow['rdno']; ?></td>
                                      <td><?php echo $modrow['partnumber']; ?></td>
                                      <td><?php echo $modrow['partdescription']; ?></td>
                                      <td><?php echo $modrow['qty']; ?></td>
                                      <td><?php echo $modrow['unitprice']; ?></td>
                                      <td><?php echo $modrow['qty'] * $modrow['unitprice']; 
                                      $mypartstotal = $mypartstotal + ($modrow['qty'] * $modrow['unitprice']);
                                      ?></td>

                                      <td><button type="button" class="btn btn-danger btn-xs removepart" >Remove</button></td>
                                    </tr>

                                 <?php 
                                      }
                                    }  
                                 ?>

                              </tbody>
                            </table>
                            <button type="button" class="btn btn-info" id="btnaddparts">Add Parts</button>
                            <input type="hidden" name="myrepair" id="myrepair" >
                            <p></p>  
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Parts Cost</label>
                          <div class="col-sm-10">
                            <input name="partcost" type="text" class="form-control" id="partcost" value="<?php echo $mypartstotal ; ?>">
                          </div>
                        </div>



                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Labor</label>
                          <div class="col-sm-10">
                            <input name="labor" value="<?php echo $row['labor']; ?>" type="text" class="form-control" id="labor" required="true">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Transportation</label>
                          <div class="col-sm-10">
                            <input name="transportation" value="<?php echo $row['transportation']; ?>" type="text" class="form-control" id="transportation">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Shipping Cost</label>
                          <div class="col-sm-10">
                            <input name="shippingcost" value="<?php echo $row['shippingcost']; ?>" type="text" class="form-control" id="shippingcost">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Other Charges</label>
                          <div class="col-sm-10">
                            <input name="othercharges" value="<?php echo $row['othercharges']; ?>" type="text" class="form-control" id="othercharges">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Grand Total</label>
                          <div class="col-sm-10">
                            <input name="grandtotal" type="text" class="form-control" id="grandtotal" value="<?php
                            $grandtotal = $row['labor'] + $row['transportation'] + $row['shippingcost'] + $row['othercharges'] + $mypartstotal;
                            echo $grandtotal;
                            ?>">
                          </div>
                        </div>



                        <div class="form-group">
                          <div class="col-sm-6" style="text-align:center "><a class="btn btn-warning btn-lg" href="index.php" >Cancel</a></div>
                          <div class="col-sm-6" style="text-align: center;">
                            <button type="submit" class="btn btn-success btn-lg">Update</button>
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

    $('[data-mask]').inputmask();

         $('#myrepair').val(JSON.stringify(getrepairs()));
            $('#mymodel').val(JSON.stringify(getunits()));


      $('#otherinfodiv').hide();
      $("#warrantyinfo").change(function(){
        warranty = $(this).val();
        if(warranty == "other") {
          $('#otherinfodiv').show();  
        }else{
          $('#otherinfo').val('');
          $('#otherinfodiv').hide();
        }
        //alert($(this).val());
      });

//------------------- scripts for Model ----------------------------

      $('#btnaddunitinfo').click(function(){
        $('#md-unitinfo').modal('show');
      });

      $('#closeunitinfo').click(function(){
        $('#txtunitbrand').val('');  
        $('#txtmodel').val('');  
        $('#txtserial').val('');  
        $('#md-unitinfo').modal('hide');

      });


      $('#addunitinfo').click(function(){
        var unitbrand = $('#txtunitbrand').val();
        var model = $('#txtmodel').val();
        var serial = $('#txtserial').val() ;
        if( (unitbrand =="")|| (model == "") || (serial=="") ) {
          return;
        }else{
            //Try to get tbody first with jquery children. works faster!
            var tbody = $('#tblunitinfo').children('tbody');

            //Then if no tbody just select your table 
            var table = tbody.length ? tbody : $('#tblunitinfo');

            //Add row
            mystr = '<tr>';
            mystr += '<td>'+unitbrand  +'</td>';  
            mystr += '<td>'+ model +'</td>';  
            mystr += '<td>'+serial +'</td>';  
            mystr +='<td><button type="button" class="btn btn-danger btn-xs removemodel" >Remove</button></td>';


            table.append(mystr);
            $('#txtunitbrand').val('');  
            $('#txtmodel').val('');  
            $('#txtserial').val('');  
            $('#mymodel').val(JSON.stringify(getunits()));

            $('#md-unitinfo').modal('hide');
        }
      });

        $('#btngetunitinfo').click(function(){

        });
        function getunits(){
           var $rows = $("tbody tr", $('#tblunitinfo')); 
           var myunits=[];
           function pushunit(bunit,model,serial){
              return{
                bunit:bunit,
                model:model,
                serial:serial
              }
           }//--------- end of pushunit

           $rows.each(function(){
              var $bunit =$(this).find('td').eq(0).html();
              var $model =$(this).find('td').eq(1).html();
              var $serial =$(this).find('td').eq(2).html();
              myunits.push(pushunit($bunit,$model,$serial));  

           });
            return myunits;          
        }
        $('#tblunitinfo').on('click','.removemodel',function(){
          $(this).closest('tr').remove();
         $('#mymodel').val(JSON.stringify(getunits()));
         
        });


//--------------------------  scripts for repair details ---------------------
        $('#btnaddparts').click(function(){
            $('#md-repair').modal('show');
        });

      $('#closerepair').click(function(){
        $('#txtrdno').val('');  
        $('#txtpartnumber').val('');  
        $('#txtpartdescription').val('');  
        $('#txtunitprice').val('');  
        $('#txtquantity').val('');  

        $('#md-repair').modal('hide');

      });

      $('#addrepair').click(function(){
        var $rdno = $('#txtrdno').val();
        var $partnumber = $('#txtpartnumber').val();
        var $partdescription = $('#txtpartdescription').val() ;
        var $qty = $('#txtquantity').val();
        var $unitprice = $('#txtunitprice').val();


        if( ($partdescription=="") || ($qty=="") || ($unitprice=="") ) {
          return;
        }else{
            //Try to get tbody first with jquery children. works faster!
            var tbody = $('#tblrepair').children('tbody');

            //Then if no tbody just select your table 
            var table = tbody.length ? tbody : $('#tblrepair');
            var $totamount = $qty * $unitprice;

            //Add row
            mystr = '<tr>';
            mystr += '<td>'+ $rdno  + '</td>';  
            mystr += '<td>'+ $partnumber + '</td>';  
            mystr += '<td>'+ $partdescription + '</td>'; 
            mystr += '<td>'+ $qty + '</td>';  
            mystr += '<td>'+ $unitprice + '</td>';

            mystr += '<td>'+ $totamount  +'</td>';  

            mystr +='<td><button type="button" class="btn btn-danger btn-xs removepart" >Remove</button></td>';


            table.append(mystr);
            $('#partcost').val(getrepairstotal());
            $('#txtrdno').val('');  
            $('#txtpartnumber').val('');  
            $('#txtpartdescription').val('');  
            $('#txtquantity').val('');  
            $('#txtunitprice').val('');  



            $('#myrepair').val(JSON.stringify(getrepairs()));
              getOverallTotal();
            $('#md-repair').modal('hide');
        }
      });

        function getrepairs(){
           var $rows = $("tbody tr", $('#tblrepair')); 
           var myrepairs=[];
           function pushrepair(rdno,partnumber,partdescription,qty,unitprice){
              return{
                rdno:rdno,
                partnumber:partnumber,
                partdescription:partdescription,
                qty:qty,
                unitprice:unitprice
              }
           }//--------- end of pushunit

           $rows.each(function(){
              var $rdno =$(this).find('td').eq(0).html();
              var $partnumber =$(this).find('td').eq(1).html();
              var $partdescription =$(this).find('td').eq(2).html();
              var $qty =$(this).find('td').eq(3).html();
              var $unitprice =$(this).find('td').eq(4).html();

              myrepairs.push(pushrepair($rdno,$partnumber,$partdescription,$qty,$unitprice));  

           });
            return myrepairs;          
        }

        function getrepairstotal(){
           var $rows = $("tbody tr", $('#tblrepair')); 
           var $grandtotal = 0;

           $rows.each(function(){
              var $rdno = $(this).find('td').eq(0).html();
              var $partnumber = $(this).find('td').eq(1).html();
              var $partdescription = $(this).find('td').eq(2).html();
              var $qty = $(this).find('td').eq(3).html();
              var $unitprice = $(this).find('td').eq(4).html();
              var $totalamount = parseInt($qty) * parseFloat($unitprice);
              $grandtotal = $grandtotal + $totalamount ;

           });
            return $grandtotal;          
        }

        $('#tblrepair').on('click','.removepart',function(){
          $(this).closest('tr').remove();
         $('#myrepair').val(JSON.stringify(getrepairs()));
          $('#partcost').val(getrepairstotal());
        
        });

        function getOverallTotal(){
            $labor = parseFloat($('#labor').val()) || 0;
            $transportation = parseFloat($('#transportation').val()) || 0;
            $shippingcost = parseFloat($('#shippingcost').val()) || 0;
            $othercharges = parseFloat($('#othercharges').val())|| 0;
            $('#partcost').val(getrepairstotal());
            $partcost = parseFloat($('#partcost').val()) || 0;
            $grandtotal = $labor + $transportation + $shippingcost + $othercharges + $partcost; 
            $('#grandtotal').val($grandtotal);
        }

        $('#labor').change(function(){
          getOverallTotal();
        });

        $('#transportation').change(function(){
          getOverallTotal();
        });
        $('#shippingcost').change(function(){
          getOverallTotal();
        });
        $('#othercharges').change(function(){
          getOverallTotal();
        });


//----------------------- codes for form submission -----------------------

        $('#joform').submit(function(e){
            if( $('#mymodel').val() == '' ){
              alert('Please Input a Model Unit');  
              return false;
            }

        });


    });//------------end of script ---------------   

  </script>

  </body>
</html>
<?php 
}else{
$logoutGoTo = "index.php";
header("Location: $logoutGoTo");
}
//mysql_free_result($meals);
//mysql_free_result($worders);
//mysql_close($connect);
?>