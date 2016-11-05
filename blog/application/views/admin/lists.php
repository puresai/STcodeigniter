
		<ol class="am-breadcrumb">
		  <li><a href="/zeta">首页</a></li>
		  <li class="am-active">列表</li>
		</ol>
		<div class="page-content">
			<div class="am-scrollable-horizontal">
			  <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
			      <tr>
				    <th>标题</th>
				    <th>时间</th>
				    <th>操作</th>
				  </tr>
				  <?php foreach( $article as $art ):?>
				  <tr>
				    <td><?php echo $art['title'];?></td>
				    <td><?php echo $art['date'];?></td>
				    <td>
					    <?php echo anchor('admin/article/update/'.$art['id'],'<span class="am-icon-pencil"></span>',array('class'=>'am-text-secondary'));?>
				    	&nbsp;&nbsp;
					    <?php echo anchor('admin/article/del/'.$art['id'],'<span class="am-icon-trash"></span>',array('class'=>'am-text-danger'));?>
				    </td>
				  </tr>
				  <?php  endforeach;?>
			  </table>
			</div>
			<ul class="am-pagination am-pagination-right">
			<?php echo $this->pagination->create_links();?>
			</ul>
		</div>
	</div>
</div>
<?php $this->load->view('admin/footer') ?>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ui/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
var ue = UE.getEditor('editor');
</script>
</body>
</html>