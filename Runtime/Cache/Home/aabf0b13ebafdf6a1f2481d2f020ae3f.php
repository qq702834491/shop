<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网上购物中心</title>
  <link rel="stylesheet" type="text/css" href="/shop/Public/BS/css/bootstrap.min.css">
  <script type="text/javascript" src="/shop/Public/BS/js/jquery.min.js"></script>
  <script type="text/javascript" src="/shop/Public/BS/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo CSS_URL;?>header.css">
  <link rel="stylesheet" href="<?php echo CSS_URL;?>index.css">
  <link rel="stylesheet" href="<?php echo CSS_URL;?>footer.css">
  <script type="text/javascript" src="/shop/Public/BS/js/holder.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_URL;?>index.js"></script>
</head>
<body>
  <div class="header container">
  <ul class="pull-left left">
    <li class="pull-left">
      <a href="">
        <span class="first">亲，请登录</span>
      </a>
    </li>
    <li class="pull-left">
      <a href="">免费注册</a>
    </li>
  </ul>
  <ul class="pull-right right">
    <li class="pull-left">
      <a href="">已买到的宝贝</a>
    </li>
    <li class="pull-left">
      <a href="">
        <span class="glyphicon glyphicon-shopping-cart"></span>
        购物车num
      </a>
    </li>
    <li class="pull-left">
      <a href="">
        <span class="glyphicon glyphicon-star"></span>
        收藏夹
      </a>
    </li>
  </ul>
</div>
  <div class="sub container">
      <div class="logo pull-left col-md-2"><a href="/shop/index.php/Home/Index/index"><img src="<?php echo IMG_URL;?>logo.png" title="商城logo"></a></div>
      <div class="search pull-right col-md-10">
        <form action="" class="form-inline">
          <div class="form-group col-md-8 col-md-offset-1">
            <input type="text" name="search" class="form-control" placeholder="请输入索要搜索的商品">
          </div>
          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">搜索</button>
          </div>
        </form>
      </div>
  </div>
  <div class="container nav clearfix">
    <ul>
      <li class="pull-left first"><a href="">全部商品分类</a></li>
      <li class="pull-left text-center"><a href="">服装城</a></li>
      <li class="pull-left text-center"><a href="">美妆馆</a></li>
      <li class="pull-left text-center"><a href="">超市</a></li>
      <li class="pull-left text-center"><a href="">全球购</a></li>
      <li class="pull-left text-center"><a href="">闪购</a></li>
      <li class="pull-left text-center"><a href="">团购</a></li>
      <li class="pull-left text-center"><a href="">拍卖</a></li>
      <li class="pull-left text-center"><a href="">金融</a></li>
    </ul>
  </div>
  <div class="mid container">
    <div class="classify pull-left">
      <ul>
        <li>
          <h3><a href="">家用电器</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">手机</a>、<a href="">数码</a>、<a href="">通信</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>
        <li>
          <h3><a href="">电脑</a>、<a href="">办公</a><span class="glyphicon glyphicon-chevron-right pull-right"></span></h3>
        </li>

      </ul>
    </div>
    <div id="carousel-example-generic" class="carousel slide pull-left" data-ride="carousel">
      <!-- Indicators -->      
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->      
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo IMG_URL;?>1.jpg" alt="...">      
          <div class="carousel-caption"><h1>推荐位置1</h1></div>
        </div>
        <div class="item">
          <img src="<?php echo IMG_URL;?>2.jpg" alt="...">      
          <div class="carousel-caption"><h1>推荐位置2</h1></div>
        </div>
        <div class="item">
          <img src="<?php echo IMG_URL;?>3.jpeg" alt="...">      
          <div class="carousel-caption"><h1>推荐位置3</h1></div>
        </div>
        <div class="item">
          <img src="<?php echo IMG_URL;?>4.jpg" alt="...">      
          <div class="carousel-caption"><h1>推荐位置4</h1></div>
        </div>
        <div class="item">
          <img src="<?php echo IMG_URL;?>5.png" alt="...">      
          <div class="carousel-caption"><h1>推荐位置5</h1></div>
        </div>
      </div>

      <!-- Controls -->      
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic"data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
    <div class="personal pull-right">
      <img src="<?php echo IMG_URL;?>nolog.jpg" class="center-block img-circle">
      <div class="text-center">
        <span>Hi,你好！</span>
      </div>
      <div class="text-center">
        <a href="" class="btn btn-primary btn-sm">注册</a>
        <a href="" class="btn btn-primary btn-sm">登录</a>
      </div>
    </div>
    <div class="kefu pull-right">
      <h3>联系客服</h3>
      <p>客服1联系方式:XXXXXXXXX</p>
      <p>客服2联系方式:XXXXXXXXX</p>
      <p>客服3联系方式:XXXXXXXXX</p>
      <p>客服4联系方式:XXXXXXXXX</p>
      <p>客服5联系方式:XXXXXXXXX</p>
    </div>
  </div>
  <div class="hotSales container">
    <div class="subtitle text-center"><span class="glyphicon glyphicon-fire"></span>热卖商品</div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">月销量***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">月销量***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">月销量***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">月销量***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">月销量***</div>
    </div>
  </div>
  <div class="newSales container">
    <div class="subtitle text-center"><span class="glyphicon glyphicon-globe"></span>新品上市</div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">收藏 ***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">收藏 ***</div>
    </div>
    <div class="goods pull-left">
      <img src="holder.js/200x200">
      <div class="price">$price</div>
      <div class="monthSales">收藏 ***</div>
    </div>
  </div>
  <div class="footer container text-center">
  <span>友情链接：</span><a href="//www.manjusakaj.com" target="_blank">Manjusaka's Blog</a>
  <span>联系方式：manjusakaj.qq.com</span>
  <span>版权所有</span><i class="glyphicon glyphicon-copyright-mark"></i>
</div>
</body>
</html>