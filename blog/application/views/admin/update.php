
		<ol class="am-breadcrumb">
		  <li><a href="/zeta">首页</a></li>
		  <li class="am-active">更新</li>
		</ol>
		<div class="page-content">
			<form class="am-form" method="post" action="" enctype="multipart/form-data">
			  <fieldset>
				<input type="hidden" name="id" value="<?php echo $data['id'];?>">
			    <legend>修改文章</legend>
			    <div class="am-form-group">
			      <label for="title">标题</label>
			      <input type="text" id="title" name="title" class="validate[required]" value="<?php echo $data['title'];?>">
			    </div>
			    
			    <div class="am-form-group">
			      <label for="type">分类</label>
			      <input type="text" id="type" name="type" class="validate[required]" value="<?php echo $data['type'];?>">
			    </div>
			    
			    <div class="am-form-group">
			      <label for="abstract">摘要</label>
			      <textarea id="abstract" name="abstract" class="validate[required]"><?php echo $data['abstract'];?></textarea>
			    </div>
				
			    <div class="am-form-group am-form-file">
			      <label for="pic">图片</label>
			      <div>
			        <button type="button" class="am-btn am-btn-default am-btn-sm">
			          <i class="am-icon-cloud-upload"></i> 选择图片</button>
			      </div>
			      <input type="file" id="pic" name="pic" >
			      <img style="width: 300px; margin: 10px 0" src="<?php echo $data['pic'];?>"/>
			    </div>

				<div class="am-form-group">
			      <label for="is_top">置顶</label>
			      <input type="radio" id="is_top" name="is_top" value="1" <?php if ($data['is_top'] == 1){?>checked<?php }?>>
			    </div>


			    <div class="am-form-group">
			      <label for="editor">文本域</label>
			      <script id="editor" name="content" type="text/plain" style="height:500px;"><?php echo $data['content'];?></script>
			    </div>

			    <p><button type="submit" class="am-btn am-btn-default">修改</button></p>
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
</script>
</body>
</html>