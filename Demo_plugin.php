<?php

/*
 * Plugin Name: Demo Plugin
 * Plugin URI: https://www.google.com
 * Description:       Handle the basics with this plugin.
 * Version: 1.10.3
 * Author: Bilal
 * Author URI: https://www.google.com
 * 
*/

add_action('admin_menu','demo_data_menu');

function demo_data_menu(){
 add_menu_page('demo_data','demo_data',8,__FILE__,'demo_data_list');
}

function demo_data_list(){
 echo "Hello WORLD";
 echo "First Commit";
 echo "Testing Gutter";
}

?>