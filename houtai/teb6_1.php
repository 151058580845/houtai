<?php 
include_once("../functions/database.php"); 
//收集表单提交数据 
// $tousu_id = addslashes($_POST['tousu_id']); 
$fankui = $_GET['fankui'];
$tousu_id = $_GET['tousu_id'];
echo $fankui.$tousu_id;
$is = "1";
//连接数据库服务器 
getConnection(); 
//判断用户名和密码是否输入正确 
$sql = "UPDATE `tb_user_tousu` SET `chuli_id`=1,`fankui`='$fankui',`is_chuli`='$is' WHERE id = '$tousu_id'";
$select=mysqli_query($databaseConnection,$sql); 
closeConnection(); 
if($select){ 
     // echo "用户名和密码输入正确！登录成功！"; 
	 include_once("teb6.php");
}else{ 
     // echo "用户名和密码输入错误！登录失败！"; 
} 

?> 
