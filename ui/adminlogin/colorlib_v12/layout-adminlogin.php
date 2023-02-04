<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v12/index.html -->
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $web_title;?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v12/images/icons/favicon.ico">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/animate.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/select2.min.css">

	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/util.css">
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/colorlib_v12/template_files/main.css">

	<meta name="robots" content="noindex, follow">
	<!-- script type="text/javascript" async="" src="/ui/adminlogin/colorlib_v12/template_files/analytics.js.tải xuống"
		nonce="85efe76a-6ee0-42cb-aff8-a3f70d89b6b1"></script -->
	<!-- script defer="" referrerpolicy="origin" src="/ui/adminlogin/colorlib_v12/template_files/s.js.tải xuống"></script -->
	<!-- script
		nonce="85efe76a-6ee0-42cb-aff8-a3f70d89b6b1">(function (w, d) { !function (a, e, t, r) { a.zarazData = a.zarazData || {}; a.zarazData.executed = []; a.zaraz = { deferred: [] }; a.zaraz.q = []; a.zaraz._f = function (e) { return function () { var t = Array.prototype.slice.call(arguments); a.zaraz.q.push({ m: e, a: t }) } }; for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e); a.zaraz.init = () => { var t = e.getElementsByTagName(r)[0], z = e.createElement(r), n = e.getElementsByTagName("title")[0]; n && (a.zarazData.t = e.getElementsByTagName("title")[0].text); a.zarazData.x = Math.random(); a.zarazData.w = a.screen.width; a.zarazData.h = a.screen.height; a.zarazData.j = a.innerHeight; a.zarazData.e = a.innerWidth; a.zarazData.l = a.location.href; a.zarazData.r = e.referrer; a.zarazData.k = a.screen.colorDepth; a.zarazData.n = e.characterSet; a.zarazData.o = (new Date).getTimezoneOffset(); a.zarazData.q = []; for (; a.zaraz.q.length;) { const e = a.zaraz.q.shift(); a.zarazData.q.push(e) } z.defer = !0; for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => { try { a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t)) } catch { a.zarazData["z_" + t.slice(7)] = e.getItem(t) } })); z.referrerPolicy = "origin"; z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))); t.parentNode.insertBefore(z, t) };["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, 0, "script"); })(window, document);</script -->
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url(&#39;images/img-01.jpg&#39;);">
			<div class="wrap-login100 p-t-190 p-b-30">

			

				<form class="login100-form validate-form" action="/admin-login.php" method="post">
					<div class="login100-form-avatar">
						<img src="/ui/adminlogin/colorlib_v12/template_files/avatar-01.jpg" alt="AVATAR">
					</div>
					<span class="login100-form-title p-t-20 p-b-45">
						Admin
					</span>

					<?php if ($_SESSION["ERROR_TEXT"]) { ?>
						<div class="alert alert-danger alert-dismissible">
							<div style="float: left;">
								<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
							</div>
							<button type="button" class="close" data-dismiss="alert" style="float: right;display: block;width: 1em;margin: 0">&times;</button>
							<br style="clear:both"/>
						</div>
					<?php } $_SESSION["ERROR_TEXT"] = null; ?>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $_SESSION['FAILED_USERNAME'];?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Đăng Nhập
						</button>
					</div>
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="https://colorlib.com/etc/lf/Login_v12/index.html#" class="txt1">
							Quên Username / Password?
						</a>
					</div>
					<div class="text-center w-full">
						<a class="txt1" href="https://colorlib.com/etc/lf/Login_v12/index.html#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="/ui/adminlogin/colorlib_v12/template_files/jquery-3.2.1.min.js.tải xuống"></script>

	<script src="/ui/adminlogin/colorlib_v12/template_files/popper.js.tải xuống"></script>
	<script src="/ui/adminlogin/colorlib_v12/template_files/bootstrap.min.js.tải xuống"></script>

	<!-- script src="/ui/adminlogin/colorlib_v12/template_files/select2.min.js.tải xuống"></script -->

	<!-- script src="/ui/adminlogin/colorlib_v12/template_files/main.js"></script -->

	<!-- script async="" src="/ui/adminlogin/colorlib_v12/template_files/js"></script -->
	


</body>

</html>