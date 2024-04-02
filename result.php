<?php
include "php/cons.php";
$jonumber = $_POST['jonumber'];
$custname = $_POST['custname'];
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];

$datefrom = date('Y-m-d',strtotime($datefrom));
$dateto = date('Y-m-d',strtotime($dateto));


$jonumberstr = '';
if(($jonumber!= '')){
 $jonumberstr = " jonumber = ".$jonumber;
}

$custnamestr = '';
if(($custname!='')){
	$custnamestr = " custname like '%" . $custname . "%'";
}

$datestr='';
if(($datefrom != '1970-01-01') && ($dateto != '1970-01-01') ){
$datestr = "jodate between '".$datefrom."' and '".$dateto."'"; 
}
$where = '';

if(($jonumberstr != '')||($custnamestr !=='')||($datestr !='')){
	$where = 'where ';
	if($jonumberstr != ''){
		$where .= ' ('.$jonumberstr.') ';	
	}
	if($custnamestr != ''){
		if($jonumberstr !=''){
			$where .= ' and ';
		}
		$where .= ' (' . $custnamestr. ') ';
	}

	if($datestr != ''){
		if( ($jonumberstr != '') || ($custnamestr!= '') ){
			$where .= ' and ';
		}
		$where .= ' (' . $datestr. ')';
	}


}




$sql = "SELECT * from vw_jotrans " . $where ." ORDER BY jonumber DESC, transid DESC";
$result = $mycon->query($sql);

?>


		<table class="table table-hover table-bordered table-striped" id="jotable" >
			<thead>
				<tr style="font-size: 11px;">
					<th>JO Number</th>
					<th>Customer Name</th>
				    <th>Model</th>  
				    <th>Trans. Type</th>  
				    <th>Date In</th>
				    <th>Check and Diagnose</th>
				    <th>Check and Repair</th>
				    <th>For Pullout W/ Checkup</th>
				    <th>Repaired</th>
				    <th>Date Out</th>
					<th>Repair Action</th>
				    <th>Cust. Informed</th>
				    <th></th>
				    <th></th>
				</tr>
			</thead>
			<tbody>
			  <?php
			    if($result->num_rows > 0){
			      while($row= $result->fetch_assoc()){  
			  ?>
			    <tr style="font-size: 12px;">
			      <td><?php echo sprintf( '%05d', $row['jonumber']); ?></td>                  
			      <td><?php echo $row['custname']; ?></td>                  
			      <td><?php echo $row['model']; ?></td>
			      <td><?php echo $row['transtype']; ?></td>

			      <td><?php echo date('m/d/Y',strtotime($row['jodate'])); ?></td> 

			      <td><?php 
			      			if($row['jodiagnosed'] != '1970-01-01'){
			      				echo date('m/d/Y',strtotime($row['jodiagnosed']));
			      			}else{
			      				echo 'NA';
			      			} 

			      ?></td> 


			      <td><?php 
			      			if($row['jorepair'] != '1970-01-01'){
			      				echo date('m/d/Y',strtotime($row['jorepair']));
			      			}else{
			      				echo 'NA';
			      			} 

			      ?></td> 

			      <td><?php 
			      			if( ($row['jopullout'] == '1970-01-01') || ($row['jopullout'] == '0000-00-00')){
			      				echo 'NA';
			      			}else{
			      				
			      				echo date('m/d/Y',strtotime($row['jopullout']));
			      			} 

			      ?></td> 

			      <td><?php 
			      			if($row['jorepaired'] != '1970-01-01'){
			      				echo date('m/d/Y',strtotime($row['jorepaired']));
			      			}else{
			      				echo 'NA';
			      			} 

			      ?></td> 


			      <td><?php 
			      			if($row['jodateout'] != '1970-01-01'){
			      				echo date('m/d/Y',strtotime($row['jodateout']));
			      			}else{
			      				echo 'NA';
			      			} 

			      ?></td> 

			      <!--
			      <td><?php 
			          $date1 = new DateTime($row['jodate']);
			          $date2 = new DateTime(date('Y-m-d'));
			          $interval = $date1->diff($date2);
			          echo $interval->days;

			      ?> days</td>

			      -->  
			      <td><?php echo $row['repairaction']; ?></td>
			      <td><?php
			            if($row['customerinformed']=='yes'){
			              echo date('m/d/Y',strtotime($row['cidate']));
			            }else{ 
			              echo $row['customerinformed']; 
			            }
			      ?></td>
			      <td style="padding-right: : 0px; padding-left: 0px;">
			        <a href="edit-joborder.php?transid=<?php echo $row['transid']; ?>" class="btn btn-warning btn-xs"> Edit</a> 
			        <!--
			        <a href="claim.php?jonumber=<?php echo $row['jonumber']; ?>" target="_blank" class="btn btn-primary btn-xs claimme"> Claim</a>
			        <a href="pull-out.php?jonumber=<?php echo $row['jonumber']; ?>" target="_blank" class="btn btn-danger btn-xs pullme"> Pull Out</a>
			        -->

			        <!--<a href="deletejob.php?jonumber=<?php echo $row['jonumber']; ?>" class="btn btn-sm btn-danger btn-xs">Delete</a></td>-->   
			      </td>
			      <td style="padding-right: : 0px; padding-left: 0px;">
			        <a href="print-jo.php?transid=<?php echo $row['transid']; ?>" target="_blank" class="btn btn-success btn-xs"> View</a>
			      </td>                  
			    </tr>
			  <?php 
			      } 
			    }
			  ?>
			</tbody>
		</table>
