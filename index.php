<?php get_header(); ?>
<!-- main home content -->

<div id="main-content " class="container pozadina-container">

    <div class="row">
        
    </div>

    <br>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-8 column">
                        <div class="carousel slide" id="carousel-360660">

                            <?php
                            if (function_exists("get_smooth_slider_recent")) {
                                get_smooth_slider_recent();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-right span4">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <br>
    <br>
    
     
  
	<div class="well" id="rounded">
      <hr>
    <center><h2>Obaveštenja</h2></center>
	<hr>
        <div class="row">
          
            <?php $myposts = new WP_Query(array('posts_per_page' => 4, 'category_name' => 'obavestenja')); ?>

            <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" >

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                
                                        <a href="<?php  the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                </h3>
                                <p class="editable">
                                    <?php echo substr(get_the_excerpt(), 0,35);?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
       
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>        
        </div>
	</div>
   

    

   
	<div class="well" id="rounded">
            <hr>
    <center><h2>Društvo</h2></center>
	<hr>
        <div class="row">
            <?php $myposts = new WP_Query(array('posts_per_page' => 4, 'category_name' => 'drustvo-2')); ?>

            <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                    <div class="col-xs-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                        </div>
                                </h3>
                                <p class="editable">
                                    <?php echo substr(get_the_excerpt(), 0,35);?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            
               
            endif;
            wp_reset_postdata();
            ?>
        </div>
	</div>
 
   
<div class="well" id="rounded">
            <hr>
    <center><h2>Kultura</h2></center>
	<hr>
            <div class="row">
            <?php $myposts = new WP_Query(array('posts_per_page' => 4, 'category_name' => 'kultura')); ?>

            <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                    <div class="col-xs-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                        </div>
                                </h3>
                                <p class="editable">
                                     <?php echo substr(get_the_excerpt(), 0,35);?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            
               
            endif;
            wp_reset_postdata();
            ?>
        </div>
	</div>
  
    <div class="well" id="rounded">
            <hr>
    <center><h2>Politika</h2></center>
	<hr>
        <div class="row">
            <?php $myposts = new WP_Query(array('posts_per_page' => 4, 'category_name' => 'politika')); ?>

            <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                    <div class="col-xs-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                        </div>
                                </h3>
                                <p class="editable">
                                  <?php echo substr(get_the_excerpt(), 0,35);?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            
               
            endif;
            wp_reset_postdata();
            ?>
        </div>
	</div>
 
    <div class="well" id="rounded">
            <hr>
    <center><h2>Sport</h2></center>
	<hr>
        <div class="row">
            <?php $myposts = new WP_Query(array('posts_per_page' => 4, 'category_name' => 'sport')); ?>

            <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                    <div class="col-xs-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                        </div>
                                </h3>
                                <p class="editable">
                                  <?php echo substr(get_the_excerpt(), 0,35);?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            
               
            endif;
            wp_reset_postdata();
            ?>
        </div>
	</div>
    
    
</div>





<!-- end of main home content -->

<?php get_footer(); ?>