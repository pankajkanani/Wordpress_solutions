<?php

/**
 * Template name: FAQs Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
<?php

// check if the repeater field has rows of data
if( have_rows('faqs_section') ):
    $background = get_field('background');
    ?>
    <section class="faq_middle" style="background: url(<?php echo $background['url']; ?>) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12"> <?php
                        
                        while ( have_rows('faqs_section') ) : the_row();
                            ?>
                            <div class="faq_list_type">
                                <h2><?php echo get_sub_field('title'); ?></h2>
                                <div class="list_type">
                                    <?php
                                
                                        if( have_rows('faqs_box') ):
                                            while ( have_rows('faqs_box') ) : the_row();
                                                ?>
                                                <div class="list_tag">
                                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                                    <div class="list_info" ">
                                                        <?php
                                                        

                                                        if( have_rows('faqs') ):
                                                            while ( have_rows('faqs') ) : the_row();
                                                                ?>
                                                                <div class="list_tag_sub">
                                                                    <h4><?php echo get_sub_field('que'); ?></h4>
                                                                    <div class="list_info_sub">
                                                                        <p><?php echo get_sub_field('ans'); ?></p>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                
                                                            endwhile;
                                                        else :
                                                        endif;
                                                      ?>
                                                    </div>
                                                </div>
                                                <?php

                                            endwhile;
                                        else :
                                        endif;
                                    ?>
                                </div>
                            </div>
                            <?php

                        endwhile; ?>
                    </div>
                </div>
            </div>
        </section><?php

else :
endif;

?>
    
<?php               
get_footer();
?>