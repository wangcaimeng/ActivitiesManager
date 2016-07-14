<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>管理员页面</title>

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
		<h1 class="text-center" style="padding-top:50px" id='myh1'>管理员页面</h1>
		<div class="container">
				<div class="row">
					<div class="title-row">
						<div class='col-sm-3'>ID</div>
						<div class='col-sm-3'>姓名</div>
						<div class='col-sm-3'>手机号</div>
						<div class="col-sm-3">编辑</div>
					</div>
				</div>
			</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="container">
				<div class="row">
					<div class='col-sm-3'><?php echo ($vo["id"]); ?></div>
					<div class='col-sm-3'><?php echo ($vo["name"]); ?></div>
					<div class='col-sm-3'><?php echo ($vo["phonenum"]); ?></div>
					<div class='col-sm-3'><button class="btn btn-warning" id="btnDeleteById" )">删除</button></div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><button class="btn btn-danger" id="deleteAll" style="margin:0 auto ;height:100% ;width: 100%; ">删除全部</button></div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			function doDel(id){
				if(confirm("确定要删除吗？")){
					window.location="deleteById/id/"+id;
				}
			}
			function doDelAll(){
				if(confirm("确定要删除全部吗？")){
					window.location="deleteAll";
				}
			}
			$(document).ready(function () {
				$('.btn-warning').click(function () {
					doDel(<?php echo ($vo["id"]); ?>);
				});
				$('#deleteAll').click(function () {
					doDelAll();
				});
			});

		</script>

	</body>
</html>