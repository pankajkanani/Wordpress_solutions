<?php 

// Add custom meta field on woocommerce checkout page
add_action( 'woocommerce_after_checkout_billing_form', 'add_custom_checkout_field' );  
function add_custom_checkout_field( $checkout ) { 
  //echo '<div id="add_custom_heading"><h2>' . __('Receiver Data') . '</h2></div>' ;
  

   $current_user = wp_get_current_user();
   $save_billing_company_2        = $current_user->billing_company_2;

   woocommerce_form_field( 'billing_hide_show', array(        
    'type'     => 'radio',
    'label'    => 'Andere Rechnungsadresse hinterlegen?', 
    'required' => false,
    'class'    => array('custom-question-field', 'form-row-wide'),
    'options'  => array(
      'yes'    => 'Yes',
      'no'     => 'No',
    ),
    'default' => 'no',       
  ), $checkout->get_value( 'billing_hide_show' ) );
  echo '<div class="receiver_data hide">';
   woocommerce_form_field( 'billing_company_2', array(        
      'type'  => 'text',        
      'class' => array( 'form-row-wide' ),        
      'label' => 'Firma',        
      'placeholder' => '',        
      'required' => true,        
      'default' => $save_billing_company_2,        
   ), $checkout->get_value( 'billing_company_2' ) );
   
  echo '</div>';
  ?>
<script>  
  jQuery( document ).ready(function() {
    jQuery('#billing_hide_show_field input').on('change', function() {
      var billing_hide_show = jQuery('input[name="billing_hide_show"]:checked').val();
      console.log(billing_hide_show);
      if(billing_hide_show === 'yes'){
          jQuery('.receiver_data').removeClass('hide'); 
          jQuery('.receiver_data').addClass('show');
      }
      if(billing_hide_show === 'no'){
          jQuery('.receiver_data').removeClass('show'); 
          jQuery('.receiver_data').addClass('hide');
      }
    });
  });
</script>
  <?php
}

// Update the order meta with field value
add_action('woocommerce_checkout_update_order_meta', 'checkout_field_update_order_meta');
function checkout_field_update_order_meta( $order_id ) {
  
    if ($_POST['billing_hide_show']){
      update_post_meta( $order_id, 'billing_hide_show', esc_attr($_POST['billing_hide_show']));
    }
    if ($_POST['billing_company_2']){
      update_post_meta( $order_id, 'billing_company_2', esc_attr($_POST['billing_company_2']));
    }
    
}

// Display field value on order received page
add_action( 'woocommerce_order_details_after_order_table', 'action_woocommerce_order_details_after_order_table', 55, 1 );
function action_woocommerce_order_details_after_order_table( $order ) {
    $billing_hide_show = get_post_meta( $order->id, 'billing_hide_show', true );
    $company_2 = get_post_meta( $order->id, 'billing_company_2', true );
    
    if ($billing_hide_show === 'yes') {
      
    ?>
    <section class="woocommerce-customer-details">
      <div class="woocommerce-customer-details--billwrap">
          <div class="woocommerce-customer-details--maincolumn">
            <h2 class="woocommerce-column__title"><?php _e('Billing address', 'woocommerce')?> 2</h2>
            <address>
              <?php echo $company_2; ?><br>
              
            </address>
          </div>
          
      </div>
    </section>
    <?php
  } 
}; 

// Display field value on the order edit page
add_action( 'woocommerce_admin_order_data_after_billing_address', 'wps_select_checkout_field_display_admin_order_meta', 55, 1 );
function wps_select_checkout_field_display_admin_order_meta($order){
  $billing_hide_show = get_post_meta( $order->id, 'billing_hide_show', true );
  $company_2 = get_post_meta( $order->id, 'billing_company_2', true );

  if ($billing_hide_show === 'yes') {
  ?>
  <div class="">
    <h3><?php _e('Billing address', 'woocommerce')?> 2</h3>
    <div class="address">
      <p>
        <?php echo $company_2; ?><br>
      </p>
      				
    </div>
  </div>
  <?php 
  }
}

add_action('woocommerce_checkout_process', 'reciever_data_checked');
function reciever_data_checked() {
    
    if ( ($_POST['billing_hide_show']== 'yes') && !$_POST['billing_company_2'] )
        wc_add_notice( __( 'Invoice: billing_company_2 is a required field.', 'buddyboss-theme-child' ), 'error' );
   
}


add_action( 'woocommerce_email_order_meta', 'misha_add_email_order_meta', 55, 3 );
function misha_add_email_order_meta( $order, $sent_to_admin, $plain_text ){
  $billing_hide_show = get_post_meta( $order->id, 'billing_hide_show', true );
  $company_2 = get_post_meta( $order->id, 'billing_company_2', true );
  
	// ok, we will add the separate version for plaintext emails
	if ( $plain_text === false ) {
	?>
    <table id="addresses" cellspacing="0" cellpadding="0" border="0" style="width: 100%; vertical-align: top; margin-bottom: 40px; padding: 0;">
        <tbody>
        <tr>
            <td valign="top" width="50%" style="text-align: left; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; border: 0; padding: 0;">
            <h2 style="color: #234e9d; display: block; font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 18px; font-weight: bold; line-height: 130%; margin: 0 0 18px; text-align: left;"><?php _e('Billing address', 'woocommerce')?> 2</h2>          
            <address class="address" style="padding: 12px; color: #636363; border: 1px solid #e5e5e5;">
                <?php echo $company_2; ?><br>
            </address>
            </td>
        </tr>
        </tbody>
    </table>
    <?php
	} 
}
?>
