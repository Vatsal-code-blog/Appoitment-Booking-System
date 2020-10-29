<?php
include 'connection.php';
class Get_departments extends Connection
{
   function get_all_depts() 
   {
   
   $get_depts = "SELECT * FROM `department` ";
       
       $query_get_depts = mysqli_query($this->con,$get_depts);

           
           if (mysqli_num_rows($query_get_depts) > 0) 
           
           {
               $count = 1;
               while ($row = mysqli_fetch_array($query_get_depts)) 
               
               {
               	    echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                           <center><i class="fas fa-plus-circle fa-10x"></i><br><br></center>

                        </div>
                        <a href="fetch_services.php?dept_id='.$row['dept_id'].'">
                        <div class="team-caption">
                            <center><h3>'. $row['dept_name'].'</a></h3></center>
                        </div>
                        </a>
                    </div>
                </div>';               
               }
           
           }
       
       }
   
   }
   
   $add = new Get_departments();
   
   $add -> get_all_depts();                            

?>