<?php

/**
 * Template name: How It Done
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
<section class="banner_section">
<?php
$banner_section = get_field('banner_section');  
if( $banner_section ): ?>
    <div class="how_it_banner" style="background: url(<?php echo $banner_section['background_image']['url']; ?>) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h1><?php echo $banner_section['title']; ?></h1>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="img_tag"><img src="<?php echo $banner_section['image']['url']; ?>" alt=""></div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if( have_rows('middle_section') ): ?>

   <div class="how_it_middle">

    <?php while( have_rows('middle_section') ): the_row(); 

        // vars
        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
        $content = get_sub_field('content');
        $image = get_sub_field('image');

        ?>

        <div class="how_it_row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-push-8 col-sm-12 col-xs-12">
                        <div class="img_tag"><img src="<?php echo $image['url']; ?>" alt=""></div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 col-sm-12 col-xs-12">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $sub_title; ?></p>
                        <div class="list_type">
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; 
    $close_icon = get_field('close_icon');
?>
    
    <div class="close_line"><img src="<?php echo $close_icon['url']; ?>" alt=""></div>
    </div>

<?php endif; ?>
   
</section>
<?php               
get_footer();
?>  