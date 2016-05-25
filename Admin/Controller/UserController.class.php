<?php 
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{
	//管理员管理页面
	public function admin(){
		$admin=M("Admin");
		$this->list=$admin->where('root=1')->select();
		$this->display();
	}
	//管理员添加
	public function adminAdd(){
		$admin=D("Admin");
		$admin->create();
		$admin->add();
	}
	//顾客管理页面
	public function user(){
		$this->display();
	}

}

 ?>