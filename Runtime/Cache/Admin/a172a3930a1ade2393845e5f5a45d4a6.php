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
</head>
<body>
  <div class="container">
    <div class="logo text-center"><a href="/shop/index.php/Home/Index/index"><img src="<?php echo IMG_URL;?>logo.png"></a></div>
    <h3 class="text-center help-block">Login</h3>
    <form action="" method="post" class="col-md-4 col-md-offset-4">
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
          <img src="holder.js/100x30" alt="">
        </div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary btn-block">登录</button>
        <a href="/shop/index.php/Home/Index/index" class="btn btn-default btn-block">返回首页</a>
      </div>
    </form>
  </div>
</body>
</html>