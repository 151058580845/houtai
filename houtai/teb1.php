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
		
<?php
// $search=$_REQUEST['search'];
//  $sql="select * from info";
//     $r= mysqli_query($conn, $sql);
//     while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
//           $title=$row['title'];
//               $content=$row['content'];
// 
//       $d= strstr($content, $search);
//     if($d){
//          echo "<p><a href=\"news/$title.pdf\">$title</a></p>";
//           echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$content);
//     }
// 
//   }
?>

		
		<div style="margin: 100px;">
			<h1>缴费情况</h1>
			<table class="table table-bordered" style="border-style: none;">
				<tr>
					<form method="post" action="#">
						<td style="border-style: none;">
							<input type="text" class="form-control" placeholder="用户名称" name="search">
						</td>
						<td style="border-style: none;">
							<button type="submit" class="btn btn-default navbar-btn">查询</button>
						</td>
					</form>
				</tr>
				
				<tr style="text-align: center;">
				  <td class="active">用户</td>
				  <td class="success">水费</td>
				  <td class="warning">电费</td>
				  <td class="danger">物业费</td>
				  <td class="info">时间</td>
				  <td class="color1">情况</td>
				</tr>
				<?php
					include_once("../functions/database.php"); 
					$search = 1111;
					if(isset($_POST['search'])&&strlen(trim($_POST['search']))>0)
					$search=$_POST['search'];
					if($search == 1111){
						$sql = "SELECT tb_jiaofei.*,tb_user.* from tb_jiaofei inner join tb_user on tb_jiaofei.id=tb_user.id";
					}else{
						$sql = "SELECT tb_jiaofei.*,tb_user.* from tb_jiaofei inner join tb_user on tb_jiaofei.id=tb_user.id and tb_user.name like '%$search%'";
					}
				
					getConnection(); 
					// $sql = "SELECT tb_jiaofei.*,tb_user.* from tb_jiaofei inner join tb_user on tb_jiaofei.id=tb_user.id";
					//判断用户名和密码是否输入正确
					$select=mysqli_query($databaseConnection,$sql);
						while($row=mysqli_fetch_array($select,MYSQLI_ASSOC)){
							echo '<tr style="text-align: center;">
								  <td class="active">'.$row['name'].'</td>
								  <td class="success">'.$row['shui'].'</td>
								  <td class="warning">'.$row['dian'].'</td>
								  <td class="danger">'.$row['wuye'].'</td>
								  <td class="info">'.$row['time'].'</td>
								  <td class="color1">'.(($row['shui']==0&&$row['dian']==0&&$row['wuye']==0)?'缴费完成':'未完成').'</td>
								</tr>';
						}
					closeConnection();
					
				?>
			</table>
		</div>
	</body>
</html>
