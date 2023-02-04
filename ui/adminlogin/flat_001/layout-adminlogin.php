<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="/ui/adminlogin/flat_001/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/ui/adminlogin/flat_001/style.css" /><!--Paper Stack style -->
</head>
<body>
<div class="container">
  <section id="content">

  <?php if ($_SESSION["ERROR_TEXT"]) { ?>
						<div class="alert alert-danger alert-dismissible">
							<div style="float: left;">
								<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
							</div>
							<button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
							<br style="clear:both"/>
						</div>
					<?php } $_SESSION["ERROR_TEXT"] = null; ?>

    <form method="post" action="/admin-login.php">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" name="username" value="<?php echo $_SESSION['FAILED_USERNAME'];?>"/>
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" name="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>"/>
      </div>
      <div>
        <input type="submit" value="Log in" />
        <a href="#">Lost your password?</a>
        <a href="#">Register</a>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->

<script src="/ui/adminlogin/flat_001/jquery-3.2.1.min.js"></script>
    <script src="/ui/adminlogin/flat_001/bootstrap.min.js"></script>
</body>
</html>