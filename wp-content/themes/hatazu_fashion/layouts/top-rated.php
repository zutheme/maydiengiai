<!-- .block-product-columns -->
<div class="block block-product-columns d-lg-block d-none top-related">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Top Rated Products</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                     <?php $count = 0;
                    $args = array( 'post_type' => 'product', 
                        'posts_per_page' => 3, 
                        //'product_cat' => 'shoes', 
                        'orderby' => 'rand' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        global $post, $product; 
                        $horiz = 'product-card--layout--horizontal';
                        ?>
                       <div class="block-product-columns__item">
                            <?php wc_get_template_part( 'content', 'product','horiz'); ?>
                        </div>
                        <?php $count++; 
                        endwhile; ?>
                        <?php wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Special Offers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                     <?php $count = 0;
                    $args = array( 'post_type' => 'product', 
                        'posts_per_page' => 3, 
                        //'product_cat' => 'shoes', 
                        'orderby' => 'rand' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        global $post, $product; 
                        $horiz = 'product-card--layout--horizontal';
                        ?>
                       <div class="block-product-columns__item">
                            <?php wc_get_template_part( 'content', 'product','horiz'); ?>
                        </div>
                        <?php $count++; 
                        endwhile; ?>
                        <?php wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Bestsellers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                     <?php $count = 0;
                    $args = array( 'post_type' => 'product', 
                        'posts_per_page' => 3, 
                        //'product_cat' => 'shoes', 
                        'orderby' => 'rand' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                        global $post, $product; 
                        $horiz = 'product-card--layout--horizontal';
                        ?>
                       <div class="block-product-columns__item">
                            <?php wc_get_template_part( 'content', 'product','horiz'); ?>
                        </div>
                        <?php $count++; 
                        endwhile; ?>
                        <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-product-columns / end -->