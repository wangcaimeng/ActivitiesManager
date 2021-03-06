<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>普通用户页面</title>

		<!-- Bootstrap CSS -->
		<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

		<style>

			.row{
				border-color: rgb(0,0,0);
				border-width: 3px;
				background-color: rgba(0,0,255,.50);
			}
			.title-row{
				font-size: 20px;
				background-color: rgba(0,0,255,.1);
			}
			.userList{
				margin-top: 100px;
			}
		</style>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <a href="/" class="navbar-brand">北航攀岩队</a>
		        </div>
		        <div class="collapse navbar-collapse" id="navbar">
		            <ul class="nav navbar-nav">
		                <li><a href="/">Home</a></li>
		                <li><a href="#">About</a></li>
		            </ul>
					<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#signUpModal"  style="margin-top:10px;margin-left: 500px">报名</button>
		        </div>

		    </div>
		</nav>

		<div class="modal fade" id="signUpModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">报名</h4>
					</div>
					<div class="modal-body">
						<button class="btn btn-success btn-lg" id="btn_signUpForThisUser">为自己报名(根据注册信息)</button>
						<form action="<?php echo U('Home/User/signUp');?>" method="post">
							<div class="form-group">
								<label>姓名</label>
								<input type="text" name="name" class="form-control" placeholder="请输入姓名">
							</div>
							<div class="form-group">
								<label>手机号</label>
								<input type="text" name="phonenum" class="form-control" placeholder="请输入手机号">
							</div>
							<div class="form-group">
								<input type="reset" class="btn btn-warning" value="重置">
								<input type="submit" class="btn btn-primary" value="报名">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<div class="userList">
			<h1 class="text-center" id='myh1'>普通用户页面</h1>
			<div class="container">
				<div class="row">
					<div class="title-row">
						<div class='col-xs-4'>ID</div>
						<div class='col-xs-4'>姓名</div>
						<div class='col-xs-4'>手机号</div>
					</div>
				</div>
			</div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="container">
					<div class="row">
						<div class='col-xs-4'><?php echo ($vo["id"]); ?></div>
						<div class='col-xs-4'><?php echo ($vo["name"]); ?></div>
						<div class='col-xs-4'><?php echo ($vo["phonenum"]); ?></div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#btn_signUpForThisUser').click(function () {
					if(confirm("将根据用户注册信息进行报名，确定继续吗？")){
						window.location='signUpForThisUser';
					}
				});
			});
		</script>
	</body>
</html>