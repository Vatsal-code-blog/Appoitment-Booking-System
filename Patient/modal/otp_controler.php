<?php
session_start();
if (isset($_SESSION['patient_id']))
    {
require ('textlocal.class.php');
include('connection.php');
class Otp_controller extends Connection
{
	
	function send_otp()
	{
		if (isset($_POST['mobile'])) 
		{
			$mobile = $_POST['mobile'];
            $get_mobile = "SELECT `patient_contact` FROM `patient_info` WHERE `patient_contact`= '$mobile' ";
            $results = mysqli_query($this->con,$get_mobile);
            if(mysqli_num_rows($results)>0) 
            {
                $_SESSION['patient_mobile'] = $mobile;
                $apiKey = urlencode('lK891VmlJ14-qCmGXQlMKuwvHsqLC6HtR5Q40g57SE');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile
                );
                $sender = 'TXTLCL';
                $otp = rand(100000, 999999);
                echo $otp;
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password For Forgot Psssword is " . $otp."  "." From Team Doctors Lab Appoitment System"."  "."Thank You!!!"." "."";
                
                try{
                    $response = $Textlocal->sendSms($numbers, $message, $sender);
                    echo $success = true;
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }   
            }
            else
            {
                echo "Please Enter Valid Registered Mobile Number";
            }

			
		}
		elseif (isset($_POST['otp'])) 
		{
			$otp = $_POST['otp'];
                
                if ($otp == $_SESSION['session_otp']) 
                {
                    unset($_SESSION['session_otp']);
                    echo $success = true;

                } 
                else 
                {
                    echo "OTP Is not Matched";
                }
		}
	}
}
$OTP = new Otp_controller();
$OTP -> send_otp();
}
    else
    {
        header("Location:logIn.php");
    }
?>