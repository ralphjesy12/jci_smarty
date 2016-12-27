<?php


function unhook_thematic_functions() {
    remove_action( 'template_redirect', 'xyren_smarty_search_url_redirect' );
    if (function_exists('w3tc_pgcache_flush')) {
        w3tc_pgcache_flush();
    }
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }

    add_image_size('thumb-5by6',360,432,true);
    add_image_size('thumb-5by2',750,300,true);
    add_image_size('thumb-3by2',600,400,true);
    add_image_size('thumb-post-single',800,350,true);




}
add_action( 'init', 'unhook_thematic_functions' );

// Gallery Shortcode
remove_shortcode('gallery');
function custom_gallery_shortcode( $atts ) {

    $atts = shortcode_atts( array(
        'columns' => '3',
        'ids' => '',
    ), $atts );

    ob_start();
    $atts['ids'] = explode(',',$atts['ids']);


    if(!empty($atts['ids'])):
        ?>
        <h4>More Photos</h4>
        <div class="masonry-gallery columns-<?=$atts['columns']?> clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
            <?php
            foreach ($atts['ids'] as $key => $id) {
                $full = wp_get_attachment_image_url($id,'full');
                $thumb = wp_get_attachment_image_url($id,'thumb-3by2');
                ?>
                <a class="image-hover" href="<?=$full?>">
                    <img src="<?=$thumb?>" alt="">
                </a>
                <?php
            }
            ?>
        </div>
        <?php
    endif;

    return ob_get_clean();
}
add_shortcode( 'gallery', 'custom_gallery_shortcode');


function file_get_contents_curl($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 6.0.1; MotoG3 Build/MPI24.107-55) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36");
    // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);
    return $result;
}

function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
    //trim whitespace
    $input = preg_replace('/\s+/', ' ', $input);
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
    return $trimmed_text;
}


function posts_pagination($_limit=false) {
    global $wp_query,$query_string;
    $total_page = $wp_query->max_num_pages;
    if(!empty($_limit)){
        $total_page = ceil($wp_query->found_posts/$_limit);
    }
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $total_page,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Prev',
        'next_text' => 'Next &rarr;',
    ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}

function get_category_tags($id) {
    global $wpdb;
    $tags = $wpdb->get_results (" SELECT DISTINCT terms2.term_id as ID, terms2.name as name, terms2.slug as slug, t2.count as count FROM $wpdb->posts as p1 LEFT JOIN $wpdb->term_relationships as r1 ON p1.ID = r1.object_ID LEFT JOIN $wpdb->term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id LEFT JOIN $wpdb->terms as terms1 ON t1.term_id = terms1.term_id, $wpdb->posts as p2 LEFT JOIN $wpdb->term_relationships as r2 ON p2.ID = r2.object_ID LEFT JOIN $wpdb->term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id LEFT JOIN $wpdb->terms as terms2 ON t2.term_id = terms2.term_id WHERE ( t1.taxonomy = 'category' AND p1.post_status = 'publish' AND terms1.term_id = '$id' AND t2.taxonomy = 'post_tag' AND p2.post_status = 'publish' AND p1.ID = p2.ID ) ORDER BY name ASC ");
    $count = 0;
    foreach ($tags as $k => $tag) {
        $tags[$k]->link = get_tag_link($tag->ID);
    }
    return $tags;
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
