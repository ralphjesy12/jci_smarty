<?php
global $post;

add_action('wp_enqueue_scripts',function(){

    wp_enqueue_style('nivo-slider',get_template_directory_uri() . '/assets/plugins/slider.elastic/css/style.css');
    wp_enqueue_script('nivo-slider',get_template_directory_uri() . '/assets/plugins/slider.elastic/js/jquery.eislideshow.js',['jquery'],true,true);
    wp_enqueue_script('nivo-slider',get_template_directory_uri() . '/assets/plugins/slider.elastic/js/jquery.easing.1.3.js',['jquery'],true,true);
    wp_enqueue_script('nivo-slider',get_template_directory_uri() . '/assets/js/view/demo.elastic_slider.js',['jquery'],true,true);

});
get_header();
get_template_part( 'partials/content', 'home-slider' );
get_template_part( 'partials/content', 'home' );
get_footer();
