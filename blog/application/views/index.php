<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
		<?php foreach( $article as $row ):?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="/ui/assets/i/f<?php echo $arr[$row['id']%5];?>.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <a href=""><h1><?php echo $row['title']?></h1></a>
                <span class="author"> 13sai @<?php echo $row['date']?></span>
                <p><?php echo $row['abstract']?></p>
                <p><?php echo anchor('article/artShow/'.$row['id'],'更多&raquo;','class="am-btn am-btn-secondary"')?></p>
            </div>
        </article>
		<?php  endforeach;?>
		<ul class="am-pagination am-pagination-centered">
		<?php echo $this->pagination->create_links();?>
		</ul>
    </div>