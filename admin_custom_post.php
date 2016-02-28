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
						'supports' => array( 'title','thumbnail','editor','excerpt','custom_fields' ),						
					)
						
	);
}//end of function

function meta_box_add_function(){
		add_meta_box( 'text_from_admin_meta_box',
					  'Admin meta box',
					  'callback_add_meta_box',
					  'text_from_admin',
					  'normal',
					  'high'
					);	
	
}//end of function

function callback_add_meta_box(){
	
?>
	<div>
    	<div style="float:left">
        	Foot Note:
        </div>
        <div style="float:left">
        	<input type="text" name="foot_note" />
        </div>
        <div style="clear:both"></div>
    </div>
<?php
	
}//end of function
add_action( 'init', 'register_text_form_admin_custom_post');
add_action ( 'admin_init', 'meta_box_add_function');

?>