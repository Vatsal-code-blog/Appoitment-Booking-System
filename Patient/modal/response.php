<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if($isValidChecksum == "TRUE") 
{
	if ($_POST["STATUS"] == "TXN_SUCCESS") 
	{

		if (isset($_POST) && count($_POST)>0 )
		{
			$appointment_id = $_POST['ORDERID'];
			$TXNID = $_POST['TXNID'];
			$TXNAMOUNT = $_POST['TXNAMOUNT'];
			$PAYMENTMODE = $_POST['PAYMENTMODE'];
			$CURRENCY = $_POST['CURRENCY'];
			$TXNDATE = $_POST['TXNDATE'];
			$STATUS = $_POST['STATUS'];
			$GATEWAYNAME = $_POST['GATEWAYNAME'];
			$BANKTXNID = $_POST['BANKTXNID'];
			$BANKNAME = $_POST['BANKNAME'];

			$con = mysqli_connect("localhost","root","","appointment_booking_system");

			$insert_payment_query = " INSERT INTO `payment_invoice`(`appointment_id`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE_TIME`, `STATUS`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`) VALUES ('$appointment_id','$TXNID','$TXNAMOUNT','$PAYMENTMODE','$CURRENCY','$TXNDATE','$STATUS','$GATEWAYNAME','$BANKTXNID','$BANKNAME') ";

					if (mysqli_query($con,$insert_payment_query)) 
					{
						$update_status = " UPDATE `appointment_booking` SET `payment_status`='1' WHERE `appointment_id`='$appointment_id' ";

						if (mysqli_query($con,$update_status)) 
						{
							?>
						<script type="text/javascript">
							swal({
		                              title: "Thank You !!!",
		                              text: "Your Appoitment Has Been Booked successfully",
		                              icon: "success",
		                              button: true,
		                            })
		                            .then((willredirect) => {
		                              if (willredirect) {
		                              	window.location = '../view/appoitment_status.php';
		                              }
		                            });
						</script>
					   <?php
						}
					
					}
					else
					{
						echo "Error :".mysqli_error($con);
					}
		}
    }
    else
		{
		        echo "transaction Error :".mysqli_error($con);
				$delete_appoitment = " DELETE FROM `appointment_booking` WHERE `appointment_id`='$appointment_id' ";
				if (mysqli_query($con,$delete_appoitment)) 
				{
					?>
					<script type="text/javascript">
						swal({
                              title: "Semething Went Wrong !!!",
                              text: "Please Try Again After SomeTime ",
                              icon: "error",
                              button: true,
                            })
                            .then((willredirect) => {
                              if (willredirect) {
                                 window.location = '../view/index.php';
                              }
                            });
					</script>

				<?php
				}
	    }



}
else 
{
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>