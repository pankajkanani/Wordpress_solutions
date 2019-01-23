<?php
/**
* Searching Meta Data in Admin
*/
add_action('pre_user_query','user_search_box');
function user_search_box($user_search) {
global $wpdb;
if (!isset($_GET['s'])) return;

//Enter Your Meta Fields To Query
$search_array = array("customer_id", "woocommerce_customer_id", "first_name", "last_name","billing_city","nickname","description");

$user_search->query_from .= " INNER JOIN {$wpdb->usermeta} ON {$wpdb->users}.ID={$wpdb->usermeta}.user_id AND (";
for($i=0;$i<count($search_array);$i++) {
if ($i > 0) $user_search->query_from .= " OR ";
$user_search->query_from .= "{$wpdb->usermeta}.meta_key='" . $search_array[$i] . "'";
}
$user_search->query_from .= ")"; 
$custom_where = $wpdb->prepare("{$wpdb->usermeta}.meta_value LIKE '%s'", "%" . $_GET['s'] . "%");
$user_search->query_where = str_replace('WHERE 1=1 AND (', "WHERE 1=1 AND ({$custom_where} OR ",$user_search->query_where);

}
?>