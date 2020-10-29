<?php

	include('connection.php');

	class Create_offer extends Connection
	{
		public $offer_id;
		function get_offer()
		{
			$offer = " SELECT `offer_id` FROM `offers_tbl` ";
			$results = mysqli_query($this->con,$offer);
			if (mysqli_num_rows($results) > 0) 
			{
				while ($row = mysqli_fetch_array($results)) 
				{
					$offer_id[] = $row['offer_id'];
				}
			}
			$max = max($offer_id);

			$query_get_offer = "SELECT * FROM `offers_tbl` WHERE `offer_id`='$max' ";
			$result = mysqli_query($this->con,$query_get_offer);
			if (mysqli_num_rows($result) > 0) 
			{
				while ($row = mysqli_fetch_array($result)) 
				{
					echo $row['offer_name']."<br>";
					echo $row['offer_description'];
				}
			}
		}
	}

$offer = new Create_offer();
$offer -> get_offer();

?>