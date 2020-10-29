
<!DOCTYPE html>
<html>
<head>
	<title>Print Payment Receipt Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 style=" text-align: center; ">Payment Receipt</h1>
	<?php
include('../view/vendor/autoload.php');
include('connection.php');

class Get_records extends Connection
{
	
	function Get_ords()
	{
		ob_start();
		$output = '';
	$appointment_id = $_GET['appointment_id'];

	$get_ord = "SELECT * FROM `appointment_booking` WHERE appointment_id = '$appointment_id' ";
	$results = mysqli_query($this->con,$get_ord);

		if (mysqli_num_rows($results) > 0) 
		{
			while ($rows = mysqli_fetch_array($results)) 
			{
				$appointment_id = $rows['appointment_id'];
	$output .= '
   <h1 style=" text-align: center; ">Payment Receipt</h1>
    <div class="container" style=" border:1px solid #d4d4d4; padding: 40px">
                  <strong>Appointment ID :</strong>
                  <label id="appointment_id ">'.$rows['appointment_id'].'</label><br><br>
               
                  <strong>Patient ID :</strong>
                   <label id="patient_id">'.$rows['patient_id'].'</label><br><br>
                
                   <strong>Patient Name :</strong>
                  <label id="patient_name">'.$rows['patient_name'].'</label><br><br>

                  <strong>Doctor Name :</strong>
                  <label id="doctor_name">'.$rows['doctor_name'].'</label><br><br>

                  <strong>Doctor Fees :</strong>
                  <label id="doctor_fees">'.$rows['doctor_fees'].'</label><br><br>

                  <strong>Patient Mobile No. :</strong>
                  <label id="patient_mobile">'.$rows['patient_mobile'].'</label><br><br>
                  <strong>Appointment Date:</strong>
                  <label id="appointment_date">'.$rows['appointment_date'].'</label><br><br>

                  <strong>Appointment Time :</strong>
                  <label id="appointment_time">'.$rows['appointment_time'].'</label><br><br>

            <table width="100%" border="1" cellpadding="5" cellspacing="0"> 
          <tr>
            <th># </th>
            <th>Transaction ID</th>
            <th>Amount</th>
            <th>Payment Mode </th>
            <th>Currency </th>
            <th>Transaction Date & Time </th>
            <th> Status </th>
            <th>Bank Name</th>
            
          </tr>
          ';
      			$get_ord_items = "SELECT * FROM `payment_invoice` WHERE appointment_id = $appointment_id ";
				$results_items = mysqli_query($this->con,$get_ord_items);

				$counter = 1;

				if (mysqli_num_rows($results_items) > 0) 
				{
					while ($row = mysqli_fetch_array($results_items)) 
					{
						$Grand_total = $row['TXNAMOUNT'];
					$output .= '
						   echo "<tr>
						          <td>'.$counter .'</td>
						          <td>'. $row['TXNID'].'</td> 
						          <td>'. $row['TXNAMOUNT'].'</td>
						          <td>'. $row['PAYMENTMODE'].'</td>
						          <td>'. $row['CURRENCY'].'</td>
						          <td>'. $row['TXNDATE_TIME'].'</td>
						          <td>'. $row['STATUS'].'</td>
						          <td>'. $row['BANKNAME'].'</td>
						          <tr>";
						   ';
					$counter = $counter+1;
					}
				}
				 $output .= '
					  echo "echo "<tr>
					            <td colspan="7" style=" text-align: right; "><b> Grand Total </b></td>
					            <td>'.$Grand_total.'</td>
					           </tr>";

					           </table>

					           <div>
					           <br><br><br>
					           			<label>Thank - You </label>
					           </div>

      							</div>
					  
					  ';
			}
		}
			$body = ob_get_clean();
			$mpdf = new \Mpdf\Mpdf();
			$mpdf->WriteHTML($output);
			$mpdf->Output('Payment Receipt.pdf','D'); 
	}
}

$record = new Get_records();
$record -> Get_ords();

?>

</table>
</body>
</html>