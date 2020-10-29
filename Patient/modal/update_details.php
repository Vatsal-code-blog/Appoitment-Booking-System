<?php
session_start();
include('connection.php');

class Update_details extends Connection
{
	function update_method()
	{
		$patient_id = $_POST['patient_id'];
		$name = $_POST['name'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$guardian = $_POST['guardian'];
		$contact_no = $_POST['contact_no'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$blood_group = $_POST['blood_group'];
		$occupation = $_POST['occupation'];
		$password = $_POST['password'];		

		$update_query = " UPDATE `patient_info` SET `patient_name`='$name',`patient_birthdate`='$birthdate',`patient_gender`='$gender',`patient_gardian_name`='$guardian',`patient_contact`='$contact_no',`patient_email`='$email',`patient_city`='$city',`patient_blood_group`='$blood_group',`patient_occupation`='$occupation',`patient_password`='$password' WHERE patient_id='$patient_id' ";
		if (!mysqli_query($this->con,$update_query)) 
		{
			echo "Error :".mysqli_error($this->con);
		}
		else
		{
			 $_SESSION['patient_id'] = $patient_id;
				$_SESSION['patient_name']= $name;
				$_SESSION['patient_birthdate']=$birthdate;
				$_SESSION['patient_gender'] = $gender;
				$_SESSION['patient_gardian_name']=$guardian;
				$_SESSION['patient_contact'] = $contact_no;
				$_SESSION['patient_email']= $email;
				$_SESSION['patient_city']=$city;
				$_SESSION['patient_blood_group'] =$blood_group;
				$_SESSION['patient_occupation']=$occupation;
				$_SESSION['patient_password']=$password;
			echo $success = true;
		}
	}
}
$update = new Update_details();
$update -> update_method();

?>