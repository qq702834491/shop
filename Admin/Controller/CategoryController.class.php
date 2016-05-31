<?php
/**
 * Created by PhpStorm.
 * User: LYJ
 * Date: 2016/5/31
 * Time: 13:58
 */
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Common{
    //分类管理首页
    public function index(){
        $category=M("Category");
        $this->list=$category->where("pid=0")->order('cat_id')->getField('cat_id,cat_name,is_index',true);
        $sql="SELECT a.cat_id,a.cat_name as subName,b.cat_name as parName from category as a,category as b where a.pid=b.cat_id";
        $this->subList=$category->query($sql);
        $this->display();
    }
    //添加分类
    public function categoryAdd(){
        $cat_name=I("post.cat_name");
        $category=M("Category");
        $isExists=$category->where("cat_name='$cat_name'")->find();
        //判断分类名是否存在
        if(!$isExists){
            $category->create();
            $category->pid || $category->pid=0;    //0表示顶级分类
            $category->is_index=0;    //0表示不在首页显示，1表示在首页显示
            if($category->add()){
                $msg['state']=true;
                $msg['msg']="添加成功";
            }else{
                $msg['state']=false;
                $msg['msg']="添加失败";
            }
        }else{
            $msg['state']=false;
            $msg['msg']="分类名已存在";
        }
        $this->ajaxReturn($msg);
    }
    //删除分类
    public function categoryDel(){
        $cat_id=I("post.cat_id");
        $category=M("Category");
        $category->create();
        if($category->where("pid='$cat_id' or cat_id='$cat_id'")->delete()){
            $msg['state']=true;
        }else{
            $msg['state']=false;
        }
        $this->ajaxReturn($msg);
    }
    //修改分类
    public function categoryModify(){
        $cat_name=I("post.cat_name");
        $category=M("Category");
        $isExists=$category->where("cat_name='$cat_name'")->find();
        //分类名不存在
        if(!$isExists){
            $category->create();
            //修改成功
            if($category->save()){
                $msg['state']=true;
                $msg['msg']="修改成功";
            }else{
                $msg['state']=false;
                $msg['msg']="修改失败";
            }
        }else{  //分类名已存在
            $msg['state']=false;
            $msg['msg']="分类名称已存在";
        }
        $this->ajaxReturn($msg);
    }
    //是否首页显示
    public function isIndex(){
        $category=M("Category");
        $category->create();
        $category->save();
    }
}