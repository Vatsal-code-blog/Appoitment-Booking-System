<?php
include 'connection.php';
class Get_payment_details extends Connection
{
   function get_payment()
   {
    $patient_id = $_SESSION['patient_id'];

    $query_get_patient = " SELECT `appointment_id` FROM `appointment_booking` WHERE `patient_id`='$patient_id' ";
         $get_patient = mysqli_query($this->con,$query_get_patient);
             while ($rows = mysqli_fetch_array($get_patient)) 
           {
                $appointment_id[] = $rows['appointment_id'];
           }
           if (isset($appointment_id)) 
           {
             $appointments = count($appointment_id);
            
           for ($i=0; $i<$appointments; $i++)
            {
              $new_appoitment = $appointment_id[$i];

              $query_payment = " SELECT `appointment_id` ,`TXNID`, `TXNAMOUNT`, `TXNDATE_TIME` FROM `payment_invoice` WHERE `appointment_id`='$new_appoitment' ";
       
           $query_get_payment = mysqli_query($this->con,$query_payment);

           if (mysqli_num_rows($query_get_payment) > 0) 
           
           {
               $count = 1;
               while ($row = mysqli_fetch_array($query_get_payment)) 
               {
                   echo '<tr>
                   <td>'."#". $count.'</td>  
                   <td>'. $row['TXNID'].'</td>  
                   <td>'. $row['TXNAMOUNT'].'</td>  
                   <td>'. $row['TXNDATE_TIME'].'</td>
                   <td><center><a href="../modal/print_payment_receipt.php?appointment_id='.$row['appointment_id'].' " class="btn btn-link">Pdf</a></center> </td>
                   <tr>';
                   $count = $count+1;
               
               }
           
           }
            }
          }

              


       
       }
   
   }
   
   $get = new Get_payment_details();
   $get -> get_payment();                            

?>