<?php

session_start();
$q = 0;

  if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان ";
    }

?>

<!DOCTYPE html>
<html lang="fa">
<head>
	<title>گزارش  آف بگیر</title>
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

	<script src="js/jquery.min1.10.2.js"></script>
	   <script type="text/javascript" src="js/cookieJS.js"></script>
<!--===============================================================================================-->

<script src="js/persianumber.js"></script>
	<script>
	
	

          
	</script>   

</head>
<body dir="rtl" class="animsition">

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

				
					<a href="product.html" class="s-text22 hov6 p-l-5">
			<span class="topbar-child1">همه تخفیف ها</span>
		</a>
				

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php echo $_SESSION['user_name']; ?>
					</span>	

					
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img class="img_logo" src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul dir="rtl"class="main_menu">
							<li>
								<a href="index.php">صفحه اصلی</a>
								
							</li>

							<li>
								<a href="product.php">تخفیف ها</a>
								
							</li>

							<li class="sale-noti">
								<a href="product.php">فروش</a>
							</li>

							<li>
								<a href="blog.php">وبلاگ ها</a>
								<ul class="sub_menu">
									<li><a href="blog.php?page=1&idmain=1">گردشگری</a></li>
									<li><a href="blog.php?page=1&idmain=2">فناوری اطلاعات</a></li>
									<li><a href="blog.php?page=1&idmain=3">آمارهای شگفت انگیز</a></li>
								</ul>
							</li>

							<li>
								<a href="about.php">درباره ما</a>
							</li>

							<li>
								<a href="contact.php">تماس</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div dir="rtl"class="header-icons">
					

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
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="txtpus" placeholder="پسورد">
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
			<a href="index.php" class="logo-mobile">
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
							<ul class="header-cart-wrapitem">
								

								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="txtusername" placeholder="نام کاربری">
									</div>
								</li>
								<li class="header-cart-item">
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="txtpus" placeholder="پسورد">
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

					<div class="header-wrapicon2">
				<a href="cart.php"><img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti amountSpan"></span></a>
						
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

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
						<a href="index.html">صفحه اصلی</a>	
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">تخفیف ها</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">فروش</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php?page=1&idmain=1">وبلاگ ها</a>
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

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/bg_logo.png);">
		<h2 class="l-text2 t-center">
			بنر صفحه
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
	
		<div dir="rtl"class="container">
		<h5 class="m-text20 p-b-24">
					گزارش
				</h5>
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table dir="rtl"class="table-shopping-cart">
					<tr dir="rtl">
						<th class="column-1" >شناسه خریدار</th>
						<th class="column-2">شماره پرداخت	</th>
						<th class="column-3">تاریخ خرید	</th>  
						<th class="column-4">قیمت	</th>  
						<th class="column-5">نام برگه</th>  
					</tr>
				<?php
				header('Content-Type: text/html; charset=utf-8');

$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");
$username = "ok";
$payid = 0;
$flagErr = 0;
$shop_id = 0;

if(strcmp($_SESSION['user_name'],'میهمان'))
{
	$username = $_SESSION['user_name'];
				$sql = "select shop_id from users where users.uname='".$username."'";	
				$result = $con->query($sql);
			if ($result->num_rows > 0)
			{
				$row = mysqli_fetch_array($result);
				$shop_id = $row['shop_id'];
					if (!empty($_POST['payid']))
					{
						$payid = $_POST['payid'];
						if (!preg_match('/^[0-9_-]{7,12}$/', $payid))
						{
							$flagErr = 1;
						}
						else
						{
							$sql = "DELETE FROM orders WHERE payid ='".$payid."'";	
							$result = $con->query($sql);
						}
					}
				$sql = "select * from fskfactor where shop_id ='".$shop_id."'";
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
					echo '<tr ><td>'.$row['customerid'].'</td><td>'.$row['Payment_ID'].'</td><td>'.$row['dt'].'</td><td>'.$row['price'].'</td><td>'.$row['dollname'].'</td></tr>';
				 
	echo "</table>";
			}
			else //no valid user
			{
				echo "کاربر معتبر نمیباشد ";
			}
	if (!empty($_POST['editor1'])) //If input timing
	{
		$timing = $_POST['editor1'];
		$sql = 'update dolls set timing ="'.$timing.'" where shop_id ="'.$shop_id.'"';
		if (mysqli_query($con, $sql))
			echo "<h2>اطلاعات با موفقیت ثبت شد<h2>";
		else
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
				
}//user guest

else
{
	$site = "http://www.offbegiir.com/";
	fopen($site,"r")
	or exit("Unable to connect to $site");
}
	   
mysqli_close($con);
 
	 ?>

						
					
				</div>
			</div>

			
			<!-- ِDelete -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				

				<!--  -->
				


				<div class="size15 trans-0-4">
					 <form action="shop.php" method="POST" enctype="multipart/form-data">
   					<label >   کد  </label>
						 <input type="text" name="payid">
					<!-- Button -->
					<button type="submit"class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						حذف کد استفاده شده
					</button>
					</form> 
				</div>
			</div>
		</div>
	</section>



	<footer  class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
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

				<ul>
					<li class="s-text7">
						<a href="index.html">صفحه اصلی</a>
						
						
					</li>

					<li class="s-text7">
						<a href="product.html">تخفیف ها</a>
					</li>

					<li class="s-text7">
						<a href="product.html">فروش</a>
					</li>

					<li class="s-text7">
						<a href="blog.html">وبلاگ ها</a>
						<ul class="sub_menu">
									<li><a href="blog.php?page=1&idmain=1">گردشگری</a></li>
									<li><a href="blog.php?page=1&idmain=2">فناوری اطلاعات</a></li>
									<li><a href="blog.php?page=1&idmain=3">آمارهای شگفت انگیز</a></li>
								</ul>
					</li>

					<li class="s-text7">
						<a href="about.html">درباره ما</a>
					</li>

					<li class="s-text7"	>
						<a href="contact.html">تماس</a>
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
