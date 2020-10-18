<?php


function init_hearder_links(){
  wp_enqueue_script('main-katana-js', get_theme_file_uri('/dist/bundle.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'main_styles', get_theme_file_uri('/dist/bundle.css') );
}

add_action( 'wp_enqueue_scripts', 'init_hearder_links', 10, 1 );



function meta_info(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'meta_info');
