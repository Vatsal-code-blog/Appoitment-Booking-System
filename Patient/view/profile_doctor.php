<?php
    session_start();
    if (isset($_SESSION['patient_id']))
    {
        ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Visit Doctors Profile </title>
</head>
<body>
    <?php
        include('header.php');
    ?>
<main>
  <div style="background-color: lightblue; opacity: 1.6;">
    <center><h1>Visit Doctors Profile </h1></center> 
  </div><br><br>
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>You Can See The Doctors Profile</span>
                                        <h2>Doctor's Profile</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                       <form id="contact-form" action="../view/appoitment_form.php" method="POST">
                            <div class="row" style="font-size: 20px;">
                                <?php
                                    include('../modal/fetch_doctor_info.php');
                                ?>                                
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
    
    </body>
</html>
<?php
    }
    else
    {
        header("Location:logIn.php");
    }
?>