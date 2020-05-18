<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.min.js"></script>
		<title></title>
	</head>
	<body>
		<div style="margin: 100px;">
			<h1>未缴费用户</h1>
			<table class="table table-bordered">
				<tr style="text-align: center;">
				  <td class="active">用户</td>
				  <td class="success">水费</td>
				  <td class="warning">电费</td>
				  <td class="danger">物业费</td>
				  <td class="info">时间</td>
				  <td class="color1">操作</td>
				</tr>
				<?php
				include_once("../functions/database.php");
					$data = date("Y-m-d");
					getConnection(); 
					$sql = "SELECT tb_jiaofei.*,tb_user.* from tb_jiaofei inner join tb_user on tb_jiaofei.id=tb_user.id where tb_jiaofei.caozuo=0";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							echo '<tr style="text-align: center;">
								  <td class="active">'.$row['name'].'</td>
								  <td class="success">'.$row['shui'].'</td>
								  <td class="warning">'.$row['dian'].'</td>
								  <td class="danger">'.$row['wuye'].'</td>
								  <td class="info">'.$row['time'].'</td>
								  <td class="color1">'.'提醒'.'</td>
								</tr>';
						}
					closeConnection();
				?>
			</table>
		</div>
	</body>
</html>