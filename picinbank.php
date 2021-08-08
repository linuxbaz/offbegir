<?php

function f_sql_creator()
{
	$text = 'UPDATE `dolls` SET ';
	
	$name = $_POST['name'];
	if (!empty($name))
		$text = $text. ' `name` = "'.$name.'"';
	
		$comment=$_POST['comment'];
	if (!empty($comment))
		$text = $text.', `comment` = "'.$comment.'"'; 
	
		$group=$_POST['group'];
	if (!empty($group))
		$text = $text.', `group` = '.$group; 
	
		$pic1=$_POST['pic1'];
	if (!empty($pic1))
		$text = $text.', `pic1` = "'.$pic1.'"'; 
	
		$pic2=$_POST['pic2'];
	if (!empty($pic2))
		$text = $text.', `pic2` = "'.$pic2.'"'; 
	
		$price1=$_POST['price'];
	if (!empty($price1))
		$text = $text.', `price` = '.$price1;
	
		$discount=$_POST['discount'];
	if (!empty($discount))
		$text = $text.', `discount` = '.$discount; 
	
		$using_dt=$_POST['using_dt'];
	if (!empty($using_dt))
		$text = $text.', `using_dt` = "'.$using_dt.'"';
	
		$shop_id=$_POST['shop_id'];
	if (!empty($shop_id))
		$text = $text.', `shop_id` = '.$shop_id; 
	
		$pic3=$_POST['pic3'];
	if (!empty($pic3))
		$text = $text.'", `pic3` = "'.$pic3.'"'; 
	
		$address = $_POST['address'];
	if (!empty($address))
		$text = $text.', `address` = "'.$address.'"'; 
	
		$tel = $_POST['tel'];
	if (!empty($tel))
		$text = $text.', `tel` = "'.$tel.'"';
	
		$alt = $_POST['alt'];
	if (!empty($alt))
		$text = $text.', `alt1` = "'.$alt.'"';
	
	$condition = $_POST['condition'];
	$sql = $text . ' WHERE `dolls`.`id` = ' . $condition;
	
	return $sql;
}
header('Content-Type: text/html; charset=utf-8');
session_start();
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET NAMES 'utf8'");
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
		
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$group = $_POST['group'];
		$pic1 = $_POST['pic1'];
		$pic2 = $_POST['pic2'];
		$price1 = $_POST['price'];
		$discount = $_POST['discount'];
		$using_dt = $_POST['using_dt'];
		$shop_id = $_POST['shop_id'];
		$pic3 = $_POST['pic3'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$alt = $_POST['alt'];
		$dt = '2017-08-23 10:22:00';	
		$sql = "INSERT INTO `dolls` (`name`,`group`,`pic1`,`pic2`,`pic3`,`dt`,`price`,`discount`,`using_dt`,`shop_id`,`comment`,`address`,`tel`,`alt1`)
				VALUES('$name','$group','$pic1','$pic2','$pic3','$dt','$price1','$discount','$using_dt','$shop_id','$comment','$address','$tel','$tel')";
		$insert_flag = 1;	
	}

if (mysqli_query($con, $sql))
{
	if($insert_flag)
		$sql =	"UPDATE groups SET g_count = g_count + 1 WHERE g_id = ".$_POST['group'];
	
	
	if (mysqli_query($con, $sql))
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

  
