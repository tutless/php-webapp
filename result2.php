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




$sql = "SELECT * from joborder inner join unitinfo on joborder.jonumber = unitinfo.uijonumber " . $where ." ORDER BY jonumber DESC";
$result = $mycon->query($sql);

?>


		<table class="table table-hover table-bordered table-striped" id="jotable" >
			<thead>
				<tr>
					<th>JO Number</th>
					<th>Customer Name</th>
				    <th>Model</th>    
				    <th>Date In</th>
				    <th>Check and Diagnose</th>
				    <th>Check and Repair</th>
				    <th>For Pullout W/ Checkup</th>
				    <th>Repaired</th>
				    <th>Date Out</th>
					<th>Repair Action</th>
				    <th>Cust. Informed</th>
				    <th>Actions</th>
				</tr>
			</thead>
			<tbody>
			  <?php
			    if($result->num_rows > 0){
			      while($row= $result->fetch_assoc()){  
			  ?>
			    <tr>
			      <td><?php echo $row['jonumber']; ?></td>                  
			      <td><?php echo $row['custname']; ?></td>                  
			      <td><?php echo $row['model']; ?></td>                 
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
			      			if($row['jopullout'] != '1970-01-01'){
			      				echo date('m/d/Y',strtotime($row['jopullout']));
			      			}else{
			      				echo 'NA';
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
			      <td>
			        <a href="print-jo.php?jonumber=<?php echo $row['jonumber']; ?>" target="_blank" class="btn btn-success btn-xs"> View</a>
   
			      </td>                  
			    </tr>
			  <?php 
			      } 
			    }
			  ?>
			</tbody>
		</table>

