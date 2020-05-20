<?php
include_once("../functions/database.php"); 
					if(isset($_POST['name1'])&&strlen(trim($_POST['name1']))>0){
						$name = $_POST['name1'];
						if(isset($_POST['id1'])&&strlen(trim($_POST['id1']))>0){
							$id = $_POST['id1'];
						if(isset($_POST['phone1'])&&strlen(trim($_POST['phone1']))>0){
							$phone = $_POST['phone1'];
						if(isset($_POST['password1'])&&strlen(trim($_POST['password1']))>0){
							$password = $_POST['password1'];
									getConnection(); 
												$sql2 = "UPDATE `tb_user` SET `phone`='$phone',`name`='$name',`password`='$password' WHERE id = '$id'";
												$select2=mysqli_query($databaseConnection,$sql2);
												if($select2){
												}else{
													echo "修改失败";
												}
									closeConnection();
						}
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
		<!-- <script src="js/jquery.min.js"></script> -->
		 <link rel="stylesheet" href="css/select2.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/select2.full.min.js"></script>
		<title></title>
		<script>
		    $(function(){
		        $('.mySelect').select2();
		    })
		</script>
	<style>
			.bgImg {
						  height: 100%;
						  width: 100%;
						  background: url(img/background4.jpg) no-repeat;
						/*  background-size: cover;
						  position: absolute;
						  overflow: hidden; */
						}
		</style>
	</head>
	<body class="bgImg">
		<div style="max-width: 500px; margin: 0 auto; margin-top: 100px;">
			<h1 style="margin: 0 auto; text-align: center;">修改密码</h1>
			<table class="table table-bordered" style="text-align: center;">
				<tr><p style="font-size: 20px;">原密码</p></tr>
				<tr style="max-width: 300px;"><input type="text" class="form-control" placeholder="原密码" name="name"></tr>
				<tr><p style="font-size: 20px;">新密码</p></tr>
				<tr><input type="text" class="form-control" placeholder="新密码" name="phone"></tr>
				<tr><p style="font-size: 20px;">重复密码</p></tr>
				<tr><input type="text" class="form-control" placeholder="重复密码" name="password"></tr>
				<tr align="center">
					<div align="center" style="margin-top: 50px;">
						<button type="button" class="btn btn-default navbar-btn">修改</button>
					</div>
				</tr>
			</table>
		</div>
	</body>
</html>