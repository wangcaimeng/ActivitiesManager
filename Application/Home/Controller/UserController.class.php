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
        if(I('session.username')!='BuaaClimber'){
            $this->error("请您先登录！",U('Home/Index/index'));
        }
        $UserModel = D('User');
        $list= $UserModel->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function signUp(){
        $UserModel = D('User');
        $data=array('name'=>I('post.name'),'phonenum'=>I('post.phonenum'));
        $UserModel->data($data)->add();
        $this->success('添加成功！',U('Home/User/listAll'));
    }

}