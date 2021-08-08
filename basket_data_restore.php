<?php
   
$array = json_decode($_GET["temp"]);
$basket_array = array();
$arr = array();

$c = 0; 
$i = 0;
$j = 1;
$iddoll = 0;

/*echo '
  
    <tr style="text-align:center"class="table-head">
							
							
							<th class="column-4 p-l-70">تعداد</th>
							<th class="column-3">قیمت</th>
							<th class="column-2">عنوان</th>
							<th class="column-5">مجموع</th>
							<th class="column-1"></th>
						</tr>
';*/

// ----------------- find duplicate in basket

$new_array = array();
foreach ($array as $key => $value) {
    if(isset($new_array[$value]))
        $new_array[$value] += 1;
    else
        $new_array[$value] = 1;
}
// ------------create  basket material with duplicate counted

foreach ($new_array as $fruit => $n) 
{
	if($fruit != '')
	{
	$basket_array[$i] = $fruit;
	$i++;
	$basket_array[$i]= $n;
	$i++;
	}

	
}
/*for($i = 0;$i < count($basket_array);$i++)
echo '<br/>'.$basket_array[$i].'&nbsp;';*/


// ----------------------- display basket


	$i = 0;
	$count = (count($basket_array))  ; 
	
	while($i < $count  ) 
		{
			
		echo '<tr style="text-align:center"class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="images/m1.png" alt="IMG-PRODUCT">
								</div>
							</td>
							<td >
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" id="sub"
									  onclick="del_cookie('.$basket_array[$i].','.$basket_array[$i+2].');
									  restore_table_items();">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" value="'.$basket_array[$i+1].'">
									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2" id="add"
											onClick="add_cookie('.$basket_array[$i].','.$basket_array[$i+2].',\''.$basket_array[$i+4].'\');
										 restore_table_items();">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td >'.$basket_array[$i+2].'</td>
							<td >'.$basket_array[$i+4].'</td>
							<td >'.$basket_array[$i+2]*$basket_array[$i+1].'</td>

						</tr>';
						
		/*echo '<br/>'.$i.'='.$new_array[$i];
		 echo '<br/>'.$i.'='.$basket_array[$i+1];
		 echo '<br/>'.$i.'='.$basket_array[$i+2];
		 echo ' <br/>'.$i.'='.$basket_array[$i+3];
		 echo '<br/>'.$i.'='.$basket_array[$i+4].'<br/>';*/
		 
		 $i += 6;
		}
		
		
		
	
?>

  