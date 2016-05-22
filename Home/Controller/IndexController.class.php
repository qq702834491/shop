<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页内容显示
    public function index(){
        //导航部分
        $nav=M("Nav");
        $this->nav=$nav->where('is_index=1')->order('addtime desc')->limit(8)->getField('name,url',true);
        //客服联系部分
        $kefu=M("Kefu");
        $this->kefu=$kefu->order('k_id desc')->limit(5)->getField('name,information',true);

        $this->display();
    }
}