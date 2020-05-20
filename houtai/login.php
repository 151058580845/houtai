<?php
include_once("../functions/database.php"); 
						if(isset($_POST['phone'])&&strlen(trim($_POST['phone']))>0){
							$phone = $_POST['phone'];
						if(isset($_POST['password'])&&strlen(trim($_POST['password']))>0){
							$password = $_POST['password'];
									getConnection(); 
												$sql = "SELECT * FROM `tb_work_user` WHERE phone ='$phone' and password = '$password'";
												$select=mysqli_query($databaseConnection,$sql);
												$a = 1;
													while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
														include_once("index.php");
														// $_SESSION["id"]=$row['id'];
														$a = 0;
													}
													if($a==1){
														echo "登录失败";
													}
									closeConnection();
						}
						}
						
					?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>紫色背景简洁登陆页面演示_dowebok</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="dowebok">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="img/img-01.png" alt="IMG">
			</div>

			<form class="login100-form validate-form" action="#" method="post">
				<span class="login100-form-title">
					管理员登陆
				</span>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="phone" placeholder="账号">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="password" name="password" placeholder="密码">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						登陆
					</button>
				</div>

				<div class="text-center p-t-12" style="visibility: hidden;">
					<a class="txt2" href="javascript:">
						忘记密码？
					</a>
				</div>

				<div class="text-center p-t-136" style="visibility: hidden;">
					<a class="txt2" target="_blank">
							还没有账号？立即注册
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>