<?php

function register_text_form_admin_custom_post(){
	
	register_post_type( 'text_from_admin',
						array(
							'labels' => array( 
											'name' => __('Texts From Admin'),
											'singular_name' => __('Text From Admin')
						),
						'public' => true,
						'has_archieve' => true,
						'supports' => array( 'title','thumbnail','editor','excerpt','custom_field' ),
					)
						
	);
}//end of function

add_action( 'init', 'register_text_form_admin_custom_post');

?>