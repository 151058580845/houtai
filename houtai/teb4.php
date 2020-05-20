<?php
include_once("../functions/database.php"); 
					if(isset($_POST['name'])&&strlen(trim($_POST['name']))>0){
						$name = $_POST['name'];
						$user_id = 0;
						if(isset($_POST['room_id'])&&strlen(trim($_POST['room_id']))>0){
							$room_id = $_POST['room_id'];
									getConnection(); 
									
										$sql = "SELECT * from tb_user where name = '$name'";
										$select=mysqli_query($databaseConnection,$sql);
											while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
												$user_id = $row['id'];
												$sql2 = "UPDATE `tb_user_address` SET `id`= '$user_id' WHERE room_id = '$room_id'";
												$select2=mysqli_query($databaseConnection,$sql2);
												if($select2){
													
												}else{
													echo "修改失败";
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
		<script src="js/jquery-3.2.1.min.js"></script>
		
    
    <script src="js/select2.full.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css"/ >
		
	<link rel="stylesheet" href="css/select2.min.css"/>
		<!-- <script src="js/jquery.min.js"></script> -->
		<script src="js/bootstrap.js"></script>
		<title></title>
		<script>
			
			function display1(id){
				// alert(id);
				$('#room_id').val(id);
// 				jQuery("#as").show(500);
// 				var target = document.getElementById(id);
// 				// alert(target);
// 				if(target.style.display=="none"){
// 					
// 					target.style.display="";
// 				}else{
// 					
// 					target.style.display="none"
// 				}
			}
			
			
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
    					  /* background-size: cover;
    					  position: absolute;
    					  overflow: hidden; */
    					}
    	</style>
    </head>
    <body class="bgImg">
		<h1 style="margin-top: 50px;">修改房屋所属</h1>
			<table class="table table-bordered" style="margin: 60px auto 0; max-width: 50%;">
				<tr style="text-align: center;">
					<td class="active">用户</td>
					<td class="success">房子</td>
					<td class="info">修改</td>
					<td class="danger" id = "xiugai" style="display: none;">
					</td>
				</tr>
				<?php
				include_once("../functions/database.php"); 
				
					getConnection(); 
					$sql = "SELECT tb_user.*,tb_user_address.* from tb_user left join tb_user_address on tb_user.id=tb_user_address.id";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							echo '<tr style="text-align: center;">
								  <td class="active">'.$row['name'].'</td>
								  <td class="success">'.$row['address'].'</td><td class="info">';
									  if($row['address']!=""){
									echo '<input class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" type="button" value="修改" style=" margin-left: 20px;" onclick="display1('.$row['room_id'].')"/>
								  </td></tr>';
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
								<h4 class="modal-title" id="myModalLabel" style="text-align: center;margin: 0 auto;">选择新人</h4>
							</div>
							<div class="modal-body">
								<div>
									<input style="display: none;" type="text" class="form-control" placeholder="用户名称" id="room_id" name="room_id">
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
								<button type="submit" class="btn btn-primary">提交更改</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal -->
				</div>
			</form>
			<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby=""></div> -->
	</body>
</html>