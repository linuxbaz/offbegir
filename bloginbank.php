<html class="no-js" lang="fa"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
</head>
	<body>
<?php

function f_sql_creator()
{
	$text = 'UPDATE `blogs` SET ';
	
	$topic = $_POST['topic'];
	if (!empty($topic))
		$text = $text. ' `topic` = "'.$topic.'"';
	
		$main_text=$_POST['main_text'];
	if (!empty($main_text))
		$text = $text.', `main_text` = "'.$main_text.'"'; 
	
		$blog_group=$_POST['blog_group'];
	if (!empty($blog_group))
		$text = $text.', `blog_group` = '.$blog_group; 
	
		$pic=$_POST['pic'];
	if (!empty($pic))
		$text = $text.', `pic` = "'.$pic.'"'; 
	
		$id=$_POST['id'];
	if (!empty($id))
		$text = $text.', `id` = "'.$id.'"'; 
		
		$alt = $_POST['alt'];
	if (!empty($alt))
		$text = $text.', `alt` = "'.$alt.'"';
	
	$condition = $_POST['condition'];
	$sql = $text . ' WHERE `blogs`.`id` = ' . $condition;
	
	return $sql;
}
header('Content-Type: text/html; charset=utf-8');
session_start();
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET CHARACTER SET utf8");
date_default_timezone_set('Asia/Tehran');
$flag = 0;
$username = $_SESSION['user_name'];

				$sql = "select uname from admins where admins.uname='".$username."'";	
				$result = $con->query($sql);
				if ($result->num_rows > 0)
				 {	 
					$flag = 1;
    			 }
				 
if($flag)
{
$del_flag = 0;
$insert_flag = 0;
	


	$condition = $_POST['condition'];
	if($condition != 0) //change record 
		$sql = f_sql_creator();
	else //insert record
	{
		
		$topic = $_POST['topic'];
		echo $topic;
		$main_text = $_POST['main_text'];
		$blog_group = $_POST['blog_group'];
		$pic = $_POST['pic'];
		$alt = $_POST['alt'];
		$dt = '2017-08-23 10:22:00';	
		$sql = "INSERT INTO `blogs` (`topic`,`blog_group`,`pic`,`main_text`,`alt`)
				VALUES('$topic','$blog_group','$pic','$main_text','$alt')";
		$insert_flag = 1;	
	}

if (mysqli_query($con, $sql))
{
		echo "<h2>اطلاعات با موفقیت ثبت شد<h2>";
}
else
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
else
echo "Invalid user";

/*$sql=" SELECT id FROM dolls ORDER BY id DESC LIMIT 1";
$result=mysqli_query($con, $sql);
$row = mysqli_fetch_array($result)

echo $row['id'];*/
//$sql = "INSERT INTO sizeprice (id,size,price)


mysqli_close($con);
?>
</body>
		</html>
		
  
