<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/doctor.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Forgot Password
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" onsubmit="return false" id="log_in_form">

					<div class="wrap-input100 validate-input" data-validate = "Enter Mobile Number">
						<input class="input100" type="text" name="mobile" id="mobile" placeholder="Registered Mobile Number" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn btn btn-primary" id="otp">
							Get OTP
						</button><br>
					</div>
					<p id="otp_status"></p>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="opt_text" id="opt_text" placeholder="Enter OTP" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" id="btn_reset">
							Reset My Password
						</button><br><br><br>
					</div>
					<center><p id="error"></p></center>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

	<script type="text/javascript">
    	$('#otp').click(function(){

    		var mobile = $('#mobile').val();
    		if (mobile.length == 10 && mobile != '') 
    		{
    			$.ajax({
    				url : '../modal/otp_controler.php',
    				method : 'post',
    				data : { 
    					mobile : mobile
    				},
    				success : function(response,status) 
    				{
    					alert(response);
    					if (response == 1) 
			             {
			                $("#otp_status").html('OTP has Send successfull').css("color","green");
			             }
			             else
			             {
			                 $("#otp_status").html(response).css("color","red");
			             }
						
					}
    			});
    		}
    		else
    		{
    			$('#otp_status').html("Please Enter Valid Mobile Number").css("color","red");
    		}

    	});

    	$('#btn_reset').click(function(){

    		var otp = $('#opt_text').val();
    		if (otp != '') 
    		{
    			$.ajax({
    				url : '../modal/otp_controler.php',
    				method : 'post',
    				data : { 
    					otp : otp
    				},
    				success : function(response,status) 
    				{
						if (response == true) 
			             {
			                window.location = 'update_password.php';
			             }
			             else
			             {
			                 $('#error').html(response).css("color","red");
			             }
					}
    			});
    		}
    		else
    		{
    			$('#error').html("Please Enter Valid OTP").css("color","red");
    		}

    	});
    </script>

</body>
</html>