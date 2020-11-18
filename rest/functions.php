<?php
 //Funções para Limpar o header
 remove_action('wp_head', 'rds_link');
 remove_action('wp_head', 'wlwmanifest_link');
 remove_action('wp_head', 'star_posts_rel_link', 10, 0);
 remove_action('wp_head', 'adjacent_posts_link_wp_head, 10, 0');
 remove_action('wp_head', 'feed_links_extra', 3);
 remove_action('wp_head', 'wp_generator');

 //Habilitar Menus 
 add_theme_support('menus');
?>