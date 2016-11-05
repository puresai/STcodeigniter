		<ol class="am-breadcrumb">
		  <li><a href="/zeta">首页</a></li>
		  <li class="am-active">发布</li>
		</ol>
		<div class="page-content">
			<form class="am-form" method="post" action="" enctype="multipart/form-data" >
			  <fieldset>
			    <legend>新增文章</legend>
			    <div class="am-form-group">
			      <label for="title">标题</label>
			      <input type="text" id="title" name="title" class="validate[required]">
			    </div>
			    
			    <div class="am-form-group">
			      <label for="type">分类</label>
			      <input type="text" id="type" name="type" class="validate[required]">
			    </div>
			    
			    <div class="am-form-group">
			      <label for="abstract">摘要</label>
			      <textarea id="abstract" name="abstract" class="validate[required]"></textarea>
			    </div>
				
			    <div class="am-form-group am-form-file">
			      <label for="pic">图片</label>
			      <div>
			        <button type="button" class="am-btn am-btn-default am-btn-sm">
			          <i class="am-icon-cloud-upload"></i> 选择图片</button>
			      </div>
			      <input type="file" id="pic" name="pic">
			    </div>

				<div class="am-form-group">
			      <label for="is_top">置顶</label>
			      <input type="radio" id="is_top" name="is_top" value="1">
			    </div>


			    <div class="am-form-group">
			      <label for="editor">文本域</label>
			      <script id="editor" name="content" type="text/plain" style="height:500px;"></script>
			    </div>

			    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
			  </fieldset>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('admin/footer') ?>
<script src="/ui/assets/js/amazeui.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
var ue = UE.getEditor('editor');
$(function(){
	$('.am-form').validationEngine('attach',{
		promptPosition: 'topLeft',
	});
});
</script>
</body>
</html>