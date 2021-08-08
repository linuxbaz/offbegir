<?php

session_start();


	
    if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان ";
    }
	

?>
<!DOCTYPE html>
<html lang="fa">
<head>
	<title>ورود مطالب وبلاگ آف بگیر</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/persianumber.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
<script src="js/jquery.min1.10.2.js"></script>
	   <script type="text/javascript" src="js/cookieJS.js"></script>
<script>
   
	

   
	</script>
	</head>
	<body >
		<?php
		//--------------------------------------display information with ID -----------------
	    
//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_select_db($con,"offbegiir");

header('Content-Type: text/html; charset=utf-8');
			
			  $sql = 'select * from blogs ORDER BY dt DESC;';
			
$price = 0;
$i = 0;

		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		
		$d2 = $row['dt'];
		$idblog = (string)$row['id'];
		
			echo'<div>
		
                         
	                  <img width="150px"src="'.$row['pic'].'"/>       
                    				 <h3>'.$row['topic'].' </h3>
				<p>  شناسه :: '.$idblog.'</p>

                 </div><!-- item end -->';
			}
			
	//--------------------------------------display information with ID -----------------
?>
    <div style="margin-left:100px"><h3>اضافه کردن عکس</h3>
    <h2>png file please لطفا نام فایل مطابق شکل باشد</h2>
    <hr>
<form action="tu.php" method="post" enctype="multipart/form-data">
<label class="in_blog" for="file">فایل:</label >
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="آپلود">
</form></div>

	<section>
		<div class="container">
			<div class="row">
				<div dir="rtl">
				
				<div class="row">
			<div class="thumbnail">
<form action="delbloginbank.php" method="POST" enctype="multipart/form-data">
<label class="in_blog" >  شناسه برای حذف :</label>
<input type="text" name="condition" value="0">

<input style="cursor:pointer"class="swal-button"type="submit" value="&nbsp;&nbsp;حذف&nbsp;&nbsp;"></input>	
</form> 

<hr/>

<br/>


				<div dir="rtl"class="col-md-6 p-b-30">
					
				
						<form action="bloginbank.php" method="POST" enctype="multipart/form-data">		



		<div><h3>ثبت پست در بانک اطلاعاتی</h3></div>

<br/>
<br/>
 
 
<label  >مثال:(images/blogs/example.png):</label >
<label  > مسیر تصویر:</label >
<input class="in_blog"size="50" type="text" name="pic" placeholder=""><br/>
	 
<br/>	 

<label >گروه:</label >
<input class="in_blog"type="text" name="blog_group"><br/>

<label >متن :</label>

<textarea name="main_text" id="editor1" rows="10" cols="80"><br/>
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'main_text' );
            </script>

<br/><label  >  عنوان   :</label >
<input type="text" size="60" class="in_blog"name="topic"><br/>

<br/><label  >() توصیف تصویر   :</label >
<input class="in_blog"type="text" size="60" value="0" name="alt"><br/>
<hr/>
<input style="cursor:pointer"class="swal-button"type="submit" value="اضافه کردن" ></input>	
<br/><input  class="swal-button"type="submit" value="تغییر ثبت" ></input><br/>


</form> 
						
						<hr/>
						
				</div>
				
			</div>
		</div>
	</section>
 


	
 </body>
 </html>
 