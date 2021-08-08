<?php


session_start();

  if (!empty($_SESSION['user_name'])&&($_SESSION['user_name'] != "میهمان ")) 
	{
       $_SESSION['user_name'] = "میهمان ";
	   echo 'success';
    }

?>