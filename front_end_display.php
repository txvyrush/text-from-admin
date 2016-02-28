<?php

function filter_post_for_text_for_admin( $content ){
	
	$args = array( 'post_type'=>'text_from_admin' );
	
	$loop = new WP_Query( $args );
	
	while( $loop->have_posts() ) : $loop->the_post();
	
	$content.= get_the_title()."<br />";
	$content.= get_the_content()."<br />";	
	endwhile;	
	
	return $content;
	
}//end of function

add_filter( 'the_content', 'filter_post_for_text_for_admin' );
?>