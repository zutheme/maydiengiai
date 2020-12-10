<?php
/*htz Theme Customizer.*
 * @package htz */

/*Create options page*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Tùy chỉnh',
		'menu_title'	=> 'Tùy chỉnh',
		'menu_slug' 	=> 'customizer',
		'capability'	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-hammer',
		'id'			=> 'customizer',
		'post_id' 		=> 'customizer',
	));
}

/*Add FTP field group*/
if( function_exists('acf_add_local_field_group') ) {
	
	acf_add_local_field_group(	array(
		'key'		=> 'customizer_setup',
		'title' 	=> __( 'Cài đặt', 'htz' ),
		'fields' 	=> array (
			/*Logo*/
            array (
				'key'   		=> 'tab_hotro',
				'label' 		=> __( 'Logo  ', 'htz' ),
				'name'  		=> 'tab_hotro',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			
			array (
				'key'   		=> 'itobjects',
				'label' 		=> __( 'Itobject', 'htz' ),
				'name'  		=> 'itobjects',
				'type'  		=> 'text', 
			),
	
			 array (
				'key'   		=> 'logo',
				'label' 		=> __( 'Logo (180 x 50)', 'htz' ),
				'name'  		=> 'logo',
				'type'  		=> 'image',
			),
			
			 array (
				'key'   		=> 'favicon',
				'label' 		=> __( 'Favicon', 'htz' ),
				'name'  		=> 'favicon',
				'type'  		=> 'image',
			),
			 
			 array (
				'key'   		=> 'keywords',
				'label' 		=> __( 'Keywords', 'htz' ),
				'name'  		=> 'keywords',
				'type'  		=> 'textarea',
			),
		
		    array (
				'key'   		=> 'description',
				'label' 		=> __( 'Description', 'htz' ),
				'name'  		=> 'description',
				'type'  		=> 'textarea',
			),
	
		  //Head
			array (
				'key'   		=> 'tab_header',
				'label' 		=> __( 'Header', 'htz' ),
				'name'  		=> 'tab_header',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),

		 
			array (
			'key'   		=> 'menu_top',
			'label' 		=> __( 'menu list', 'htz' ),
			'name'  		=> 'menu_top',
			'type'  		=> 'repeater',
			'layout'	   => 'table',
			'button_label' => __( 'Thêm', 'htz' ),
			'sub_fields' => array (
			 	array (
					'key'   		=> 'text_menu_top',
					'label' 		=> __( 'text menu', 'htz' ),
					'name'  		=> 'text_menu_top',
					'type'  		=> 'text',
				 
				),
			 	array (
					'key'   		=> 'link_menu_top',
					'label' 		=> __( 'Link', 'htz' ),
					'name'  		=> 'link_menu_top',
					'type'  		=> 'text',
				 
				),
			),
		),
		array (
				'key'   		=> 'header_phone1_text',
				'label' 		=> __( 'tieu de', 'htz' ),
				'name'  		=> 'header_phone1_text',
				'type'  		=> 'text',
		),
		 array (
				'key'   		=> 'header_phone1',
				'label' 		=> __( 'Số điện thoại 1', 'htz' ),
				'name'  		=> 'header_phone1',
				'type'  		=> 'text',
			),
		 array (
				'key'   		=> 'header_phone2',
				'label' 		=> __( 'Số điện thoại 2', 'htz' ),
				'name'  		=> 'header_phone2',
				'type'  		=> 'text',
			),
		 
		  array (
				'key'   		=> 'header_address',
				'label' 		=> __( 'Dia chi', 'htz' ),
				'name'  		=> 'header_address',
				'type'  		=> 'text',
			),
		  array (
				'key'   		=> 'header_email',
				'label' 		=> __( 'Email', 'htz' ),
				'name'  		=> 'header_email',
				'type'  		=> 'text',
			),
		  array (
				'key'   		=> 'zalo',
				'label' 		=> __( 'Zalo', 'htz' ),
				'name'  		=> 'zalo',
				'type'  		=> 'text',
			),
			
		  
		    array (
				'key'   		=> 'idfacebook',
				'label' 		=> __( 'Idfacebook', 'htz' ),
				'name'  		=> 'idfacebook',
				'type'  		=> 'text',
			),
		 	
     	/*slider*/
		  array (
				'key'   		=> 'tab_slider',
				'label' 		=> __( 'slider', 'htz' ),
				'name'  		=> 'tab_slider',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
	
				array (
				'key'   		=> 'slider',
				'label' 		=> __( 'Hình slider (840x395)', 'htz' ),
				'name'  		=> 'slider',
				'type'  		=> 'repeater',
				'layout'	   => 'block',
				'button_label' => __( 'Thêm', 'htz' ),
				'sub_fields' => array (
					array (
						'key'   		=> 'image_slider',
						'label' 		=> __( 'Hình ảnh', 'htz' ),
						'name'  		=> 'image_slider',
						'type'  		=> 'image',
					),
	
					array (
						'key'   		=> 'link_slider',
						'label' 		=> __( 'Link', 'htz' ),
						'name'  		=> 'link_slider',
						'type'  		=> 'text',
					 
					),
					
				 	array (
						'key'   		=> 'tex1_slider',
						'label' 		=> __( 'text 1', 'htz' ),
						'name'  		=> 'tex1_slider',
						'type'  		=> 'textarea',
					 
					),
				 
				),
			),
			/*featured block*/
			array (
				'key'   		=> 'featured_block_general',
				'label' 		=> __( 'Featured block', 'htz' ),
				'name'  		=> 'featured_block_general',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),

		 
			array (
				'key'   		=> 'featured_block1',
				'label' 		=> __( 'block 1', 'htz' ),
				'name'  		=> 'featured_block1',
				'type'  		=> 'textarea',	
			),
			 array (
				'key'   		=> 'featured_block2',
				'label' 		=> __( 'featured block2', 'htz' ),
				'name'  		=> 'featured_block2',
				'type'  		=> 'textarea',	
			),
			 array (
				'key'   		=> 'featured_block3',
				'label' 		=> __( 'featured block3', 'htz' ),
				'name'  		=> 'featured_block3',
				'type'  		=> 'textarea',	
			),
			 array (
				'key'   		=> 'featured_block4',
				'label' 		=> __( 'featured block 4', 'htz' ),
				'name'  		=> 'featured_block4',
				'type'  		=> 'textarea',	
			),

			/**banner*/
		
			/*two_line*/
			array (
				'key'   		=> 'carousel_1',
				'label' 		=> __( 'Danh muc', 'htz' ),
				'name'  		=> 'carousel_1',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'carousel_1_header',
				'label' 		=> __( 'Danh mục', 'htz' ),
				'name'  		=> 'carousel_1_header',
				'type'  		=> 'text',
			),
			array (
				'key'   		=> 'barner_promotion',
				'label' 		=> __( 'banner', 'htz' ),
				'name'  		=> 'barner_promotion',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'barner_promotion_img',
				'label' 		=> __( 'Anh banner (1110 x 170)', 'htz' ),
				'name'  		=> 'barner_promotion_img',
				'type'  		=> 'image',
			),
			array (
				'key'   		=> 'barner_promotion_link',
				'label' 		=> __( 'Liến kết banner', 'htz' ),
				'name'  		=> 'barner_promotion_link',
				'type'  		=> 'text',
			),
			//bestseller
			array (
				'key'   		=> 'bestseller',
				'label' 		=> __( 'bestseller', 'htz' ),
				'name'  		=> 'bestseller',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'bestseller_text',
				'label' 		=> __( 'Tiêu đề', 'htz' ),
				'name'  		=> 'bestseller_text',
				'type'  		=> 'text',
			),
			//bestseller
			array (
				'key'   		=> 'newarrival',
				'label' 		=> __( 'Danh muc 2', 'htz' ),
				'name'  		=> 'newarrival',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'newarrival_text',
				'label' 		=> __( 'Tiêu đề', 'htz' ),
				'name'  		=> 'newarrival_text',
				'type'  		=> 'text',
			),
			/*partner*/
			array (
				'key'   		=> 'section_partner',
				'label' 		=> __( 'section partner', 'htz' ),
				'name'  		=> 'partner_header_genaral',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'partner_image',
				'label' 		=> __( 'Hình logo', 'htz' ),
				'name'  		=> 'partner_image',
				'type'  		=> 'repeater',
				'layout'	   => 'table',
				'button_label' => __( 'Thêm', 'htz' ),
				'sub_fields' => array (
					array (
						'key'   		=> 'image_partner',
						'label' 		=> __( 'Hình ảnh (340 x 80)', 'htz' ),
						'name'  		=> 'image_partner',
						'type'  		=> 'image',
					),
	
					array (
						'key'   		=> 'link_partner_logo',
						'label' 		=> __( 'Link', 'htz' ),
						'name'  		=> 'link_partner_logo',
						'type'  		=> 'text',
					 
					),
					
				),
			),
			//danh muc menu
			array (
				'key'   		=> 'menu_category',
				'label' 		=> __( 'menu danh muc', 'htz' ),
				'name'  		=> 'menu_category',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
					'key'   		=> 'menu_category_header',
					'label' 		=> __( 'Tiêu đề', 'htz' ),
					'name'  		=> 'menu_category_header',
					'type'  		=> 'text',
				),
			array (
				'key'   		=> 'menu_categorys',
				'label' 		=> __( 'Danh mục', 'htz' ),
				'name'  		=> 'menu_categorys',
				'type'  		=> 'repeater',
				'layout'	   => 'block',
				'button_label' => __( 'Thêm', 'htz' ),
				'sub_fields' => array (
					array (
						'key'   		=> 'menu_categorys_thumb',
						'label' 		=> __( 'Hình ảnh (700 x 700)', 'htz' ),
						'name'  		=> 'menu_categorys_thumb',
						'type'  		=> 'image',
					),
					array (
						'key'   		=> 'menu_categorys_text',
						'label' 		=> __( 'Danh mục chính', 'htz' ),
						'name'  		=> 'menu_categorys_text',
						'type'  		=> 'text',
					),
					array (
						'key'   		=> 'menu_categorys_link',
						'label' 		=> __( 'liên kết', 'htz' ),
						'name'  		=> 'menu_categorys_link',
						'type'  		=> 'text',
					),
					array (
						'key'   		=> 'menu_categorys_sub',
						'label' 		=> __( 'menu phụ', 'htz' ),
						'name'  		=> 'menu_categorys_sub',
						'type'  		=> 'repeater',
						'layout'	   => 'table',
						'button_label' => __( 'Thêm', 'htz' ),
					 	'sub_fields' => array (
							array (
							'key'   		=> 'menu_categorys_sub_text',
							'label' 		=> __( 'Tên chuyen mục', 'htz' ),
							'name'  		=> 'menu_categorys_sub_text',
							'type'  		=> 'text',
							),
							array (
							'key'   		=> 'menu_categorys_sub_link',
							'label' 		=> __( 'Liên kết', 'htz' ),
							'name'  		=> 'menu_categorys_sub_link',
							'type'  		=> 'text',
							),
						),	
					),
				),
			),
			 /*sidebar*/
			/* consultant */
			array (
				'key'   		=> 'latest',
				'label' 		=> __( 'Bài viết mới nhất', 'htz' ),
				'name'  		=> 'latest',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
			array (
				'key'   		=> 'latest_header',
				'label' 		=> __( 'Tiêu đề', 'htz' ),
				'name'  		=> 'latest_header',
				'type'  		=> 'text',
			),
			// array (
			// 	'key'   		=> 'latest_html',
			// 	'label' 		=> __( 'html', 'htz' ),
			// 	'name'  		=> 'latest_html',
			// 	'type'  		=> 'textarea',
			 
			// ),
			 /*tab trang lien he*/
			  array (
					'key'   		=> 'contact',
					'label' 		=> __( 'Liên hệ', 'htz' ),
					'name'  		=> 'contact',
					'type'  		=> 'tab',
					'placement' 	=> 'left',
				),
				array (
					'key'   		=> 'contact_address',
					'label' 		=> __( 'Địa chỉ', 'htz' ),
					'name'  		=> 'contact_address',
					'type'  		=> 'textarea',
				), 
				
				
			/*Footer*/
			array (
				'key'   		=> 'tab_footer',
				'label' 		=> __( 'Footer', 'htz' ),
				'name'  		=> 'tab_footer',
				'type'  		=> 'tab',
				'placement' 	=> 'left',
			),
		 
		 	 array (
				'key'   		=> 'footer_logo',
				'label' 		=> __( 'logo footer', 'htz' ),
				'name'  		=> 'footer_logo',
				'type'  		=> 'image',	
			), 
		 	 array (
				'key'   		=> 'footer_header',
				'label' 		=> __( 'tieu de', 'htz' ),
				'name'  		=> 'footer_header',
				'type'  		=> 'text',	
			), 
		  	array (
				'key'   		=> 'footer_desc',
				'label' 		=> __( 'Mo ta van tat', 'htz' ),
				'name'  		=> 'footer_desc',
				'type'  		=> 'textarea',	
			), 
		    array (
				'key'   		=> 'footer_address',
				'label' 		=> __( 'dia chi', 'htz' ),
				'name'  		=> 'footer_address',
				'type'  		=> 'textarea',	
			), 
			array (
				'key'   		=> 'footer_email',
				'label' 		=> __( 'email', 'htz' ),
				'name'  		=> 'footer_email',
				'type'  		=> 'text',	
			), 
		 	array (
				'key'   		=> 'footer_phone',
				'label' 		=> __( 'dien thoai', 'htz' ),
				'name'  		=> 'footer_phone',
				'type'  		=> 'text',	
			), 
		 
		    array (
				'key'   		=> 'footer_time',
				'label' 		=> __( 'Thoi gian lam viec', 'htz' ),
				'name'  		=> 'footer_time',
				'type'  		=> 'text',	
			), 
		  
		   
		   array (
				'key'   		=> 'footer_column1',
				'label' 		=> __( 'tieu de 1', 'htz' ),
				'name'  		=> 'footer_column1',
				'type'  		=> 'text',	
			), 
		  	array (
				'key'   		=> 'footer_column2',
				'label' 		=> __( 'tieu de 2', 'htz' ),
				'name'  		=> 'footer_column2',
				'type'  		=> 'text',	
			), 
			array (
				'key'   		=> 'footer_column3',
				'label' 		=> __( 'tieu de 3', 'htz' ),
				'name'  		=> 'footer_column3',
				'type'  		=> 'text',	
			), 
		  	 array (
				'key'   		=> 'footer_facebook',
				'label' 		=> __( 'Fanpage', 'htz' ),
				'name'  		=> 'footer_facebook',
				'type'  		=> 'text',	
			), 
		  
		    array (
				'key'   		=> 'footer_youtube',
				'label' 		=> __( 'Kênh youtube', 'htz' ),
				'name'  		=> 'footer_youtube',
				'type'  		=> 'text',	
			), 
		  
		  
		   array (
				'key'   		=> 'footer_twiter',
				'label' 		=> __( 'Twiter', 'htz' ),
				'name'  		=> 'footer_twiter',
				'type'  		=> 'text',	
			), 
		   array (
				'key'   		=> 'footer_intagram',
				'label' 		=> __( 'Intergram', 'htz' ),
				'name'  		=> 'footer_intagram',
				'type'  		=> 'text',	
			), 

			/*===============================================*/
			
			
		),
		'location' => array (
			array (
				array (
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'customizer',
				),
			),
		),
	));
}