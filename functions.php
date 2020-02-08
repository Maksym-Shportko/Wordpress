<?php
function connect_styles_sсripts() {
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts.css');
wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick-theme.css');
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css');



   /*   строга послєдоватєльность подключеній бібліотєк*/
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
wp_enqueue_script( 'jquery');
wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri() . '/slick/slick.min.js', array(), '', true );
wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'connect_styles_sсripts' );


/*Добавлние функции добавлние картинок в посты*/


function my_setup (){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_setup');
add_image_size( 'little.png', 250, 370, true );
add_image_size( 'table1.png', 250, 370, true );
add_image_size( 'img1.png', 250, 370, true );





