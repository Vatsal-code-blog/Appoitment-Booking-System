<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
<link href="css/theme.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                    <div> <h3>Appointment Booking System </h3></div>
            </div>
        </aside>

         <header class="header-desktop">
            <h3 style="font-family: cursive;">
                <center> Admin Reset Password </center> 
            </h3>
        </header>

        <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="margin-top: 200px; margin-left: 100px;">
                            <form action="#"  onsubmit="return false">
                                <div class="form-group">
                                    <label>Enter New Password</label>
                                    <input class="au-input au-input--full" type="Password" id="pass1" name="pass1" placeholder="Enter New Password">
                                </div><br>
                                <div class="form-group">
                                    <label>Enter Password Again</label>
                                    <input class="au-input au-input--full" type="Password" id="pass2" name="pass2" placeholder="Enter Password Again">
                                </div><br>
                                <div>
                                    <p id="error"></p>
                                </div>
                                <input type="submit" name="btn_reset" id="btn_reset" value="Reset Password" class="au-btn au-btn--block au-btn--green m-b-20">
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
    	$('#btn_reset').click(function(){

    		var pass1 = $('#pass1').val();
    		var pass2 = $('#pass2').val();

    		if(pass1 != '' && pass2 != '') 
    		{
    			if (pass1 == pass2) 
    			{
	    			$.ajax({
	    				url : '../modal/reset_pass.php',
	    				method : 'post',
	    				data : { 
	    					pass1 : pass1
	    				},
	    				success : function(response,status) 
	    				{
							 if (response == 1) 
				             {
				                window.location = 'login.php';
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
    				$('#error').html("Password Does Not Match").css("color","red");
    			}
    		
    		}
    		else
    		{
    			$('#error').html("Please Set Any valid Password").css("color","red");
    		}
    		

    	});
    </script>


</body>
</html>