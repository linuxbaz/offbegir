<?php

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
			$sql = 'DELETE FROM `blogs` WHERE `blogs`.`id` = '.$condition; 
			
	

if (mysqli_query($con, $sql))
{
		echo "<h2>اطلاعات با موفقیت ثبت شد<h2>";
}
else
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
else
echo "Invalid user";

/*$sql=" SELECT id FROM blogs ORDER BY id DESC LIMIT 1";
$result=mysqli_query($con, $sql);
$row = mysqli_fetch_array($result)

echo $row['id'];*/
//$sql = "INSERT INTO sizeprice (id,size,price)


mysqli_close($con);
?>

  
