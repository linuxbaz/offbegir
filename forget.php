 <?php 
function randomPassword($length,$count, $characters) {
 
// $length - the length of the generated password
// $count - number of passwords to be generated
// $characters - types of characters to be used in the password
 
// define variables used within the function    
    $symbols = array();
    $passwords = array();
    $used_symbols = '';
    $pass = '';
 
// an array of different character types    
    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["numbers"] = '1234567890';
 
    $characters = split(",",$characters); // get characters types to be used for the passsword
    foreach ($characters as $key=>$value) {
        $used_symbols .= $symbols[$value]; // build a string with all characters
    }
    $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length); // get a random character from the string with all characters
            $pass .= $used_symbols[$n]; // add the character to the password string
        }
        $passwords[] = $pass;
    }
     
    return $passwords; // return the generated password
}
 

 



session_start();
$con = mysqli_connect('localhost:3306','offbegiir','s@117r@21' );
//$con = mysqli_connect('localhost','root','' );
mysqli_select_db($con,"offbegiir_com_");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
mysqli_query($con,"SET character_set_connection = 'utf8'");

$flagErr = 0;
if((!empty($_GET['mobile']))&&(!preg_match('/^[0-9]{11}/', $_GET['mobile'])))
	$flagErr = 1;
else
	$mobile = $_GET['mobile'];
			
if($flagErr != 1)
{		
	$sql = "select uname,pus from users where users.mobile=".$mobile;
				$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
						$new_pass =  randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols");
						$sql =	"UPDATE users SET pus = ".$new_pass." users.mobile=".$mobile;
						if (mysqli_query($con, $sql))
						{
						$sms_msg = "نام کاربری : ".$row['uname']."---- رمز عبور :".$new_pass[0]."----آف بگیر --اول تخفیف بعد خرید";
						
						
						ini_set("soap.wsdl_cache_enabled", "0");
						$sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));

						$parameters['username'] = "09127820525";
						$parameters['password'] = "1122";
						$parameters['to'] = $mobile;
						$parameters['from'] = "500010605364";
						$parameters['text'] = $sms_msg;
						$parameters['isflash'] =false;

						echo '<p hidden>'.$sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result.'</p>';
						echo '<br/><p>نام کاربری و رمز عبور برای شما ارسال شد</p>';
						}
					}	
		   
mysqli_close($con);
?>


