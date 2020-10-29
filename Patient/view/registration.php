<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Patient Registration </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main_reg CSS-->
    <link href="css/main_reg.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Here</h2>
                    <h4 style="color: red">Note : All Fields Are Required.
                    <br> Please Fill Be CareFull....</h4><br><br>
                    
                    <form id="register_patient" onsubmit="return false">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name" name="name" id="name"  autocomplete="off">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Birthday" name="birthday" id="birthday" autocomplete="off" >
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" id="gender" >
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name of guardian (in case the patient is a minor)" name="guardian"
                            id="guardian"  autocomplete="off">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Contact number" name="contact_no" id="contact_no" autocomplete="off"> 
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="E-mail" name="email" id="email" autocomplete="off">
                                </div>
                            </div>
                        </div>

                         <div class="input-group">
                            <input class="input--style-1" type="Address" placeholder="City ( Current Location )" name="address" id="address"  autocomplete="off">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Blood Group" name="blood_group" id="blood_group"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Occupation" name="occupation" id="occupation"  autocomplete="off"> 
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="Enter Password" name="password" id="password"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="Confirm Password" name="conf_password" id="conf_password"  autocomplete="off"> 
                                </div>
                            </div>
                        </div>

                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Enter OTP Sent Your Mobile number" name="OTP" id="OTP" autocomplete="off"> 
                                </div>
                                 <p id="opt_status"></p> 
                            </div>
                            <div class="col-2">
                                <div class="">
                                     <button class="btn btn--green" id="get_otp">Get OTP</button>
                                </div>
                            </div>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="register">Register</button>
                        </div>
                    </form>
                    <div class="register-link">
                        <center> Already have account?
                        <a style="color: blue;" href="logIn.php">Sign-In Here</a><br><br>
                        </center>
                    </div>
                    <div>
                        <center>
                            <p id="paragraph"></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

    <script type="text/javascript">

         $('#get_otp').click(function(){
            var contact_no = $('#contact_no').val();

        $.ajax({
                url : '../modal/otp_controler.php',
                method : 'post',
                data : {
                    contact_no : contact_no                             
                },
                success : function(data,status)
                {
                    if (data == 1)
                    {
                        $('#opt_status').html("OTP Sent successfull").show().fadeOut(10000).css("color","green");
                    }
                    else
                    {
                        $('#opt_status').html(data).show().fadeOut(10000).css("color","red");
                    } 
                }

             });

        });

    $('#register').click(function(){
         $('#paragraph').html("");

        var name = $('#name').val();
        var birthday = $('#birthday').val();
        var gender = $('#gender').val();
        var guardian = $('#guardian').val();
        var contact_no = $('#contact_no').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var blood_group = $('#blood_group').val();
        var occupation = $('#occupation').val();
        var password = $('#password').val();
        var conf_password = $('#conf_password').val();
        var OTP = $('#OTP').val();

        $uppercase = password.match(/[A-Z]/);
        $lowercase = password.match(/[a-z]/);
        $number    = password.match(/[0-9]/);
        $password_len = $.trim(password).length;
    
            if (name != '' && birthday != '' && gender != 'Gender' && contact_no != '' && email != '' && address != '' && blood_group != '' && occupation != '' && password != '' && conf_password != '' && OTP != '') 
            {
                if($uppercase && $lowercase && $number && $password_len >= 8) 
                {
                    if (password == conf_password) 
                    {
                            $.ajax({ 
                                url : '../modal/otp_controler.php',
                                method : 'post',
                                data : {
                                    OTP : OTP
                                },
                                success : function(response,status)
                                {
                                    if (response == 1) 
                                    {
                                         $.ajax({
                                            url : '../modal/register_patient.php',
                                            method : 'post',
                                            data : {
                                                name : name,
                                                birthday : birthday,
                                                gender : gender,
                                                guardian : guardian,
                                                contact_no : contact_no,
                                                email : email,
                                                address : address,
                                                blood_group : blood_group,
                                                occupation :occupation,
                                                password : password                                
                                            },
                                            success : function(data,status)
                                            {
                                                if (data == 1) 
                                                {
                                                    window.location = 'logIn.php';
                                                }
                                            }

                                         });
                                    }
                                    else
                                    {
                                        $('#paragraph').html(response).show().fadeOut(10000).css("color","red");
                                    }
                                }
                            }); 
                      
                    }
                    else
                    {
                        $('#paragraph').html("Password Is Not Match").show().fadeOut(10000).css("color","red");
                    }
                }
                else
                {
                     $('#paragraph').html("Please Choose Any Strong Password").show().fadeOut(10000).css("color","red");
                }
            }
            else
            {
                $('#paragraph').html("Blank Field Is not Allowd").show().fadeOut(10000).css("color","red");
            }

    });

    </script>

</body>

</html>
