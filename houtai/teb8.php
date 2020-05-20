<?php
include_once("../functions/database.php"); 
					if(isset($_POST['name'])&&strlen(trim($_POST['name']))>0){
						$name = $_POST['name'];
						if(isset($_POST['danhao'])&&strlen(trim($_POST['danhao']))>0){
							$danhao = $_POST['danhao'];
									getConnection(); 
												echo $name.$danhao;
												$sql2 = "UPDATE `tb_fuwu` SET `weixiuren`='$name' WHERE danhao = '$danhao'";
												$select2=mysqli_query($databaseConnection,$sql2);
												if($select2){
													echo "111";
												}else{
													echo "修改失败";
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
		<script src="js/jquery-3.2.1.min.js"></script>
			
		
		<script src="js/select2.full.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/ >
			
		<link rel="stylesheet" href="css/select2.min.css"/>
			<!-- <script src="js/jquery.min.js"></script> -->
			<script src="js/bootstrap.js"></script>
		<title></title>
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
		<script>
			function display1(id){
				alert(id);
							$('#danhao').val(id);

						}
		</script>
	</head>
	<body class="bgImg">
		<div style="margin: 100px;">
			<h1>服务需求</h1>
			<table class="table table-bordered">
				<tr style="text-align: center;">
				  <td class="active">产品</td>
				  <td class="success">时间</td>
				  <td class="info">操作</td>
				</tr>
				<?php
					$data = date("Y-m-d");
					getConnection(); 
					$sql = "SELECT * FROM `tb_fuwu`";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							if($row['weixiuren']=="0"){
								echo '<tr style="text-align: center;">
								  <td class="active">'.$row['name'].'</td>
								  <td class="success">'.$row['time'].'</td>
								  <td class="info"><input class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" type="button" value="指派" style=" margin-left: 20px;" onclick="display1('.$row['danhao'].')"/></td>
								</tr>';
							}
							
						}
					closeConnection();
				?>
			</table>
			
			<form action="#" method="post">
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel" style="text-align: center;margin: 0 auto;">指派师傅送上门</h4>
							</div>
							<div class="modal-body">
								<div>
									<input style="display: none;" type="text" class="form-control" placeholder="用户名称" id="danhao" name="danhao">
								</div>
								<div style="margin: 0 auto; text-align: center;">
									<select class="mySelect" style="width:300px; text-align: center; height: 50px; margin: 0 auto;" name = "name">
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
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
								<button type="submit" class="btn btn-primary">确认指派</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal -->
				</div>
			</form>
		</div>
	</body>
</html>