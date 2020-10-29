<?php
    session_start();
    if (isset($_SESSION['patient_id']))
    {
        ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>View Appoitment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include('header.php');
    ?>
<main>
  <div style="background-color: lightblue; opacity: 1.6;">
    <center><h1>View Appoitment</h1></center> 
  </div><br><br>
    <div class="team-area section-padding10" id="doctors">
        <div class="container">
            <table class="table table-striprd table-hover table-bordered">
                <thead style="font-size: 25px;">
                    <tr class="table-success">
                        <th>#</th>
                        <th>Transaction ID</th>
                        <th>Ammount</th>
                        <th>Appointment Date & Time</th>
                        <th>Download Payment Receipt</th>

                    </tr>
                </thead>
                <tbody style="font-size: 20px;">
                    <?php
                       include('../modal/get_payment_details.php');                          
                    ?>
                </tbody>
            </table>
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