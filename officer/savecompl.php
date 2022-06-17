

<?php
require_once('database/Database.php');
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

  

if(empty($_POST['patientname'])){
               array_push($errors, "The patient name cannot be empty, ensure is entered");
              }
              else{ 
              $patientName = $_POST['patientname'];
            }
            if(empty($_POST['gender'])){
               array_push($errors, "The gender field cannot be empty, ensure is entered");
              }
              else{ 
              $gender = $_POST['gender'];
            }
            if(empty($_POST['dates'])){
              array_push($errors, "The date field cannot be empty, ensure is entered");
             }
             else{ 
             $date = $_POST['dates'];
           }

           if(empty($_POST['weights'])){
            array_push($errors, "The weight field cannot be empty, ensure is entered");
           }
           else{ 
           $weight = $_POST['weights'];
         }

             
              if(empty($_POST['tel'])){
                array_push($errors,"The  tel cannot be empty, ensure is entered");
               
              }
              else{ 
              $tel=$_POST['tel'];
               }
           
              if(empty($_POST['department']) ){
                array_push($errors,"The department field cannot be empty, ensure is entered");
              }
              else{ 
              $department=$_POST['department'];
               }
             
               if(empty($_POST['heights']) ){
                array_push($errors,"The height field cannot be empty, ensure is entered");
              }
              else{ 
              $height=$_POST['heights'];
               }
             
              if(empty($_POST['temperatures'])){
                array_push($errors,"The Temperature field cannot be empty, ensure is entered");
               
              }
              else{ 
              $temperature=$_POST['temperatures'];
               }
             
             
              if(empty($_POST['locations'])){
               array_push($errors,"The  location field cannot be empty, ensure is entered");
                }

              else{ 
              $location=$_POST['locations'];
               }

              if(empty($_POST['ages'])){
                array_push($errors,"The age field cannot be empty, ensure is entered");
              
              }
              else{ 
              $age=$_POST['ages'];
               }
             
                if($errors){

                      $output = array('error' => true, $errors);


                    }

                 else{  
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
                    VALUES( $patientName, $gender, $date, $weight, $temperature, $height, $department, $tel, $location, $age); ";
                  
                    $result = mysqli_query($dbcon,$sql);
                    if( $result )
                
                                         {
                                             
                                            echo "<script type='text/javascript'>alert('Patient details Added');
                      document.location='user.php'</script>";
                                      }
                            
                  }

                         
               }



        echo json_encode($output);

        $db->Disconnect();
        ?>
