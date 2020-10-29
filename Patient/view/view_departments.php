<?php
    session_start();
    if (isset($_SESSION['patient_id']))
    {
        ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>View Departments</title>
</head>
<body>
    <?php
        include('header.php');
    ?>
<main>
  <div style="background-color: lightblue; opacity: 1.6;">
    <center><h1>View Departments</h1></center> 
  </div><br><br>
    <div class="team-area section-padding10" id="doctors">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Departments</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    include('../modal/view_all_departments.php'); 
                 ?>
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