
This will show on checkout page  
<?php 

// Functions.php add this code
add_action( 'woocommerce_after_checkout_billing_form', 'add_custom_checkout_field' );  
function add_custom_checkout_field( $checkout ) {
    woocommerce_form_field( 'billing_country_2', array(        
        'type' => 'country',        
        'class' => array( 'form-row-wide, address-field, update_totals_on_change' ),        
        'label' => __('Country / Region', 'buddyboss-theme-child'), 
        'placeholder' => '',
        'required' => true,       
        'default' => $save_billing_country_2,        
    ), $checkout->get_value( 'billing_country_2' ) );

    woocommerce_form_field( 'billing_state_2', array(        
        'type' => 'state',        
        'class' => array( 'form-row-wide, address-field' ),        
        'label' => __('State / County', 'buddyboss-theme-child'),        
        'placeholder' => '',        
        'required' => false,        
        'default' => $save_billing_state_2,        
    ), $checkout->get_value( 'billing_state_2' ) );
}

// Add this code in function.php
function theme_enqueue_scripts() {
    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/assets/js/my_js.js', array('jquery'), null, true );
    $wc_country = array(
        'country' => json_encode( 
        array_merge( 
            WC()->countries->get_allowed_country_states(), 
            WC()->countries->get_shipping_country_states() 
            
        ) 
        )
    );
    wp_localize_script( 'my-js', 'my_js', $wc_country );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
?>


<!-- /assets/js/my_js.js file -->
<script>
    jQuery( document ).ready(function() {
        jQuery("#billing_country_2").change(function() {
            var states_json = my_js.country.replace(),
            states = JSON.parse( states_json );
            console.log(states);
            var options = '',
            state = states[ this.value ]; 
            
            for( var index in state ) {
                if ( state.hasOwnProperty( index ) ) {
                    options = options + '<option value="' + index + '">' + state[ index ] + '</option>';
                }
            }
            jQuery('#billing_state_2').find('option').remove().end().append(options);
        });
    });
</script>
