<?php theme_include('header'); ?>
<?php theme_include('sidebar'); ?>

          <?php if(has_posts()): ?>
          
          <?php while(posts()): ?>
          <div class="blog">

          <div class="span6 offset4">
             <h1><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h1>
             <h3><?php echo article_date(); ?></h3>
            
             <div id="pimg">
             <img src="<?php echo article_custom_field('pimage', 'https://d233eq3e3p3cv0.cloudfront.net/fit/c/90/90/0*2Hx_i0hRfjV9otLG.jpeg'); ?>">
             
             </div>
             <br>
             <div class="article">
             <?php echo article_html(); ?>
           </div>
           <br><br>
             <hr>
             <br><br>
          </div><!--/span-->
        </div><!--/blog-->

        <?php endwhile; ?>

  <?php else: ?>
    <p>Looks like you have some writing to do!</p>
  <?php endif; ?>
        
<?php theme_include('footer'); ?>