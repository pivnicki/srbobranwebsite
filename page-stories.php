<?php get_header(); ?> 

<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container pozadina-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
              
            
                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-4">
                        <h2>Heading</h2>
                     
                       <?php $myposts = new WP_Query(array('posts_per_page' => 2, 'category_name' => get_the_title())); ?>

    <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                        if (have_posts()) : while (have_posts()) : the_post();
                                ?>

                                <a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>

                                <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>   </p>
     
                    </div><!--/span-->
                </div><!--/row-->
            </div><!--/span-->
            
                 <div class="col-xs-12 col-sm-9">
              
            
                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-4">
                        <h2>Heading</h2>
                     
                       <?php $myposts = new WP_Query(array('posts_per_page' => 10, 'category_name' => get_the_title())); ?>

    <?php if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post(); ?>
                        if (have_posts()) : while (have_posts()) : the_post();
                                ?>

                                <a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>

                                <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>   </p>
     
                    </div><!--/span-->
                </div><!--/row-->
            </div><!--/span-->

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <?php get_sidebar(); ?>
            </div><!--/span-->
        </div><!--/row-->

        <hr>

    </div><!--/.container-->

    <?php get_footer(); ?>