<?php
include('connection.php');
class Sent_enquire extends Connection
{
	
	function enquire_sent()
	{
		$patient_id = $_POST['patient_id'];
		 $name = $_POST['name'];
		 $contact_no = $_POST['contact_no'];
		 $email = $_POST['email'];
		 $enquire = $_POST['enquire'];
		 $date = date("d-m-y");

		 $query_enquire = " INSERT INTO `enquire_tbl`(`patient_id`, `patient_name`, `date`, `enquire_text`,`patient_phone`,`patient_email`) VALUES ('$patient_id','$name','$date','$enquire','$contact_no','$email') ";
           
      if(!mysqli_query($this->con,$query_enquire))
			{
				echo "Error :".mysqli_error($this->con);
			}
			else
			{
				echo $success = true;
			}
	}
}

$patient = new Sent_enquire();
$patient -> enquire_sent();

?>