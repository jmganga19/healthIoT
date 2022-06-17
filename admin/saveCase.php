

<?php
require_once('../database/Database.php');
$db = new Database(); 

if(session_status() == PHP_SESSION_NONE)
{
  include('session.php');
   include('dbconnect.php');
}



//array created to handle the error msgs
$errors = array();

// array to hold the json econded data
$output = array('error' => false);


  //Variables to hold the form data

 $carPlateNo=$_POST['plate_no']; 
 $crimeType=$_POST['CType']; 
 $timeReported=$_POST['time']; 
 $location=$_POST['location'];
 $status=$_POST['status'];
 



$sql = "INSERT INTO caseDetail (plate_no, crime_type, date_added, location, status)
                                       VALUES('$carPlateNo','$crimeType','$timeReported','$location','$status'); ";

                   $success = mysqli_query($dbcon,$sql);

                         if( $success )

                         {
                             
                            echo "<script type='text/javascript'>alert('Case  Added');
      document.location='caseview.php'</script>";
                      }
            



        

        ?>
