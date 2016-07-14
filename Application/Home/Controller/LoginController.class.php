<?php
/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/7/12
 * Time: 11:44
 */

namespace Home\Controller;


use Think\Controller;

class LoginController extends Controller
{	
    public function login(){
        $manager = 'wangcaimeng';
		$user = 'BuaaClimber';
		$password = "123";
		if(!I('post.username')){
			$this->error("请输入用户名！");
		}else if (!I('post.password')) {
			$this->error("请输入密码！");
		}else if (I('post.username')==$manager&&I('post.password')==$password) {
			session_start();
			$_SESSION['username']=I('post.username');
			$this->success("管理员登录成功，跳转至管理界面",U("/Home/Manager/listAll"));
		}else if(I('post.username')==$user&&I('post.password')==$password){
            session_start();
            $_SESSION['username']=I('post.username');
            $this->success("普通用户登录成功，跳转至管理界面",U("/Home/User/listAll"));
        }else{
            $this->error("用户名或密码错误！");
        }
    }
}