<?php

    session_start();
    if (isset($_SESSION['username'])) 
    {
        ?>

<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-top: 50px;
  padding: 20px;
}

input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 10px;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.btn-success {
  margin-left: 10px;
}

  </style>

<body>
    <div class="page-wrapper">


        <?php
            include('header.php');
        ?>


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                 <center><h3> Dashboard </h3></center>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="float-right">
                        <div class="header-wrap">
                            <div class="header-button">
                                
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username'];  ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                    <h3 class="name">
                                                        <center><?php echo $_SESSION['username'];  ?></center>
                                                    </h3>
                                                   <center><span class="email"><?php echo $_SESSION['email'];  ?></span></center> 
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="manage_admin_account.php">
                                                        <i class="zmdi zmdi-account"></i> Manage Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                        <div class="row">
                            <div>
                                <h2 class="title-1 m-b-25">Today's Appointments</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>date</th>
                                                <th>Patient ID</th>
                                                <th>Patient name</th>
                                                <th class="text-right">Doctor Name</th>
                                                <th>Appointment Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('../modal/get_appoitments.php');
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="section__content section__content--p30">
                        <div class="row">
                        <div>
                            <button class="btn btn-primary" id="btn_add_offer"> Add Offer </button>
                        </div>
                        </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="offer">
                                    <input type="text" name="offer_name" id="offer_name" placeholder="Offer Name">
                                    <input type="text" name="offer_description" id="offer_description" placeholder="Offer Description">
                                    <button class="btn btn-success" id="btn_submit_offer">Add Offer</button>
                                    <button id="close" class="btn btn-danger btn btn-close-form" onclick="closeForm()">Close</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            
        </div>

        <?php
            include('footer.html');
        ?>

        <script type="text/javascript">
           function closeForm() 
        {
         $('#offer').hide();
        }

            $('#offer').hide();
            $('#btn_add_offer').click(function(){
                $('#offer').show();
            });
            $('#btn_submit_offer').click(function(){
                var offer_name = $('#offer_name').val();
                var offer_description = $('#offer_description').val();
                if (offer_name != '' && offer_description != '') 
                {
                    $.ajax({
                        url : '../modal/add_offer.php',
                        method : 'post',
                        data : {
                            offer_name : offer_name,
                            offer_description : offer_description
                        },
                        success : function(data,action)
                        {
                            if (data == 1) 
                            {
                                $('#offer').hide();
                            }
                        }
                    });
                }
            });
        </script>
</body>

</html>

<?php
    }
    else
    {
        header("Location:login.php");
    }

?>
