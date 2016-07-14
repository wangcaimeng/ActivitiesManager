<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>普通用户页面</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		

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
		        </div>
		    </div>
		</nav>
		<h1 class="text-center" style="padding-top:50px" id='myh1'>普通用户页面</h1>
		<div class="container">
			<div class="signUp">
				<form action="<?php echo U('Home/User/signUp');?>" method="post">
					<div class="row">
						<div class="col-lg-1">姓名</div>
						<div class="col-lg-4"><input type="text" name="name" ></div>
					</div>
					<div class="row">
						<div class="col-lg-1">手机号</div>
						<div class="col-lg-4"><input type="password" name="phonenum"></div>
					</div>
					<div class="row">
						<div class="col-lg-1"><input type="reset" class='btn btn-primary btn-sm' value="重置"></div>
						<div class="col-lg-4"><input type="submit" class='btn btn-primary btn-sm' value="报名"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="title-row">
						<div class='col-md-4'>ID</div>
						<div class='col-md-4'>姓名</div>
						<div class='col-md-4'>手机号</div>
					</div>
				</div>
			</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="container">
				<div class="row">
					<div class='col-md-4'><?php echo ($vo["id"]); ?></div>
					<div class='col-md-4'><?php echo ($vo["name"]); ?></div>
					<div class='col-md-4'><?php echo ($vo["phonenum"]); ?></div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>

		<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script>


		</script>

	</body>
</html>