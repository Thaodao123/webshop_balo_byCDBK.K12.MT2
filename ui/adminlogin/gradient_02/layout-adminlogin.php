<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/ui/adminlogin/gradient_02/bootstrap.min.css">
    <link href="/ui/adminlogin/gradient_02/style.css" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    <div class="login">


    <?php if ($_SESSION["ERROR_TEXT"]) { ?>
						<div class="alert alert-danger alert-dismissible">
							<div style="float: left;">
								<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
							</div>
							<button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
							<br style="clear:both"/>
						</div>
					<?php } $_SESSION["ERROR_TEXT"] = null; ?>

    <h1>Đăng Nhập</h1>
        <form method="post" action="admin-login.php">
        <input type="text" name="username" placeholder="Username" required="required" value="<?php echo $_SESSION['FAILED_USERNAME'];?>"/>
            <input type="password" name="password" placeholder="Password" required="required" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
    </div>

    <script src="/ui/adminlogin/gradient_02/jquery-3.2.1.min.js"></script>
    <script src="/ui/adminlogin/gradient_02/bootstrap.min.js"></script>
</body>
</html>