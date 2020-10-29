<?php
include 'connection.php';
class Get_doctors extends Connection
{
   function get_all_doctors() 
   {
   
   $get_doctors = "SELECT * FROM `employee` ";
       
       $query_get_doctors = mysqli_query($this->con,$get_doctors);

           
           if (mysqli_num_rows($query_get_doctors) > 0) 
           
           {
               $count = 1;
               while ($row = mysqli_fetch_array($query_get_doctors)) 
               
               {
                   $dept = $row['dept_id'];
                   $get_dept = " SELECT `dept_name` FROM `department` WHERE `dept_id`='$dept' ";
                   $query_get_dept = mysqli_query($this->con,$get_dept);
                   $rows = mysqli_fetch_array($query_get_dept);

               	    echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                           <center><i class="fas fa-user-md fa-10x"></i><br><br></center>
                        </div>
                        <div class="team-caption">
                            <a href="profile_doctor.php?doctor_id='.$row['emp_id'].'"><center><h3>'. $row['emp_name'].'</a></h3></center></a>
                           <a href="profile_doctor.php?doctor_id='.$row['emp_id'].'"> <span>'. $rows['dept_name'].'</span></a>
                        </div>
                    </div>
                </div>';               
               }
           
           }
       
       }
   
   }
   
   $add = new Get_doctors();
   
   $add -> get_all_doctors();                            

?>