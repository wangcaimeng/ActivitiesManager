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
        $usernameIn = I('post.username');
        $passwordIn = I('post.password');
        $userTypeIn = I('post.type');
        $userModel = D('User');
        $userlist = $userModel->select();
        $flag = false;
        foreach($userlist as $user){
            if($usernameIn==$user['username']&&$passwordIn==$user['password']&&$userTypeIn==$user['type']){
                $flag = true;
            }
        }
        dump($flag);
        if ($flag){
            if($userTypeIn=='manager'){
                session_start();
                $_SESSION['username']=$usernameIn;
                $_SESSION['userType']=$userTypeIn;
                $this->success("管理员登录成功，正在跳转到管理员页面",U('Home/Manager/listAll'));
            }else{
                session_start();
                $_SESSION['username']=$usernameIn;
                $_SESSION['userType']=$userTypeIn;
                $this->success("普通用户登录成功，正在跳转到普通用户界面",U('Home/User/listAll'));
            }
        }else{
            $this->error("账号或密码或用户类别错误，请重新登录！");
        }
    }
}