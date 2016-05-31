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
        if(session('login')!=1){
            $this->display('login');    //未登录
        }else{
            $this->redirect('index/index','',0);    //已登录
        }
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
            $isLogin=$admin->where("username='$username' and pwd='$pwd'")->find();
            //$isLogin判断用户名密码是否正确
            if($isLogin===null){
                $msg['state']=false;
                $msg['error']="用户名或密码错误";
            }else{
                $data=$admin->where("username='$username'")->getField('last_time,last_ip,root');
                foreach($data as $key => $value){
                    session('root',$value['root']);
                    session('last_time',$value['last_time']);
                    session('last_ip',$value['last_ip']);
                }
                $msg['state']=true;
                session('admin',$username);     //用户名
                session('login',1);     //是否登录
                $admin->last_time=time();
                $admin->last_ip=get_client_ip();    //获取客户端ip
                $admin->where("username='$username'")->save();
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
    //退出登录
    public function logout(){
        session(null);
        $this->index();
    }
}