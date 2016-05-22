<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $nav=M("Nav");
        $this->nav=$nav->where('is_index=1')->order('addtime desc')->limit(8)->getField('name,url',true);
        $this->display();
    }
}