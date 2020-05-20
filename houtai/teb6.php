<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.min.js"></script>
		<title></title>
		<script>
			function aaa(tousu_id){	
				var fankui=document.getElementById('fankui').value;
				if(fankui==null||fankui==""){
					alert("请输入反馈信息");
				}else{
					var url='teb6_1.php?fankui='+fankui+"&tousu_id="+tousu_id;
					window.location.href=url;
				}
				
			}
		</script>
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
		<div style="margin: 100px;">
			<h1  style="margin: 0 auto;text-align: center;">投诉反馈</h1>
			<!-- <form action="" method="get"> -->
			<table class="table table-bordered" style="text-align: center; margin-top: 30px;">
				<tr style="text-align: center; ">
				  <td class="active">用户</td>
				  <td class="success">投诉类型</td>
				  <td class="warning">投诉内容</td>
				  <td class="danger">反馈建议</td>
				  <td class="info" name = "fankui1">操作</td>
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
							if($row['is_chuli']==0){
								echo '<tr style="text-align: center;">
								  <td class="active" style="text-align: center;display: none; ><input type="text" id = "tousu_id" class="form-control" value="'.$row['id'].'" name = "tousu_id"></td>
								  <td class="active" style="text-align: center; ">'.$row['name'].'</td>
								  <td class="success" >'.$leibie.'</td>
								  <td class="warning">'.$row['message'].'</td>
								  <td class="danger"> <input type="text" class="form-control" placeholder="反馈建议" id = "fankui" name = "fankui"></td>
								  <td class="info"><button onclick="aaa('.$row['id'].')"/>提交</button></td>
								</tr>';
							} 							
						}
					closeConnection();
				?>
			</table>
			<!-- </form> -->
		</div>
	</body>
</html>