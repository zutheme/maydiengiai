<?php
/**
 *  Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eleaning
 */
get_header();
//get_template_part('layouts/block-slide');
get_template_part('layouts/slider-show');
get_template_part('layouts/block-feature');
get_template_part('layouts/block-products-carousel-top');
get_template_part('layouts/banner');
get_template_part('layouts/bestseller');
get_template_part('layouts/popular-category');
get_template_part('layouts/new-arrival');
get_template_part('layouts/latestnews');
get_template_part('layouts/brand');
get_template_part('layouts/top-rated');
get_footer(); 