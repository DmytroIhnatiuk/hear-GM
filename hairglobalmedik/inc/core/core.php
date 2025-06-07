<?php
require_once('helpers.php');
require_once('image_sizes.php');
require_once('favicon.php');
function custom_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Site settings',
            'menu_title' => 'Site settings',
            'menu_slug' => 'custom-options',
            'capability' => 'manage_options',
            'position' => 60,
            'icon_url' => 'dashicons-admin-generic',
        ));
    }

}
add_action('acf/init', 'custom_options_page');
function custom_options_clinics_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Информация страниц ',
            'menu_title' => 'Информация страниц ',
            'menu_slug' => 'custom-options-clinics',
            'capability' => 'manage_options',
            'position' => 100,
            'icon_url' => 'dashicons-lock',
        ));
    }
}

//add_action('acf/init', 'custom_options_clinics_page');


function custom_breadcrumbs()
{
    global $post;
    echo '<ul class="breadcrumbs flex fSize_xs">';
    echo $post->post_type;
    echo $post->ID;
    echo '</ul>';
}

add_action('custom_breadcrumbs', 'custom_breadcrumbs');








