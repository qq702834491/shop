<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
  //主页内容显示
  public function index(){
    $this->display();
  }
  //导航栏列表显示
  public function nav(){
    $nav=M("Nav");
    $this->preview=$nav->where('is_index=1')->order('addtime desc')->limit(8)->getField('name',true);
    $this->list=$nav->order('addtime')->select();
    $this->display();
  }
  //导航添加
  public function navAdd(){
    $name=I("post.name");
    $nav=M("Nav");
    //判断名称是否合法
    $is_ok=$nav->where("name='$name'")->find();
    if($is_ok==0){
      //统计数据条数
      $nav->create();
      $nav->is_index=0;
      $nav->addtime=time();
      //添加成功返回数据
      if($nav->add()){
        $msg['state']=true;
        $msg['position']=$count;
      }
    }else{
      $msg['state']=false;
      $msg['error']="名称已存在";
    }
    $this->ajaxReturn($msg);
  }

  //导航信息删除
  public function navDel(){
    $n_id=I("post.n_id");
    $nav=M("Nav");
    if($nav->delete($n_id)){
      $msg['state']=true;
    }else{
      $msg['state']=false;
    }
    $this->ajaxReturn($msg);
  }
  //首页显示功能实现
  public function showIndex(){
    $n_id=I("post.n_id");
    $nav=M("Nav");
    $nav->is_index=1;
    $nav->addtime=time();
    if($nav->where("n_id=$n_id")->save()){
      $msg['state']=true;
    }
    $this->ajaxReturn($msg);
  }
  //首页隐藏功能实现
  public function hideIndex(){
    $n_id=I("post.n_id");
    $nav=M("Nav");
    $nav->is_index=0;
    $nav->addtime=time();
    if($nav->where("n_id=$n_id")->save()){
      $msg['state']=true;
    }
    $this->ajaxReturn($msg);
  }
}
