<?php
// テーマのcss・jsファイルを読み込む
function enqueue_scripts()
{
    // css
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("style-theme", get_stylesheet_directory_uri().'/css/style.css');
    // js
    wp_enqueue_script("script", get_stylesheet_directory_uri().'/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
