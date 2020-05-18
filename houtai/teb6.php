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
			<h1>投诉反馈</h1>
			<table class="table table-bordered">
				<tr style="text-align: center; ">
				  <td class="active">用户</td>
				  <td class="success">投诉类型</td>
				  <td class="warning">投诉内容</td>
				  <td class="danger">反馈建议</td>
				  <td class="info">操作</td>
				</tr>
				<?php
					include_once("../functions/database.php");
					$data = date("Y-m-d");
					getConnection(); 
					$sql = "SELECT * FROM `tb_user_tousu`";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							$leibie = "";
							switch($row['leibie']){
								case 0:
									$leibie = "111";
									break;
								case 1:
									$leibie = "222";
									break;
								case 2:
									$leibie = "333";
									break;
								
							}
							
							
							echo '<tr style="text-align: center;">
								  <td class="active" style="text-align: center; ">'.$row['name'].'</td>
								  <td class="success" >'.$leibie.'</td>
								  <td class="warning">'.$row['message'].'</td>
								  <td class="danger"> <input type="text" class="form-control" placeholder="反馈建议"></td>
								  <td class="info"> <button type="button" class="btn btn-default navbar-btn">提交</button></td>
								</tr>';
						}
					closeConnection();
				?>
			</table>
		</div>
	</body>
</html>