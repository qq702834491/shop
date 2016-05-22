<?php
/**
 * Created by PhpStorm.
 * User: LYJ
 * Date: 2016/5/22
 * Time: 10:58
 */
namespace Admin\Controller;
use Think\Controller;
class Common extends Controller{
    function _initialize(){
        //判断是否以管理员身份登录
        if(session('login')!=1){
            $this->redirect('login/index','',0);
            exit();
        }
    }
}