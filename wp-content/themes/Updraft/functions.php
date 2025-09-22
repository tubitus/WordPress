<?php
function updraft_enqueue_styles() {
    wp_enqueue_style('updraft-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'updraft_enqueue_styles');