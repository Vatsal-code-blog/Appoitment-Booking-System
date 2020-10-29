<?php

include('connection.php');
session_start();
class LogIn extends Connection
{
	
	function verify()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = " SELECT * FROM `patient_info` WHERE `patient_email` = '$username' && `patient_password`='$password' ";
		$results = mysqli_query($this->con,$query);

		if(!$results) 
		{
			echo "Error :".mysqli_error($this->con);
		}
		else
		{
			if(mysqli_num_rows($results)>0)
			{	
				while ($row=mysqli_fetch_assoc($results)) 
				{
					$patient_id = $row['patient_id'];
					$patient_name = $row['patient_name'];
					$patient_birthdate = $row['patient_birthdate'];
					$patient_gender = $row['patient_gender'];
					$patient_gardian_name = $row['patient_gardian_name'];
					$patient_contact = $row['patient_contact'];
					$patient_email = $row['patient_email'];
					$patient_city = $row['patient_city'];
					$patient_blood_group = $row['patient_blood_group'];
					$patient_occupation = $row['patient_occupation'];
					$patient_password = $row['patient_password'];
					
				}
				$_SESSION['patient_id'] = $patient_id;
				$_SESSION['patient_name']= $patient_name;
				$_SESSION['patient_birthdate']=$patient_birthdate;
				$_SESSION['patient_gender'] = $patient_gender;
				$_SESSION['patient_gardian_name']=$patient_gardian_name;
				$_SESSION['patient_contact'] = $patient_contact;
				$_SESSION['patient_email']= $patient_email;
				$_SESSION['patient_city']=$patient_city;
				$_SESSION['patient_blood_group'] = $patient_blood_group;
				$_SESSION['patient_occupation']=$patient_occupation;
				$_SESSION['patient_password']=$patient_password;
				echo $success = true;
			}
			else
			{
				echo "username Password Is wrong";
			}	

		}
	}
}

$user = new LogIn();
$user -> verify();

?>