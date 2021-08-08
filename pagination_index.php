   <!doctype html>
<html>
	
	<head>
		<meta charset="utf-8">
		
    </head>
    <body>
<?php
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");

/*echo ' <section  id="category">

			<div class="row section-head">';
$sql = 'select * from groups ORDER BY g_id DESC;';
			 
$counter = 0;

		
		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		
	 	echo	'<div style="padding:10px 10px 10px 10px;text-align:center"class=" bgrid folio-item">
				<img class="tilt" src="'.$row['g_pic'].'" >
				<div class="text-block"><a   href="products.php?id='.$row['g_id'].'&page=1">آموزش</a></div>
				<div id="talkbubble"class="top-right"><span class="count2"id="amountSpan">'.$row['g_count'].'</span></div>
			</div>';
	 }
		


     echo ' </div> <!-- end section-head -->
</section>
      ';
	  
	  echo '<section style="text-align:center" >
   
   
   <section>
   <section id="portfolio">

   	
	<div class="row items">

         <!-- portfolio-wrapper -->
		<p style="font-size:22px;color:red">تخفیف های پر بیننده</p>
		
         <div style=""id="portfolio-wrapper" class="bgrid-fourth s-bgrid-half tab-bgrid-whole">';<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative '.$lable.'">
										<img src="'.$row['pic1'].'" alt="'.$row['alt1'].'">

										<div class="block2-overlay trans-0-4">
											<a href="detail.php?iddoll='.$iddoll.'" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>
												<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
												   onClick="add_cookie('.$row['id'].','.$row['price'].',\''.$row['name'].'\');">
													خرید
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											'.$row['name'].'
											
										</a>
												<br/>% '.$row['discount'].' تخفیف 
											<br/>مهلت خرید    '.$d2.'   روز
										<span class="block2-price m-text6 p-r-5">
											قیمت 1500 تومان<br/>
										</span>
										
										
									</div>
								</div>
							</div>*/






			  $sql = 'select * from dolls ORDER BY click DESC limit 0,4 ;';
			 
$price = 0;
$i = 1;

		
		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		 if($row['group'] == 20)
			$lable = 'block2-labelsale';
		else
			$lable = 'block2-labelnew';
		$src=$row['pic2'] ;
		$tozih = substr($row['comment'],0,50);
		
		if ( $row['price'] == 0)
			$price = "رایگان";
		else
			$price = 'قیمت کد تخفیف '.$row['price'].'&nbsp;&nbsp; تومان     ';
		
		if ( $row['using_dt'] == 0)
			$d2 = "نا محدود";
		else
			$d2 = 'مهلت خرید   &nbsp;&nbsp; '.ceil((strtotime($row['using_dt']) - time())/60/60/24).'&nbsp;&nbsp;روز';
		$iddoll = (string)$row['id'];

				
				echo '<div class="col-sm-12 col-md-4 col-lg-3 p-b-50">
							<!-- Block2 -->
							<div class=" block2">
								
									<div class=" block2-img wrap-pic-w of-hidden pos-relative '.$lable.'">
										<img src="'.$row['pic1'].'" alt="'.$row['alt1'].'">

										<div class=" block2-overlay trans-0-4">
											 
											
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

									<div class="thumbnail block2-txt p-t-20">
										<a href="detail.php?iddoll='.$iddoll.'" class="block2-name dis-block s-text3 p-b-5">
											<p class="title_item">'.$row['name'].'</p>
											
										
												<p class="discount_item"> تخفیف '.$row['discount'].' درصد</p>
											<p class="time_item">'.$d2.'</p>
										<span class="block2-price m-text6 p-r-5">
											<p >'.$price.'  </p><br/>
										</span>
										
										
									</div></a>
								</div>
							</div>
				';
				
				
				
}


/*echo '</div> <!-- end portfolio-wrapper -->
         
	</div>
      

   </section> <!-- end services -->';*/
mysqli_close($con);

?>
