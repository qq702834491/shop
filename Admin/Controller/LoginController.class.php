<?php
/**
 * Created by PhpStorm.
 * User: LYJ
 * Date: 2016/5/22
 * Time: 11:05
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    //登录首页
    public function index(){
        $this->display('login');
    }
    //验证码实现
    public function Verify(){
        $Verify = new \Think\Verify();
        $Verify->length = 4;
        $Verify->entry();
    }
    //登录功能，ajax获取前端数据
    public function login(){
        $username=I("post.username");
        $pwd=md5(I("post.pwd"));
        $vcode=I("post.vcode");
        //若验证码验证成功
        if($this->check_verify($vcode)){
            $admin=M("Admin");
            //判断是否登录成功
            $isLogin=$admin->where("username='$username' and pwd='$pwd'")->count();
            if($isLogin==0){
                $msg['state']=false;
                $msg['error']="用户名或密码错误";
            }else{
                $msg['state']=true;
                session('admin',$username);
                session('login',1);
            }
        }else{
            $msg['state']=false;
            $msg['error']="验证码错误";
        }
        $this->ajaxReturn($msg);
    }
    //验证码校验（thiunkphp手册提供）
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}