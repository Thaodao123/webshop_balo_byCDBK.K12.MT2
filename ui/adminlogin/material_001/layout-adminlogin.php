<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="/ui/adminlogin/material_001/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/ui/adminlogin/material_001/style.css" />
  <!--Paper Stack style -->
</head>

<body>
  <div class="login">
    <div class="login-box">
      <h2>Login</h2>

      <?php if ($_SESSION["ERROR_TEXT"]) { ?>
        <div class="alert alert-danger alert-dismissible">
          <div style="float: left;">
            <i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
          </div>
          <button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
          <br style="clear:both" />
        </div>
      <?php }
      $_SESSION["ERROR_TEXT"] = null; ?>

      <form method="post" action="/admin-login.php">
        <div class="user-box">
          <input type="text" name="username" required="" value="<?php echo $_SESSION['FAILED_USERNAME']; ?>" onkeydown="enterToSubmit();">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="" value="<?php echo $_SESSION['FAILED_PASSWORD']; ?>">
          <label>Password</label>
        </div>
        <a href="#" onclick="submitFormLogin();">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Submit
        </a>
      </form>
    </div>
        
    <script src="/ui/adminlogin/material_001/jquery-3.2.1.min.js"></script>
    <script src="/ui/adminlogin/material_001/bootstrap.min.js"></script>

    <script>
          function submitFormLogin(){
            $('form').submit();
          }

          $('input').keypress(function (e) {
            if (e.which == 13) {
              $('form').submit(); 
            }
          });
        </script>
</body>

</html>