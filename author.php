<?php get_header(); ?>
<div id="content" class="container pozadina-container">
<div class="author">
<div class="author-info">
<!-- This sets the $curauth variable -->
<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
<hr><h2 class="author-subtitle">O autoru <?php echo $curauth->first_name; ?></h2><hr>
<div class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 230 ); ?></div>
<dl>
<h5 class="author-subtitle"><dt>Socijalne mreže</dt></h5>
<dd><a class="author-twitter-link" href="<?php echo $curauth->twitter_link; ?>"><?php echo $curauth->twitter_link; ?></a></dd>
<dd><a class="author-facebook-link" href="<?php echo $curauth->facebook_link; ?>"><?php echo $curauth->facebook_link; ?></a></dd>
<dd><a class="author-google-link" href="<?php echo $curauth->google_link; ?>"><?php echo $curauth->google_link; ?></a></dd>
<dd><a class="author-rss-link" href="<?php echo $curauth->rss_link; ?>"><?php echo $curauth->rss_link; ?></a></dd>

<h5 class="author-subtitle"><dt>Website</dt></h5>
<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
<h5 class="author-subtitle"><dt>Profil</dt></h5>
<dd><?php echo $curauth->user_description; ?></dd>
</dl>
<h2 class="author-subtitle">Članci  koje je napisao <?php echo $curauth->first_name;echo " ".$curauth->last_name; ?></h2>
<ul>  
<!-- The Loop -->     
<div class="author-summary">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>,
<?php the_time('d M Y'); ?> in <?php the_category('&');?>
</li>
     
<?php endwhile; else: ?>     
<p><?php _e('Ovaj autor nema postove.'); ?></p>
 
<?php endif; ?>
</div>
    
<!-- .author-summary -->
</div><!-- .author-info -->    
</div><!-- .author -->     
 
<!-- End Loop -->
 
</ul>
</div>
<?php get_footer(); ?>