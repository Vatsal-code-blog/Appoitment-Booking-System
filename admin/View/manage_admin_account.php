<!DOCTYPE html>
<html>
<title>Manage Account Details</title>
  <style type="text/css">
    div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  margin-top: 50px;
  padding: 20px;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  </style>
  <body>
    <div class="page-wrapper">
        <?php
        session_start();
            include('header.php');
        ?>
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                 <center><h3> Manage Account </h3></center>
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

            <div class="main-content">
                <div class="section__content section__content--p30">
                  <div class="container">
                    <form action="#" id="update_form" onsubmit="return false">

                      <div class="form-group">
                      <i class="fa fa-user icon"></i>&nbsp<label>UserName</label>
                      <input class="form-control" type="text" name="update_username" id="update_username" value="<?php echo $_SESSION['username']; ?>">
                      </div>
                      
                  <div class="form-group">
                   <i class="fas fa-envelope-open"></i>&nbsp<label>Email Address</label>
                    <input class="form-control" type="email" id="update_email" name="update_email" value="<?php echo $_SESSION['email']; ?>">
                  </div>

                  <div class="form-group">
                    <i class="fas fa-phone"></i>&nbsp<label>Mobile Number </label>
                    <input class="form-control" type="text" id="update_mobile" name="update_mobile" value="<?php echo $_SESSION['mobile']; ?>">
                  </div>
                  <div class="form-group">
                      <i class="fas fa-key"></i>&nbsp<label>Password</label>
                      <input class="form-control" type="password" id="update_password" name="update_password" value="<?php echo $_SESSION['password']; ?>">
                  </div>
                  <div class="form-group">
                      <i class="fas fa-key"></i>&nbsp<label>Confirm Password</label>
                      <input class="form-control" type="password" id="update_conf_password" name="update_conf_password" value="<?php echo $_SESSION['password']; ?>">
                  </div>
                    <p id="error_msg"></p>
                 <div>
                    <button class="btn btn-primary">
                        <i class="far fa-edit"></i>
                        <input type="submit" name="edit_details" id="edit_details" value="Update Details" class="btn btn-primary">
                    </button>      
                 </div>
                                
                </form>
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
    
 <script type="text/javascript">
        

        $('#edit_details').click(function(){

        var update_password = $('#update_password').val();
        var update_conf_password = $('#update_conf_password').val();
        var update_username = $('#update_username').val();
        var update_email = $('#update_email').val();
        var update_mobile = $('#update_mobile').val();

        if (update_username != '' && update_mobile != '' && update_email != '' && update_password != '' && update_conf_password != '') 
        {
            if (update_password == update_conf_password) 
             {
                 $.ajax({
                    url : "../modal/update_admin.php",
                    method : "post",
                    data : $("#update_form input").serialize(),

                    success: function(data,status)
                    {
                        $('#error_msg').html("Records Update successfully").show().fadeOut(10000).css("color","green");
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
     <?php
      include('footer.html');

    ?>

</body>
</html>