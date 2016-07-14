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
        .row{
            background-color: rgba(0,0,255,.15);
        }
        .login{
            padding-top: 100px;
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
        </div>
    </div>
</nav>
<div class="container">
    <div class="login">
        <form action="<?php echo U('Home/Login/login');?>" method="post">
            <div class="row">
                <div class="col-sm-1">用户名</div>
                <div class="col-sm-4"><input type="text" name="username" ></div>
            </div>
            <div class="row">
                <div class="col-sm-1">密码</div>
                <div class="col-sm-4"><input type="password" name="password"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"><input type="reset" class='btn btn-primary btn-sm' value="重置"></div>
                <div class="col-sm-4"><input type="submit" class='btn btn-primary btn-sm' value="登录"></div>
            </div>
        </form>
    </div>


</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>