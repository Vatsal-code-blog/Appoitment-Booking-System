<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pay Now </title>

    <!-- Icons font CSS-->
    <link href="../view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../view/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main_reg CSS-->
    <link href="../view/css/main_reg.css" rel="stylesheet" media="all">
    <style type="text/css">

input[type=text] {
 font-size: 17px;
}
  </style>
</head>

<body>
<?php
include('connection.php');
class Get_Patient_appoitment_details extends Connection
{
	
	function Get_details()
	{
        $patient_id = $_GET['patient_id'];
        $query_get_patient = " SELECT `appointment_id` FROM `appointment_booking` WHERE `patient_id`='$patient_id' ";
         $get_patient = mysqli_query($this->con,$query_get_patient);
             while ($rows = mysqli_fetch_array($get_patient)) 
           {
                $appointment_id[] = $rows['appointment_id'];
           }
           $appointment_Id = max($appointment_id);

           $query_get_details = " SELECT * FROM `appointment_booking` WHERE `appointment_id`='$appointment_Id' ";
                    $results = mysqli_query($this->con,$query_get_details);
                     if (mysqli_num_rows($results) > 0) 
                       {
                       while ($row = mysqli_fetch_array($results))
                       {
                ?>
                        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Here Your Appoitment Details</h2>

                       <form id="get_details" method="post" action="redirect.php">


                            <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" value="<?php echo $row['appointment_id'];?>">
                            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                            <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
                            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">


                        <div class="input-group">
                          <label>Patient ID : </label>
                            <input class="input--style-1" type="text" name="CUST_ID" id="CUST_ID" value="<?php echo $row['patient_id']; ?>" autocomplete="off" readonly>
                        </div>

                        <div class="input-group">
                          <label>Patient Name : </label>
                            <input class="input--style-1" type="text" name="patient_name"
                            id="patient_name" value="<?php echo $row['patient_name']; ?>"  autocomplete="off" readonly>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <label>Patient Mobile : </label>
                                    <input class="input--style-1" type="text" name="patient_mobile" id="patient_mobile" value="<?php echo $row['patient_mobile']; ?>" autocomplete="off" readonly> 
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   <label>Patient Email : </label>
                                    <input class="input--style-1" type="text" placeholder="E-mail" name="patient_email" id="patient_email" value="<?php echo $row['patient_email']; ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <label>Doctor Name : </label>
                                    <input class="input--style-1" type="text" name="doctor_name" id="doctor_name" value="<?php echo $row['doctor_name']; ?>"  autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                   <label>Doctor's Fees : </label>
                                    <input class="input--style-1" type="text" name="TXN_AMOUNT" id="TXN_AMOUNT" value="<?php echo $row['doctor_fees']; ?>"  autocomplete="off" readonly> 
                                </div>
                            </div>
                        </div>

                        <div>
                                <div class="input-group">
                                   <label>Appoitment Date : </label>
                                    <input class="input--style-1" type="text" name="appointment_date" id="appointment_date" value="<?php echo $row['appointment_date']; ?>"  autocomplete="off" readonly>
                                </div>
                                <div class="input-group">
                                   <label>Appoitment Time : </label>
                                    <input class="input--style-1" type="text" name="appointment_time" id="appointment_time" value="<?php echo $row['appointment_time']; ?>"  autocomplete="off" readonly>
                                </div>
                        </div>
                        <input type="submit" name="btn_pay_now" class="btn btn--green" value="Check-Out" >
                    </form>
                    </div>
            </div>
        </div>
    </div>
              <?php             
                    }
                        }  
   
    }
}

$appointment = new Get_Patient_appoitment_details();
$appointment -> Get_details();
?>
</body>
</html>