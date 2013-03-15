<?php theme_include('header'); ?>
<?php theme_include('sidebar'); ?>

          <div class="hidden-phone">
           <div class="span9 offset3">
          	 <div id="headerimg">
              
             <img src="<?php echo article_custom_field('headerimage', 'http://f.cl.ly/items/3z2R2p3Q21293S3R2a00/urban-landscape-wallpaper-19.jpg'); ?>">
             </div>
          	</div>
          </div>
          
          <div class="post">
          <div class="span6 offset4">
          	 <h3 style="text-transform: uppercase"><?php echo article_date(); ?> WRITTEN BY <b><?php echo article_author('real_name'); ?></b> IN <b><?php echo category_title(); ?></b></h3>
             <h1><?php echo article_title(); ?></h1>
             <hr>
              <div class="hidden-desktop">
                <img src="<?php echo article_custom_field('headerimage', 'http://f.cl.ly/items/3z2R2p3Q21293S3R2a00/urban-landscape-wallpaper-19.jpg'); ?>">
             </div> 
             <div class="article">
             <article><?php echo article_html(); ?></article>
           </div>

             <br><br>
          </div><!--/span-->
        </div><!--/blog-->
        

<?php theme_include('footer'); ?>