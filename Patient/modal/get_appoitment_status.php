<?php
include 'connection.php';
include('libs/phpqrcode/qrlib.php'); 
class Get_appoitment_patient extends Connection
{
   function get_appoitment()
   {
    $patient_id = $_SESSION['patient_id'];
   $query_appoitment = " SELECT * FROM `appointment_booking` WHERE `patient_id`='$patient_id' && payment_status='1' ";
       $query_get_appoitment = mysqli_query($this->con,$query_appoitment);

           if (mysqli_num_rows($query_get_appoitment) > 0) 
           {
               $count = 1;
               while ($row = mysqli_fetch_array($query_get_appoitment))   
               {
                   echo '<tr>
                   <td>'."#". $count.'</td>  
                   <td>'. $row['doctor_name'].'</td>  
                   <td>'. $row['doctor_fees'].'</td> 
                   <td>'. $row['appointment_date'].'</td>  
                   <td>'. $row['appointment_time'].'</td>
                   ';
                   $count = $count+1;

                    $tempDir = 'temp/'; 
                   $patient_name = $row['patient_name'];
                   $filename = $row['appointment_date'];
                   $doctor_name = $row['doctor_name'];
                   $doctor_fees = $row['doctor_fees'];
                   $appointment_date = $row['appointment_date'];
                   $appointment_time = $row['appointment_time'];
                   $space = "                                           ";
                   $space1 = "                                           ";
                   $space2 = "                                           ";

                  $codeContents = 'Your Name : '.$patient_name.'Doctor Name : '.$doctor_name.'  '.$space.'Doctor Fees : '.$doctor_fees.'  '.$space1.'Appointment Date : '.$appointment_date.'  '.$space2.'Appointment Time : '.$appointment_time;
                     
                    QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);

                    if(!isset($filename))
                    {
                      $filename = "TechSu";
                    }
          ?>
              <td>
              <center><?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?></center></td>
          </td>
               
          <?php
                }
           
           }      
       }
   
   }
   
   $get = new Get_appoitment_patient();
   $get -> get_appoitment();                            