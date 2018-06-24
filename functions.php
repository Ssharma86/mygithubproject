<?php 

function mynewthememenu(){
	register_nav_menu('primary','Top Navigation');
}
add_action('init','mynewthememenu');
add_theme_support('post-thumbnails');

function add_stylesheet(){
//Load main css file from Template Directory..//	
wp_register_style('mynewtheme-style',get_stylesheet_uri(),false,'1.0.0');	
wp_enqueue_style( 'mynewtheme-style');	

//Load custome js file from Template Directory..//
wp_enqueue_script('mynewtheme-js',get_template_directory_uri().'/mynewthemejs.js',array('jquery'),'',true);

//Load custome js file from plugin Directory..//

}
add_action('admin_enqueue_scripts','add_stylesheet');
add_action('wp_enqueue_scripts','add_stylesheet');

if(function_exists('register_sidebar'))
{
	register_sidebar(array(

			'name'  => 'Right Sidebar',
			'before_title' => '<h2>',
			'after_title' =>'</h2>'
	));
}

if(function_exists('register_sidebar'))
{
	register_sidebar(array(

			'name'   => 'Left Sidebar',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
	));
}
?>