   <!doctype html>
<html>
	<head>
		
     <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    <style>
	
.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
}
	</style>
    </head>
    <body>
<?php

session_start();
//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_select_db($con,"offbegiir_com_");



$uname = 0;
if(!empty($_SESSION['user_name'])) 
	{
       $uname = $_SESSION['user_name'];
    }
	
$id_opinion = 0;
$sql=" ";
$id_opinion = $_GET['iddoll'];

		$sql = 'select * from comments where verify = 1 and comments.id_relate ='.$id_opinion;	
	
	
echo '<h4 style="color:#f42139">نظرات کاربران</h4><table width="96%"style="text-align:right;text-justify: inter-word;;border: solid 1px #dddddd;">';
echo "<tr ><th style='width:30%'>شناسه</th>
			<th style='width:70%'>پیام</th>
		</tr>";

		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		
		echo "<tr style='color:blue'><td><h5 style='color:blue'>".$row['name']."</h5></td><td><h5 style='color:blue'>".$row['comment']."</h5></td></tr>" ;
		 
	 }	
echo '</table><hr />';

mysqli_close($con);

?>

   </div>
</body>
</html>
