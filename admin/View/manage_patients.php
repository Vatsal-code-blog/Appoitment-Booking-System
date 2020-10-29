<!DOCTYPE html>
<html>
<head>
	<title> Manage Patients </title>
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
                 <center><h3> Manage Patients </h3></center>
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
                                <h2 class="title-1 m-b-25">Patients List</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-striprd table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Patient ID</th>
                                                <th>Patient Name</th>
                                                <th>Patient Gender</th>
                                                <th>Patient Contact No.</th>
                                                <th>Patient City</th>
                                                <th>Patient Blood Group</th>
                                                <th colspan="2"> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('../modal/get_all_patients.php');
                                            ?>
                                        </tbody>
                                    </table>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            
        </div>

	<?php
		include('footer.html');
	?>

</body>
</html>