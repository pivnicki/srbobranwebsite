<?php

function load_styles_and_scripts() {

    wp_enqueue_style(
            'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css'
    );

    wp_enqueue_style(
            'main-styles', get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_script(
            'jquery', 'http://code.jquery.com/jquery.min.js'
    );

    wp_enqueue_script(
            'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js'
    );
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

register_nav_menus(array(
    'main-nav' => 'Main Navigation',
    'footer-nav' => 'Footer Navigation'
));

register_sidebar(array(
    'name' => 'main-sidebar',
    'description' => 'This is the main sidebar',
    'before_widget' => '<div class=" span4 ">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

add_theme_support('post-thumbnails');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'sidebar-widgets',
        'description' => 'Widget Area',
        'before_widget' => '<div id="one" class="two">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

function comments_feed_templates_callback($comment, $args, $depth) {
    $GLOBALS['comments'] = $comment;
    ?>

    <div class="media">
        <a href="<?php echo get_comment_author_url(); ?>" class="pull-left">
            <?php echo get_avatar($id_or_email); ?>
        </a>

        <div class="media-body">
            <h5 class="media-heading">
                <a href="<?php echo get_comment_author_url(); ?>" class="pull-left"> 
                    <?php echo get_comment_author(); ?>
                </a> 
                <small>&nbsp;&nbsp;&nbsp;<?php comment_date(); ?> at <?php comment_time(); ?></small>
            </h5>
            <?php comment_text(); ?>

            <?php
            comment_reply_link(array_merge($args, array(
                'reply_text' => __('<strong>reply</strong><i class="icon-share-alt"></i>'),
                'depth' => $depth,
                'max_depth' => $args['max_depth']
            )));
            ?>
        </div>
    </div>

<?php
}

add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class) {
    return $class = str_replace("class='avatar", "class='img-circle", $class);
}

class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {

    function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        $id_field = $this->db_fields['id'];

        if (isset($args[0]) && is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }

        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (is_object($args) && !empty($args->has_children)) {
            $link_after = $args->link_after;
            $args->link_after = ' <b class="caret"></b>';
        }

        parent::start_el($output, $item, $depth, $args, $id);

        if (is_object($args) && !empty($args->has_children))
            $args->link_after = $link_after;
    }

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = '';
        $output .= "$indent<ul class=\"dropdown-menu list-unstyled\">";
    }

}

add_filter('nav_menu_link_attributes', 'nav_link_att', 10, 3);

function nav_link_att($atts, $item, $args) {
    if ($args->has_children) {
        $atts['data-toggle'] = 'dropdown';
        $atts['class'] = 'dropdown-toggle';
    }
    return $atts;
}

add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
      
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}


function wpbeginner_remove_version() {
	return '';
	}
	add_filter('the_generator', 'wpbeginner_remove_version');
        
        
        
        
        add_action( 'wp_enqueue_scripts', 'enqueue_dashicons_front_end' );
function enqueue_dashicons_front_end() {
wp_enqueue_style( 'dashicons-style', get_stylesheet_uri(), array('dashicons'), '1.0' );
}
 
function author_profile_social_links( $contactmethods ) {
$contactmethods['rss_link'] = 'RSS URL';
$contactmethods['google_link'] = 'Google URL';
$contactmethods['twitter_link'] = 'Twitter URL';
$contactmethods['facebook_link'] = 'Facebook URL';
return $contactmethods;
}
add_filter( 'user_contactmethods', 'author_profile_social_links', 10, 1);



add_filter('get_archives_link', 'translate_archive_month');

function translate_archive_month($list) {
  $patterns = array(
    '/January/', '/February/', '/March/', '/April/', '/May/', '/June/',
    '/July/', '/August/', '/September/', '/October/',  '/November/', '/December/'
  );
  $replacements = array(
    'januar', 'februar', 'mart', 'april', 'maj', 'jun', 
    'jul', 'avgust', 'septembar', 'oktobar', 'novembar', 'decembar'
  );    
  $list = preg_replace($patterns, $replacements, $list);
return $list; 
}

//function limit_posts_per_page() {
//	if ( is_category() )
//		return 2;
//	else
//		return 5; // default: 5 posts per page
//}
//add_filter('pre_option_posts_per_page', 'limit_posts_per_page');


?>

