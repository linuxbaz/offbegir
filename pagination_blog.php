  
<?php

session_start();

$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");



 
$price = 0;
$i = 1;

		
$page=$_GET['page'];

$sql=" ";
$idmain = $_GET['idmain'];
	if(($idmain >= 0 && $idmain <= 3) )
	{
		if($page == 1)
		{
			if($idmain == 0)
			 {
			  $sql = 'select * from blogs ORDER BY dt DESC limit 0,6 ;';
			 }
			else
			{
				
			  $sql = 'select * from blogs where blogs.blog_group ='.$idmain.' ORDER BY dt DESC limit 0,6';
			}
		}
		else //page not 1
		  { 
			  if($idmain == 0)
			  {
				$sql = "select * from blogs ORDER BY dt DESC limit ".(($page-1)*10).",6 ";
			  }
			  else
			  {
				$sql = 'select * from blogs where blogs.blog_group ='.$idmain.'ORDER BY dt DESC limit '.(($page-1)*10).',6 ';
			  }
		  }
	}

echo '<div class="col-md-8 col-lg-9 p-b-75">
		<div class="p-r-50 p-r-0-lg">';

$price = 0;
$i = 0;
$post_writer = 0;
		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		switch($row['blog_group'])
		{
			case 1:
			$post_writer = 'علیرضا رحیم لو  ';
			break;
			case 2:
			$post_writer = 'حسام مصظفوی آبگرم ';
			break;
			case 3:
			$post_writer = 'فرناز محمدی';
			break;
		}
		$main_text = substr($row['main_text'],0,280).'...';
		echo '	<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="blog_detail.php?id_post='.$row['id'].'" class="item-blog-img pos-relative dis-block hov-img-zoom">
						
								<img src="'.$row['pic'].'" alt="تصویر آیتم">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									'.$row['dt'].'
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog_detail.php?id_post='.$row['id'].'" class="m-text24">
										'.$row['topic'].'
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										'.$post_writer.'
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										'.$row['blog_group'].'
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										پیام ها
									</span>
								</div>

								<p class="p-b-12">
									'.$main_text.'
									</p>

								<a href="blog_detail.php?id_post='.$row['id'].'" class="s-text20">
									ادامه مظلب
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					
				';
					
}
echo '</div>';


if($idmain != 0)
{
  $sql = 'select count(*) as c from blogs where blogs.blog_group='.$idmain;	
  
}
else
	$sql = 'select count(*) as c from blogs';


	$result = $con->query($sql);
 	$row = mysqli_fetch_array($result);
  	$limit = ceil($row['c'] / 6);
	echo '
	  <div class="pagination flex-m flex-w p-t-26">';
for($i = 1;$i <= $limit;$i++)
{
	if($i % 15 == 0)
		echo '<br>';
	if($i == $page)
		echo '<a style="cursor:pointer;" class="item-pagination flex-c-m trans-0-4 active-pagination" 
				onClick="page_loader('.$idmain.','.$i.')" >'.$i.'</a>';
	else
    	echo '<a style="cursor:pointer"class="item-pagination flex-c-m trans-0-4" 
				onClick="page_loader('.$idmain.','.$i.')" >'.$i.'</a>';
}
	echo '</div></div>';
mysqli_close($con);

?>

				
</body>
</html>



<!-- Pagination -->
					

  