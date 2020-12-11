<?php
 wp_nav_menu( array(

      'theme_location'    => 'menu-2',

      'menu'              => "menu-2",

      'depth'             => 4,

      'container'         => '',

      'container_class'   => '',

      'container_id'      => '',

      'menu_id'           => 'nav',

      'menu_class'        => 'departments__links',

      'fallback_cb'       => 'wp_bootstrap_navwalker_depart_link::fallback',

      'walker'            => new wp_bootstrap_navwalker_depart_link(),

  ) );

?>  