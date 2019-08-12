<?php 
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        'name' => 'Search',
        'id' => 'search'
    ));
    
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="sidebar">',
        'name' => 'Sidebar',
        'id' => 'sidebar'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer Column One',
        'id' => 'footer-sidebar-column-one'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer Column Two',
        'id' => 'footer-sidebar-column-two'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer Column Three',
        'id' => 'footer-sidebar-column-three'
    ));

    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'name' => 'Footer Column Four',
        'id' => 'footer-sidebar-column-four'
    ));

    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer 2 Column One',
        'id' => 'footer-2-column-one'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer 2 Column Two',
        'id' => 'footer-2-column-two'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer 2 Column Three',
        'id' => 'footer-2-column-three'
    ));

    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer 2 Column Four',
        'id' => 'footer-2-column-four'
    ));

    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="footer_links">',
        'name' => 'Footer 2 Column Five',
        'id' => 'footer-2-column-five'
    ));

    register_sidebar(array(
        'before_widget' => '<div class=" ">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'name' => 'Footer 2 Column six',
        'id' => 'footer-2-column-six'
    ));
   
}
?>