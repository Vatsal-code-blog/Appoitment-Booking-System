<?php
$con = mysqli_connect('localhost','root','','appointment_booking_system');
    $check = " SELECT * FROM `seo_settings` ";
            $result = mysqli_query($con,$check);
            if(mysqli_num_rows($result)>0)
            {
                while ($row=mysqli_fetch_assoc($result))
                {
?>    
<head>
    <meta charset="utf-8">
   <title><?php echo $row['title'];?></title>
    <meta name="description" content="<?php echo $row['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $row['keywords']; ?>">
    <meta name="author" content="<?php echo $row['author']; ?>">
   <!-- <meta http-equiv="refresh" content="120">-->
<?php
     }
            }
   ?>
	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <h1 style=" position: absolute;top: 150px;">It May Takes Few Seconds To Load...</h1>
            <div class="preloader-inner position-relative">
               
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    Appoitment Booking System
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div>
                            <img src="assets/img/logo/logo.jpg" alt="logo" style="height: 70px; width: 200px;">
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a>Browse &nbsp&nbsp<i class="fas fa-caret-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="view_doctors.php"> Doctors</a></li>
                                                <li><a href="view_departments.php"> Departments</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="manage_profile.php">Manage Profile</a></li>
                                        <li><a href="appoitment_status.php">Appoitments Status</a></li>
                                        <li><a href="payment_history.php">Payment History</a></li>
                                        <li><a href="enquiries.php">Enquiries
                                        </a></li>
                                        <li><a href="faqs.php">FQAs</a></li>
                                        <li><a href="logout.php">Log-Out</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
