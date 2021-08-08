<?php if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان ";
    }
	?>
<!DOCTYPE html>
<html lang="fa">
<head>
	<title>محتوای وبلاگهای آف بگیر</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/persianumber.js"></script>
<script src="js/jquery.min1.10.2.js"></script>
	   <script type="text/javascript" src="js/cookieJS.js"></script>


<!--===============================================================================================-->
<script type="text/javascript">


function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	
function Display_Load()
	{
	    $("#loading").fadeIn(300,0);
	}

	

	$(document).ready(function(){
		
		
			
		if(Number(getCookie('count')) > 0)
			$("#amountSpan").text(Number(getCookie('count')) - 1 ); 


	
	
		$('*').persiaNumber();	
		
	}); 
	</script>
<!--===============================================================================================-->
</head>
<body >

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
					<img class="img_logo"src="images/icons/logo.png" alt="IMG-LOGO">
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
						<a href="#">وبلاگ ها</a>
						<ul class="sub_menu">
									<li><a href="blog.php?page=1&idmain=1">گردشگری</a></li>
									<li><a href="blog.php?page=1&idmain=2">فناوری اطلاعات</a></li>
									<li><a href="blog.php?page=1&idmain=3">آمارهای شگفت انگیز</a></li>
								</ul>
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
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										ثبت نام(30 ثانیه)
									</a>
								</div>
							</div>
							<a href="">فراموشی نام کاربری و رمز</a>
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
				<img class="img_logo" src="images/icons/logo.png" alt="IMG-LOGO">
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
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										ثبت نام(30 ثانیه)
									</a>
								</div>
							</div>
							<a href="">فراموشی نام کاربری و رمز</a>
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
								<?php  session_start(); echo $_SESSION['user_name']; ?>
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
						<a href="index.html">صفحه اصلی</a>
						
						
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">تخفیف ها</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">فروش</a>
					</li>

					<li class="item-menu-mobile">
						<a href="#">وبلاگ ها</a>
						<ul class="sub_menu">
									<li><a href="blog.php?page=1&idmain=1">گردشگری</a></li>
									<li><a href="blog.php?page=1&idmain=2">فناوری اطلاعات</a></li>
									<li><a href="blog.php?page=1&idmain=3">آمارهای شگفت انگیز</a></li>
								</ul>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">درباره ما</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">تماس</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- breadcrumb
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="blog.html" class="s-text16">
			Blog
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Black Friday Guide: Best Sales & Discount Codes
		</span>
	</div> -->

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
			
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
					<?php
					

if (!empty($_GET['id_post']))	  
 if($_GET['id_post'] > 0 && $_GET['id_post'] < 400)
	 $id_post = $_GET['id_post'];


	
    if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان ";
    }
	

	//$con = mysqli_connect('localhost','root','');
	$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
	mysqli_query($con,"SET CHARACTER SET utf8");
	//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");
	
	$sql = 'select * from blogs where blogs.id ='.$id_post;
	$group_post = 0;
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		 $main_text = $row['main_text'];
		 $group_post = $row['blog_group'];

	echo '<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img class="thumbnail"src="'.$row['pic'].'" alt="'.$row['alt'].'">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									'.$row['topic'].'
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By:نویسنده
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										'.$row['dt'].'
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-l-3 m-r-6">|</span>
									</span>

									
								</div>

								<p class="p-b-25">
								'.$main_text.'	
								</p>
							</div>

							
						</div>';
	 } ?>

						<!-- Leave a comment -->
						<form dir="rtl"class="leave-comment">
							<h4 class="m-text25 p-b-14">
								تماس با وبلاگ نویسان
							</h4>

							<p class="s-text8 p-b-40">
								ایمیل شما منتشر نخواهد شد
							</p>

							<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="متن پیام..."></textarea>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="نام *">
							</div>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder=" ایمیل *برای پاسخ به شما">
							</div>

							<div class="w-size24">
								<!-- Button -->
								<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									فرستادن پیام
								</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						<!-- Search -->
						<div class="pos-relative bo11 of-hidden">
							<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

							<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
								<i class="fs-13 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							مطالب مرتبط
						</h4>

						<ul dir="rtl">
						<?php
					$sql = 'select topic,id from blogs where blogs.blog_group ='.$group_post;
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
							echo '<li class="p-t-6 p-b-8 bo6">
								<a href="blog_detail.php?id_post='.$row['id'].'" class="s-text13 p-t-5 p-b-5">
									'.$row['topic'].'
								</a>
							</li>';
					}?>

							
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
						<strong>	تخفیف های مرتبط</strong>
						</h4>

						<ul dir="rtl"class="bgwhite">
						<?php
					$sql = 'select name,discount,price,pic1,alt1,id from dolls limit 0,5';
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
							echo '<li class="flex-w p-b-20">
								<a href="detail.php?iddoll='.$row['id'].'" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img class="img_relate_blogs"src="'.$row['pic1'].'" '.$row['alt1'].'">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										'.$row['name'].'
									</a>

									<span class="dis-block s-text17 p-t-6">
										 &nbsp;'.$row['discount'].'&nbsp;&nbsp;درصد
									</span>
									<span class="dis-block s-text17 p-t-6">
										تومان &nbsp;'.$row['price'].'
									</span>
								</div>
							</li>';
					}	?>
							
						</ul>

						<!-- Archive -->
						<h4 class="m-text23 p-t-50 p-b-16">
							آرشیو
						</h4>

						<ul>
							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									July 2018
								</a>

								<span class="s-text13">
									(9)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									June 2018
								</a>

								<span class="s-text13">
									(39)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									May 2018
								</a>

								<span class="s-text13">
									(29)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									April  2018
								</a>

								<span class="s-text13">
									(35)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									March 2018
								</a>

								<span class="s-text13">
									(22)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									February 2018
								</a>

								<span class="s-text13">
									(32)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									January 2018
								</a>

								<span class="s-text13">
									(21)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									December 2017
								</a>

								<span class="s-text13">
									(26)
								</span>
							</li>
						</ul>

						<!-- Tags -->
						<h4 class="m-text23 p-t-50 p-b-25">
							کلمات کلیدی
						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								کلمه اول
							</a>

							<a href="#" class="tag-item">
								کلمه اول
							</a>

							<a href="#" class="tag-item">
								کلمه اول
							</a>

							<a href="#" class="tag-item">
								کلمه اول
							</a>

							<a href="#" class="tag-item">
								کلمه اول
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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
	<script src="js/main.js"></script>

</body>
</html>
