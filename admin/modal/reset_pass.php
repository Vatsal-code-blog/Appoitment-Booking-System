<?php
session_start();
include('connection.php');
class Reset_pass extends Connection
{
	
	function reset_password()
	{
		$mobile = $_SESSION['mobile'];
		$pass = $_POST['pass1'];

		$query = "UPDATE `register_tbl` SET `password`='$pass' WHERE `mobile` = '$mobile' ";
		if(!mysqli_query($this->con,$query)) 
		{
			echo "Error :".mysqli_error();
		}
		else
		{
			echo $success = true;
		}
	}
}

$reset = new Reset_pass();
$reset -> reset_password();
?>