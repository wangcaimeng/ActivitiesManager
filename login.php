<?php
/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/6/28
 * Time: 20:52
 */
$manager = 'wangcaimeng';
$user = 'BuaaClimber';
$password = "123";
if(!$_POST['username']){
    echo "<script>alert('请输入用户名！');window.location='index.php'</script>";
    exit;
}else if(!$_POST['password']){
    echo "<script>alert('请输入用密码！');window.location='index.php'</script>";
    exit;
}
echo "hello";
var_dump($_POST['username']==$manager);
var_dump($_POST['password']==$password);
if($_POST['username']==$manager&&$_POST['password']==$password){
    echo "<script>window.location='manager.php'</script>";
    exit;
}else if($_POST['username']==$user&&$_POST['password']==$password){
	echo "<script>window.location='user.php'</script>";
    exit;
}
?>