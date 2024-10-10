<?php 
function charge_file(){
    wp_enqueue_style('my_main_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','charge_file');