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
		<div style="max-width: 500px; margin: 0 auto; margin-top: 100px;">
			<h1 style="margin: 0 auto; text-align: center;">新增用户</h1>
			<table class="table table-bordered" style="text-align: center;">
				<tr><p style="font-size: 20px;">用户名称</p></tr>
				<tr style="max-width: 300px;"><input type="text" class="form-control" placeholder="名称" name="name"></tr>
				<tr><p style="font-size: 20px;">手机号</p></tr>
				<tr><input type="text" class="form-control" placeholder="手机号" name="phone"></tr>
				<tr><p style="font-size: 20px;">密码</p></tr>
				<tr><input type="text" class="form-control" placeholder="密码" name="password"></tr>
				<tr align="center">
					<div align="center" style="margin-top: 50px;">
						<button type="button" class="btn btn-default navbar-btn">增加</button>
					</div>
				</tr>
			</table>
		</div>
	</body>
</html>