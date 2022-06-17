<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');

 ?>

 
<br />
<div class="container-fluid">
	<?php include('menubar.php');?>
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			Patient List
			 		</h3>
			 	</div>
<div id="trans-table">
<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>S/N</th>
	        
	         <th>Patient Name</th>
	        <th ><center>Department</center></th>
	        <th><center>Time Reported</center></th>
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from patientdetail");
		while($row = mysqli_fetch_array($query)){
		$id = $row['patient_id'];
		
		$sn++;
		?>
		<tr>
       
        <td><?php echo $sn;?></td>
       
        <td><?php echo $row['patient_name'];?></td> 
		<td><?php echo $row['department'];?></td>
		<td><?php echo $row['dates']; ?></td>  
		
		
		
		<td class="empty" width="">
			<a data-placement="left" title="Click to view" id="view<?php echo $id;?>" href="casedetails.php<?php echo '?id='.$id; ?>" class="btn btn-success">Details<i class="icon-pencil icon-large"></i></a>
		
		<button type="button" data-toggle="modal" data-target="#<?php echo $row['patient_id'];?>" data-placement="left" title="Click to edit"   class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
           
		<button type="button" data-toggle="modal" data-target="#delete<?php echo $row['patient_id'];?>" data-placement="left"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            <?php include('modal_delete_case.php');?> 
			
			 <?php include('modal_edit_case.php'); ?> 
		</td>
		</tr>
	<?php } ?>    
    </tbody>
</table>
</div>
</div>

	</div>
	<div class="col-md-1"></div>
</div>


<?php include('scripts.php'); ?>


	

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>
</body>
</html>