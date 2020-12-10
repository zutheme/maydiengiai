 <!-- .block-posts -->
<div class="block block-posts" data-layout="list" data-mobile-columns="1">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title"><?php echo get_field('latest_header','customizer'); ?></h3>
            <div class="block-header__divider"></div>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="<?php echo get_template_directory_uri()  . '/images/sprite.svg'; ?>#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="<?php echo get_template_directory_uri()  . '/images/sprite.svg'; ?>#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-posts__slider">
            <div class="owl-carousel">
                 <?php $team_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 4,
                // 'tax_query' => array(
                //     array (
                //         'taxonomy' => 'category',
                //         'field' => 'slug',
                //         'terms' => 'ho-tro',
                //     )
                // ),
            )); 

                if ($team_query->have_posts()) {

                  while ($team_query->have_posts()) {

                    $team_query->the_post();  

                    $id = get_the_ID();

                    //$idyoutube = get_post_meta( $id, 'id-youtube', true );

                    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false );

                     ?>        
                      <div class="post-card  ">
                        <div class="post-card__image">
                            <a href="">
                                <img src="<?php echo $thumbnail[0]; ?>" alt="">
                            </a>
                        </div>
                        <div class="post-card__info">
                            <!-- <div class="post-card__category">
                                <a href="">Special Offers</a>
                            </div> -->
                            <div class="post-card__name">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                           <!--  <div class="post-card__date">October 19, 2019</div> -->
                            <div class="post-card__content">
                                <?php echo get_the_excerpt_max(200); ?>
                            </div>
                            <div class="post-card__read-more">
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                        
                <?php } 

            } ?>
            </div>
        </div>
    </div>
</div>
<!-- .block-posts / end -->