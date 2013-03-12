<?php theme_include('header'); ?>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
            <div class="sidebar-nav sidebar-nav-fixed">
              <h1>4times4</h1>
              <p>The personal blog of Jimmy Liu. Ideas about life, design, and hacking.</p>
              <br>
              <br>
              <li><a href="#">say hello</a></li>
              <li><a href="#">follow on twitter</a></li>
              <li><a href="#">feed</a></li>
            </div><!--/.well -->
          </div><!--/span-->
          
          <div class="span9 offset3">
          	<div id="headerimg">
          	 <img src="img/newspaper.jpg">
          	</div>
          </div>
          
          <div class="post">
          <div class="span7 offset4">
          	 <h3>MARCH 13, 2013 WRITTEN BY <b>JIMMY LIU</b> IN <b>WORLD</b></h3>
             <h1><?php echo article_title(); ?></h1>
             <hr>
             <article><?php echo article_html(); ?></article>

             <br><br>
          </div><!--/span-->
        </div><!--/blog-->
        

<?php theme_include('footer'); ?>