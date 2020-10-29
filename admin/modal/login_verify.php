<?php

include('connection.php');
session_start();
class LogIn extends Connection
{
	
	function verify()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = " SELECT * FROM `register_tbl` WHERE `email`='$email' && `password`='$password' ";
		$results = mysqli_query($this->con,$query);

		if(!$results) 
		{
			echo "Error :".mysqli_error();
		}
		else
		{
			if(mysqli_num_rows($results)>0)
			{	
				while ($row=mysqli_fetch_assoc($results)) 
				{
					$register_id = $row['register_id'];
					$username = $row['username'];
					$mobile = $row['mobile'];
					$email = $row['email'];
					$password = $row['password'];
					
				}
				$_SESSION['register_id'] = $register_id;
				$_SESSION['username']= $username;
				$_SESSION['mobile']=$mobile;
				$_SESSION['email'] = $email;
				$_SESSION['password']=$password;
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