<?php

function play_add_recursos(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'play_add_recursos');

function play_reg_menu() {
    register_nav_menu(
        'play-menu',
        'Menu de navegação'
    );
}
add_action('init', 'play_reg_menu');