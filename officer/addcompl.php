<?php 

include('header.php');
include('dbconnect.php');
if(isset($_POST['save_patient'])){
	$patientName = $_POST['patient_name'];
	$tel=$_POST['tel'];
	$date=$_POST['dates'];
	$gender=$_POST['gender'];
	$age=$_POST['ages'];
	$weight=$_POST['weights'];
	$temperature=$_POST['temperatures'];
	$height=$_POST['heights'];
	$department=$_POST['department'];
	$location=$_POST['locations'];
  
	$sql = "INSERT INTO patientdetail (patient_name, gender, dates, weights,temperatures, heights, department,telephone,locations,ages)
	                                  VALUES('$patientName','$gender','$date','$weight','$temperature','$height','$department','$tel','$location','$age'); ";
  
	$result = mysqli_query($dbcon,$sql);
	if( $result )
                          {
							 echo "<script type='text/javascript'>alert('Patient details Added');
	  							document.location='addcompl.php'</script>";
					  }
			
  }




 ?>


<div class="container-fluid">
	

      <?php include('menubar.php')?> 
	<?php 

	 $date = date("Y m, d h:i a");
	 
$today=date("Y/m/d",strtotime($date));

$query1=mysqli_query($dbcon,"SELECT * FROM case_table where DATE_FORMAT(date_added,'$today')='$today'");
	$counter=mysqli_num_rows($query1);

        if ($counter==0)
        {
          $counter=101;
        }
        else
        {
          $counter=100+$counter+1;
        }
    

       $trans_id=date('y').date('m').date('d').$counter;
	 

	?>

	

<div class="container-fluid">

	<div class="col-md-2"></div>
	<div class="col-md-8">
		<ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul>
			<div class="panel panel-success">
					  	<div class="panel-heading">
					  		
					  		<h3 class="panel-title">Patients  Details</h3>
					  	</div>
			<div class="panel-body">

			 
				<div class="container-fluid">
					<form class="form-horizontal" id="addcase"  role="form" action="addcompl.php" method="post">

						<div class="form-row">
                        	<div class="col-md-6">
					       		<div class="form-group">
					       		 <label for="">Name of Patient:</label>
					       		
					        		<input type="text" name="patient_name" class="form-control"  placeholder="Enter Name of patient"
					    		autofocus=""  >
					       		</div>
					   		</div>

					   		<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Tel Phone:</label>
					    		<input type="text"  name="tel" class="form-control"  maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Phone Number" >
					  			</div>
					  		</div>
					  	</div>


						<div class="form-row">
                        	<div class="col-md-6">
					       		<div class="form-group">
					       		 <label for="">Date:</label>
					       		 
					        		<input type="date" name="dates" class="form-control"  placeholder="Enter Date"
					    		autofocus=""  >
					       		</div>

					       		<div class="col-md-6">
					       		<div class="form-group">
									    <label for="">Gender:</label>
									    <select class="form-control" name="gender" >
									    <option selected="selected" value="">Select</option>

											<option value="Male"> Male</option>
											<option value="Female"> Female</option>
										
										 </select>
										 </div>
										</div>
                          
					   	</div>
					
					   		
					 

					  	<div class="form-row">
                        	<div class="col-md-6">
					  				<div class="form-group">
					   				 <label for="">Age:</label>
					   				 <input type="number" name="ages" class="form-control"  placeholder="Age"  >
					  				</div>
					  		</div>
						
					  		<div class="col-md-6">
					  			<div class="form-group">
					    		<label for="">Weight:</label>
					    		<input type="number" name="weights" class="form-control py-4"   placeholder="Weight" >
					  			</div>
					  		</div>
					  	</div>
						  <div class="col-md-6">
					  			<div class="form-group">
					    		<label for="">Height:</label>
					    		<input type="number" name="heights" class="form-control py-4"   placeholder="Height" >
					  			</div>
					  		</div>
					  	</div>
						  <div class="col-md-6">
					  			<div class="form-group">
					    		<label for="">Temperature:</label>
					    		<input type="number" name="temperatures" class="form-control py-4"   placeholder="Temperature" >
					  			</div>
					  		</div>
					  	</div>
						<div class="form-row">
                        		<div class="col-md-6">
					  				<div class="form-group">
					   				 <label for="">Department:</label>
					    		<select class="form-control" name="department" required="">
									    <option selected="selected" value="">Select</option>
											<option value="dentistry">Dentistry</option>
											<option value="neurology">Neurology</option>
											<option value="opd">OPD</option>
											<option value="sexual health">Sexual health</option>
											<option value="cardiology">Cardiology</option>
											


										 </select>
        						
        							</select>
					  				</div>
					  			</div>
					  			
					  		</div>
					<div class="form-row">
                        <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Location:</label>
					    		<input type="text" name="locations" class="form-control"  placeholder="Enter Location" >
					  		</div>
					  	</div>
					  		<div class="col-md-6">
					  </div>
					  <div class="form-group">
					  <button  type="submit" name="save_patient" class="btn btn-success form-control">Save and Continue
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>



 <?php include('scripts.php'); ?>

</script> -->

<!-- <script>
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

	return true;
}
</script> -->

</body>
</html>