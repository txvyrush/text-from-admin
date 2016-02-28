<?php
/* 
   Plugin Name: Text from admin
   Plugin URI: http://www.gappsstudio.com
   Version: 1.0.0
   Author: Fuad Hassan
   Description: This is a plugin to enable front end user registration and login	
*/

define( 'gapps_txt_admin',plugin_dir_path( __FILE__ ) ); 

if( is_admin() ){
	require_once ( gapps_txt_admin.'admin_custom_post.php' );
}

?>