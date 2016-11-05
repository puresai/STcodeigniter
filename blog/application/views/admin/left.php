<?php $this->load->view('admin/header') ?>
<header class="am-topbar admin-header">
  <h1 class="am-topbar-brand">
    <i class="am-header-icon am-icon-bars"></i>  后台管理
  </h1>
  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <div class="am-topbar-right">
      <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="window.location.href='/index.php/admin/article/logout'">退出</button>
    </div>
  </div>
</header>
<div class="admin-main">
	<div class="admin-sidebar am-hide-sm-only">
		<ul class="am-list admin-sidebar-list">
			<li>
			<?php
				echo anchor('/','<i class="am-icon-home"></i> 首页')
			?>
			</li>
			<li>
			<?php
				echo anchor('admin/article/lists','<i class="am-icon-list"></i> 列表')
			?>
			</li>
			<li>
			<?php
				echo anchor('admin/article/creat','<i class="am-icon-plus"></i> 发布')
			?>
			</li>
		</ul>
	</div>
	<div class="admin-content">