// JavaScript Document
<!--
/* Copyright http://www.perlscriptsjavascripts.com 
Free and commercial Perl and JavaScripts */
  
function getCookie(w){
	cName = "";
	pCOOKIES = new Array();
	pCOOKIES = document.cookie.split('; ');
	for(bb = 0; bb < pCOOKIES.length; bb++){
		NmeVal  = new Array();
		NmeVal  = pCOOKIES[bb].split('=');
		if(NmeVal[0] == w){
			cName = unescape(NmeVal[1]);
		}
	}
	return cName;
}

function printCookies(w){
	cStr = "";
	pCOOKIES = new Array();
	pCOOKIES = document.cookie.split('; ');
	for(bb = 0; bb < pCOOKIES.length; bb++){
		NmeVal  = new Array();
		NmeVal  = pCOOKIES[bb].split('=');
		if(NmeVal[0]){
			cStr += NmeVal[0] + '=' + unescape(NmeVal[1]) + '; ';
		}
	}
	return cStr;
}

function setCookie(name, value){
	cookieStr = name + "=" + escape(value) + "; ";
	document.cookie = cookieStr;
}

function add_cookie(id,price,item_name)
{ 

    //var json_str = JSON.stringify(arr);
	


var i = 0;
var j = 0;
	 

	//count of basket's items
		var count = parseInt(getCookie('count'));
        if(count < 30)
		{

		//---------Find Empty Position for Adding Item in ------	
		var number_of_item = 0;
		var allCookies = printCookies();
		var temp = allCookies.split(";");	 
		array_test = temp;

		for (var k = 0; k < array_test.length; k++) 
		{	
			if(array_test[k].search("num") != -1)
			{
				
				var arr_test = array_test[k].split("=");
				if(arr_test[1] == "")
				{
					var str = arr_test[0];
					var pos = str.indexOf("number");
					
					number_of_item = str.slice(pos+6,str.length);
					break;
				}
			}
		}

		//--------Add Item to Basket---------------	
			var idorder = id.toString();
			var  allCookies = printCookies();
		  //Set material cookie
		  //if there is empty position 
		  if(number_of_item != 0)
		  {
			setCookie('number' + number_of_item, idorder);
			setCookie('price' + number_of_item, price);
			setCookie('item_name' + number_of_item, item_name);
		  }
		  else //if Basket is not full yet
		  {
			setCookie('number' + count, idorder);
			setCookie('price' + count, price);
			setCookie('item_name' + count, item_name); 
		  }
		 
		  //set price cookie
		  var basket_price = parseInt(getCookie('total'));
		  setCookie('total',(basket_price + parseInt(price)).toString());
		  //set count cookie
		  count ++;
		  setCookie('count',count);
		  $("#amountSpan").text( Number($("#amountSpan").text()) + 1 );
		  //$("#amountSpan").load(location.href + " #amountSpan");
		  i ++;
		}
		else 
		{
			alert("سبد پر شده");
		}	
}
		  
function restore_table_items()
{
	

		  var count = parseInt(getCookie('count'));
	  if(count != 1)
	  {
		document.getElementById("bskt_price").innerHTML=" قیمت کل = "+getCookie('total')+" تومان";
	  
		var allCookies = printCookies();
		var temp=allCookies.split(";");	 
		var arr=JSON.stringify(temp);
		var array_basket = [];
		var item_basket = 0;
		var number_of_row = 0;
		
		array_test = temp;
		for (var i = 0; i < array_test.length; i++) 
		{	
			if(array_test[i].search("num") != -1)
			{
				
				var arr_test = array_test[i].split("=");
				if(arr_test[1] != "")
				{
					array_basket[item_basket] = arr_test[1];
					item_basket ++;
				}
			}
			if(array_test[i].search("price") != -1)
			{
				var arr_test = array_test[i].split("=");
				if(arr_test[1] != "")
				{
					array_basket[item_basket] = arr_test[1];
					item_basket ++;
				}
			}
			if(array_test[i].search("item_name") != -1)
			{
				var arr_test = array_test[i].split("=");
				if(arr_test[1] != "")
				{
					array_basket[item_basket] = arr_test[1];
					item_basket ++;
					/*array_basket[item_basket] = number_of_row;
					number_of_row ++;
					item_basket ++;*/
				}
			}
					
		}
		

var arr = JSON.stringify(array_basket);
	
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() 
		{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
			document.getElementById("myTable").innerHTML = xmlhttp.responseText;
			}
		}
		  xmlhttp.open("GET","basket_data_restore.php?temp="+arr,true);
		xmlhttp.send();
	  
	 }
	 
	 $("#basket").load(location.href + " #basket");
	 
		  
}

function del2()
{ 
return 'ok';
}
function del_cookie(co_id,price)
{ 
	
	
	var allCookies = printCookies();
		var temp=allCookies.split(";");	 
		var array_basket = [];
		var item_basket = 0;
		var number_of_row = 0;
		
		array_test = temp;

		for (var i = 0; i < array_test.length; i++) 
		{	
			if(array_test[i].search("num") != -1)
			{
				
				var arr_test = array_test[i].split("=");
				if(arr_test[1] == co_id)
				{
					
					var str = arr_test[0];
					
					var pos = str.indexOf("number");
					var number_of_item = str.slice(pos+6,str.length);
					
					setCookie('number'+number_of_item,"");
					setCookie('price'+number_of_item,"");
					setCookie('item_name'+number_of_item,"");
					var basket_price = parseInt(getCookie('total'));
					setCookie('total',(basket_price - price).toString());  
					document.getElementById("bskt_price").innerHTML=" قیمت کل = "+getCookie('total');
					var basket_price = parseInt(getCookie('total')); 
					if(basket_price == 0)
						setCookie('count',1);
					else
					{
						var count = parseInt(getCookie('count'));
						count --;
						setCookie('count', count);
					}
					break;
				} // if code fine
				
			}// if basket not empty
		}// loop in cookie array
			

}

function search_link()
{

	var q = document.getElementById("search-box").value;
	
	var page = 1;

	if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() 
		{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById("portfolio-wrapper").innerHTML = xmlhttp.responseText;
        }
		}
		  xmlhttp.open("GET","pagination_search.php?page="+page+"&q="+q,true);
        xmlhttp.send();
	
}	


function Login()
{
	var username = document.getElementById("txtusername").value;
	var pus = document.getElementById("txtpus").value;
	if(username !=null && pus != null )//username.test(username) && pus.test(pus
	{
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
				alert("خوش آمدید");
				
				location.reload();

			 
			}
			else
				alert("نام کاربری یا رمز عبور معتبر نیست"); 
        }
		}
		  xmlhttp.open("GET","login.php?username="+username+"&pus="+pus,true);
        xmlhttp.send();
			
	}	
	else 
		alert("نام کاربری صحیح وارد نشده");
	
	
} 


function search_link2()
{

	var q = document.getElementById("search-box").value;
	if(q.length >= 2)
	window.location.replace("products.php?page=1&q="+q);
	
}	


function reg_users()
{

		var name = document.getElementById("name").value;
		var family = document.getElementById("family").value;
		var mobile = document.getElementById("mobile").value;
		//var address = document.getElementById("txtaddress").value;
		var uname = document.getElementById("uname").value;
		var email = document.getElementById("email").value;
		var pus = document.getElementById("pus").value;
		
				if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
				if(xmlhttp.responseText.search("success") != -1)
				{  
				 alert("خوش آمدید");
				 history.back();
				}
				if(xmlhttp.responseText.search("wrong") != -1)
					 document.getElementById("label_Error").innerHTML = xmlhttp.responseText;
				if(xmlhttp.responseText.search("duplicate") != -1)
						alert("نام کاربری تکراری است");
				/*if(xmlhttp.responseText.search("mobile") != -1)
						alert("فیلد موبایل معتبر نیست ");  
				if(xmlhttp.responseText.search("name") != -1)
					alert("فیلد نام معتبر نیست "); 				
				if(xmlhttp.responseText.search("family") != -1)
					alert("فیلد فامیل معتبر نیست"); */ 
		   }
        }	
		  xmlhttp.open("GET","reg_user.php?name="+name+'&family='+family+'&mobile='+mobile+'&uname='+uname+'&email='+email+'&pus='+pus,true);
        xmlhttp.send();
}

function Logout()
{
alert('');
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
				alert("از پروفایل خارج شدید");
			}
        }
		}
		  xmlhttp.open("GET","logout.php",true);
        xmlhttp.send();
} 

function Forget()
{

		var mobile = document.getElementById("mobile_forget").value;
				if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
				if(xmlhttp.responseText.search("wrong") != -1)
					alert("اطلاعات نادرست");
				else
				{  
				 document.getElementById("label_forget").innerHTML = xmlhttp.responseText;
				 
				}
				
		   }
        }	
		  xmlhttp.open("GET","forget.php?mobile="+mobile,true);
        xmlhttp.send();
}







// -->