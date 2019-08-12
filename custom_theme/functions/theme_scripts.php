<?php
// Register style sheet.
add_action('wp_enqueue_scripts', 'register_theme_styles');

/**
 * Register style sheet.
 */
function register_theme_styles() {
    ?>
     <!--fontawesome CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--worksans font css-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
    <!-- popin font css -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!--lato font css--> 
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <?php
     
} 

// menu would appear in the "Theme Locations" box as "Header Menu".
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>