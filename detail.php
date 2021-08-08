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
	<title>جزئیات  تخفیف آف بگیر</title>
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
	<script type="text/javascript" src="js/cookieJS.js"></script>
	<script src="js/jquery.min1.10.2.js"></script>
	<script src="js/persianumber.js"></script>
	<script>
	var iddoll = "<?php echo $iddoll; ?>";

 


function search_link2()
{

	var q = document.getElementById("search-box2").value;
	if(q.length >= 2)
	window.location.replace("products.php?page=1&q="+q);
	
}		


$(document).ready(function(){
	
	$("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });	
if(Number(getCookie('count')) > 0)
	$("#amountSpan").text(Number(getCookie('count')) - 1 ); 

function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	
function Display_Load()
	{
	    $("#loading").fadeIn(300,0);
	}




//$("#test").load("recieve.php", Hide_Load());

 if(getCookie('count') == '' )
 { 
	setCookie('price','0'); 
	setCookie('count','1'); 

 }

	
	});

<!--نمودار>	

	</script>  
<!--===============================================================================================-->
</head>
<body style="text-align:right;" class="animsition">

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
				<a href="\" class="logo">
					<img class="img_logo"src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul dir="rtl"class="main_menu">
							<li >
						<a href="\">صفحه اصلی</a>
								
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
				<img class="img_logo"src="images/icons/logo.png" alt="IMG-LOGO">
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
						<a href="\">صفحه اصلی</a>
						
						
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">تخفیف ها</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">فروش</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php?page=1&idmain=1">وبلاگ ها</a>
						
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

		<a href="product.html" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div>-->

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80" >
		<?php

//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");



	

$map = 0;
$flagErr = 0;
$sql=" ";
$iddoll = $_GET['iddoll'];
$price = 0;
$discount = 0;

if (!preg_match('/^[0-9]{1,3}/', $iddoll)) {
		$flagErr = 1;
	}
	
	
	if($flagErr == 0)
	{
		
		$sql = 'select * from dolls where id = '.$iddoll;
		$result = $con->query($sql);
		$row = mysqli_fetch_array($result);
		$map = $row['pic1'];
		$group = $row['group'];
		if ( $row['using_dt'] == '0')
			$d2 = "زمان استفاده نا محدود";
		else
			$d2 = ceil((strtotime($row['using_dt']) - time())/60/60/24);
		if($row['group'] != '20')
			$tip = 'با خرید این برگه کد پرداخت برای شما ارسال میشود تا بتوانید با ارائه آن تخفیف دریافت نمائید';
		else
			$tip = 'برای ارتباط با فروشنده مستقیما تماس بگیرید';
		
		if ( $row['price'] == 0)
			$price = "رایگان";
		else
			$price = 'قیمت کد تخفیف '.$row['price'].'&nbsp;&nbsp; تومان     ';
		$discount = 'تخفیف &nbsp;&nbsp'.$row['discount'].'&nbsp;&nbsp درصد';
		switch($row['group'])
		{
			case 11:
				$cat = ' آموزش';
				 break;
				
		case 1:
        $cat = "رستوران";
        break;
    case 4:
        $cat = "فست فود";
        break;
    case 6:
        $cat = "بستنی";
        break;
    case 5:
        $cat = "لباس";
        break;
	case 2:
        $cat = "تفریح";
        break;
    case 8:
        $cat = " کیف و کفش ";
        break;
    case 9:
        $cat = "ورزش";
        break;
    case 7:
        $cat = "خودرو";
        break;
	case 3:
        $cat = "دیجیتال";
        break;
    case 10:
        $cat = "آرایشگاه";
        break;
    case 11:
        return "آموزش و کتاب";
        break;
		}
			
				echo '<div class="flex-w flex-sb" >
				<div class="w-size13 p-t-30 respon5">
						<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="'.$row['pic1'].'">
							<div class="wrap-pic-w">
								<img src="'.$row['pic1'].'" alt="'.$row['alt1'].'">
							</div>
						</div>

						<div class="item-slick3" data-thumb="'.$row['pic2'].'">
							<div class="wrap-pic-w">
								<img src="'.$row['pic2'].'" alt="'.$row['alt1'].'">
							</div>
						</div>

						<div class="item-slick3" data-thumb="'.$row['pic3'].'">
							<div class="wrap-pic-w">
								<img src="'.$row['pic3'].'" alt="'.$row['alt1'].'">
							</div>
						</div>
					</div>
				</div>
			</div>';

			echo '<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					'.$row['name'].'
				</h4>

				<span class="m-text17">
					  '.$price.'
				</span>
				<h4 class="product-detail-name m-text16 p-b-13">
					'.$discount.'
				</h4>

				<p class="s-text8 p-t-10">
					'.$row['comment'].'
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
								 onClick="add_cookie('.$row['id'].','.$row['price'].',\''.$row['name'].'\');
												   update_basket(\''.$row['name'].'\')">
									خرید
								</button>
							</div>
						</div>
					</div>
				</div>';

				echo '<div class="p-b-45">
					
					<span class="s-text8 m-r-35">&nbsp;</span>
					<span class="s-text8"> <a href="product.php?page=1&idmain='.$row['group'].'" > '.$cat.'</a> > '.$row['name'].'</span>
				</div>

				<!--  -->
				<div dir="rtl"class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer  color0-hov trans-0-4 t-right">
						تذکر مهم	
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<hr/>
					<p >'.$tip.'</p>
					</div>
				</div>';

				echo '<div dir="rtl" class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					 آدرس و تلفن
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						 '.$row['address'].'<br/>
						تلفن : '.$row['tel'].'<br/>
						</p>
						<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="'.$row['x'].'" data-map-y="'.$row['y'].'" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
					</div>
					
				</div>

				<div dir="rtl"class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						   نظرات دیگران
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
						
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							';
							
							
							$id_opinion = $iddoll;
	if($id_opinion > 0)	
		$sql2 = 'select * from comments where verify = 1 and comments.id_relate ='.$id_opinion;	
	
			echo '<div >';
			echo '<table style="width="100%"text-align:right;text-justify: inter-word;border: solid 1px #dddddd;">';
			echo "<tr ><th style='width:30%'>شناسه</th>
			<th style='width:70%'>پیام</th>
			</tr>";

		$result = mysqli_query($con,$sql2);
		while($row = mysqli_fetch_array($result))
		{
		
			echo "<tr style='color:blue'><td><h5 style='color:blue'>".$row['name']."</h5></td><td><h5 style='color:blue'>".$row['comment']."</h5></td></tr>" ;
		 
		}	
		echo '</table></div>
							
						</p>
					</div>
				</div>
			</div></div>
			';
		}	
?>		

		
		
					
					
				
	</div>


	<!-- Relate Product -->
	<section id="relateproduct"class=" bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					مطالب مرتبط
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					
					<?php

					$sql = 'select * from dolls where dolls.group='.$group;
					
					$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
				{	
				$iddoll = $row['id'];
						echo '<div class="item-slick2 p-l-15 p-r-15">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="'.$row['pic1'].'" alt="'.$row['alt1'].'">

									<div class="block2-overlay trans-0-4">
												<a href="detail.php?iddoll='.$iddoll.'" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
												   onClick="add_cookie('.$row['id'].','.$row['price'].',\''.$row['name'].'\');
												   update_basket(\''.$row['name'].'\')">
													خرید
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20 thumbnail">
								<a href="detail.php?iddoll='.$iddoll.'" class="block2-name dis-block s-text3 p-b-5">
											'.$row['name'].'
											
										
												<br/>% '.$row['discount'].' تخفیف 
											<br/>مهلت خرید    '.$d2.'   روز

								<span class="block2-price m-text6 p-r-5">
											<br/> '.$row['price'].'  تومان
										</span>
							</div>
						</div></a>
					</div>';
		}
mysqli_close($con);	
	?>			
				
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
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('#name_doll').html();
			var price = $(this).parent().parent().parent().find('#price').html();
			var iddoll = $(this).parent().parent().parent().find('#iddoll').html();
			$(this).on('click', function(){
				
				add_cookie(iddoll,price,nameProduct);
				if(Number(getCookie('count')) > 0)
					$(".amountSpan").text(Number(getCookie('count')) - 1 ); 	
				swal(nameProduct, "اضافه شد به سبد !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "اضافه شد به سبد!", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "اضافه شد به سبد !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
