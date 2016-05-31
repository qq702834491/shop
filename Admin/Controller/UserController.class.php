<?php 
namespace Admin\Controller;
use Think\Controller;

class UserController extends Common{
	//管理员管理页面
	public function admin(){
        //非顶级管路员无法访问
        if(session('root')!=0){
            header("Content-type:text/html;charset=utf8");
            exit("无权限访问");
        }
		$admin=M("Admin");
		$this->list=$admin->where('root=1')->select();
		$this->display();
	}
	//管理员添加
	public function adminAdd(){
        $adminName=I("post.adminName");
		$admin=D("Admin");
        $isExists=$admin->where("username='$adminName'")->find();
        //不存在则添加，存在则报错
        if(!$isExists){
            $admin->create();
            if($admin->add()){
                $msg['state']=true;
            }else{
                $msg['state']=false;
            }
        }else{
            $msg['state']=false;
            $msg['error']="名称已存在";
        }
        $this->ajaxReturn($msg);
	}
    //删除管理员
    public function adminDel(){
        $admin=M("Admin");
        $admin->create();
        if($admin->delete()){
            $msg['state']=true;
        }else{
            $msg['state']=false;
        }
        $this->ajaxReturn($msg);
    }
	//顾客管理页面
	public function user(){
		$this->display();
	}
	//修改密码功能
	public function changePwd(){
		$oldPwd=md5(I("post.oldPwd"));
		$newPwd=md5(I("post.newPwd"));
		$adminName=session('admin');
		$admin=M("Admin");
		//判断旧密码是否正确
		$res=$admin->where("username='$adminName' and pwd='$oldPwd'")->find();
		if($res){   //密码正确
            $admin->pwd=$newPwd;
            if($admin->where("username='$adminName'")->save()){
                $msg['state']=true;
                $msg['success']="修改成功";
            }
		}else{  //密码错误
            $msg['state']=false;
            $msg['error']="原密码错误";
        }
        $this->ajaxReturn($msg);
	}
}

 ?>