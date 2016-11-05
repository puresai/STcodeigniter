<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center">
            <?php echo $data['title'];?>
          </h1>
          <p class="am-article-meta blog-text-center">
              <!--<span><a href="#" class="blog-color">article &nbsp;</a></span>--->
              <span>13sai</span>
              <span> @ <?php echo $data['date'];?>
		      </span>
              
          </p>
        </div>        
        <div class="am-article-bd">   
	    
        <img src="/ui/assets/i/f19.jpg" alt="" class="blog-entry-img blog-article-margin">       
        <p class="am-article-lead">
        <blockquote>
        <?php
        	echo $data['abstract'];
        ?>
        
        </blockquote>
        <div>
	        <?php
	        	echo $data['content'];
	        ?>
	        
        </div>
        </p>
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> </span>&nbsp; <?php echo $data['type'];?>
          </div>
        </div>

        <hr>
        <ul class="am-pagination blog-article-margin">
	        <?php if(!empty($prev)){ ?>
	    	<li class="am-pagination-prev"><?php echo anchor('article/artShow/'.$prev['id'],$prev['title'].'&laquo;')?></li>
	        <?php }
	        if(!empty($next)){ ?>
	    	<li class="am-pagination-next"><?php echo anchor('article/artShow/'.$next['id'],$next['title'].'&raquo;')?></li>
	        <?php } ?>
        </ul>
        
        <hr>

    </div>