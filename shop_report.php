<?php

session_start();
$q = 0;

  if (empty($_SESSION['user_name'])) 
	{
       $_SESSION['user_name'] = "میهمان";
    }

	

header('Content-Type: text/html; charset=utf-8');

$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21');
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET NAMES 'utf8'");

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<link rel="shortcut icon" href="assets/ico/namad.ico">
    <title>سایت فروش برگه تخفیف </title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.min.css">
   <link rel="stylesheet" href="css/main2.css">   
      	<link rel="stylesheet" href="css/table_css.css" type="text/css" media="screen">

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/cookieJS.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	
<script src="js/persianumber.js"></script>
	<script>
	
	

   <!-- favicons
	================================================== -->
	<script>
	
function reg_time()
		{
		var editor1 = document.getElementById("editor1").value;
		 if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			   if(xmlhttp.responseText.search("success") != -1)
				{  
				 alert("پیغام ثبت شد");
				}				
            }
        }	 
        xmlhttp.open("POST","reg_time.php?&editor1="+editor1,true);
        xmlhttp.send();
	}
        
	}
	</script>   

</head>

<body dir="rtl">

<div id="panel" >

  <input style="margin:0px; display: inline; font-family:Yekan; width:150px;height:27px;"type="text" id="search-box" placeholder="...جستجو"/>	
	<a style="position:absolute;top:9%;cursor:pointer;padding:5px;margin:0px;"type="button" onclick="search_link2()"><img class="tilt"width="30px"  src="images/search.png" /></a> 
</div>

	<!-- header
   ================================================== -->
    <header id="main-header">
	<div class="logo">
	         <a href="index.html"></a>
	      </div>
<div >
     <nav id="nav-wrap">         
	         
	                    

	        <ul id="nav" class="">
	            <li style="text-align:right"><a class="" href="/">صفحه اصلی</a></li>
	            <li><a class="" href="products.php?id=0&page=1">تخفیف ها</a></li>
				<li><a href="login_entry.html"><span class="icon-lock"></span>ورود/<?php echo $_SESSION['user_name']; ?></a></li>
	            <li><a class="" href="about.php">راهنما</a></li>
	            <li><a class="smoothscroll" href="#contact">تماس با ما</a></li>
				<li><div><a style="cursor:pointer" href="basket.php"><img class="tilt" width="40px"src="images/shopping.png"/></a>
				<div id="talkbubble2"class="top-right"><span class="count2"id="amountSpan"></span></div></div></li>	
				<li><a style="cursor:pointer" href="shop_report.php"><img  class="tilt"width="40px"  src="images/report.png" /></a></li>
				<li><a id="flip"style="cursor:pointer"><img class="tilt"width="40px"  src="images/search.png" /></a></li >
				
	        </ul> <!-- end #nav -->
	          

	   </div>
 </header> <!-- end header -->
   <!-- homepage hero
   ================================================== -->	
  
 <div>

		
		<br/>		

		</div> <!-- end row -->	



   <!-- Services Section
   ================================================== -->
   
   
   
<section style="padding-top: 70px;" id="portfolio">
          
		<div class="row items">

        
   <?php
$username = "ok";
$payid = 0;
$flagErr = 0;
$shop_id = 0;

if(strcmp($_SESSION['user_name'],'میهمان'))
{
	$username = $_SESSION['user_name'];
				$sql = "select shop_id from users where users.uname='".$username."'";	
				$result = $con->query($sql);
			if ($result->num_rows > 0)
			{
				$row = mysqli_fetch_array($result);
				$shop_id = $row['shop_id'];
				 echo '<table id="myTable"cellspacing="1">
					 
  <tbody>
  
    <tr >
      <th >شناسه خریدار</th>
      <th >شماره پرداخت	</th>
       <th >تاریخ خرید	</th>  
	   <th >قیمت	</th>  
	   <th >نام برگه</th>  
    </tr>';
					if (!empty($_GET['payid']))
					{
						$payid = $_GET['payid'];
						if (!preg_match('/^[0-9_-]{7,12}$/', $payid))
						{
							$flagErr = 1;
						}
						else
						{
							$sql = "DELETE FROM orders WHERE payid ='".$payid."'";	
							$result = $con->query($sql);
						}
					}
				$sql = "select * from fskfactor where shop_id ='".$shop_id."'";
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
					echo '<tr ><td>'.$row['customerid'].'</td><td>'.$row['Payment_ID'].'</td><td>'.$row['dt'].'</td><td>'.$row['price'].'</td><td>'.$row['dollname'].'</td></tr>';
				 
	echo "</tbody></table>";
			}
			else //no valid user
			{
				echo "کاربر معتبر نمیباشد ";
			}
	if (!empty($_POST['editor1'])) //If input timing
	{
		$timing = $_POST['editor1'];
		$sql = 'update dolls set timing ="'.$timing.'" where shop_id ="'.$shop_id.'"';
		if (mysqli_query($con, $sql))
			echo "<h2>اطلاعات با موفقیت ثبت شد<h2>";
		else
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
				
}//user guest

else
{
	$site = "http://www.offbegiir.com/";
	fopen($site,"r")
	or exit("Unable to connect to $site");
}
	   
mysqli_close($con);
 
	 ?>
   <form action="shop_report.php" method="get" enctype="multipart/form-data">
   <label >  حذف کد استفاده شده :</label>

<input type="text" name="payid">

<input type="submit" value="حذف"></input>
</form> 
          </div>
</section>

     

   


   <!-- Testimonials Section
   ================================================== -->
  <section id="portfolio">	
   	  
		<div class="row hero-content">

			<div class="twelve columns hero-container">

			   <!-- hero-slider start
			  <div>
			  <form action="shop_report.php" method="POST" enctype="multipart/form-data">
	                 	<textarea name="editor1"  id="editor1" placeholder="توضیحات" rows="10" cols="80" >
						
						</textarea>
						
			<button style="font-family:Yekan;"class="button"type="submit">ثبت</button>
			</form> 
	               </div>  -->		   

	      </div> <!-- end twelve columns--<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>>

		</div> <!-- end row -->	

		

   </section> <!-- end homepage hero --> 


   <!-- contact
   ================================================== -->
   <section id="contact">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>تماس با ما<span></span></h1>

	         <hr />	        

	      </div>

      </div> <!-- end section-head -->

      <div class="row">
      	
      	<div id="contact-form" class="six columns tab-whole left">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >
      			<fieldset>

                  <div class="group">
 						   <input name="contactName" type="text" id="contactName" placeholder="نام" value="" minLength="2" required />
                  </div>
                  <div>
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="ایمیل" value="" required />
	               </div>
                  <div>
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="موضوع"  value="" />
	               </div>                       
                  <div>
	                 	<textarea name="contactMessage"  id="contactMessage" placeholder="پیام" rows="10" cols="50" required ></textarea>
	               </div>                      
                  <div>
                     <button class="submitform">ارسال</button>
                     <div id="submit-loader">
                        <div class="text-loader">درحال ارسال...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"></div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="icon-ok"></i>پیغام شما ارسال شد...<br />
      		</div>

         </div>

         <div class="six columns tab-whole right">

            <p class="lead">کسب و کار اینترنتی آف بگیر در جهت کمک به شرایط اقتصادی فغالیتهای سودمند خود را در فضای اینترنت ارائه میکند از جمله این فعالیتها کمک به جذب مشتری برای بنگاههای اقتصادی میباشد.شما برای معرفی خود میتوانید از این طریق با ما در ارتباط باشید
 <p class="lead">لطفا ایمیل و یا شماره موبایل خود را جهت کیفیت بخشی به ارتباطات وارد کنید.
	         <h3 class="address">آدرس</h3>

	         <p class="lead">
            قزوین<br>
            میدان آزادی - ابتدای خیابان نادری - کوچه زرآبادی - پلاک 9 - طبقه دوم  <br>
            
            </p>

            <h3>  تماس</h3>
			   <p class="lead">تلفن: 33236567 028<br>
			   	 
			     	 ایمیل : info@offbegir.com
			   </p>
               	
               	
         </div>     	

      </div> <!-- end row -->     

   </section>  <!-- end contact -->


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">  

      	<div class="twelve columns content group">
      		
				



            <div class="info">

            	<div class=""></div>

	            <p style="color:#9cd0f1">این وب سایت تحت نظارت کسب و کار اینترنتی آف بگیر (offbegiir.com) میباشد
	            </p>	        
<p style="color:#0cd0f1">info@offbegiir.com</p>	
	         </div>

      	</div>           

        
            <a class="smoothscroll"  href="#hero">برگشت بالا<i class="fa fa-angle-up"></i></a>
       

      </div> <!-- end row -->

   </footer> <!-- end footer -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>