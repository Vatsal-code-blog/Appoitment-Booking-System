<?php
class Get_times extends Connection
{ 
   function get_time()   
   {
   
   $query_time = "SELECT * FROM `timming_doctor`";
       
       $query_get_time = mysqli_query($this->con,$query_time);

           
           if (mysqli_num_rows($query_get_time) > 0) 
           
           {
               while ($row = mysqli_fetch_array($query_get_time)) 
               
               {
                  echo '<tr> 
                  <option>'.$row['start_time']." - ".$row['end_time'].'</option>                   
                   <tr>';
               }
           
           }
       
       }
   
   }
   
   $getdept = new Get_times();
   $getdept -> get_time();                            

?>