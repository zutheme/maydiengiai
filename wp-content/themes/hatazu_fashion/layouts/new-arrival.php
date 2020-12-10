<!-- .block-products-carousel -->
<div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
<div class="container">
<div class="block-header">
    <h3 class="block-header__title"><?php echo get_field('newarrival_text','customizer'); ?></h3>
    <div class="block-header__divider"></div>
   <!--  <ul class="block-header__groups-list">
        <li><button type="button" class="block-header__group  block-header__group--active ">All</button></li>
        <li><button type="button" class="block-header__group ">Power Tools</button></li>
        <li><button type="button" class="block-header__group ">Hand Tools</button></li>
        <li><button type="button" class="block-header__group ">Plumbing</button></li>
    </ul> -->
    <div class="block-header__arrows-list">
        <button class="block-header__arrow block-header__arrow--left" type="button">
            <svg width="7px" height="11px">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-left-7x11"></use>
            </svg>
        </button>
        <button class="block-header__arrow block-header__arrow--right" type="button">
            <svg width="7px" height="11px">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#arrow-rounded-right-7x11"></use>
            </svg>
        </button>
    </div>
</div>
<div class="block-products-carousel__slider">
    <div class="block-products-carousel__preloader"></div>
    <div class="owl-carousel">
        <?php
        $count = 0;
        $args = array( 'post_type' => 'product', 
            'posts_per_page' => 6, 
            //'product_cat' => 'shoes', 
            'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
            global $post, $product;
                if($count == 0 ){ ?>
                <div class="block-products-carousel__column">
                <?php } else if( $count %2 == 0 ) { ?>
                    </div>
                    <div class="block-products-carousel__column">
                <?php }?>
                        <div class="block-products-carousel__cell">
                           <?php wc_get_template_part( 'content', 'product' ); ?> 
                        </div>
                    <?php $count++; 
                            endwhile; ?>
                    <?php wp_reset_query(); ?>
                    </div>
       
    </div>
</div>
</div>
</div>
<!-- .block-products-carousel / end -->