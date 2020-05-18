<?php  
$databaseConnection = null; 
function getConnection(){ 
     $hostname = "localhost"; 			//数据库服务器主机名，可以用IP代替 
     $database = "智慧社区"; 				//数据库名 
     $userName = "root"; 				//数据库服务器用户名 
     $password = ""; 					//数据库服务器密码 
     global $databaseConnection; 
     $databaseConnection = @mysqli_connect($hostname, $userName, $password) or die (mysqli_error($databaseConnection)); 							//连接数据库服务器 
     mysqli_query($databaseConnection,"set names 'utf8'");	//设置字符集 
     @mysqli_select_db($databaseConnection,$database) or die(mysqli_error($databaseConnection)); 
} 
function closeConnection(){ 
     global $databaseConnection; 
     if($databaseConnection){ 
     		mysqli_close($databaseConnection) or die(mysqli_error($databaseConnection)); 
     } 
}
?> 

