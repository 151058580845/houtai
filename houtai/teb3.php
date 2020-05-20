<?php
include_once("../functions/database.php"); 
					if(isset($_POST['address'])&&strlen(trim($_POST['address']))>0){
						if(isset($_POST['name'])&&strlen(trim($_POST['name']))>0){
									getConnection(); 
									$name = $_POST['name'];
									$address = $_POST['address'];
									$user_id = 0;
									$room_id = 0;
										$sql = "SELECT * from tb_user where name = '$name'";
										$select=mysqli_query($databaseConnection,$sql);
											while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
												$user_id = $row['id'];
											}
									$sql = "SELECT * from tb_address where address = '$address'";
									$select=mysqli_query($databaseConnection,$sql);
										while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
											$room_id = $row['room_id'];
											$tingshi = $row['tingshi'];
											$money = $row['money'];
											$chaoxiang = $row['chaoxiang'];
											$sql1 = "INSERT INTO `tb_user_address`(`room_id`, `id`, `address`, `tingshi`, `money`, `chaoxiang`) VALUES ('$room_id','$user_id','$address','$tingshi','$money','$chaoxiang')";
											$select1=mysqli_query($databaseConnection,$sql1);
											if($select1){
												$sql2 = "UPDATE `tb_address` SET `has`= 0 WHERE room_id = '$room_id'";
												$select2=mysqli_query($databaseConnection,$sql2);
												if($select2){
												}
												
											}else{
												echo "失败";
											}
										}
									closeConnection();
						}
					}
						
					?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css" />
		
    <link rel="stylesheet" href="css/select2.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/select2.full.min.js"></script>
		<!-- <script src="js/jquery.min.js"></script> -->
		<script src="js/bootstrap.js"></script>
		<title></title>
		<script>
		    $(function(){
		        $('.mySelect').select2();
		    })
		</script>
		<style>
        h1,h2,h3{
            text-align: center;
        }
        .select1{
            margin: 60px auto 0;
            width: 200px;
        }
        .select1>span{
            width: 100% !important;
        }
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
	<p name = "id" style="display: none;"></p>
	<body class="bgImg">
		<div class="container" style="margin-top: 100px;">
			<div class="row">
				<div class="col-xs-4"></div>
				<div class="col-xs-6">
					<form method="post" action="#">
					<select class="mySelect" style="width: 100px;" name = "name">
										<?php
										
											getConnection(); 
											$sql = "SELECT *from tb_user";
											//判断用户名和密码是否输入正确
											$select=mysqli_query($databaseConnection,$sql);
												while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
													echo '<option >'.$row['name'].'</option>';
												}
											closeConnection();
										?>
					</select>
		
					<select class="mySelect" style="width: 200px; margin-left: 20px;" name = "address">
						<?php
							getConnection(); 
							$sql = "SELECT *from tb_address where tb_address.has!=0";
							//判断用户名和密码是否输入正确
							$select=mysqli_query($databaseConnection,$sql);
								while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
									echo '<option>'.$row['address'].'</option>';
								}
							closeConnection();
						?>
					</select>
					<input type="submit" value="新增" style="margin-left: 20px;"/>
					</form>
				</div>
			</div>
		</div>
			<table class="table table-bordered" style="margin: 60px auto 0; max-width: 50%;">
				<tr style="text-align: center;">
				  <td class="active">用户</td>
				  <td class="success">房子</td>
				</tr>
				<?php
					getConnection(); 
					$sql = "SELECT tb_user.*,tb_user_address.* from tb_user left join tb_user_address on tb_user.id=tb_user_address.id";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							echo '<tr style="text-align: center;">
								  <td class="active">'.$row['name'].'</td>
								  <td class="success">'.$row['address'].'</td>
								</tr>';
						}
					closeConnection();
				?>
			</table>
		</div>
	</body>
</html>