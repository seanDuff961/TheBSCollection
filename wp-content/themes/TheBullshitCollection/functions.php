<?php

function bullshit_collection_enqueue() {
    //hook to enqueue custom style inside this function
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bullshit.css', 
                    array (),
                    '1.0.0', 
                    'all');
    wp_enqueue_script('bullshitjs', get_template_directory_uri() . '/JS/bullshit.js',
                    array('jquery'),
                    '1.0.0',
                    //boolean to specify if we want JS printed in the header or footer
                    //true = in the footer. Better for SEO. 
                    true);
    wp_enqueue_script('parralax.min.js', get_template_directory_uri() . '/JS/parallax.min.js',
                    array('jquery'),
                    '1.0.0',
                    true);
}

add_action('wp_enqueue_scripts', 
           'bullshit_collection_enqueue');

function bullshit_collection_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}



//Navigation Menu
register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
//If you wanted another Nav Menu
/*register_nav_menu('secondary', 'Footer Navigation');*/
?>