<?php 
 $get_id = $_GET['id']; 
 $status = $_GET['status']; 
 require_once('dbconnect.php');
 include('header.php');

?>






<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		
	
</div>

<div class="container-fluid">
	<?php include('menubar.php') ?>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<a href="#" onClick="window_print()" class="btn btn-info" style="margin-bottom:20px"><i class="icon-print icon-large"></i> Print</a>
		</script>
		<div class="panel panel-success" id="outprint">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">Record Managements</h3>
			 
			 	<div class="panel-body">
			 		<?php
			 		$query=mysqli_query($dbcon,"select * from complainant where case_id='$get_id'");
		while($row = mysqli_fetch_array($query)){
			?>
			 			 	
			 			 	
			 			 <?php
			 			 }
			 			 ?>
			 			 	
			 			
			 			
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			
			 		Case Details</h3>
			 	</div>
			 	<div class="panel-body">
			 		<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
								<th>
							        	<center>
							       			Car Plate No
							        	</center> 
							        </th>
							    	<th>
							        	<center>
							       			Crime Type
							        	</center> 
							        </th>
							        <th>
							        	<center>
							       			Location
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Time Reported
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Status
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    	<?php
						    	$sn=0;
			 		$query=mysqli_query($dbcon,"select * from caseDetail where caseid='$get_id'");
		while($row = mysqli_fetch_array($query)){
			$sn++;
			?>
						    	<tr>
								    <td><?php echo $row['plate_no']?></td>
									<td><?php echo $row['crime_type']?></td>
						    		<td><?php echo $row['location']?></td>
						    		<td><?php echo $row['date_added']?></td>
									<td><?php echo $row['status']?></td>
						    	
						    		
						    	</tr>
<?php }
?>
</tbody>
						</table>

</div>
			 </div>
				
			 	
			 	</div>
			 </div>
				
						    
						   
				
			</div>
		</div>
	</div>
	<center>
		<a href="caseview.php" class="btn btn-success">Return Home
			<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
		</a>
	</center>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php') ?>


<script type="text/javascript">

    function window_print(){
		var _head = $('head').clone();
		var _p = $('#outprint').clone();
		var _html = $('<div>')
		_html.append("<head>"+_head.html()+"</head>")
		_html.append("<h3 class='text-center'>CRIME RECORDS MANAGEMENT SYSTEM</h3>")
		_html.append(_p)
		console.log(_html.html())
		var nw = window.open("","_blank","width:900;height:800")
			nw.document.write(_html.html())
			nw.document.close()
			nw.print()
			setTimeout(() => {
				nw.close()
			}, 500);
	}
	</script>
</body>
</html>

