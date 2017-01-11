<?php get_header(); ?>



<div class="container pozadina-container"><br>
   
    <?php $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    ?>

    <?php $myposts = new WP_Query(array('posts_per_page' => 2, 'cat' => $category_id)); ?>

<?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
   
            <div class="row">
                <div class="col-lg-pull-0  col-lg-4  ">
                    <div class="well" >
                        <div class="thumbnail">
                            <h3 class="editable">

                                <h2>
        <?php echo the_title($before = '<h3>', $after = '</h3>', $echo) ?>
                                </h2>
                            </h3>
                            <small><?php the_date('m j Y'); ?>&nbsp;<?php the_author_posts_link(); ?></small>
                            <p>
                            <center><?php the_post_thumbnail('medium'); ?></center>
                            </p>

                            <p>
        <?php echo substr(get_the_excerpt(),0,50); ?>  
                            </p>
                            <p class="editable">
                                <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                            </p>
                        </div></div>
                </div>

                <?php
            endwhile;?>
              
             <div class="col-md-offset-0 col-lg-pull-5 column">
                <div class="row">
                       
                        <div class="pull-right span4 ">
                            <?php get_sidebar(); ?>
                        </div>
                 
                </div>
                </div>
      <?php  endif;
        wp_reset_postdata();
        ?>

    </div>  
       
</div>
<?php rewind_posts(); ?>
<div class="container "   >
    <br>
     
     <?php $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    ?>
 
    <div class="col-xs-12 col-sm-9">
        <div class="row">

        <?php $myposts = new WP_Query(array('posts_per_page' => 10, 'cat' => $category_id)); ?>

<?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                    <div class="col-6  col-lg-4  ">

                        <div class="thumbnail" >

                            <div class="caption">
                                <h3 class="editable">
                                    <div class=" ">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <div class="thumbnail" >
                                            <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                        </div>
                                    </div>
                                </h3>
                                <p class="editable">
        <?php echo substr(get_the_excerpt(), 0, 35); ?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">više</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                ?>  
         
            <?php
            endif;
            wp_reset_postdata();
            ?>  

        </div>

    </div>    
  
</div>

  <p class="postnav">
                 &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;<?php next_posts_link('<h3>&laquo; Stariji unosi</h3>'); ?> 
                <?php previous_posts_link('<h3>Noviji unosi&raquo;</h3>'); ?>
                </p>
</div>      
<?php get_sidebar(); ?>
<?php get_footer(); ?>