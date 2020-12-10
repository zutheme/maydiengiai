 <!-- .block-categories -->
<div class="block block--highlighted block-categories block-categories--layout--classic">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title"><?php echo get_field('menu_category_header','customizer'); ?></h3>
            <div class="block-header__divider"></div>
        </div>
        <div class="block-categories__list">
                <?php $count = 0; 
                     $menu_categorys = get_field('menu_categorys','customizer');
                    if ($menu_categorys) :
                    foreach ($menu_categorys as $value) :?> 
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image">
                                <a href="<?php echo $value['menu_categorys_link'];  ?>"><img src="<?php echo $value['menu_categorys_thumb']['url'] ;?>" alt=""></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name">
                                    <a href="<?php echo $value['menu_categorys_link'];  ?>"><?php echo $value['menu_categorys_text'];  ?></a>
                                </div>
                                <ul class="category-card__links">
                                     <?php $slidersub = $value['menu_categorys_sub'];
                                        if ($slidersub) :?>
                                        <?php foreach ($slidersub as $value) :?>
                                        <li><a href="<?php echo $value['menu_categorys_sub_link']; ?>"><?php echo $value['menu_categorys_sub_text']; ?></a></li>
                                        <?php endforeach;           
                                        endif; ?>  
                                </ul>
                               <!--  <div class="category-card__all">
                                    <a href="">Show All</a>
                                </div>
                                <div class="category-card__products">
                                    572 Products
                                </div> -->
                            </div>
                        </div>
                    </div> 
                     <?php $count++; ?>  
                    <?php endforeach;?>           
                    <?php endif;?> 
        </div>
    </div>
</div>
<!-- .block-categories / end -->