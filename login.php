<?php

//$con = new PDO('mysql:host=localhost;dbname=namad;charset=UTF8', 'root', '');
session_start();
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
//$con = mysqli_connect('localhost','root','');
//mysqli_select_db($con,"offbegiir");
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET character_set_connection = 'utf8'");
$flag=0;
$flagErr = 1;
 
            //Success
            
            if (!empty($_GET['username']) && !empty($_GET['pus']))
			{
				$username = $_GET['username'];
				$pus = $_GET['pus'];
				$flagErr = 0;
				if (!preg_match('/^[A-Za-z0-9_-]{7,10}$/', $username)) {
				$flagErr = 1;
				}
				if (!preg_match('/^[A-Za-z0-9_-]{7,10}$/', $pus)) {
				$flagErr = 1;
				}
			}
			if((!$flagErr))
			{
				$sql = "select uname from users where users.uname='".$username."'";	
				$result = $con->query($sql);
				if ($result->num_rows > 0)
				 {
					 $sql = "select pus from users where users.pus='".md5($pus)."'";	
					 $result = $con->query($sql);
				     if ($result->num_rows > 0)
				 		{
						$flag=1;	
						}
						else 
						{
							echo "password wrong";
							$flag=0;
						}
    			 }
				 else 
				 {
					 echo "no username in db";
				 }
			}
			if($flag == 1)
			{
				 $_SESSION['user_name'] = $username;
				 echo "success";
			}
             
                //Check username and password
                /*if ($username == "behzad" && $password == "test-pass") {
 
                    //Creating A Session Array
                    $_SESSION['user_name'] = "Behzad";
 
                    echo "Welcome";
                } else {
                    echo "Your username or password id wrong";
                }
            } else {
                echo "Please fill in the fields";
            }
        } else {
            //Show the form
            echo '<form action="index.php" method="POST">';
            echo '<input type="text" name="username" placeholder = "Username">';
            echo '<br/>';
            echo '<input type="password" name="password" placeholder = "Password">';
            echo '<br/>';
            echo '<input type="submit" value="Login">';
        }

	   $sql = "INSERT INTO users(name,family,mobile,address,email,postcode)
               VALUES('$name','$family','$mobile','$address','$email','$postcode');";
       if (mysqli_query($con, $sql))
         echo "";
       else
         echo "Error: " . $sql . "<br>" . mysqli_error($con);*/
	   
mysqli_close($con);
?>

   
