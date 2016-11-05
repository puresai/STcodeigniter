<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>13sai的博客</title>
  <meta name="keywords" content="13sai,saiblog,web,js,php,css,websai,前端,技术">
  <meta name="description" content="saiblog,13sai的博客,分享前端技术，欢迎交流！">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="shortcut icon" href="/ui/images/sai.ico" type="image/x-icon" />
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="/ui/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/ui/assets/css/app.css">
</head>

<body id="blog">

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <h2>13sai的博客</h2>
    </div>
</header>
<hr class="am-hide-sm-only">
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li><a href="/">首页</a></li>
      <li><?php echo anchor('article/type/js','JS');?></li>
      <li><?php echo anchor('article/type/php','PHP');?></li>
      <li><?php echo anchor('article/type/css','CSS');?></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline am-form-icon" role="search" method="get" id="form" action="/index.php/article/search">
      <div class="am-form-group">
        <input type="text" name="title" class="am-form-field am-input-sm" placeholder="搜索"><span onclick="$('#form').submit();" class="am-icon-search"></span>
      </div>
    </form>
  </div>
</nav>
<hr class="am-hide-sm-only">