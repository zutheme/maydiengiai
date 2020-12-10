 
 <div class="site-header__topbar topbar">
    <div class="topbar__container container">
        <div class="topbar__row">
             <?php $count = 0; ?>
                     <?php $menu_top = get_field('menu_top','customizer');
                    if ($menu_top) :?>
                    <?php foreach ($menu_top as $value) :?>
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="<?php  echo $value['link_menu_top'];  ?>"><?php  echo $value['text_menu_top'];  ?></a>
                        </div>
                    <!-- END SLIDE #1 -->   
                     <?php $count++; ?>  
                    <?php endforeach;?>           
                    <?php endif;?>  
            
           
            <div class="topbar__spring"></div>
            <div class="topbar__phone">
                <?php if ( is_user_logged_in() ) { ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Tài khoản','hatazu_water'); ?>"><?php _e('Tài khoản','hatazu_water'); ?></a>
                 <?php } 
                 else { ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Đăng nhập / Đăng ký','hatazu_water'); ?>"><?php _e('Đăng nhập / Đăng ký','hatazu_water'); ?></a>
                 <?php } ?>
                
            </div>
        </div>
    </div>
</div>