<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="hero-unit well">
  <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Pretraga za pojam: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header> 

            </div>
        </div>
    </div>

    <div class="well">
        <div class="row">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-xs-12 col-sm-3 col-md-7 col-lg-4">

                        <div class="thumbnail">

                            <div class="caption">
                                <h3 class="editable">
                                    <div class="col-xs-12">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="media-heading"><center><?php the_title(); ?></center> </h4>
                                        </a> 
                                        <center><?php the_post_thumbnail('thumbnail'); ?></center>
                                    </div>
                                </h3>
                                <p class="editable">
                                    <?php the_excerpt(); ?>
                                </p>
                                <p class="editable">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mini btn-success">read more</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-right span4">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                    <?php  
                 
                endwhile;
                else:
                    echo "<h1>Nema teksta sa traženim pojmom</h1>";
            endif;
            
          
            wp_reset_postdata();
            ?> 
        </div>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
    </div> 
</div>

<?php get_footer(); ?>