<!doctype html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<html lang="en">

<head>
	<title><?php print $web_title;?></title>
	<meta charset="utf-8">
	<link href="<?php echo web_icon_url(); ?>" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/ui/adminlogin/colorlib_v20/css/style.css">
	
</head>

<body class="img js-fullheight" style="background-image: url(/ui/adminlogin/colorlib_v20/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account?</h3>

						<?php if ($_SESSION["ERROR_TEXT"]) { ?>
					<div class="alert alert-danger alert-dismissible">
						<div style="float: left;">
							<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
						</div>
						<button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
						<br style="clear:both"/>
					</div>
				<?php } $_SESSION["ERROR_TEXT"] = null; ?>

						<form action="/admin-login.php" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required name="username" value="<?php echo $_SESSION['FAILED_USERNAME'];?>">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password"
									required name="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
								Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
								Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="/ui/adminlogin/colorlib_v20/js/jquery.min.js"></script>
	<script src="/ui/adminlogin/colorlib_v20/js/popper.js"></script>
	<script src="/ui/adminlogin/colorlib_v20/js/bootstrap.min.js"></script>
	<script src="/ui/adminlogin/colorlib_v20/js/main.js"></script>

</body>

</html>