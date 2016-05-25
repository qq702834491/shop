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
        用户管理
        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
      </a>
      <ul id="user" class="nav nav-list collapse secondmenu" style="height: 0px;">
        <li><a href="/shop/index.php/Admin/User/admin"><i class="glyphicon glyphicon-asterisk"></i>管理员管理</a></li>
        <li><a href="/shop/index.php/Admin/User/user"><i class="glyphicon glyphicon-user"></i>顾客管理</a></li>
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
      <a href="">
        <i class="glyphicon glyphicon-th"></i>
        分类管理
      </a>
    </li>

  </ul>
</div>


    <div class="right col-md-10">
    	<div class="container">
    		<div class="list">
    			<?php if(is_array($list)): foreach($list as $key=>$adminList): echo ($adminList["a_id"]); ?>
    				<?php echo ($adminList["username"]); ?>
    				<?php echo ($adminList["add_time"]); endforeach; endif; ?>
    		</div>
    		<div class="col-md-6 form">
    			<form action="/shop/index.php/Admin/User/adminAdd" method="post" class="form-horizontal">
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