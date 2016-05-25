<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网上商城导航栏管理</title>
  <link rel="stylesheet" type="text/css" href="/shop/Public/BS/css/bootstrap.min.css">
  <script type="text/javascript" src="/shop/Public/BS/js/jquery.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/holder.min.js"></script>
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>header.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>left.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>index.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>nav.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS;?>nav.js"></script>
  <!--为外部js定义thinkphp使用的系统、路径常量-->
  <script>
    var CONTROLLER="/shop/index.php/Admin/Index";
  </script>
</head>
<body>
  <div class="header">
  <div class="logo pull-left col-md-2"><a href="/shop/index.php/Admin/Index"><img src="<?php echo IMG_URL;?>logo.png" title="后台管理"></a></div>
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
        <li><a href="/shop/index.php/Admin/Index/nav"><i class="glyphicon glyphicon-user"></i>导航栏内容管理</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>推荐商品管理</a></li>
        <li><a href="/shop/index.php/Admin/Index/kefu"><i class="glyphicon glyphicon-comment"></i>客服联系方式管理</a></li>
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
      <a href="">
        <i class="glyphicon glyphicon-user"></i>
        用户管理
      </a>
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
        <h2 class="text-primary">导航栏管理</h2><span class="help-block">首页最多只能显示8个导航信息</span>
        <!--预览-->
        <div class="preview">
          <h3>首页导航预览</h3>
          <ul class="nav navbar">
            <?php if(is_array($preview)): foreach($preview as $key=>$preV): ?><li class="pull-left"><?php echo ($preV); ?></li><?php endforeach; endif; ?>
          </ul>
        </div>
        <!--导航条列表-->
        <div class="list">
          <table class="table table-bordered">
            <tr class="success">
              <td class="text-center col-md-8">导航名称</td>
              <td class="text-center col-md-4">操作</td>
            </tr>
            <!--用$time来监控foreach循环次数-->
            <?php if(is_array($list)): foreach($list as $key=>$nav): ?><tr class="active tr<?php echo ($nav["n_id"]); ?>">
                <td class="text-center"><?php echo ($nav["name"]); ?></td>
                <td class="text-center">
                  <button class="yes btn btn-primary btn-xs" id="show<?php echo ($nav["n_id"]); ?>" onclick="showIndex(<?php echo ($nav["n_id"]); ?>)" <?php if($nav[is_index] == 1): ?>disabled<?php endif; ?>>在首页显示</button>
                  <button class="no btn btn-warning btn-xs" id="hide<?php echo ($nav["n_id"]); ?>" onclick="hideIndex(<?php echo ($nav["n_id"]); ?>)" <?php if($nav[is_index] == 0): ?>disabled<?php endif; ?>>在首页隐藏</button>
                  <button class="del btn btn-danger btn-xs" id="del<?php echo ($nav["n_id"]); ?>">
                    <span class="glyphicon glyphicon-remove"></span>删除
                  </button>
                </td>
              </tr><?php endforeach; endif; ?>
          </table>
        </div>
        <!--添加导航的表单-->
        <form class="form-inline" method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="导航信息">
          </div>
          <div class="form-group">
            <input type="text" name="url" class="form-control" placeholder="导航链接">
          </div>
          <div class="form-group">
            <botton class="nav_add btn btn-primary">添加</botton>
          </div>
          <i></i>
        </form>
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