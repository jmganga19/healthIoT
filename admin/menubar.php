
	<div class="col-md-12">
		<div class="panel panel-bg-secondary">
			<div class="panel-heading" style="padding-bottom: 40px;">
				<center><h3>HEALTH RECORDS MANAGEMENT SYSTEM</h3></center>



					
						<?php 
						
						include('session.php');
						include('dbconnect.php');
						
						$query= mysqli_query($dbcon,"select * from userlogin where staffid = '$session_id'")or die(mysqli_error());
						$row = mysqli_fetch_array($query);
						
						?>
                            <span class="pull-right">
                               <?php echo $row['surname']." ". $row['othernames']." (" .$row['staffid'].")";  ?> 
                                 
                                  <a href="profile.php" class="btn btn-primary"><i class="icon-signout icon-large text-white"></i>&nbsp;Edit</a>
                                   <a href="logout.php" class="btn btn-primary"><i class="icon-signout icon-large text-white"></i>&nbsp;Logout</a>
                                  </span>
                             
                    </div>




			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="index.php">
									<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
							</div>
							
						</div>
					</div>
					
					
				
					<div class="col-md-3">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="caseview.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								View Cases</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					

					
					
				</div>
			</div>
		</div>
	</div>