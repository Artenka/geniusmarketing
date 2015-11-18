<?php

//scripts init
function my_scripts() {

    wp_enqueue_script('jquery');

    wp_enqueue_script('main script', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('masonry min', get_template_directory_uri() . '/js/masonry.pkgd.min.js');

    if(is_page()){

    }

    if(is_single()){

    }

}

//styles init
function my_styles() {
    wp_enqueue_style('index',  get_template_directory_uri() . '/css/index.css');
}

function my_function_admin_bar(){
    return false;
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_action('wp_enqueue_scripts', 'my_styles');

add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_theme_support('post-thumbnails'); // поддержка миниатюр