<?php

/**
 * Template name: Contact Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
    <section class="heading_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>CONTACT US</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_middel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="top_text">
                        <h3><?php echo get_field('enquiries_title')?></h3>
                            <p><?php echo get_field('enquiries_content')?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 contact_info">
                    <h4>Your Contacts</h4>
                    <div class="red_title">Office</div>
                        <?php if( have_rows('your_contacts') ): 
                            while( have_rows('your_contacts') ): the_row(); 

                                // vars
                                $address_title = get_sub_field('address');
                                $telephone_number_title = get_sub_field('telephone_number');
                                $telephone_number_link =  str_replace(' ', '', $telephone_number_title)
                                ?>
                                <p>
                                    <span><?php echo $address_title; ?></span>
                                    Tel: <a href="tel:<?php echo $telephone_number_link; ?>"><?php echo $telephone_number_title; ?></a>
                                </p>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    
                    <div>
                        <hr>
                    </div>

                    <div class="red_title">Office</div>
                        <?php if( have_rows('company_contacts') ): 
                            while( have_rows('company_contacts') ): the_row(); 

                                // vars
                                $address_title = get_sub_field('address');
                                $telephone_number_title = get_sub_field('telephone_number');
                                $telephone_number_link =  str_replace(' ', '', $telephone_number_title)
                                ?>
                                <p>
                                    <span><?php echo $address_title; ?></span>
                                    Tel: <a href="tel:<?php echo $telephone_number_link; ?>"><?php echo $telephone_number_title; ?></a>
                                </p>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    <div>
                        <hr>
                    </div>
                    <div class="red_title">General Enquiries</div>
                    <p><?php the_field('general_enquiries'); ?></p>
                    <br>
                    <h4>Address</h4>
                    <p><?php the_field('address'); ?></p>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="contact_person_info">
                        
                        <?php if( have_rows('team_member') ):  
                            while( have_rows('team_member') ): the_row(); 

                                
                                $team_member_image = get_sub_field('image');
                                $team_member_name = get_sub_field('title');
                                $team_member_position = get_sub_field('position');
                                $team_member_number = get_sub_field('telephone_number');
                                $team_member_number_link =  str_replace(' ', '', $telephone_number_title);
                                $team_member_email = get_sub_field('email_id');
                                
                                ?>
                                <div class="contact_person">
                                    <div class="user_img">
                                        <img src="<?php echo $team_member_image['url']; ?>" alt="">
                                    </div>
                                    <h3><?php echo $team_member_name; ?></h3>
                                    <p><span><?php echo $team_member_position; ?></span>
                                        Tel: <a href="tel:<?php echo $team_member_number_link; ?>"><?php echo $team_member_number; ?></a><br>
                                        Email: <a href="<?php echo $team_member_email; ?>"><?php echo $team_member_email; ?></a></p>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="enquiry_form_middle">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h3>Enquiry Form</h3>
                                <p><?php echo get_field('enquiry_form'); ?></p>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="enquiry_form">
                                    <?php the_field('enquiry_form_shortcode'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php               
get_footer();

?>