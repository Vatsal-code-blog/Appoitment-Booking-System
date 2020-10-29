<?php
include('connection.php');
class Register_patient extends Connection
{
	
	function add_patient()
	{
		 $name = $_POST['name'];
		 $birthday = $_POST['birthday'];
		 $gender = $_POST['gender'];
		 $guardian = $_POST['guardian'];
		 $contact_no = $_POST['contact_no'];
		 $email = $_POST['email'];
		 $address = $_POST['address'];
		 $blood_group = $_POST['blood_group'];
		 $occupation = $_POST['occupation'];
		 $password = $_POST['password'];

		 $add_new_patient = "INSERT INTO `patient_info`(`patient_name`, `patient_birthdate`, `patient_gender`, `patient_gardian_name`, `patient_contact`, `patient_email`, `patient_city`, `patient_blood_group`, `patient_occupation`, `patient_password`) VALUES ('$name','$birthday','$gender','$guardian','$contact_no','$email','$address','$blood_group','$occupation','$password') ";
           
      if(!mysqli_query($this->con,$add_new_patient))
			{
				echo "Error :".mysqli_error($this->con);
			}
			else
			{
				echo $success = true;
			}
	}
}

$patient = new Register_patient();
$patient -> add_patient();

?>