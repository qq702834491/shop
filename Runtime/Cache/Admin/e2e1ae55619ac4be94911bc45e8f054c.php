<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网上购物中心后台登录</title>
  <link rel="stylesheet" type="text/css" href="/shop/Public/BS/css/bootstrap.min.css">
  <script type="text/javascript" src="/shop/Public/BS/js/jquery.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/holder.min.js"></script>
  <link rel="stylesheet" href="<?php echo ADMIN_CSS;?>login.css">
  <script type="text/javascript" src="<?php echo ADMIN_JS;?>login.js"></script>
  <script>
    //为外部js文件传递thinkphp内置系统常量
    var CONTROLLER="/shop/index.php/Admin/Login";
    var MODULE="/shop/index.php/Admin";
  </script>
</head>
<body>
  <div class="container">
    <div class="logo text-center"><a href="/shop/index.php/Home/Index/index"><img src="<?php echo IMG_URL;?>logo.png"></a></div>
    <h3 class="text-center help-block">Login</h3>
    <form method="post" class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <input type="text" name="username" placeholder="请输入用户名" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" name="pwd" placeholder="请输入登录密码" class="form-control">
      </div>
      <div class="form-group row">
        <div class="col-md-8">
          <input type="text" name="vcode" placeholder="请输入验证码" class="form-control">
        </div>
        <div class="col-md-4">
          <img src="/shop/index.php/Admin/Login/Verify" onclick="javascript:this.src=this.src+'?'+Math.random();">
        </div>
      </div>
      <div class="form-group">
        <span class="tips"></span>
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary btn-block">登录</button>
        <a href="/shop/index.php/Home/Index/index" class="btn btn-default btn-block">返回首页</a>
      </div>
    </form>
  </div>
</body>
</html>