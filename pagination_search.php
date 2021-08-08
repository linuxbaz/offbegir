   
<?php

session_start();
//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");


$sql=" ";
$q = " ";
$page = 0 ;
if(!empty($_GET['page']))
	$page = $_GET['page'];
if(!empty($_GET["q"])) 
{
	$q = $_GET["q"];
	
	if (preg_match('/^[\p{Arabic}\s\-]+$/u', $q))
		{
		if($page == 1)
			$sql ="SELECT * FROM dolls WHERE dolls.name like N'%".$q."%' limit 0,12";
		else
			$sql ="SELECT * FROM dolls WHERE dolls.name like N'%".$q."%' limit ".(($page-1)*12).",12";
		$result = mysqli_query($con,$sql);
	$price = 0;
	$i = 0;
	
	echo '<div class="row">';
		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		 if($row['group'] == 20)
			$lable = 'block2-labelsale';
		else
			$lable = 'block2-labelnew';
		$src=$row['pic2'] ;
		$tozih = substr($row['comment'],0,50);
		$d2 = ceil((strtotime($row['using_dt']) - time())/60/60/24);
		if ( $row['price'] == 0)
			$price = "رایگان";
		else
			$price = $row['price'].'&nbsp;&nbsp; تومان  &nbsp;&nbsp;   ';
		$iddoll = (string)$row['id'];
		

		echo '
				<div dir="rtl"class="col-sm-12 col-md-6 col-lg-4 p-b-50">
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
											
										
												<p class="discount_item">% '.$row['discount'].' تخفیف </p>
											<p class="time_item">مهلت خرید    '.$d2.'   روز</p>
										<span class="block2-price m-text6 p-r-5">
											<p >'.$row['price'].'  تومان</p><br/>
										</span>
										
										
									</div></a>
								</div>
							</div>
								
						
				';
				
				
}
echo '</div>';

$sql ="SELECT count(*) as c FROM dolls WHERE dolls.name like N'%".$q."%'";
	$result = $con->query($sql);
 	$row = mysqli_fetch_array($result);
  	$limit = ceil($row['c'] / 10);
	echo '
	  <div class="pagination flex-m flex-w p-t-26">';
for($i = 1;$i <= $limit;$i++)
{
	if($i % 15 == 0)
		echo '<br>';
	if($i == $page)
		echo '<a style="cursor:pointer;" class="item-pagination flex-c-m trans-0-4 active-pagination" 
				onClick="page_loader('.$q.','.$i.')" >'.$i.'</a>';
	else
    	echo '<a style="cursor:pointer"class="item-pagination flex-c-m trans-0-4" 
				onClick="page_loader('.$q.','.$i.')" >'.$i.'</a>';
}
	echo '</div></div></div>';
	}			
else
		echo '<br><p>عبارت مورد تائید نیست</p>';
	}
else
		echo '<br><p>لطفا عبارت جستجو را وارد کنید</p>';
	
	


	


mysqli_close($con);

?>

   </div>
</body>
</html>
