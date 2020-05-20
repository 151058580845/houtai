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
			<h1 style="margin: 0 auto; text-align: center;">修改信息</h1>
			
			<div class="container" style="margin-top: 40px;">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-6">
						<form action="#" method="post">
						<select class="mySelect" style="width: 100px;" name = "value1">
											<?php
											include_once("../functions/database.php"); 
												getConnection(); 
												$sql = "SELECT *from tb_user";
												//判断用户名和密码是否输入正确
												$select=mysqli_query($databaseConnection,$sql);
													while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
														echo '<option>'.$row['name'].'</option>';
													}
												closeConnection();
											?>
						</select>
						
						<input type="submit" value="查询" style="margin-left: 20px;">
						
						</input>
						</form>
					</div>
				</div>
			</div>
			<form action="#" method="post">
				<table class="table table-bordered" style="text-align: center; margin-top: 50px;">
					<?php
					getConnection(); 
						if(isset($_POST['value1'])&&strlen(trim($_POST['value1']))>0){
							$name = $_POST['value1'];
							$sql1 = "SELECT * from tb_user where `name` = '$name'";
							//判断用户名和密码是否输入正确
							$select1=mysqli_query($databaseConnection,$sql1);
								while($row=mysqli_fetch_array($select1,MYSQLI_ASSOC)){
									echo '<tr><p style="font-size: 20px;">用户名称</p></tr>
									<tr style="max-width: 300px;"><input type="text" class="form-control" value="'.$row['name'].'" name="name1">
									<input type="text" class="form-control" style="display:none;" value="'.$row['id'].'" name="id1"></tr>
									<tr><p style="font-size: 20px;">手机号</p></tr>
									<tr><input type="text" class="form-control" value="'.$row['phone'].'" name="phone1"></tr>
									<tr><p style="font-size: 20px;">密码</p></tr>
									<tr><input type="text" class="form-control" value="'.$row['password'].'" name="password1"></tr>
									<tr align="center">
										<div align="center" style="margin-top: 50px;">
											<button type="submit" class="btn btn-default navbar-btn">修改</button>
										</div>
									</tr>';
								}
						}else{
// 							echo '<tr><p style="font-size: 20px;">用户名称</p></tr>
// 							<tr style="max-width: 300px;"><input type="text" class="form-control" placeholder="名称" name="name1"></tr>
// 							<tr><p style="font-size: 20px;">手机号</p></tr>
// 							<tr><input type="text" class="form-control" placeholder="手机号" name="phone1"></tr>
// 							<tr><p style="font-size: 20px;">密码</p></tr>
// 							<tr><input type="text" class="form-control" placeholder="密码" name="password1"></tr>
// 							<tr align="center">
// 								<div align="center" style="margin-top: 50px;">
// 									<button type="submit" class="btn btn-default navbar-btn">修改</button>
// 								</div>
// 							</tr>';
						}
						closeConnection();
						
					?>
					
				</table>
			</form>
		</div>
	</body>
</html>