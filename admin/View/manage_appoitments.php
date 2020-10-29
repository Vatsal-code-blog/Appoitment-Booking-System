<!DOCTYPE html>
<html>
<head>
	<title>Manage Appointments </title>
</head>
<body>

<div class="page-wrapper">


        <?php
        session_start();
            include('header.php');
        ?>


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                 <center><h3> Manage Appointments </h3></center>
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
                            <h2 class="title-1 m-b-25"> Appointments</h2>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('../modal/get_all_appoitments.php');
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="section__content section__content--p30">
                    <div class="row">
                             
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                                
                    </div>
                </div>
            </div>
        </div>            
        </div>

	<?php
		include('footer.html');
	?>
    <script type="text/javascript">
        function Cancel_appoitment(deleteid)
            {
                var conf = confirm("Want To Cancel This Appointment ?? ");
                if (conf== true)
                {
                    $.ajax({
                        url : '../modal/delete_appoitment.php',
                        method : 'post',
                        data : {
                            deleteid : deleteid
                        },
                        success : function(data,status)
                        {
                            if (data == 1) 
                            {
                            var response = confirm("Appointment Has Deleted !!");
                                if (response == true)
                                {
                                    window.location = 'manage_appoitments.php';
                                }
                            }
                        }
                    });
                }
               
            }
            
    </script>
</body>
</html>