<!--.block-banner -->
<?php $banner = get_field('barner_promotion_img','customizer'); ?>
<div class="block block-banner">
    <div class="container">
        <a href="<?php echo get_field('barner_promotion_link','customizer'); ?>" class="block-banner__body">
            <div class="block-banner__image block-banner__image--desktop" style="background-image: url('<?php echo $banner['url']; ?>')"></div>
            <div class="block-banner__image block-banner__image--mobile" style="background-image: url('<?php echo $banner['url']; ?>')"></div>
            <!-- <div class="block-banner__title">Hundreds <br class="block-banner__mobile-br"> Hand Tools</div>
            <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
            <div class="block-banner__button">
                <span class="btn btn-sm btn-primary">Shop Now</span>
            </div> -->
        </a>
    </div>
</div>
<!-- .block-banner / end