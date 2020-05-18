<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>主页</title>

<script src="js/jquery.min.js"></script>

<!--阿里图标库-->
<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_1632750_204xwxiwzht.css?1583918713" />

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/bootstrap.js"></script>
<script>
	 // 计算页面的实际高度，iframe自适应会用到
  function calcPageHeight(doc) {
      var cHeight = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
      var sHeight = Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight)
      var height  = Math.max(cHeight, sHeight)
      return height
  }
  //根据ID获取iframe对象
  var ifr = document.getElementById('main')
  ifr.onload = function() {
  	  //解决打开高度太高的页面后再打开高度较小页面滚动条不收缩
  	  ifr.style.height='0px';
      var iDoc = ifr.contentDocument || ifr.document
      var height = calcPageHeight(iDoc)
      if(height < 850){
      	height = 850;
      }
      ifr.style.height = height + 'px'
  }
</script>

</head>
<body>
<div class="body_con">
    <div class="body_top">
		<div class="container">
			<div class="row">
			<div class="col-xs-8">
			</div>
			<div class="col-xs-4">
				<a style="color: white;font-size: 16px;">退出</a>
				<a style="color: white;font-size: 16px;">修改密码</a>
			</div>
		</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="body_left">
			<ul class="body_left_list">
				<li>
					<label>
						<span>小区管理</span>
						<i class="iconfont iconxiajiantou"></i>
						<a href="javascript:;"></a>
					</label>
					<ul>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>费用管理</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
							<ul>
								<li>
									<label>
										<span>缴费信息</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="teb1.php" target="iframe_a"></a>
									</label>
									
								</li>
								<li>
									<label>
										<span>迟交用户</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="teb2.php" target="iframe_a"></a>
									</label>
								   
								</li>
							</ul>
						</li>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>房屋管理</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
							<ul>
								<li>
									<label>
										<span>转让登记</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="javascript:;"></a>
									</label>
								</li>
								<li>
									<label>
										<span>入住登记</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="javascript:;"></a>
									</label>
								</li>
								<li>
									<label>
										<span>出租登记</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="javascript:;"></a>
									</label>
								</li>
							</ul>
						</li>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>服务管理</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
							<ul>
								<li>
									<label>
										<span>投诉处理</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="teb6.php" target="iframe_a"></a>
									</label>
								</li>
								<li>
									<label>
										<span>维修处理</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="teb7.php" target="iframe_a"></a>
									</label>
								</li>
								<li>
									<label>
										<span>服务进度</span>
										<i class="iconfont iconyoujiantou"></i>
										<a href="teb8.php" target="iframe_a"></a>
									</label>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<label>
						<span>用户管理</span>
						<i class="iconfont iconxiajiantou"></i>
						<a href="javascript:;"></a>
					</label>
					<ul>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>新增用户</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="teb9.php" target="iframe_a"></a>
							</label>
						</li>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>信息录入</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
						</li>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>信息修改</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
						</li>
					</ul>
				</li>
				<li>
					<label>
						<span>账户管理</span>
						<i class="iconfont iconxiajiantou"></i>
						<a href="javascript:;"></a>
					</label>
					<ul>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>修改密码</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
						</li>
						<li>
							<label>
								<i class="iconfont iconYYGK"></i>
								<span>权限修改</span>
								<i class="iconfont iconyoujiantou"></i>
								<a href="javascript:;"></a>
							</label>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="body_right">
			<iframe src="teb1.php" name="iframe_a" style="overflow:visible;" scrolling="no" frameborder="no"<!-- width="100%" height="100%;" --> onload="changeFragemWeight()">
				<div>你盛开的积分快结束了宽度盛开的积分舒服的水电费圣诞节覅</div>
			</iframe>
		</div>
	</div>
</div>


<script src="js/script.js"></script>

</body>
</html>
