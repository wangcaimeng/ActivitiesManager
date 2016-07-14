<?php

namespace Home\Controller;


use Think\Controller;

class ManagerController extends Controller
{	
    public function listAll(){
    	if(I('session.username')!='wangcaimeng'){
    		$this->error("请您先登录！",U('Home/Index/index'));
    	}
        $UserModel = D('User');
        $list= $UserModel->select();
        $this->assign('list',$list);
        $this->display();
    }

     public function deleteById(){
     	 $UserModel = D('User');
         $UserModel->delete(I('get.id'));
         $this->success('删除成功！',U('Home/Manager/listAll'));
     }

     public function deleteAll(){
         $UserModel = D('User');
         $UserModel->execute("truncate table activitiesmanager.user");
         $this->success('删除成功！',U('Home/Manager/listAll'));
     }
}
?>