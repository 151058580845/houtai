<?php
include_once("../functions/database.php"); 
					if(isset($_POST['name'])&&strlen(trim($_POST['name']))>0){
						$name = $_POST['name'];
						if(isset($_POST['phone'])&&strlen(trim($_POST['phone']))>0){
							$phone = $_POST['phone'];
							if(isset($_POST['password'])&&strlen(trim($_POST['password']))>0){
								$password = $_POST['password'];
										getConnection(); 
													$sql2 = "INSERT INTO `tb_user`( `phone`, `name`, `password`) VALUES ('$phone','$name','$password')";
													$select2=mysqli_query($databaseConnection,$sql2);
													if($select2){
														echo "新增成功";
													}else{
														echo "新增失败";
													}
										closeConnection();
							}
						}
					}
					?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.min.js"></script>
		<title></title>
	<style>
			.bgImg {
						  height: 100%;
						  width: 100%;
						  background: url(img/background4.jpg) no-repeat;
						  /* background-size: cover;
						  position: absolute;
						  overflow: hidden; */
						}
		</style>
	</head>
	<body class="bgImg">
		<form action="#" method="post">
			<div style="max-width: 500px; margin: 0 auto; margin-top: 100px;">
				<h1 style="margin: 0 auto; text-align: center;">新增用户</h1>
				<table class="table table-bordered" style="text-align: center;">
					<tr><p style="font-size: 20px;">用户名称</p></tr>
					<tr style="max-width: 300px;">
						<!-- <input type="text" class="form-control" value=1 id="type" style="display: none;"> -->
						<input type="text" class="form-control" placeholder="名称" id="name"  name="name">
					</tr>
					<tr><p style="font-size: 20px;">账号</p></tr>
					<tr><input type="text" class="form-control" placeholder="手机号" id="phone"  name="phone"></tr>
					<tr><p style="font-size: 20px;">密码</p></tr>
					<tr><input type="text" class="form-control" placeholder="密码" id="password"  name="password"></tr>
					<tr align="center">
						<div align="center" style="margin-top: 50px;">
							<button type="submit" class="btn btn-default navbar-btn" id = "submit">增加</button>
						</div>
					</tr>
				</table>
			</div>
		</form>
		<script>
		</script>
		
	</body>
</html>