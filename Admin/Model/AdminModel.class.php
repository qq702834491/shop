<?php
/**
 * Created by PhpStorm.
 * User: LYJ
 * Date: 2016/5/22
 * Time: 18:27
 */
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
	//字段映射
  protected $_map=array(
  	'adminName'=>'username',	
  );
  //自动完成
  protected $_auto=array(
  	//密码默认字符串+MD5加密
  	array('pwd','strmd5',3,'callback'),
  	array('add_time','time',3,'function'),
  	array('root',1,3,'string'),
  );
  //回调函数strmd5(),默认密码为admin
  public function strmd5($str='admin'){
  	return md5($str);
  }
}