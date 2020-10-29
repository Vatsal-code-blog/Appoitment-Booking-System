<?php
    session_start();
    if (isset($_SESSION['patient_id']))
    {
        ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Manage Profile</title>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php
        include('header.php');
    ?>
<main>
  <div style="background-color: lightblue; opacity: 1.6;">
    <center><h1>Manage My Profile</h1></center> 
  </div><br><br>
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>Edit Your Details Here</span>
                                        <h2>Manage Profile</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" onsubmit="return false">
                            <div class="row" style="font-size: 20px;">
                                <div class="form-box email-icon mb-30">
                                    <label>Patient ID :</label>
                                        <input type="text" name="patient_id" id="patient_id" value="<?php echo $_SESSION['patient_id']; ?>" readonly>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box subject-icon mb-30">
                                          <label>Patient Name :</label>
                                        <input type="text" name="name" id="name" placeholder="ENTER YOUR FULL NAME" value="<?php echo $_SESSION['patient_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                          <label>Patient Birthdate :</label>
                                        <input type="text" id="birthdate" name="birthdate"
                                           value="<?php echo $_SESSION['patient_birthdate']; ?>">
                                           
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                          <label>Patient Gender :</label>
                                        <select name="gender" id="gender">
                                            <option ><?php echo $_SESSION['patient_gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-box subject-icon mb-30">
                                          <label>Patient Guardian :</label>
                                        <input class="input--style-1" type="text" placeholder="Name of guardian (in case the patient is a minor)" name="guardian" id="guardian" value="<?php echo $_SESSION['patient_gardian_name'];  ?>"> 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <label>Patient Contact Number :</label>
                                        <input class="input--style-1" type="text" placeholder="Contact number" name="contact_no" id="contact_no" value="<?php echo $_SESSION['patient_contact'];  ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <label>Patient Email :</label>
                                        <input class="input--style-1" type="text" placeholder="E-mail" name="email" id="email" value="<?php echo $_SESSION['patient_email'];  ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <label>Patient Leaving City :</label>
                                       <input class="input--style-1" type="text" placeholder="Current City" name="city" id="city" value="<?php echo $_SESSION['patient_city'];  ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <label>Patient Blood Group :</label>
                                        <input class="input--style-1" type="text" placeholder="Blood Group" name="blood_group" id="blood_group" value="<?php echo $_SESSION['patient_blood_group'];  ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box subject-icon mb-30">
                                        <label>Patient Occupation :</label>
                                        <input class="input--style-1" type="text" placeholder="Occupation" name="occupation" id="occupation" value="<?php echo $_SESSION['patient_occupation'];  ?>">
                                    </div>
                                </div>
                                
                               <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <label>Password :</label>
                                        <input class="input--style-1" type="password" placeholder="Password" name="password" id="password" value="<?php echo $_SESSION['patient_password'];  ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <label>Confirm Password :</label>
                                        <input class="input--style-1" type="password" placeholder="Confirm Password" name="conf_password" id="conf_password" value="<?php echo $_SESSION['patient_password'];  ?>">
                                    </div>
                                </div>
                                <div class="submit-info">
                                        <button class="btn" type="submit" id="edit_details">Update <i class="ti-arrow-right"></i> </button>
                                    </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    
    </main>
    <?php
        include('footer.php');
    ?>

    <script type="text/javascript">
        

        $('#edit_details').click(function(){

        var patient_id = $('#patient_id').val();
        var name = $('#name').val();
        var birthdate = $('#birthdate').val();
        var gender = $('#gender').val();
        var guardian = $('#guardian').val();
        var contact_no = $('#contact_no').val();
        var email = $('#email').val();
        var city = $('#city').val();
        var blood_group = $('#blood_group').val();
        var occupation = $('#occupation').val();
        var password = $('#password').val();
        var conf_password = $('#conf_password').val();

        if (name != '' && birthdate != '' && gender != '' && contact_no != '' && email != '' && city != '' && blood_group != '' && occupation != '' && password != '' && conf_password != '')  
        {
            if (password == conf_password) 
             {
                 $.ajax({
                    url : "../modal/update_details.php",
                    method : "post",
                    data : {
                        patient_id : patient_id,
                        name : name,
                        birthdate : birthdate,
                        gender : gender,
                        guardian : guardian,
                        contact_no : contact_no,
                        email : email,
                        city : city,
                        blood_group : blood_group,
                        occupation : occupation,
                        password : password
                    },

                    success: function(data,status)
                    {
                        if (data == 1) 
                        {
                            swal({
                              title: "Profile Updated !!!",
                              text: "Your Account Details Has Updated successfully",
                              icon: "success",
                              button: true,
                            })
                            .then((willredirect) => {
                              if (willredirect) {
                                window.location = 'index.php';
                              }
                            });
                        }
                        
                    }

                });
             }
             else
             {
                $('#error_msg').html("Password And Confirm Password Not Match").css("color","red");
             }

        }
        else
        {
            $('#error_msg').html("Empty Fields Is not Valid").css("color","red");
        }
            
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