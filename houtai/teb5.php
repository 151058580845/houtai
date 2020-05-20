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
			$("#xiugai").click(function()){
				alert("ffff");
				var target = document.getElementById(id);
				if(target.style.display=="none"){
					target.style.display="";
				}else{
					target.style.display="none"
				}
			}
		    $(function(){
		        $('.mySelect').select2();
				$('.click1').click(){
					document.getElementById("as").style.display = "none";
				};
// 				function click(){
// 					
// 				}
		    })
			function display(id){
				var target = document.getElementById(id);
				if(target.style.display=="none"){
					target.style.display="";
				}else{
					target.style.display="none"
				}
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
   					/*  background-size: cover;
   					  position: absolute;
   					  overflow: hidden; */
   					}
   	</style>
   </head>
   <body class="bgImg">
			<table class="table table-bordered" style="margin: 60px auto 0; max-width: 50%;">
				<tr style="text-align: center;">
					<td class="active">用户</td>
					<td class="success">房子</td>
					<td class="info">修改</td>
					<td class="danger" id = "xiugai"style="display: none;">修改</td>
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
								  <td class="success">'.$row['address'].'</td>
								  <td class="info">
									<input type="button" value="修改" style=" margin-left: 20px; onclick="display(xiugai)"/>
								  </td>
								  <td name = "as" style="display: none;">
								  <select class="mySelect" style="width: 100px;">';
									$sql1 = "SELECT *from tb_user";						
									$select1=mysqli_query($databaseConnection,$sql1);
										while($row1=mysqli_fetch_array($select1,MYSQLI_ASSOC)){
											echo '<option>'.$row1['name'].'</option>';
										}

							echo '</select></td></tr>';
						}
					closeConnection();
				?>
			</table>
	</body>
</html>