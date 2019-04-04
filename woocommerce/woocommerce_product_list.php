<?php

/*product categories start*/
function prodcat_func() {
	$args = array(
    'number'     => $number,
    'orderby'    => 'title',
    'order'      => 'ASC',
    'hide_empty' => $hide_empty,
    'include'    => $ids
);

$productlist = "";
$product_categories = get_terms( 'product_cat', $args );
$count = count($product_categories);
if ( $count > 0 ){
    foreach ( $product_categories as $product_category ) {
        $productlist .= '<div class="product_category_list"><h4>' . $product_category->name . '	</h4>';
        $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    // 'terms' => 'white-wines'
                    'terms' => $product_category->slug
                )
            ),
            'post_type' => 'product',
            'orderby' => 'title,'
        );
        $products = new WP_Query( $args );
        

        $productlist .= '<ul>';
        while ( $products->have_posts() ) {
            $products->the_post();
            
                $productlist .= '<li>';
                    $productlist .= '<a href="'.get_the_permalink().'">';
                        $productlist .= get_the_title();
                    $productlist .= '</a>';
                $productlist .= '</li>';
            
        }
        $productlist .= "</ul></div>";
    }
}
	return $productlist;
}
add_shortcode( 'woocommerce_product_list', 'prodcat_func' );
/*product categories end*/



/*
*
    Use shortcode anywhare "[woocommerce_product_list]" for show product list with category.
*
*/

?>

