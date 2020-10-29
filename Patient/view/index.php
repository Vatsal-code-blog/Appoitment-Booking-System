<?php
    session_start();
    if (isset($_SESSION['patient_name'])) 
    {
?>

<html class="no-js" lang="zxx">
<?php
    include('header.php');
    ?>
</head>
<body>
<main>
     <div style="background-color: lightblue;">
    <center><h1 style="  font-family: Comic Sans MS, cursive, sans-serif; text-align: right; margin-right: 20px; ">Welcome <?php echo $_SESSION['patient_name']."...!!!"; ?></h1></center>
        <div>
             <marquee behavior="scroll" direction="left" animation: example1 10s linear infinite; ><h1><?php include('../modal/get_offer.php'); ?></h1></marquee>
        </div>
    </div>

    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>We Are Here To Help You</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        <b>sushi</b>
                                        <b>steak</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                                <a href="appoitment_form.php" class="btn btn-primary" data-animation="fadeInLeft" data-delay="0.5s">Book Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>Committed to success</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        <b>sushi</b>
                                        <b>steak</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                                <a href="appoitment_form.php" class="btn btn-primary" data-animation="fadeInLeft">Book Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
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