<?php 

include('header.php');
include('dbconnect2.php');

 ?>


<div class="container-fluid">
	

      <?php include('menubar.php')?> 
	<?php // include('menubar1.php');

	
	?>
<div class="container-fluid">

	<div class="col-md-2"></div>
	<div class="col-md-8">
		<ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul>
			<div class="panel panel-success">
					  	<div class="panel-heading">
		
					  		<h3 class="panel-title">Enter Case Details Here</h3>
					  	</div>
			<div class="panel-body">

			 
				


				<div class="container-fluid">
					<form class="form-horizontal" action="saveCase.php"  method="post" role="form">
						<div class="form-row">
                        <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Car Plate No:</label>
					    		<input type="text" name="plate_no" class="form-control"  required="" >
					  		</div>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="form-group">
                                <label for="">Crime Type:</label>
                                <select class="form-control" name="CType" required="">
									    <option selected="selected" value="">Select</option>
											<option value="zebra"> Zebra crossing Violation </option>
											<option value="overspeeding"> OverSpeeding </option>
											<option value="overtaking"> Wrong Overtaking</option>

										 </select>
					  		</div>
					  	</div>
				</div>
				<div class="col-md-6">
					       		<div class="form-group">
					       		 <label for="">Location:</label>
					       	
					        		<input type="text"  name="location"  class="form-control" required="">
					       		</div>
					   		</div>
							   <div class="col-md-6">
					       		<div class="form-group">
					       		 <label for="">Status:</label>
									<select class="form-control" name="status" required="">
									    <option selected="selected" value="">Select</option>
											<option value="complete">Complete</option>
											<option value="Incomplete">Incomplete</option>
											

										 </select>

					       		</div>
					   		</div>
                        	<div class="col-md-6">
					       		<div class="form-group">
					       		 <label for="">Time Reported:</label>
					       	
					        		<input type="datetime-local"  name="time"  class="form-control" required="">
					       		</div>
					   		</div>

					   	
					  <div class="form-group">
					  <button  type="submit" name="save_case" class="btn btn-success form-control">Save and Continue
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
<script type="text/javascript">

	$(document).on('submit', '#addsdtaff', function(event) {
		
		event.preventDefault();
		// This removes the error messages from the page
		 $(".list-group-item").remove();
		
		var formData = $(this).serialize();

			$.ajax({
					url: 'saveCase.php',
					type: 'post',
					data: formData,
					dataType: 'JSON',

					success: function(response){

						if(response.error){

							console.log(response.error);
					}

						else{

							Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Case  Saved',
							  showConfirmButton: false,
							  timer: 3000
							});
							
							
							setTimeout( function(){
								window.location='addcase.php';
							}, 900);
							

						}

					}
					
					
				});
		


	});

</script>

</body>
</html>