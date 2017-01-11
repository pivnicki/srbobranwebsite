<!DOCTYPE html>
<html>
    <head>
	<meta name="google-site-verification" content="zADNan6B7PXMiHFnLAB70k7dzQICxNh0mctBVZAbOB0" />
        <title>Srbobran info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 	<meta name="alexaVerifyID" content="i-Xk7PRRcCyYncS79jvnUiolLBk"/>	 
        <?php wp_head(); ?>
    </head>
    <body class="pozadina">
        <div id="wrap">
            <!-- header: main-nav -->
            <header>
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="page-header">
                                <br>
                                <h1><a href="http://srbobran-info.rs">Srbobran info</a> <small>dnevne novosti</small></h1>
                            </div>
            
                        </div>
                    </div>
                </div>
            </header>
      <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<!--				 Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header visible-xs">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>

<!--				 Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<?php wp_nav_menu(array(
						'container_class' => 'menu-header',
						'theme_location' => 'main-nav',
						'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
						'walker' => new BS3_Walker_Nav_Menu,
						'menu' => ''
					)); ?></div>
<!--	

/.navbar-collapse -->
			</div>
		</div>
	</div>
</nav>
 
            <!-- end of header -->
