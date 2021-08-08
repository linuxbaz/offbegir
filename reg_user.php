  
<?php

session_start();
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET character_set_connection = 'utf8'");
	   
$flagErr = 0;
$emailErr = 0;
$nameErr = 0;
$familyErr = 0;
$mobileErr = 0;
$unameErr = 0;
$ErrMessage =  0;
$pusErr = 0;

$mobile = $_GET['mobile'];
if(empty($mobile))	$flagErr = 1; 
$name = $_GET['name'];
if(empty($name)) $flagErr = 1;  
$family = $_GET['family'];
if(empty($family)) $flagErr = 1; 
$uname = $_GET['uname'];
if(empty($uname)) $flagErr = 1; 

$pus = $_GET['pus'];
if(empty($pus)) $flagErr = 1; 

$email = 'info@offbegir.com';
$stmt = $con->prepare("INSERT INTO users(name,family,mobile,email,uname,pus) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $family, $mobile,$email, $uname, $pass);
//------------ Validation ---------------------------
if($flagErr != 1)
{
if(!empty($_GET['email'])){
	$email = $_GET['email'] ;
if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email)){
		$emailErr =1;
		$flagErr = 1;
	}
}

    if (!preg_match('/^[0-9]{11}/', $mobile)) {
      	$mobileErr =1;
		$flagErr = 1;
	}

    if (!preg_match('/^[\p{Arabic}\s\-]+$/u', $name)) {
      	$nameErr = 1;
		$flagErr = 1;
	}

    if (!preg_match('/^[\p{Arabic}\s\-]+$/u', $family)) {
      	$familyErr = 1;
		$flagErr = 1;
	}
	if (!preg_match('/^[A-Za-z0-9_-]{7,10}$/', $uname)) {
      	$unameErr = 1;
		$flagErr = 1;
	}
	if (!preg_match('/^[A-Za-z0-9_-]{7,10}$/', $pus)) {
      	$pusErr = 1;
		$flagErr = 1;
	}
	else $pass = md5($pus);
}
//------------ End Validation ---------------------------
	if($pusErr)
		$ErrMessage = 'رمز اصلاح شود <br/>';

	if($unameErr)	
		$ErrMessage = 'نام کاربری اصلاح شود<br/>';
		
	if($familyErr)	
		$ErrMessage = 'نام فامیل اصلاح شود<br/>';
		
	if($mobileErr)
		$ErrMessage = 'شماره موبایل اصلاح شود<br/>';
		
	if($emailErr)
		$ErrMessage = 'ایمیل اصلاح شود<br/>';
		
	if($nameErr)
		$ErrMessage = 'نام اصلاح شود<br/>';
	
if($flagErr == 1)
	echo "wrong".$ErrMessage;
else
	{
		$sql = "select uname from users where users.uname='".$uname."'";	
		$result = $con->query($sql);
		if ($result->num_rows > 0)
			echo "duplicate";
		else
		{
			/*$sql = "INSERT INTO users(name,family,mobile,email,uname,pus)
					VALUES('$name','$family','$mobile','$email','$uname','$pus');";*/
			if ($stmt->execute()) 
			{
				echo "success";
				$_SESSION['user_name'] = $uname;
			}
			else
				echo "error: " . $sql . "<br>" .  $stmt->error;;
		}
	}		
mysqli_close($con);
?>

   