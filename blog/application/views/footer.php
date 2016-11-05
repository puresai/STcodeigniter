    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>推荐文章</span></h2>
            <ul class="am-list">
	            <?php foreach( $recommend as $recommend ):?>
	            <li>
	            <?php echo anchor('article/artShow/'.$recommend['id'],'<span class="am-icon am-icon-star"></span>'.$recommend['title'])?>
	            </li>
	            <?php  endforeach;?>
            </ul>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>13sai</span></h2>
            <p>感谢您观看ci教程！</p>
            <p>分享前端技术，欢迎交流！</p>
        </div>
    </div>
</div>
<footer class="blog-footer">	
	<div class="blog-text-center  am-hide-sm-only">© 2015-2016 13sai版权所有  联系方式：957042781#qq.com(@->#)</div>
</footer>

<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default am-show-sm-only"
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/">
        <span class="am-icon-home"></span>
        <span class="am-navbar-label">首页</span>
      </a>
    </li>
    <li>
      <a href="/index.php/index/index/type/web">
        <span class="am-icon-html5"></span>
        <span class="am-navbar-label">Web</span>
      </a>
    </li>
    <li>
      <a href="/index.php/index/index/type/js">
        <span class="am-icon-star"></span>
        <span class="am-navbar-label">js</span>
      </a>
    </li>
    <li data-am-widget="gotop">
      <a href="#">
        <span class="am-icon-arrow-circle-up"></span>
        <span class="am-navbar-label">回顶部</span>
      </a>
    </li>
    <li>
      <a href="/index.php/index/index/type/php">
        <span class="am-icon-github"></span>
        <span class="am-navbar-label">PHP</span>
      </a>
    </li>
    <li>
      <a href="/index.php/index/index/type/css">
        <span class="am-icon-css3"></span>
        <span class="am-navbar-label">CSS</span>
      </a>
    </li>
    <li data-am-navbar-qrcode>
      <a href="###">
        <span class="am-icon-qrcode"></span>
        <span class="am-navbar-label">二维码</span>
      </a>
    </li>
    <li>
    <form class="" role="search" method="get" >
      <div class="am-form-group">
	    <span class="am-input-group-label" onclick="$('#form').submit();"><i class="am-icon-search"></i></span>
        <input type="text" name="title" class="am-form-field" placeholder="搜索">
      </div>
    </form>
    </li>
    <li data-am-navbar-share>
      <a href="###">
        <span class="am-icon-share"></span>
        <span class="am-navbar-label">分享</span>
      </a>
    </li>
  </ul>
</div>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/ui/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/ui/assets/js/amazeui.min.js"></script>
</body>
</html>
