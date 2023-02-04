<!DOCTYPE HTML><?php include_once $_SERVER["DOCUMENT_ROOT"] . '/configs.php'; ?>
<!-- saved from url=(0026)https://demo.opencart.com/ -->
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<HTML lang="en" dir="ltr">
<!-- HTML Design Template: https://demo.opencart.com -->
<!--<![endif]-->

<HEAD>
	<TITLE><?php echo $web_title; ?></TITLE>

	<META charset="UTF-8">
	<META content="IE=11.0000" http-equiv="X-UA-Compatible">
	<META http-equiv="X-UA-Compatible" content="IE=edge">
	<META name="viewport" content="width=device-width, initial-scale=1">
	<META name="description" content="The eProject1 Online Store">
	<META name="keywords" content="opencart,demo,store,ecommerce,epj1,eProject1,online">

	<!-- <LINK href="https://demo.opencart.com/image/catalog/cart.png" rel="icon"> -->
	<LINK href="<?php echo web_icon_url(); ?>" rel="icon">

	<LINK href="/ui/home/opencart_000/template_files/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/css.css" rel="stylesheet" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/stylesheet.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/flexslider.css" rel="stylesheet" type="text/css" media="screen">

	<!-- Styles that are Commonly Shared between FrontEnd UI Themes -->
	<link href="/ui/src/js/jquery/plugins/magnific/magnific-popup.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/js/jquery/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/js/jquery/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/css/common-home.css" rel="stylesheet" type="text/css" media="screen">

	<SCRIPT src="/ui/home/opencart_000/template_files/jquery-2.1.1.min.js" type="text/javascript"></SCRIPT>
	<SCRIPT src="/ui/home/opencart_000/template_files/bootstrap.min.js" type="text/javascript"></SCRIPT>

	<!-- sửa nội dung bên trong common.js cho phù hợp với dự án EPJ1 -->
	<SCRIPT src="/ui/home/opencart_000/template_files/common.js" type="text/javascript"></SCRIPT>

	<!-- bổ sung mã nguồn giỏ hàng của EPJ1, viết đề lên của OpenCart -->
	<SCRIPT src="/ui/home/opencart_000/view/cart.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_000/template_files/jquery.flexslider-min.js" type="text/javascript"></SCRIPT>
	<script src="/ui/src/js/jquery/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
	<!-- thư viện javascript cho xem slide ảnh chi tiết sản phẩm: -->
	<script src="/ui/src/js/jquery/plugins/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<!-- 
	THƯ VIỆN Google Map 
	@see http://tilotiti.github.io/jQuery-Google-Map/
	@see http://static.livedemo00.template-help.com/opencart_53398/catalog/view/theme/theme532/js/jquery.rd-google-map.js
	-->
	<!-- 
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	-->
	<!-- Nếu thiếu key sẽ bị lỗi ở một số tình huống -->
	<!-- 
	<script type="text/javascript">
	    google.load("maps", "3.4", {
	    	other_params: "key= AIzaSyBfMWzk7lWu-vuy2iBVkUpdBKS6ZnxPjjU&sensor=false&language=en"
	    });
	</script>
	 -->
	<!-- 
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBfMWzk7lWu-vuy2iBVkUpdBKS6ZnxPjjU&sensor=false"></script>
	<script type="text/javascript" src="/ui/src/js/jquery/plugins/google/jquery.googlemap.js"></script>
	-->

	<META name="GENERATOR" content="MSHTML 11.00.9600.16384">
</HEAD>

<BODY class="common-home">
	<NAV id="top">
		<DIV class="container">
			<DIV class="pull-left">
				<!-- <FORM id="currency" action="/currency.php" enctype="multipart/form-data" method="post">
			      <DIV class="btn-group">
			         <BUTTON class="btn btn-link dropdown-toggle" data-toggle="dropdown"><STRONG>$</STRONG> 
			         <SPAN class="hidden-xs hidden-sm hidden-md">Currency</SPAN> <I class="fa fa-caret-down"></I></BUTTON>
			         <UL class="dropdown-menu">
			            <LI>
			               <BUTTON name="EUR" class="currency-select btn btn-link btn-block" type="button">€ 
			               Euro</BUTTON>
			            </LI>
			            <LI>
			               <BUTTON name="GBP" class="currency-select btn btn-link btn-block" type="button">£ 
			               Pound Sterling</BUTTON>
			            </LI>
			            <LI>
			               <BUTTON name="USD" class="currency-select btn btn-link btn-block" type="button">$ 
			               US Dollar</BUTTON>
			            </LI>
			         </UL>
			      </DIV>
			      <INPUT name="code" type="hidden">
			      <INPUT name="redirect" type="hidden" value="/home.php">
			   </FORM>  -->


				<DIV class="btn-group">
					<?php if (isset($_SESSION['CUS_LOGGED'])) { ?>
						<BUTTON class="btn btn-link dropdown-toggle" data-toggle="dropdown"><strong><i class="fa fa-user"></i></strong>
							<SPAN class="hidden-xs hidden-sm hidden-md">Xin chào </SPAN> <?php echo $_SESSION['CUS_FULLNAME'] ?> ! <I class="fa fa-caret-down"></I></BUTTON>
						<UL class="dropdown-menu">
							<li><a href="/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Đăng Thoát</a></li>
							<li><a href="/account-edit.php?cid=<?php echo user_id(); ?>"><i class="fa fa-edit"></i>&nbsp;Tài Khoản Của Tôi</a></li>
							<li>
								<a href="/order-history.php"><i class="fa fa-list"></i>&nbsp;Lịch Sử Đơn Hàng</a>
							</li>
						</UL>
					<?php } else { ?>
						<BUTTON class="btn btn-link dropdown-toggle" data-toggle="dropdown"><strong><i class="fa fa-user"></i></strong>
							<SPAN class="hidden-xs hidden-sm hidden-md">Tài Khoản</SPAN> <I class="fa fa-caret-down"></I></BUTTON>
						<UL class="dropdown-menu">
							<LI>
								<A href="/register.php"><i class="fa fa-user"></i>&nbsp;Đăng Kí</A>
							</LI>
							<LI>
								<A href="/login.php"><i class="fa fa-lock"></i>&nbsp;Đăng Nhập</A>
							</LI>
						</UL>
					<?php } ?>
				</DIV>









				<!-- thất bại :
			   <UL class="list-inline">
                    
                    <LI>
                        <A href="/contact.php"><I class="fa fa-phone"></I>
                        <SPAN class="hidden-xs hidden-sm hidden-md"><?php echo web_telephone(); ?></SPAN>
                        </A>
                    </LI>
                    
                     <LI>
                        <A title="Liên Hệ" href="/contact.php"><I class="fa fa-address-book"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Liên Hệ</SPAN></A>
                    </LI>
               </UL>
               -->
				<!-- div>more content</div  -->


			</DIV>

			<!-- không đẹp mắt, không cân xứng
			<div class="pull-left">
				<UL class="list-inline">
                    
                    <LI>
                        <A href="/contact.php"><I class="fa fa-phone"></I>
                        <SPAN class="hidden-xs hidden-sm hidden-md"><?php echo web_telephone(); ?></SPAN>
                        </A>
                    </LI>
                    
                     <LI>
                        <A title="Liên Hệ" href="/contact.php"><I class="fa fa-address-book"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Liên Hệ</SPAN></A>
                    </LI>
               </UL>
			</div>
			-->

			<DIV class="nav pull-right" id="top-links">
				<UL class="list-inline">

					<LI>
						<A title="Đường dây nóng" href="/contact.php"><I class="fa fa-phone"></I>
							<SPAN class="hidden-xs hidden-sm hidden-md"><?php echo web_telephone(); ?></SPAN>
						</A>
					</LI>

					<!-- 
                     <LI>
                        <A title="Liên Hệ" href="/contact.php"><I class="fa fa-address-book"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Liên Hệ</SPAN></A>
                    </LI>
                    -->

					<!-- <LI class="dropdown">
						<?php if (isset($_SESSION['CUS_LOGGED'])) { ?>
							<A title="My Account" class="dropdown-toggle" href="/account.php" data-toggle="dropdown">
								<I class="fa fa-user"></I> <SPAN class="hidden-xs hidden-sm hidden-md"><?php echo $_SESSION['CUS_FULLNAME'] ?></SPAN> <SPAN class="caret"></SPAN>
							</A>
							<UL class="dropdown-menu dropdown-menu-right">
								<li><a href="/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Đăng Thoát</a></li>
								<li><a href="/account-edit.php?cid=<?php echo user_id(); ?>"><i class="fa fa-edit"></i>&nbsp;Tài Khoản Của Tôi</a></li>
								<li>
									<a href="/order-history.php"><i class="fa fa-list"></i>&nbsp;Lịch Sử Đơn Hàng</a>
								</li>

							</UL>
						<?php } else { ?>
							<A title="My Account" class="dropdown-toggle" href="/account.php" data-toggle="dropdown"><I class="fa fa-user"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Tài Khoản</SPAN> <SPAN class="caret"></SPAN></A>
							<UL class="dropdown-menu dropdown-menu-right">
								<LI>
									<A href="/register.php"><i class="fa fa-user"></i>&nbsp;Đăng Kí</A>
								</LI>
								<LI>
									<A href="/login.php"><i class="fa fa-lock"></i>&nbsp;Đăng Nhập</A>
								</LI>
							</UL>
						<?php } ?>
					</LI> -->




					<!-- 
                    <LI>
                        <A title="Wish List (0)" id="wishlist-total" href="#"><I class="fa fa-heart"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Wish List (0)</SPAN></A>
                    </LI>
                     -->
					<LI>
						<A title="Giỏ Hàng" href="/cart.php"><I class="fa fa-shopping-cart"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Giỏ Hàng</SPAN></A>
					</LI>
					<LI>
						<A title="Thanh Toán" href="/checkout.php"><I class="fa fa-share"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Thanh Toán</SPAN></A>
					</LI>
					<LI>
						<A title="So Sánh Sản Phẩm" href="/product-compare.php"><I class="fa fa-exchange"></I> <SPAN class="hidden-xs hidden-sm hidden-md">So Sánh Sản Phẩm</SPAN></A>
					</LI>
				</UL>
			</DIV>
		</DIV>
	</NAV>
	<HEADER>
		<DIV class="container">
			<DIV class="row">
				<DIV class="col-sm-4">
					<DIV id="logo">
						<A href="/">
							<IMG height="64" width="64" title="<?php echo web_name(); ?>" class="img-responsive" alt="<?php echo web_name(); ?>" src="<?php echo web_logo_url(); ?>">
						</A>
					</DIV>
				</DIV>
				<DIV class="col-sm-5">
					<DIV class="input-group" id="search">
						<INPUT name="search" class="form-control input-lg" type="text" placeholder="Search" value="">
						<SPAN class="input-group-btn"><BUTTON class="btn btn-default btn-lg" type="button"><I class="fa fa-search"></I></BUTTON> </SPAN>
					</DIV>
				</DIV>
				<DIV class="col-sm-3">
					<?php include_once "view/view-cart.php"; ?>
				</DIV>
			</DIV>
		</DIV>
	</HEADER>
	<DIV class="container">
		<NAV class="navbar" id="menu">
			<DIV class="navbar-header">
				<SPAN class="visible-xs" id="category">Danh Mục</SPAN>
				<BUTTON class="btn btn-navbar navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse"><I class="fa fa-bars"></I></BUTTON>
			</DIV>
			<DIV class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<?php foreach (categoryGetAllForMenuHomePage() as $category) { ?>
						<?php if ($category['children']) { ?>
							<li class="dropdown">
								<a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?>&nbsp;<i class="fa fa-angle-down"></i></a>
								<div class="dropdown-menu">
									<div class="dropdown-inner">

										<!-- Giải Thích chỗ này: Xem: https://demo.opencart.com/ Menu Mp3 Players (cat_id = 34) 
			              loại cha cat_id=34 có 18 loại con. Ấn định số cột nhóm chia ra là 4 cột thì 
							 mỗi cột sẽ có số phần tử là ceil(18/4) = 5 phần tử. Cột cuối có thể có ít hơn 5 phần tử.
							   
							 Hàm array_chunk() trên mảng children và tham số 5 sẽ tách ra thành 4 cột, mỗi cột 5 phần tử.
							 1. Xem loại đó được cấp cho mấy cột (mấy nhóm) trên Menu Top trang chủ ? (giả sử 4 cột, cái này là do Admin ấn định)
							 2. Xem loại đó có bao nhiêu loại con ? 
							 3. Chia tổng số loại con cho số cột (số nhóm) rồi làm tròn trần sẽ ra số loại con xuất hiện ở mỗi cột.
							 ví dụ ở trên sẽ là : ceil(18/4) = 5 phần tử, tức là 5 loại con trên một cột giao diện.
							 4. Một mảng có 18 phần tử, chia vào 4 cột (nhóm), thì 3 cột đầu có 5 phần tử, cột cuối cùng có 3 phần tử
			               -->
										<?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
											<ul class="list-unstyled">
												<?php foreach ($children as $child) { ?>
													<li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
												<?php } ?>
											</ul>
										<?php } ?>
									</div>
									<a href="<?php echo $category['href']; ?>" class="see-all">Xem tất <?php echo $category['name']; ?></a>
								</div>
							</li>
						<?php } else { ?>
							<li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
						<?php } ?>
					<?php } ?>
				</ul>
			</DIV>
		</NAV>
	</DIV>

	<!-- web content, web_content, ruột -->
	<?php include_once $web_content; ?>


	<footer>
		<div class="container">
			<div class="row">
				<!-- Nhiều đường link đến nhiều thông tin đặc trưng của Web Bán Hàng -->
				<div class="col-sm-3">
					<h5>Thông Tin</h5>
					<ul class="list-unstyled">
						<li><a href="/about.php">Giới Thiệu</a></li>
						<li><a href="/contact.php">Liên Hệ</a></li>
						<li><a href="#">Bản Đồ Site</a></li> <!-- site map -->
						<li><a href="#5">Điều Khoản Sử Dụng</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>Dịch Vụ Khách Hàng</h5>
					<ul class="list-unstyled">
						<li><a href="#">Phiếu Quà Tặng</a></li><!-- Gift Vouchers -->
						<li><a href="#6">Thông Tin Giao Hàng</a></li><!-- Delivery Information -->
						<li><a href="#">Quy Định Đổi Trả Hàng</a></li><!-- Return & Exchange Policy -->
						<li><a href="#3">Chính Sách Quyền Riêng Tư</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>Thông Tin Thêm</h5>
					<ul class="list-unstyled">
						<li><a href="#">Blog</a></li><!-- Gift Vouchers -->
						<li><a href="#">Thương Hiệu</a></li>
						<li><a href="#">Tiếp Thị Liên Kết</a></li><!-- Affiliates -->
						<li><a href="#">Sản Phẩm Đặc Biệt</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>Tài Khoản</h5>
					<ul class="list-unstyled">
						<li><a href="#">Tài Khoản Của Tôi</a></li>
						<li><a href="#">Lịch Sử Đơn Hàng</a></li>
						<li><a href="#">Wish List</a></li>
						<li><a href="#">Thư Thông Báo</a></li><!-- Newsletter -->
					</ul>
				</div>
			</div>

			<hr><!-- Dưới cùng của footer là thông tin bản quyền và đường link chia sẻ mạng xã hội -->

			<!-- p>Copyright © <?php echo date('Y') ?> <?php echo web_name(); ?>. All Rights Reserved.</p  -->
			<div class="pull-left">© <?php echo date('Y') ?> <?php echo web_name(); ?></div>
			<div class="pull-right">
				<ul class="list-inline">
					<li><a title="Facebook" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
					<li><a title="Twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
					<!-- <li><a title="Google"   href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li> -->
					<li><a title="Youtube" href="https://youtube.com"><i class="fa fa-youtube"></i></a></li>

					<!-- <li><a title="Linked In"   href="https://linkedin.com"><i class="fa fa-linkedin"></i></a></li> -->
					<li><a title="Instagram" href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
					<!-- logo youtube quá bé
			    <li><a title="Dribble"  href="http://dribble.com"><i class="fa fa-dribbble"></i></a></li>
			    
			     -->
				</ul>
			</div>
		</div>

	</footer>
</BODY>

</HTML>