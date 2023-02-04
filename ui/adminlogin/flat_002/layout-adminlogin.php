<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="/ui/adminlogin/flat_002/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/ui/adminlogin/flat_002/style.css" /><!--Paper Stack style -->
</head>
<body>
<div class="login">
  <h1>Login Form</h1>
  <form method="post" action="/admin-login.php">
  <?php if ($_SESSION["ERROR_TEXT"]) { ?>
						<div class="alert alert-danger alert-dismissible">
							<div style="float: left;">
								<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
							</div>
							<button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
							<br style="clear:both"/>
						</div>
					<?php } $_SESSION["ERROR_TEXT"] = null; ?>

    <p><input type="text" name="username"  placeholder="Username" value="<?php echo $_SESSION['FAILED_USERNAME'];?>"></p>
    <p><input type="password" name="password" placeholder="Password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>"></p>
    <!-- <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p> -->
    <p class="submit" style="text-align: center;"><input type="submit" name="commit" value="Login"></p>
  </form>
</div>

<!-- <div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div> -->

<script src="/ui/adminlogin/flat_002/jquery-3.2.1.min.js"></script>
    <script src="/ui/adminlogin/flat_002/bootstrap.min.js"></script>
</body>
</html>