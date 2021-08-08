<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa">
<head>
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
   
   

   <!-- script
   ================================================== -->
	<script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/cookieJS.js"></script>
	<script>

    function reg_picDetails() 
	{
		var name=document.getElementById("name").value;
		var pic1=document.getElementById("pic1").value;
		var pic2=document.getElementById("pic2").value;
		var group=document.getElementById("group").value;
		var using_dt=document.getElementById("using_dt").value;
		var comment=document.getElementById("comment").value;
		var shop_id=document.getElementById("shop_id").value;
		var discount=document.getElementById("discount").value;
		var price=document.getElementById("price").value;
		
		alert("variables do");	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			   $('#name').val('');
			   $('#group').val('');
			   $('#pic1').val('');
				$('#pic2').val('');
			   $('#comment').val('');
			    $('#using_dt').val('');
				$('#shop_id').val('');
				$('#discount').val('');	
				$('#price').val('');
				$('#condition').val('');
            }
        }	
		   xmlhttp.open("POST","picinbank.php?name="+name+"&group="+group+"&pic1="+pic1+"&pic2="+pic2+
		   "&pic3="+pic3+"&using_dt="+using_dt+"&shop_id="+shop_id+"&comment="+comment+"&condition="+condition+
		   "&address="+address+"&teal="+tel+"&alt="+alt+"&discount="+discount+"&price="+price,true);
        xmlhttp.send();	
		
	}
		

	
	
	function change_picDetails() 
	{
		var name=document.getElementById("name").value;
		var pic1=document.getElementById("pic1").value;
		var pic2=document.getElementById("pic2").value;
		var group=document.getElementById("group").value;
		var using_dt=document.getElementById("using_dt").value;
		var comment=document.getElementById("comment").value;
		var shop_id=document.getElementById("shop_id").value;
		var discount=document.getElementById("discount").value;
		var price=document.getElementById("price").value;
		var condition=document.getElementById("condition").value;
		alert("variables do");	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			   $('#name').val('');
			   $('#group').val('');
			   $('#pic1').val('');
				$('#pic2').val('');
			   $('#comment').val('');
			    $('#using_dt').val('');
				$('#shop_id').val('');
				$('#discount').val('');	
				$('#price').val('');
				$('#condition').val('');
            }
        }	
		   xmlhttp.open("POST","changeinbank.php?name="+name+"&group="+group+"&pic1="+pic1+"&pic2="+pic2+"&using_dt="+using_dt+"&shop_id="+shop_id+"&comment="+comment+"&discount="+discount+"&price="+price,true);
        xmlhttp.send();	
		
	}
	 
	 function del_picDetails() 
	{
		
		var condition=document.getElementById("condition").value;
		alert("variables do");	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			   alert("ممنون و درود بر شما برای ارتباط با خانواده گردشگری ایران");
			   $('#name').val('');
			   $('#group').val('');
			   $('#pic1').val('');
				$('#pic2').val('');
			   $('#comment').val('');
			    $('#using_dt').val('');
				$('#shop_id').val('');
				$('#discount').val('');	
				$('#price').val('');
				$('#condition').val('');
            }
        }	
		   xmlhttp.open("POST","delinbank.php?condition="+condition,true);
        xmlhttp.send();	
		
	}
	
	</script>
	</head>
	<body >
		<?php
		//--------------------------------------display information with ID -----------------
	    
//$info_pagination = $_SESSION["info"];
$con = mysqli_connect('localhost','root','');
mysqli_query($con,"SET CHARACTER SET utf8");
mysqli_select_db($con,"offbegiir");

echo '<section id="portfolio">	
		<div class="row items">
			<div class="bgrid-fourth s-bgrid-half tab-bgrid-whole">';
			
			  $sql = 'select * from dolls ORDER BY dt DESC;';
			
$price = 0;
$i = 0;

		$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	 {
		
		$tozih = substr($row['comment'],0,50);
		$d2 = ceil((strtotime($row['using_dt']) - time())/60/60/24);
		if ( $row['price'] == 0)
			$price = "رایگان";
		else
			$price = $row['price'].'&nbsp;&nbsp; تومان  &nbsp;&nbsp;   ';
		$iddoll = (string)$row['id'];
		
			echo'<div class="thumbnail bgrid folio-item">
		
                         
	                  <img style="width:220px;height:170px;"src="'.$row['pic1'].'" alt="'.$row['alt1'].'"/>       
                    				 <h3>'.$row['name'].' </h3>
				<p>  شناسه :: '.$row['id'].'</p>

                 </div><!-- item end -->';
			}
			echo '</div> 
				</div>
				</section>';
	//--------------------------------------display information with ID -----------------
?>
    <div style="margin-left:100px"><h3>اضافه کردن عکس</h3>
    <h2>png file please لطفا نام فایل مطابق شکل باشد</h2>
    <hr>

 <form action="tu.php" method="post" enctype="multipart/form-data">
<label for="file">فایل:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="آپلود">
</form>
</div>
<section>	
		<div class="row items">
			<div class="bgrid-third s-bgrid-half tab-bgrid-whole">
	<form action="picinbank.php" method="POST" enctype="multipart/form-data">		
<div class="thumbnail bgrid folio-item">
<label >  آدرس :</label>
<input size="70" type="text" name="address">

<label >  تلفن :</label>
<input size="70" type="text" name="tel">

<label >  قیمت :</label>
<input type="text" name="price">
	 
	 <label >  تخفیف درصد :</label>
<input type="text" name="discount"> 
	 <label >(ex : october 1 2017)  تاریخ اعتبار  :</label>
<input type="text" name="using_dt">

<label >  شناسه تغییر :</label>
<input type="text" name="condition">
	 
	 <label >  شناسه فروشگاه :</label>
<input type="text" name="shop_id">
	 
	 

</div>
<div class="thumbnail bgrid folio-item">
<label >  توضیحات :</label>
<textarea rows="10" cols="50"  name="comment"></textarea><br>
</div>
<div class="thumbnail bgrid folio-item">
		<div><h3>ثبت کالا در بانک اطلاعاتی</h3></div>

<br>
<br>
 
 
<label >1 نام فایل:</label>
<input size="50" type="text" name="pic1">
	 
	 <label >2 نام فایل:</label>
<input size="50" type="text" name="pic2">

<label >3 نام فایل:</label>
<input size="50" type="text" name="pic3">

<label>گروه:</label>
<input type="text" name="group">

<label>توصیف :</label>
<input type="text" name="alt">


<label >  عنوان   :</label>
<input type="text" name="name">
</div>
	
<br/><input type="submit"value="تغییر ثبت" ></input>

<input type="submit"value="اضافه کردن" ></input>
</form> 
</div>
</div><br/>


</section>
<section>	
		<div class="row items">
			<div class="bgrid-third s-bgrid-half tab-bgrid-whole">
			<div class="thumbnail bgrid folio-item">
<form action="delinbank.php" method="POST" enctype="multipart/form-data">
<label >  شناسه تغییر :</label>
<input type="text" name="condition">

<input type="submit"value="حذف"></input>	
</form> 
</div>

</div>
</div><br/>


</section>


	
	
 </body>
 </html>
 