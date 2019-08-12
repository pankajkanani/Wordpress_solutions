<?php 
function new_excerpt_length($length) {
    return 70;
}

add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '';
}

add_filter('excerpt_more', 'new_excerpt_more');

if (function_exists('add_theme_support')) 
{
    add_theme_support('post-thumbnails');
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
        )
    );
}
add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );

    function mw_enqueue_color_picker( $hook_suffix ) {
        // first check that $hook_suffix is appropriate for your admin page
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'my-script-handle', plugins_url('my-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
    }
    
    
function load_admin_things() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
}

add_action( 'admin_enqueue_scripts', 'load_admin_things' );

/*function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_option('logo_image'); ?>);
            background-size : 100%;
            height: <?php echo get_option('logo_height'); ?>px;
            width: <?php echo get_option('logo_width'); ?>px;
            max-width: 100%; 
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );*/
/*End Of Changing Login logo*/


add_action('init', 'my_out');

function my_out() 
{
        ob_start();
}

add_theme_support( 'menus' );

function lynx_style() {
        
        
        wp_enqueue_style('boostrap-min-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
        wp_enqueue_style('owl-carousel-min-style', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
        wp_enqueue_style('owl-theme-default-style', get_template_directory_uri() . '/css/owl.theme.default.css', array(), false, 'all');
        wp_enqueue_style('fontawesome-all-style', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
        wp_enqueue_style('font-montserrat-style', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap');
        wp_enqueue_style('font-open-sans-style', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap');
        
        
        wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
        wp_enqueue_script('jquery-boostrap-min-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false);
        wp_enqueue_script('jquery-owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), false, true);
        wp_enqueue_script('jquery-counterup-script', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), false, true);
        wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);
        
        wp_localize_script('jquery-custom', 'ajax_url', array('url' => admin_url('admin-ajax.php')));
        wp_localize_script('jquery-custom', 'template_dir', array('url' => get_template_directory_uri()));
        
        // Load the html5 shiv.
	wp_enqueue_script( 'html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array(), '3.7.0' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
        
	wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array(), '3.7.0' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}

add_action('wp_enqueue_scripts', 'lynx_style');
?>