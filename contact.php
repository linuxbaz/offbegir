<?php


session_start();
$q = 0;

  if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان ";
    }


 if (!empty($_REQUEST['iddoll'])) 
     $iddoll = $_REQUEST['iddoll'];	

?>
<!DOCTYPE html>
<html lang="fa">
<head>
	<title>تماس با ما آف بگیر</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					<a href="">همه تخفیف ها</a>
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php echo $_SESSION['user_name']; ?>
					</span>

					
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul dir="rtl"class="main_menu">
							<li >
						<a href="index.php">صفحه اصلی</a>
								
					</li>

					<li >
						<a href="product.php?page=1&id=0">تخفیف ها</a>
					</li>

					<li >
						<a href="#">فروش</a>
					</li>

					<li >
						<a href="blog.php">وبلاگ ها</a>
					</li>

					<li >
						<a href="about.php">درباره ما</a>
					</li>

					<li >
						<a href="contact.php">تماس</a>
					</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						

						<!-- Header cart noti -->
						<div dir="rtl"class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								

								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="txtusername" placeholder="نام کاربری">
									</div>
								</li>
								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="password" id="txtpus" placeholder="پسورد">
									</div>
								</li>
							</ul>

							

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a onclick="Login()" style="cursor:pointer;color:white" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									ورود
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="register.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										ثبت نام(30 ثانیه)
									</a>
								</div>
							</div>
							<div style="padding-right:60px;">
							<a style="cursor:pointer"onclick="Logout()"href="">خروج</a>
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
							<a href="register.php">فراموشی نام کاربری و رمز</a>
							</div>
						</div>
						
					</div>
					<span class="linedivide1"></span>
					<a href="shop.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/report.png" class="header-icon1" alt="ICON">
						
					</a>
					<span class="linedivide1"></span>
					<a href="cart.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
						
					</a>
					
					<span id="amountSpan" class="header-icons-noti"></span>
					
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">


						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul dir="rtl"class="header-cart-wrapitem">
								

								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="txtusername" placeholder="نام کاربری">
									</div>
								</li>
								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="password" id="txtpus" placeholder="پسورد">
									</div>
								</li>
							</ul>

							

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a onclick="Login()" style="cursor:pointer;color:white" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									ورود
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="register.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										ثبت نام(30 ثانیه)
									</a>
								</div>
							</div>
							<div style="padding-right:60px;">
							<a style="cursor:pointer"onclick="Logout()"href="">خروج</a>
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
							<a href="register.php">فراموشی نام کاربری و رمز</a>
							</div>
						</div>
						
					</div>
					<span class="linedivide1"></span>
					<a href="shop.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/report.png" class="header-icon1" alt="ICON">
						
					</a>
					<span class="linedivide2"></span>
					
					<a href="cart.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
						<span id="amountSpan" class="header-icons-noti"></span>
					</a>

					
					
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
				
			</div>
			
		</div>

		<!-- Menu Mobile -->
		<div style="text-align:right"class="wrap-side-menu" >
			<nav class="side-menu">
				<ul dir="rtl"class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?php echo $_SESSION['user_name']; ?>
							</span>

							
						</div>
					</li>
					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>
					
					<li class="item-menu-mobile">
						<a href="index.php">صفحه اصلی</a>
						
						
					</li>

					<li class="item-menu-mobile">
						<a href="product.php?page=1&id=0">تخفیف ها</a>
					</li>

					<li class="item-menu-mobile">
						<a href="#">فروش</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php?page=1&idmain=1">وبلاگ ها</a>
						
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">درباره ما</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">تماس</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/contact_image.jpg);">
		<h2 class="l-text2 t-center">
			ارتباط با ما
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="36.26972" data-map-y="50.00431" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div dir="rtl"class="col-md-6 p-b-30">
					<form  action="<?php echo htmlspecialchars('sendEmail.php');?>" method="post" >
						<h4 class="m-text26 p-b-36 p-t-15">
							فرستادن پیام
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="contactName" placeholder="نام و نام خانوادگی">
						</div>

						

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="contactEmail" placeholder="ایمیل">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="contactMessage" placeholder="متن پیام"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								ارسال
							</button>
							
						</div>
					</form>
					
				</div>
				
			</div>
		</div>
	</section>


	<!-- Footer -->
	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="m-text14 p-b-7">
				آدرس
				</h4><p>
قزوین<br>
            میدان آزادی - ابتدای خیابان نادری - کوچه زرآبادی - پلاک 9 - طبقه دوم  <br>				
				</p>
<h4 class="s-text12 p-b-30"><br>
				تماس
				</h4>              
			   <p>تلفن: 33236567 028
			   	 </p>
			     	<p>   info@offbegir.com : ایمیل
			   
               	
				</p>

				<div>
					<p class="s-text7 w-size27">
						
            
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div style="text-align:center"class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 style="text-align:center"class="m-text14 p-b-7">
							موضوعات
							
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="products.php?id=11&page=1" class="s-text7 ">
									آموزش
									
								</a>
							</li>

							<li class="p-t-4">
								<a href="products.php?id=5&page=1" class="s-text7">
									تفریح
								</a>
							</li>

							<li class="p-t-4">
								<a href="products.php?id=7&page=1" class="s-text7">
									رستوران
								</a>
							</li>

							<li class="p-t-4">
								<a href="products.php?id=1&page=1" class="s-text7">
									مکانیکی
								</a>
							</li>

							<li class="p-t-4">
								<a href="products.php?id=8&page=1" class="s-text7">
									کیف و کفش
								</a>
							</li>
							
							<li class="p-t-4">
								<a href="products.php?id=3&page=1" class="s-text7">
									دیجیتال
								</a>
							</li>
							
							<li class="p-t-4">
								<a href="products.php?id=9&page=1" class="s-text7">
									ورزش
								</a>
							</li>
							
							<li class="p-t-4">
								<a href="products.php?id=4&page=1" class="s-text7">
									فست فود
								</a>
							</li>
							
							<li class="p-t-4">
								<a href="products.php?id=2&page=1" class="s-text7">
									لباس
								</a>
							</li>
							
							<li class="p-t-4">
								<a href="products.php?id=10&page=1" class="s-text7">
									آرایشگاه
								</a>
							</li>
							
						</ul>
			</div>

			<div style="text-align:center"class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 style="text-align:center"class="m-text14 p-b-7">
					پیوندها
				</h4>

					<li class="s-text7">
						<a href="index.php">صفحه اصلی</a>
						
						
					</li>

					<li class="s-text7">
						<a href="product.html?page=1&idmain=0">تخفیف ها</a>
					</li>

					<li class="s-text7">
						<a href="#">فروش</a>
					</li>

					<li class="s-text7">
						<a href="blog.php?page=1&idmain=1">وبلاگ ها</a>
					</li>

					<li class="s-text7">
						<a href="about.php">درباره ما</a>
					</li>

					<li class="s-text7"	>
						<a href="contact.php">تماس</a>
					</li>
				</ul>
			</div>

			

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					مجله علمی
					
				</h4>
				<p>   
				فناوری ،فضا ،هک و امنیت و گردشگری
               	
				</p><br/>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							عضویت رایگان
						</button>
					</div>

				</form>
			</div>
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<img  src="images/m1.png" alt="">
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			

			<div class="t-center s-text8 p-t-20">
این وب سایت تحت نظارت کسب و کار اینترنتی آف بگیر  میباشد
	             <br/>      
info@offbegir.com			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
