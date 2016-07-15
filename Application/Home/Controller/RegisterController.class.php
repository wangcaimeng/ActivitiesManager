<?php
/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/7/15
 * Time: 20:04
 */

namespace Home\Controller;


use Think\Controller;

class RegisterController extends Controller
{
    public function register(){
        $register_username = I('post.register_username');
        $register_password1 = I('post.register_password1');
        $register_password2 = I('post.register_password2');
        $register_phonenum = I('post.register_phonenum');
        $userModel = D('user');
        $userList = $userModel->select();
        $isRegister = false;
        foreach($userList as $user){
            if($register_username==$user['username']){
                $isRegister = true;
            }
        }
        if($isRegister){
            $this->error("该用户名已经被注册！");
        }else if($register_password1!=$register_password2){
            $this->error("你两次输入的密码不一致！");
        }else{
            $data=array('username'=>$register_username,'password'=>$register_password1,'phonenum'=>$register_phonenum);
            $userModel->data($data)->add();
            $this->success("注册成功，请您尝试登录！",U('Home/Index/index'));
        }

    }
}