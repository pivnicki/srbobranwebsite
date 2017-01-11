<!-- this is where the footer file will begin -->
<div id="push"></div>
</div>   
<footer>
    <div class="container">
        <div class="row">

            <div class="span4">
                &copy; 2014 <em>srbobran-info</em>
            </div>
            <div class="span4">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-nav',
                    'container' => false,
                    'menu_class' => 'nav nav-pills'
                ));
                ?>
                <!--                        <ul class="nav nav-pills">
                                            <li><a href="#">home</a></li>
                                            <li><a href="#">blog</a></li>
                                            <li><a href="#">contact</a></li>
                                            <li><a href="#">about</a></li>
                                        </ul>-->
            </div>
         
        </div>

    </div>		

</footer>

<?php wp_footer(); ?>
</body>
</html>