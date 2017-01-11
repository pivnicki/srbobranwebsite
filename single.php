<?php get_header(); ?>
<div class="container pozadina-container">
      <div class="row">
        <div class="span12">
         
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-8 column">
                    <div class="well">
  <nav id="nav-single">
  <h3 class="assistive-text"><?php _e( 'Navigacija'  ); ?></h3>
  <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">←</span> Prethodni članak') ); ?></span>
  <span class="nav-next"><?php next_post_link( '%link', __( 'Sledeci članak<span class="meta-nav">→</span>' ) ); ?></span>
</nav><!-- #nav-single -->
                    <?php if (have_posts()):while (have_posts()):the_post(); ?>


                            <div class="row">
                                <div class="page-header span8">
                  <hr>  <h1><?php the_title(); ?></h1><hr>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <?php the_content(); ?>
                                </div>
                               <hr> <small>Autor teksta <?php echo the_author_posts_link();?> 
							   <?php the_time(); echo " | " ; the_date('m j Y');echo " | " ; 
							   the_category(' ');?></small><hr>

                            </div>

                            <div class="row">
                                <div class="span8">
                                    <?php comments_template(); ?> 
                                </div>
                            </div>


                            </div>
                        </div>
                    <?php endwhile; ?> 
                <?php endif; ?>
 
                <div class="col-md-4 column">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </div>
 
</div>
<?php get_footer(); ?>