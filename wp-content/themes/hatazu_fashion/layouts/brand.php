 <!-- .block-brands -->
<div class="block block-brands">
    <div class="container">
        <div class="block-brands__slider">
            <div class="owl-carousel">
                <?php $count = 0; ?>
                     <?php $partner_images = get_field('partner_image','customizer');
                    if (isset($partner_images)) :?>
                    <?php foreach ($partner_images as $value) :?>
                        <!-- SLIDE #1 -->
                    <div class="block-brands__item">
                        <a href="<?php echo $value['link_partner_logo'];  ?>"><img src="<?php echo $value['image_partner']['url'] ;?>" alt=""></a>
                    </div>
                     <?php $count++; ?>  
                    <?php endforeach;?>           
                    <?php endif;?> 
            </div>
        </div>
    </div>
</div>
<!-- .block-brands / end -->