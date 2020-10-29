<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="Patient/view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Patient/view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Patient/view/assets/css/slicknav.css">
    <link rel="stylesheet" href="Patient/view/assets/css/flaticon.css">
    <link rel="stylesheet" href="Patient/view/assets/css/gijgo.css">
    <link rel="stylesheet" href="Patient/view/assets/css/animate.min.css">
    <link rel="stylesheet" href="Patient/view/assets/css/animated-headline.css">
    <link rel="stylesheet" href="Patient/view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="Patient/view/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Patient/view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="Patient/view/assets/css/slick.css">
    <link rel="stylesheet" href="Patient/view/assets/css/nice-select.css">
    <link rel="stylesheet" href="Patient/view/assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
    div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-top: 50px;
  padding: 20px;
  font-size: 30px;
}

.form-control{
            width: 100%;
            height: calc(4rem + 4px);
            padding: .375rem .75rem;
            font-size: 2rem;
            line-height: 1;
            color: #495095;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid;
            border-radius: .20rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; 
        }
  </style>

</head>
<body>
<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div style="padding-top: 50px">
                            <img src="Patient/view/assets/img/logo/logo.webp" alt="logo" style="height: 70px; width: 200px;">
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav style="padding-right: 200px; padding-top: 70px;">
                                    <h1 style="font-family:Sofia;
                                    font-size: 50px;"><b>Welcome To Doctor's Appoitment Booking System   !!!</b></h1>
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
<div style="padding-top: 200px;">
<div class="container">
    <form>
        <div class="form-group">
            Select A Role To Continue :
            <select class="form-control" name="select" id="user_type">
                <option>select User Type</option>
                <option value="super_admin">Super Admin</option>
                <option value="doctor">Doctor/Diagnostic Center Lab</option>
                <option value="patient">Patient</option>                                     
            </select>
        </div>
    </form>
    
</div>
</div>

     <script type="text/javascript">

        $('#user_type').change(function(){
            var user_type = $('#user_type').val();
            if (user_type == 'super_admin' ) 
            {
                window.location='admin/View/index.php';
            }
            else if(user_type == 'doctor')
            {
                window.location='DoctorDiagnostic Center Lab/view/index.php'
            }
            else if(user_type == 'patient')
            {
                window.location='Patient/view/index.php'
            }
            
        });

    </script>

</body>
</html>
