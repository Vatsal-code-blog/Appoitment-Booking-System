<?php
    session_start();
    if (isset($_SESSION['patient_id']))
    {
        ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>FAQ Section</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <style >
			#flip{
			padding: 5px;
			text-align: center;
			width: 1000px;
			height: 50px;
			border: solid 1px;
			font-size: 30px;
			background-color: lightblue;

		}

			#panel{
			padding: 20px;
			width: 1000px;
			font-size: 20px;
			border: solid 1px;
			text-align: left;
			display: none;
		}

		#flip2{
			padding: 5px;
			text-align: center;
			width: 1000px;
			height: 50px;
			border: solid 1px;
			font-size: 30px;
			background-color: lightblue;
		}

			#panel2{
			padding: 20px;
			width: 1000px;
			font-size: 20px;
			border: solid 1px;
			text-align: left;
			display: none;
		}
		#flip3{
			padding: 5px;
			text-align: center;
			width: 1000px;
			height: 50px;
			border: solid 1px;
			font-size: 30px;
			background-color: lightblue;
		}

			#panel3{
			padding: 20px;
			width: 1000px;
			font-size: 20px;
			border: solid 1px;
			text-align: left;
			display: none;
		}
		#flip4{
			padding: 5px;
			text-align: center;
			width: 1000px;
			height: 50px;
			border: solid 1px;
			font-size: 30px;
			background-color: lightblue;
		}

			#panel4{
			padding: 20px;
			width: 1000px;
			font-size: 20px;
			border: solid 1px;
			text-align: left;
			display: none;
		}

	</style>
</head>
<body>
    <?php
        include('header.php');
    ?>
  <div style="background-color: lightblue; opacity: 1.6;">
    <center><h1>FAQ Section</h1></center> 
  </div><br><br>
  <center>
	<div id="flip"><b>How do I book an appointment at Apollo Clinic?</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-chevron-down"></i></div>
	<p id="panel">You can<br>
		a) Call our Customer Care number: 1860 500 7788<br>
		b) Or send an SMS/whatsapp to 9701003333<br>
		c) Or log on to www.apolloclinic.com and request an appointment<br>
		d) Or directly walk in to the Clinic</p><br>

	<div id="flip2"><b>Is fasting required for my test?</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-chevron-down"></i></div>
	<div id="panel2">Fasting for a test requires you to have no food or drink, except water, for 12 hours prior to sample collection. However not all tests require fasting. Please call us on 1860 500 7788 for queries.
	</div><br>

	<div id="flip3"><b>Are all the Doctors available round-the-clock?</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-chevron-down"></i></div>
	<div id="panel3">No, the doctors are available as per pre-determined consultation hours. The relevant information can be checked from askapollo.com or our Call Centre 1860 500 7788.
	</div><br>

	<div id="flip4"><b>Do you have the facility of sample pickup for diagnostics?</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-chevron-down"></i></div>
	<div id="panel4">No, We Will Working On It.
	</div><br>
</center>



    <?php
        include('footer.php');
    ?>
    <script>
	$(document).ready(function(){

		$('#flip').click(function(){
			$('#panel').slideToggle('slow');
			$('#panel2').slideUp('slow');
			$('#panel3').slideUp('slow');
			$('#panel4').slideUp('slow');
			
		});

		$('#flip2').click(function(){
			$('#panel2').slideToggle('slow');
			$('#panel').slideUp('slow');
			$('#panel3').slideUp('slow');
			$('#panel4').slideUp('slow');
		});
		$('#flip3').click(function(){
			$('#panel3').slideToggle('slow');
			$('#panel').slideUp('slow');
			$('#panel2').slideUp('slow');
			$('#panel4').slideUp('slow');
		});
		$('#flip4').click(function(){
			$('#panel4').slideToggle('slow');
			$('#panel').slideUp('slow');
			$('#panel2').slideUp('slow');
			$('#panel3').slideUp('slow');
		});
	});
</script> 
    
    </body>
</html>
<?php
    }
    else
    {
        header("Location:logIn.php");
    }
?>