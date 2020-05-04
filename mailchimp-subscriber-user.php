// https://rudrastyh.com/wordpress/wp-users-to-mailchimp-list.html



function rudr_mailchimp_curl_connect( $url, $request_type, $api_key, $data = array() ) {
  if( $request_type == 'GET' )
    $url .= '?' . http_build_query($data);
 
  $mch = curl_init();
  $headers = array(
    'Content-Type: application/json',
    'Authorization: Basic '.base64_encode( 'user:'. $api_key )
  );
  curl_setopt($mch, CURLOPT_URL, $url );
  curl_setopt($mch, CURLOPT_HTTPHEADER, $headers);
  //curl_setopt($mch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
  curl_setopt($mch, CURLOPT_RETURNTRANSFER, true); // do not echo the result, write it into variable
  curl_setopt($mch, CURLOPT_CUSTOMREQUEST, $request_type); // according to MailChimp API: POST/GET/PATCH/PUT/DELETE
  curl_setopt($mch, CURLOPT_TIMEOUT, 10);
  curl_setopt($mch, CURLOPT_SSL_VERIFYPEER, false); // certificate verification for TLS/SSL connection
 
  if( $request_type != 'GET' ) {
    curl_setopt($mch, CURLOPT_POST, true);
    curl_setopt($mch, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
  }
 
  return curl_exec($mch);
}

function rudr_mailchimp_subscribe_unsubscribe( $email, $status, $merge_fields = array( 'FNAME' => '', 'LNAME' => '' ) ){
  /* 
   * please provide the values of the following variables 
   * do not know where to get them? read above
   */
  $api_key = '23496afb7dbe4ffffdfee722359ba56b-us4';
  $list_id = '02f0843a17';
 
  /* MailChimp API URL */
  $url = 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower
    ($email));
  /* MailChimp POST data */
  $data = array(
    'apikey'        => $api_key,
    'email_address' => $email,
    'status'        => $status, // in this post we will use only 'subscribed' and 'unsubscribed'
    'merge_fields'  => $merge_fields // in this post we will use only FNAME and LNAME
  );
  return json_decode( rudr_mailchimp_curl_connect( $url, 'PUT', $api_key, $data ) );
}

add_action('user_register', 'rudr_user_register_hook', 20, 1 );
 
function rudr_user_register_hook( $user_id ){
 
  $user = get_user_by('id', $user_id ); // feel fre to use get_userdata() instead
 
  $subscription = rudr_mailchimp_subscribe_unsubscribe( $user->user_email, 'subscribed', array( 'FNAME' => $user->first_name,'LNAME' => $user->last_name ) );
 
  /*
   * if user subscription was failed you can try to store the errors the following way
   */
  if( $subscription->status != 'subscribed' )
    update_user_meta( $user_id, '_subscription_error', 'User was not subscribed because:' . $subscription->detail );
 
}

add_action( 'delete_user', 'rudr_user_delete_hook', 20, 1 );
 
function rudr_user_delete_hook( $user_id ){
  $user = get_user_by( 'id', $user_id );
  $subscription = rudr_mailchimp_subscribe_unsubscribe( $user->user_email, 'unsubscribed', array( 'FNAME' => $user->first_name,'LNAME' => $user->last_name ) );
}
