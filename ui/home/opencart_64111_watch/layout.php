<!DOCTYPE HTML><?php include_once $_SERVER["DOCUMENT_ROOT"] . '/configs.php'; ?>
<!-- saved from url=(0052)https://livedemo00.template-help.com/opencart_64111/ -->
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<HTML lang="en" dir="ltr">
<!--<![endif]-->

<HEAD>
	<META content="IE=11.0000" http-equiv="X-UA-Compatible">

	<META charset="UTF-8">
	<META name="viewport" content="width=device-width, initial-scale=1">
	<META http-equiv="X-UA-Compatible" content="IE=edge">
	<TITLE><?php echo $web_title; ?></TITLE>
	<META name="description" content="NovaWatch"> <!-- Fonts -->
	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></SCRIPT>
	<LINK href="/ui/home/opencart_64111_watch/template_files/css.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/css(1).css" rel="stylesheet" type="text/css">
	<LINK href="/ui/home/opencart_64111_watch/template_files/font-awesome.min.css" rel="stylesheet" type="text/css"> <!-- END Fonts -->
	<LINK href="/ui/home/opencart_64111_watch/template_files/bootstrap.min.css" rel="stylesheet" media="screen">
	<LINK href="/ui/home/opencart_64111_watch/template_files/owl.carousel.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/material-design.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/jquery.fancybox.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/photoswipe.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/stylesheet.css" rel="stylesheet">
	<LINK href="/ui/home/opencart_64111_watch/template_files/homebuilder.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_64111_watch/template_files/owl.carousel(1).css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_64111_watch/template_files/owl.transitions.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="<?php echo web_icon_url(); ?>" rel="icon">
	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/jquery-2.1.1.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/bootstrap.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/jquery.matchHeight-min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/owl.carousel.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/jquery.rd-parallax.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/superfish.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/jquery.rd-navbar.min.js" type="text/javascript"></SCRIPT>

	

	<META name="GENERATOR" content="MSHTML 11.00.10570.1001">
</HEAD>

<BODY class="common-home">
	<P class="hidden" id="gl_path">/ui/home/opencart_64111_watch/</P>
	<DIV id="page">
		<DIV class="visible" id="page-preloader"><SPAN class="preloader"></SPAN></DIV>
		<DIV class="ie-warning"><A href="https://windows.microsoft.com/en-us/internet-explorer/download-ie"><IMG width="1170" height="75" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." src="/ui/home/opencart_64111_watch/template_files/warning_bar_0000_us.jpg" border="0"> </A>
		</DIV>
		<HEADER>
			<DIV class="container">
				<DIV class="flex">
					<H1 class="logo" id="logo"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=common/home"><IMG title="<?php echo web_name(); ?>" class="img-responsive" alt="<?php echo web_name(); ?>" src="<?php echo web_logo_url(); ?>" style="height:53px"></A>
					</H1>
					<DIV class="mobile-search">
						<!-- <a href="#" class="search__open"><i class="material-design-search100"></i></a> -->

						<DIV class="search" id="search">
							<DIV class="search__cnt"><INPUT name="search" class="search__input" type="text" placeholder="Search" value=""><BUTTON class="search__btn" type="button"><I class="material-design-search100"></I></BUTTON> <A class="search__close" href="/ui/home/opencart_64111_watch/template_files/opencart_64111.htm"><I class="material-design-close47"></I></A>
							</DIV>
						</DIV>
						<SCRIPT>
							;
							(function($) {
								$(document).ready(function() {
									var sBtn = $('.search__btn'),
										sOpen = $('.search__open'),
										sClose = $('.search__close'),
										sInput = $('.search__input'),
										sCnt = $('.search__cnt'),
										search = $('#search');

									sBtn.on('click touchstart', function() {
										if (!sInput.val() == "") {
											url = $('base').attr('href') + 'index.php?route=product/search';
											var value = sInput.val();
											if (value) {
												url += '&search=' + encodeURIComponent(value);
											}
											location = url;
										}
									});
									sOpen.on('click touchstart', function(e) {
										e.preventDefault();
										search.addClass('open');
										var strLength = sInput.val().length * 2;
										sInput.focus();
										sInput[0].setSelectionRange(strLength, strLength);
									});
									sClose.on('click touchstart', function(e) {
										e.preventDefault();
										search.removeClass('open');
										sInput.blur();
									});
									sInput.on('keydown', function(e) {
										if (e.keyCode == 13) {
											sBtn.trigger('click');
										}
										if (e.keyCode == 27) {
											sClose.trigger('click');
										}
									});
									// $(document).on('click touchstart', function (e) {
									// 	if (!o.is(e.target) && o.has(e.target).length === 0 && toggle__cont.hasClass('open')) {
									// 		toggle__cont.removeClass('open');
									// 		o.removeClass('open');
									// 		input.blur();
									// 		btn.removeClass('active');
									// 	}
									// });
								});
							})(jQuery);
						</SCRIPT>
					</DIV>
					<DIV class="navigation">
						<DIV class="megamenu">
							<UL class="sf-menu">
								<!--
								<LI class="sf-with-mega"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=18">Women’s</A>
									<UL class="sf-mega">
										<LI class="sf-mega_row">
											<DIV class="sf-mega_section" style="width: 15%;">
												<DIV class="submenu_title"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=37">
														Gifts </A> </DIV>
												<UL>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=49">UA
															Big Logo No-Show</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=44">Lily
															Fit String Back Vest</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=36">Finn
															Comfort Oze</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=31">
															Cut Sleeve Muscle Tee</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=30">ASICS
															Running Shoe</A></LI>
												</UL>
											</DIV>
											<DIV class="sf-mega_section" style="width: 15%;">
												<DIV class="submenu_title"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=42">
														Gold </A> </DIV>
												<UL>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=50">Zoe
															Neon Stripe Sports Crop + Running Legging Set</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=45">Long
															Sleeve Triblend Pullover Hoodie</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=40">Flicker
															Men's Training Pants</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=32">Sneaker</A>
													</LI>
												</UL>
											</DIV>
											<DIV class="sf-mega_section" style="width: 15%;">
												<DIV class="submenu_title"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=43">
														Rubber </A> </DIV>
												<UL>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=50">Zoe
															Neon Stripe Sports Crop + Running Legging Set</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=45">Long
															Sleeve Triblend Pullover Hoodie</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=40">Flicker
															Men's Training Pants</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=32">Sneaker</A>
													</LI>
												</UL>
											</DIV>
											<DIV class="sf-mega_section" style="width: 15%;">
												<DIV class="submenu_title"><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=44">
														Titanium </A> </DIV>
												<UL>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=50">Zoe
															Neon Stripe Sports Crop + Running Legging Set</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=45">Long
															Sleeve Triblend Pullover Hoodie</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=40">Flicker
															Men's Training Pants</A></LI>
													<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/product&amp;product_id=32">Sneaker</A>
													</LI>
												</UL>
											</DIV>
											<DIV class="sf-mega_section" style="width: 40%;">
												<DIV class="megamenu_module">
													<DIV class="banners" id="banner5">
														<DIV class="Banner">
															<DIV class="banner-box"><A class="clearfix" href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=29"><IMG class="img-responsive" alt="Banner" src="/ui/home/opencart_64111_watch/template_files/menu-banner-524x250.jpg"></A>
															</DIV>
														</DIV>
													</DIV>
												</DIV>
											</DIV>
										</LI>
									</UL>
								</LI>

								 <LI><A
										href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=20">Men’s</A>
								</LI>
								<LI><A
										href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=25">Kids</A>
								</LI>
								<LI><A
										href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=28">Fashion
										watches</A></LI>
								<LI><A
										href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=29">Accessories</A>
								</LI>
								 -->
								<?php foreach (categoryGetAllForMenuHomePage() as $category) { ?>
									<?php if ($category['children']) { ?>
										<li class="sf-with-mega"> <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>

											<ul class="sf-mega">
												<LI class="sf-mega_row">
													<?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>

														<DIV class="sf-mega_section" style="">

															<UL>
																<?php foreach ($children as $child) { ?>
																	<li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
																<?php } ?>
															</UL>
														</DIV>

													<?php } ?>
												</li>
											</ul>
										</li>
									<?php } else { ?>
										<li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
									<?php } ?>
								<?php } ?>
							</UL>
						</DIV>
						<SCRIPT>
							;
							(function($) {
								$(window).load(function() {
									var o = $('.sf-menu');
									o.superfish();
									o.find('li a').each(function() {
										if ($(location).attr('href').indexOf($(this).attr('href')) >= 0) {
											$(this).addClass('active');
											return;
										}
									})
									if (o.parents('aside').length) {
										var width = $('.container').outerWidth() - $('aside').outerWidth();
										o.find('.sf-mega').each(function() {
											$(this).width(width);
										})
									}
								});
							})(jQuery);
						</SCRIPT>
					</DIV>
					<NAV class="nav toggle-wrap" id="top-links"><A class="toggle material-design-settings49" href="#"></A>
						<UL class="toggle_cont">
							<LI class="sf-with-search hidden-xs"><A class="search__open" href="/ui/home/opencart_64111_watch/template_files/opencart_64111.htm"><I class="material-design-search100"></I></A>
								<DIV class="search" id="search">
									<DIV class="search__cnt"><INPUT name="search" class="search__input" type="text" placeholder="Search" value=""><BUTTON class="search__btn" type="button"><I class="material-design-search100"></I></BUTTON> <A class="search__close" href="/ui/home/opencart_64111_watch/template_files/opencart_64111.htm"><I class="material-design-close47"></I></A> </DIV>
								</DIV>
								<SCRIPT>
									;
									(function($) {
										$(document).ready(function() {
											var sBtn = $('.search__btn'),
												sOpen = $('.search__open'),
												sClose = $('.search__close'),
												sInput = $('.search__input'),
												sCnt = $('.search__cnt'),
												search = $('#search');

											sBtn.on('click touchstart', function() {
												if (!sInput.val() == "") {
													url = $('base').attr('href') + 'index.php?route=product/search';
													var value = sInput.val();
													if (value) {
														url += '&search=' + encodeURIComponent(value);
													}
													location = url;
												}
											});
											sOpen.on('click touchstart', function(e) {
												e.preventDefault();
												search.addClass('open');
												var strLength = sInput.val().length * 2;
												sInput.focus();
												sInput[0].setSelectionRange(strLength, strLength);
											});
											sClose.on('click touchstart', function(e) {
												e.preventDefault();
												search.removeClass('open');
												sInput.blur();
											});
											sInput.on('keydown', function(e) {
												if (e.keyCode == 13) {
													sBtn.trigger('click');
												}
												if (e.keyCode == 27) {
													sClose.trigger('click');
												}
											});
											// $(document).on('click touchstart', function (e) {
											// 	if (!o.is(e.target) && o.has(e.target).length === 0 && toggle__cont.hasClass('open')) {
											// 		toggle__cont.removeClass('open');
											// 		o.removeClass('open');
											// 		input.blur();
											// 		btn.removeClass('active');
											// 	}
											// });
										});
									})(jQuery);
								</SCRIPT>
							</LI>
							<LI class="toggle-wrap"><A title="My Account" class="toggle dropdown-toggle" href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/account"><I class="fa fa-user"></I> </A>
								<UL class="toggle_cont toggle_cont__right dropdown-menu">
									<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/register">Register</A>
									</LI>
									<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/login">Login</A>
									</LI>
								</UL>
							</LI>
							<LI class="toggle-wrap cog"><A title="My Account" class="toggle dropdown-toggle" href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/account"><I class="fa fa-cog"></I> <!-- <span>My Account</span> -->
									<!-- <span class="caret"></span> -->
								</A>
								<UL class="toggle_cont toggle_cont__right dropdown-menu">
									<FORM id="form-currency" action="https://livedemo00.template-help.com/opencart_64111/index.php?route=common/currency/currency" enctype="multipart/form-data" method="post">
										<LI><BUTTON name="EUR" class="currency-select" type="button">€ Euro </BUTTON>
										</LI>
										<LI><BUTTON name="GBP" class="currency-select" type="button">£ Pound
												Sterling </BUTTON> </LI>
										<LI><BUTTON name="RUB" class="currency-select" type="button">
												P Ruble </BUTTON> </LI>
										<LI><BUTTON name="USD" class="currency-select selected" type="button">
												$ US Dollar </BUTTON> </LI><INPUT name="code" type="hidden">
										<INPUT name="redirect" type="hidden" value="https://livedemo00.template-help.com/opencart_64111/index.php?route=common/home">
									</FORM>
									<FORM id="form-language" action="https://livedemo00.template-help.com/opencart_64111/index.php?route=common/language/language" enctype="multipart/form-data" method="post">
										<LI><BUTTON name="en-gb" class="language-select selected" type="button"><IMG width="16" height="11" title="English" alt="English" src="/ui/home/opencart_64111_watch/template_files/en-gb.png">
												English </BUTTON> </LI>
										<LI><BUTTON name="ru-ru" class="language-select" type="button"><IMG width="16" height="11" title="Russian" alt="Russian" src="/ui/home/opencart_64111_watch/template_files/ru-ru.png">
												Russian </BUTTON> </LI><INPUT name="code" type="hidden"> <INPUT name="redirect" type="hidden" value="https://livedemo00.template-help.com/opencart_64111/index.php?route=common/home">
									</FORM>
								</UL>
							</LI>
							<LI class="mobile-wishlist hidden-xs"><A title="0" href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/wishlist"><I class="fa fa-heart"></I> <SPAN id="wishlist-total">
										0 </SPAN> </A></LI>
							<LI class="shopping-cart tablet-cart">
								<DIV class="box-cart">
									<DIV class="cart toggle-wrap" id="cart"><BUTTON class="toggle" type="button" data-loading-text="Loading..."><I class="fa fa-shopping-cart"></I>
											<SPAN class="cart-total2 hidden-xs" id="cart-total2">0</SPAN>
										</BUTTON>
										<UL class="pull-right toggle_cont">
											<LI>
												<P class="text-center">Your shopping cart is
													empty!</P>
											</LI>
										</UL>
									</DIV>
								</DIV>
							</LI>
						</UL>
					</NAV>
				</DIV>
			</DIV>
		</HEADER>
		<DIV class="shopping-cart mobile-cart">
			<DIV class="box-cart">
				<DIV class="cart toggle-wrap" id="cart"><BUTTON class="toggle" type="button" data-loading-text="Loading..."><I class="fa fa-shopping-cart"></I>
						<SPAN class="cart-total2 hidden-xs" id="cart-total2">0</SPAN>
					</BUTTON>
					<UL class="pull-right toggle_cont">
						<LI>
							<P class="text-center">Your shopping cart is
								empty!</P>
						</LI>
					</UL>
				</DIV>
			</DIV>
		</DIV>

		<?php include $web_content; ?>

		<DIV class="container">
			<DIV class="row">
				<DIV class="col-sm-12" id="content"></DIV>
			</DIV>
		</DIV>
		<FOOTER>
			<DIV class="container">
				<DIV class="row">
					<DIV class="col-xs-6 col-sm-3 col-md-3">
						<H5>Categories</H5>
						<UL class="list-unstyled">
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=18">Women’s</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=20">Men’s</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=25">Kids</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=28">Fashion
									watches</A> </LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=29">Accessories</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/category&amp;path=30">Styles</A>
							</LI>
						</UL>
					</DIV>
					<DIV class="col-xs-6 col-sm-3 col-md-3">
						<H5>Information</H5>
						<UL class="list-unstyled">
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=simple_blog/article">Blog</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=information/information&amp;information_id=4">About</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=information/information&amp;information_id=6">Delivery
									Information</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=information/information&amp;information_id=3">Privacy
									Policy</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=information/information&amp;information_id=5">Terms
									&amp; Conditions</A></LI>
						</UL>
					</DIV>
					<DIV class="col-xs-6 col-sm-3 col-md-3">
						<H5>Extras</H5>
						<UL class="list-unstyled">
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/manufacturer">Brands</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/voucher">Gift
									Certificates</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=affiliate/account">Affiliates</A>
							</LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=product/special">Specials</A>
							</LI>
						</UL>
					</DIV>
					<DIV class="col-xs-6 col-sm-3 col-md-3">
						<H5>My Account</H5>
						<UL class="list-unstyled">
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/account">My
									Account</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/order">Order
									History</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/wishlist">Wish
									List</A></LI>
							<LI><A href="https://livedemo00.template-help.com/opencart_64111/index.php?route=account/newsletter">Newsletter</A>
							</LI>
						</UL>
					</DIV>
				</DIV>
			</DIV>
		</FOOTER>
		<DIV class="copyright">
			<DIV class="container">
				<DIV class="text-copyright">Powered By <A href="https://www.opencart.com/">OpenCart</A><BR> NovaWatch ©
					2022
					<!-- [[%FOOTER_LINK]] -->
				</DIV>
				<DIV class="list">
					<UL class="social-list list-unstyled">
						<LI><A title="Facebook" class="fa fa-facebook" href="https://www.facebook.com/TemplateMonster/"></A></LI>
						<LI><A title="Twitter" class="fa fa-twitter" href="https://twitter.com/TemplateMonster"></A>
						</LI>
						<LI><A title="Instagram" class="fa fa-instagram" href="https://www.instagram.com/template_monster/"></A></LI>
					</UL>
				</DIV>
			</DIV>
		</DIV>
		<DIV class="ajax-overlay"></DIV>
		<DIV class="ajax-quickview-overlay"><SPAN class="ajax-quickview-overlay__preloader"></SPAN>
		</DIV>
	</DIV>
	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/device.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/livesearch.min.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/common.js" type="text/javascript"></SCRIPT>

	<!-- bổ sung mã nguồn giỏ hàng của EPJ1, viết đề lên của OpenCart -->
	<SCRIPT src="/ui/home/opencart_64111_watch/view/cart.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_64111_watch/template_files/script.js" type="text/javascript"></SCRIPT>
	<!-- Google Tag Manager --><NOSCRIPT>&lt;iframe
		src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
		style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</NOSCRIPT>
	<SCRIPT>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
	</SCRIPT>
	<!-- End Google Tag Manager -->
</BODY>

</HTML>