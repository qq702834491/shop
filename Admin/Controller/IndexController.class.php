<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
  function _initialize(){
    if(session('login')!=1){
      $this->login();
    }
    return false;
  }
  public function index(){
    $this->display();
  }

  //登录
  function login(){
    $this->display();
  }
}