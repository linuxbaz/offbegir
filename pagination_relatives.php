   <!doctype html>

<?php

session_start();
//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_select_db($con,"offbegiir");



	

$map = 0;
$flagErr = 0;
$sql=" ";
$iddoll = $_GET['iddoll'];

if (!preg_match('/^[0-9]{1,3}/', $iddoll)) {
		$flagErr = 1;
	}
	
	
	if($flagErr == 0)
	{
		
		$sql = 'select * from dolls where id = '.$iddoll;
		$result = $con->query($sql);
		$row = mysqli_fetch_array($result);
		$map = $row['pic1'];
		$d2 = ceil((strtotime($row['using_dt']) - time())/60/60/24);
		if($row['group'] != '20')
			$tip = 'با خرید این برگه کد پرداخت برای شما ارسال میشود تا بتوانید با ارائه آن تخفیف دریافت نمائید';
		else
			$tip = 'برای ارتباط با فروشنده مستقیما تماس بگیرید';
			
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

						<div class="item-slick3" data-thumb="'.$row['pic2'].'">
							<div class="wrap-pic-w">
								<img src="'.$row['pic2'].'" alt="'.$row['alt1'].'">
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
					'.$row['price'].' تومان 
				</span>

				<p class="s-text8 p-t-10">
					'.$row['comment'].'
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

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
					<span class="s-text8 m-r-35">مهلت'.$d2.'روز</span>
					<span class="s-text8 m-r-35">&nbsp;</span>
					<span class="s-text8">رده: آموزش</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer  color0-hov trans-0-4 t-right">
						نکته
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<hr/>
					<p >'.$tip.'</p>
					</div>
				</div>';

				echo '<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						نقشه
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						آدرس : '.$row['address'].'<br/>
						تلفن : '.$row['tel'].'<br/>
						</p>
						<img src="'.$row['pic2'].'" alt="'.$row['alt1'].'">
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						   بار دیده شده
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div></div>
			';
		
		//------- Relatives Link ---------------------	
		/*$sql = 'select * from dolls ORDER BY click DESC limit 0,8 ;';
		$result = mysqli_query($con,$sql);
		echo '
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					تخفیف های مرتبط
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">';
		while($row = mysqli_fetch_array($result))
		 {
				
		echo '<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								<img src="'.$row["pic1"].'" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									'.$row["name"].'
								</a>

								<span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

								<span class="block2-newprice m-text8 p-r-5">
									$15.90
								</span>
							</div>
						</div>
					</div>';		
				
		 }	
		echo '</div>
			</div>

		</div>';*/
			
	}	
	

		
		
mysqli_close($con);

?>

  