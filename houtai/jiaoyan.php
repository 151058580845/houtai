<?
echo "111";
$type = $_POST['type'];
switch($type){
	case 1:
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		if(checkEmpty($name,$phone,$password)){
		}
		break;
}
function checkEmpty($name,$phone,$password){
	$str = "11";
  if($name==null){
	  $str = $str."用户名为空\n";
	break;
  }else if($phone==null||$phone.size()!=11){
	  $str = $str."手机号输入错误\n";
	return;
  }else if($password==null||$password.length<6){
	  $str = $str."密码输入错误\n";
  } else{
		return true;
  }
  echo $str;
}
?>
