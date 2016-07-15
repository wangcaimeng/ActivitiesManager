<?php

namespace Home\Controller;


use Think\Controller;

class ManagerController extends Controller
{	
    public function listAll(){
    	if(!I('session.username')||I('session.userType')!='manager'){
    		$this->error("请您先以管理员身份登录！",U('Home/Index/index'));
    	}
        $UserModel = D('Signup_user');
        $list= $UserModel->select();
        $this->assign('list',$list);
        $this->display();
    }

     public function deleteById(){
     	 $UserModel = D('Signup_user');
         $UserModel->delete(I('get.id'));
         $this->success('删除成功！',U('Home/Manager/listAll'));
     }

     public function deleteAll(){
         $UserModel = D('Signup_user');
         $UserModel->execute("truncate table activitiesmanager.user");
         $this->success('删除成功！',U('Home/Manager/listAll'));
     }
}
?>