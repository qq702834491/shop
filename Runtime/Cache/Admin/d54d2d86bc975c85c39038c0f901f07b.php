<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网上商城后台首页</title>
  <link rel="stylesheet" type="text/css" href="/shop/Public/BS/css/bootstrap.min.css">
  <script type="text/javascript" src="/shop/Public/BS/js/jquery.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/holder.min.js"></script>
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>header.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>left.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS;?>admin.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS;?>admin.js"></script>
  <script type="text/javascript">
    var CONTROLLER="/shop/index.php/Admin/User";
  </script>
</head>
<body>
  <div class="header">
  <div class="logo pull-left col-md-2"><a href="/shop/index.php/Admin/index/index"><img src="<?php echo IMG_URL;?>logo.png" title="后台管理"></a></div>
  <div class="welcome pull-right">
    <span>欢迎<?php echo session('admin');?>登录</span>
    <a href="/shop/index.php/Admin/Login/logout"><span class="glyphicon glyphicon-log-out"></span>退出</a>
  </div>
</div>
  <div class="row">
    <script type="text/javascript">
  //给外部js设置一个thinkphp里面的系统变量
  var MODULE="/shop/index.php/Admin";
</script>
<script src="<?php echo ADMIN_JS;?>left.js"></script>
<div class="left col-md-2">
  <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
    <li>
      <a href="#index" class="nav-header collapsed" data-toggle="collapse">
        <i class="glyphicon glyphicon-cog"></i>
        首页内容管理
        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
      </a>
      <ul id="index" class="nav nav-list collapse secondmenu" style="height: 0px;">
        <li><a href="/shop/index.php/Admin/User/nav"><i class="glyphicon glyphicon-user"></i>导航栏内容管理</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>推荐商品管理</a></li>
        <li><a href="/shop/index.php/Admin/User/kefu"><i class="glyphicon glyphicon-comment"></i>客服联系方式管理</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-fire"></i>热卖商品管理</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-new-window"></i>新品商品管理</a></li>
      </ul>
    </li>
    <li>
      <a href="">
        <i class="glyphicon glyphicon-shopping-cart"></i>
        订单处理
        <span class="label label-warning pull-right">30</span>
      </a>
    </li>

    <li>
      <a href="#user" class="nav-header collapsed" data-toggle="collapse">
        <i class="glyphicon glyphicon-user"></i>
        账户管理
        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
      </a>
      <ul id="user" class="nav nav-list collapse secondmenu" style="height: 0px;">
        <?php if(session('root') == 0): ?><li><a href="/shop/index.php/Admin/User/admin"><i class="glyphicon glyphicon-asterisk"></i>管理员管理</a></li><?php endif; ?>
        <li><a href="/shop/index.php/Admin/User/user"><i class="glyphicon glyphicon-user"></i>用户管理</a></li>
        <li>
          <!--模态框-->
          <a href="javascript:;" data-toggle="modal" data-target="#changePwd">
            <i class="glyphicon glyphicon-asterisk"></i>密码修改
          </a>
        </li>
      </ul>
    </li>

    <li>
      <a href="#goods" class="nav-header collapsed" data-toggle="collapse">
        <i class="glyphicon glyphicon-folder-open"></i>
        商品管理
        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
      </a>
      <ul id="goods" class="nav nav-list collapse secondmenu" style="height: 0px;">
        <li><a href="#"><i class="glyphicon glyphicon-edit"></i>添加商品</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-remove"></i>商品下架</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-wrench"></i>修改商品信息</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-zoom-in"></i>商品资料</a></li>
      </ul>
    </li>
    <li>
      <a href="/shop/index.php/Admin/Category/index">
        <i class="glyphicon glyphicon-th"></i>
        分类管理
      </a>
    </li>

  </ul>
</div>
<!--修改密码模态框-->
<div class="modal fade" id="changePwd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">密码修改</div>
      <div class="modal-body">
        <div class="form-group">
          <label for="oldPwd">原密码：</label>
          <input type="password" name="oldPwd" id="oldPwd" class="form-control" placeholder="请输入原密码">
        </div>
        <div class="form-group">
          <label for="newPwd">新密码：</label>
          <input type="password" name="newPwd" id="newPwd" class="form-control" placeholder="请输入新密码">
        </div>
        <div class="form-group">
          <label for="confirmPwd">确认密码：</label>
          <input type="password" name="confirmPwd" id="confirmPwd" class="form-control" placeholder="请确认一次新密码">
        </div>
        <div class="form-group">
          <!--错误信息提示，默认隐藏-->
          <span class="tips"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="changeBtn">修改</button>
        <button class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
    <div class="right col-md-10">
    	<div class="container">
    		<div class="list">
          <h3>管理员列表</h3>
          <table class="table table-bordered">
            <tr class="success">
              <td class="text-center col-md-5">管理员名称</td>
              <td class="text-center col-md-2">添加时间</td>
              <td class="text-center col-md-2">上次登录时间</td>
              <td class="text-center col-md-2">上次登录ip</td>
              <td class="text-center col-md-1">操作</td>
            </tr>
            <?php if(is_array($list)): foreach($list as $key=>$adminList): ?><tr class="tr<?php echo ($adminList["a_id"]); ?>">
                <td class="text-center"><?php echo ($adminList["username"]); ?></td>
                <td class="text-center"><?php echo (date("Y-m-d H:i:s",$adminList["add_time"])); ?></td>
                <td class="text-center">
                  <?php if($adminList['last_time'] == '' ): ?><sapn class="text-warning">未登录过</sapn>
                  <?php else: ?>
                    <?php echo (date("Y-m-d H:i:s",$adminList["last_time"])); endif; ?>
                </td>
                <td class="text-center">
                  <?php if($adminList['last_time'] == '' ): ?><sapn class="text-warning">未登录过</sapn>
                    <?php else: ?>
                    <?php echo ($adminList["last_ip"]); endif; ?>
                 </td>
                <td class="text-center"><a href="javascript:;" class="btn btn-danger btn-xs del" id="del<?php echo ($adminList["a_id"]); ?>">删除</a></td>
              </tr><?php endforeach; endif; ?>
          </table>
    		</div>
    		<div class="col-md-6 form">
    			<form class="form-horizontal">
	    			<div class="form-group">
					    <label for="adminName" class="col-md-4 control-label">管理员名称：</label>
					    <div class="col-md-8">
					      <input type="text" class="form-control" name="adminName" id="adminName" placeholder="新添加的管理员名称">
					    </div>
					  	<div class="tips col-md-8 col-md-offset-4"></div>
					  </div>
					  <div class="form-group">
					  	<div class="col-md-8 col-md-offset-4">
					  		<button class="btn btn-primary">添加</button>
					    </div>
					  </div>
    			</form>
    		</div>
    	</div>
    </div>
  </div>
  <div class="footer text-center clearfix">
  <span>友情链接：</span><a href="//www.manjusakaj.com" target="_blank">Manjusaka's Blog</a>
  <span>联系方式：manjusakaj@qq.com</span>
  <span>版权所有</span><i class="glyphicon glyphicon-copyright-mark"></i>
</div>
</body>
</html>