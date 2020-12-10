 <!-- .block-products -->
<div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title"><?php echo get_field('bestseller_text','customizer'); ?></h3>
            <div class="block-header__divider"></div>
        </div>
        <div class="block-products__body"> 
            <?php
                $count = 0;
                $args = array( 'post_type' => 'product', 
                    'posts_per_page' => 7, 
                    //'product_cat' => 'shoes', 
                    'orderby' => 'rand' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    global $post, $product;
                    if($count == 0){ ?>
                    <div class="block-products__featured">
                        <div class="block-products__featured-item">
                             <?php wc_get_template_part( 'content', 'product' ); ?>
                        </div>
                    </div>
                    <div class="block-products__list">
                    <?php }else { ?>
                        <!-- item -->
                        <div class="block-products__list-item">
                                <?php wc_get_template_part( 'content', 'product' ); ?>        
                        </div>
                        <!--end item-->
                      <?php }
                     ?>
                    <?php $count++; 
                    endwhile; ?>
                    <?php wp_reset_query(); ?>
                     </div>
            </div>
        </div>
    </div>
</div>