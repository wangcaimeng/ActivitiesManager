<?php
/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/7/14
 * Time: 13:01
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{
    public function listAll(){
        if(!I('session.username')||I('session.userType')!='user'){
            $this->error("请您先以用户身份登录！",U('Home/Index/index'));
        }
        $Signup_userModel = D('Signup_user');
        $list= $Signup_userModel->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function signUp(){
        $Signup_userModel = D('Signup_user');
        $data=array('name'=>I('post.name'),'phonenum'=>I('post.phonenum'));
        $Signup_userModel->data($data)->add();
        $this->success('报名成功！',U('Home/User/listAll'));
    }

    public function signUpForThisUser(){
        $Signup_userModel = D('Signup_user');
        $UserModel = D('User');
        session_start();
        $data = $UserModel->where(array('username'=>I('session.username')))->find();
        $data = array('name'=>$data['username'],'phonenum'=>$data['phonenum']);
        $Signup_userModel->data($data)->add();
        $this->success("报名成功！",U('Home/User/listAll'));
    }

}