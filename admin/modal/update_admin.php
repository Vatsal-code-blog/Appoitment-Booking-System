<?php
include('connection.php');
session_start();
class Update_admin extends Connection
{
	
	function update()
	{
		 $update_username = $_POST['update_username'];
		 $update_email = $_POST['update_email'];
		 $update_mobile = $_POST['update_mobile'];
		 $update_password = $_POST['update_password'];
		 $register_id = $_SESSION['register_id'];

		 $query = " UPDATE `register_tbl` SET `username`='$update_username',`mobile`='$update_mobile',`email`='$update_email',`password`='$update_password' WHERE `register_id`='$register_id' ";


		 if(!mysqli_query($this->con,$query)) 
		{
			echo "Error :".mysqli_error($this->con);
		}
		else
		{
			$_SESSION['username']= $update_username;
			$_SESSION['mobile']=$update_mobile;
			$_SESSION['email'] = $update_email;
			$_SESSION['password']=$update_password;
			echo $sucsess = true;
		}

	}
}
$update = new Update_admin();
$update -> update();

?>