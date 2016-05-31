<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网上商城客服管理</title>
  <link rel="stylesheet" type="text/css" href="/shop/Public/BS/css/bootstrap.min.css">
  <script type="text/javascript" src="/shop/Public/BS/js/jquery.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/holder.min.js"></script>
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>header.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>left.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>index.css">
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>kefu.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS;?>kefu.js"></script>
  <script>
    //将thinkphp的系统常量、路径常量传递给外部js
    var CONTROLLER="/shop/index.php/Admin/Index";
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
      <h2 class="text-primary">客服管理</h2><span class="help-block">首页最多只能显示5个客服信息</span>
      <table class="table table-bordered">
        <tr>
          <th class="text-center">客服名字</th>
          <th class="text-center">联系方式</th>
          <th class="text-center">操作</th>
        </tr>
        <!--计算循环次数-->
        <?php $times=0; ?>
        <?php if(is_array($list)): foreach($list as $key=>$kefuList): if($times++ < 5): ?><tr class="tr<?php echo ($kefuList["k_id"]); ?> success">
          <?php else: ?>
            <tr class="tr<?php echo ($kefuList["k_id"]); ?>"><?php endif; ?>
            <td class="text-center"><?php echo ($kefuList["name"]); ?></td>
            <td class="text-center"><?php echo ($kefuList["information"]); ?></td>
            <td class="text-center">
              <!--modal触发按钮-->
              <botton class="btn btn-warning btn-xs modify" id="modify<?php echo ($kefuList["k_id"]); ?>" data-toggle="modal" data-target="#modifyModal">修改</botton>
              <botton class="btn btn-danger btn-xs del" id="del<?php echo ($kefuList["k_id"]); ?>">删除</botton>
            </td>
          </tr><?php endforeach; endif; ?>
      </table>
      <div class="form-inline">
        <div class="form-group">
          <input type="text" name="name" placeholder="客服名字" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="information" placeholder="客服联系方式" class="form-control">
        </div>
        <div class="form-group">
          <botton class="btn btn-primary submit">提交</botton>
        </div>
        <div class="tips"></div>
      </div>
    </div>
  </div>
</div>
<div class="footer text-center clearfix">
  <span>友情链接：</span><a href="//www.manjusakaj.com" target="_blank">Manjusaka's Blog</a>
  <span>联系方式：manjusakaj@qq.com</span>
  <span>版权所有</span><i class="glyphicon glyphicon-copyright-mark"></i>
</div>

<!-- Modal -->
<div class="modal fade" id="modifyModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">修改客服信息</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">客服名：</label>
          <input type="text" name="name" id="name" class="form-control" disabled />
        </div>
        <div class="form-group">
          <label for="information">联系信息：</label>
          <input type="text" name="information" id="information" class="form-control">
        </div>
        <div class="modalTips">ss</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary save">保存</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>