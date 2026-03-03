<?php 
function charge_file(){
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0',true);
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('my_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('my_main_extra_style', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

function theme_features(){
add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts','charge_file');
add_action('after_setup_theme','theme_features');