<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="wcm">
    <title>岩队活动管理系统</title>

    <!-- Bootstrap -->
   <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .index-bg{
            height: 100%;
            width: 100%;
            position: absolute;
            background-position: center;
            background-size: cover;
            background-image: url("/Public/index-bg.jpg");
        }
        .h4{
            font-style:oblique;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                <li><a href=<?php echo U('Home/About/about');?>>About</a></li>
            </ul>
            <div class="button-group" role="button" style="margin-top: 10px;margin-left: 500px">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal" >登录</button>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registerModal">注册</button>
            </div>
        </div>
    </div>
</nav>
<div class="index-bg"></div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel1">用户登录</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo U('Home/Login/login');?>" method="post" id="loginform">
                    <div class="form-group">
                        <label>用户名</label>
                        <input type="text" class="form-control" name="username"  id="username" placeholder="请输入用户名">
                    </div>
                    <div class="from-group">
                        <label>密码 </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <lable>普通用户</lable>
                            <input type="radio" name="type" value="user" checked="checked" style="margin-left: auto">
                            <br>
                            <lable style="margin-left: auto">管理员</lable>
                            <input type="radio" name="type" value="manager" style="margin-left: auto">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="reset" class="btn btn-warning" value="重置">
                        <input type="submit" class="btn btn-primary" value="登录">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2" >用户注册</h4>
			</div>
			<div class="modal-body">
                <form action="<?php echo U('Home/Register/register');?>" method="post" id="registerForm">
                    <div class="form-group">
                        <label >用户名</label>
                        <input type="text" class="form-control" name="register_username"   placeholder="请输入用户名">
                    </div>
                    <div class="from-group">
                        <label >密码</label>
                        <input type="text" class="form-control" name="register_password1"  placeholder="请输入密码">
                    </div>
                    <div class="from-group">
                        <label >确认密码 </label>
                        <input type="text" class="form-control" name="register_password2"  placeholder="请再输入一遍密码">
                    </div>
                    <div class="from-group">
                        <label>手机号码</label>
                        <input type="text" class="form-control" name="register_phonenum" placeholder="请输入手机号码">
                    </div>
                    <div class="form-group">
                        <input type="reset" class="btn btn-warning" value="重置">
                        <input type="submit" class="btn btn-primary" value="注册">
                    </div>
                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>