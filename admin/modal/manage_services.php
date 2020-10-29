<?php
include('connection.php');
class Manage_service extends Connection
{
	
	function update_service()
	{
		if (isset($_POST['service_name']) && isset($_POST['service_department'])) 
		{
			$service_id = $_POST['service_id'];
			$service_name = $_POST['service_name'];
			$service_department = $_POST['service_department'];
			$service_price = $_POST['service_price'];

			$query_update = " UPDATE `services_list` SET `service_name`='$service_name',`service_department`='$service_department',`service_price`='$service_price' WHERE `service_id`='$service_id' ";
			if(!mysqli_query($this->con,$query_update)) 
			{
				echo "Error :".mysqli_error($this->con);
			}
			else
			{
				echo $success = true;
			}
		}
		
	}
	
	function delete_service()
	{
		if (isset($_GET['delete_id'])) 
		{
			$delete_id = $_GET['delete_id'];

			$delete_query = " DELETE FROM `services_list` WHERE `service_id`= '$delete_id' ";

			if(!mysqli_query($this->con,$delete_query)) 
			{
				echo "Error :".mysqli_error($this->con);
			}
			else
			{
				header("Location:../view/manage_services.php");
			}

		}
	}
}
$manage_labs = new Manage_service();
$manage_labs -> update_service();
$manage_labs -> delete_service();

?>