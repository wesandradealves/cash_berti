<?php

require_once 'widgets/newsletter.inc';
function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function wp_before_admin_bar_render()
{

    echo '

        <style type="text/css">
            #acf-group_64fc00463daea,
            #acf-group_64d0cc77d784b {
                display: none !important
            }

            [id*="acf-group"] .hndle  {
                opacity: 0
            }
        </style>

    ';

}

function remove_menus()
{
    global $post;

    // remove_menu_page("index.php"); //Dashboard

    remove_menu_page("jetpack"); //Jetpack*

    remove_menu_page("edit.php"); //Posts;

    // remove_menu_page( 'upload.php' );                 //Media

    // remove_menu_page( 'edit.php?post_type=page' );    //Pages

    // remove_menu_page( 'edit-comments.php' );          //Comments

    //remove_menu_page( 'themes.php' );                 //Appearance

    // remove_menu_page( 'plugins.php' );                //Plugins

    // remove_menu_page( 'users.php' );                  //Users

    // remove_menu_page( 'tools.php' );                  //Tools

    // remove_menu_page( 'options-general.php' );        //Settings
}

function prefix_add_footer_styles()
{
    wp_enqueue_style('overwrites', get_template_directory_uri() . '/css/overwrites.css', array(), filemtime(get_template_directory() . '/css/overwrites.css'));
    wp_enqueue_script(
        "countdown",
        "//cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js",
        [],
        false,
        true
    );
    wp_enqueue_script(
        "slick",
        "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js",
        [],
        false,
        true
    );
    wp_enqueue_script(
        "jqueryyu2fvl",
        get_template_directory_uri() . "/js/jquery.yu2fvl.min.js",
        [],
        false,
        true
    );
    wp_enqueue_script(
        "mask",
        "//cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js",
        [],
        false,
        true
    );
    wp_enqueue_script('commons', get_template_directory_uri() . "/js/main.js", array(), filemtime(get_template_directory() . '/js/main.js'), true);
}

function prefix_add_header_styles()
{
    wp_enqueue_script(
        "jquery",
        "//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js",
        [],
        false,
        false
    );
    wp_enqueue_style(
        "bootstrap-grid",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "bootstrap-reboot",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-reboot.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "bootstrap-utilities",
        "//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-utilities.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "fontawesome",
        "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "hamburgers",
        get_stylesheet_directory_uri() . "/css/hamburgers.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "slick",
        "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "slick-theme",
        "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style(
        "jqueryyu2fvl",
        get_stylesheet_directory_uri() . "/css/jquery.yu2fvl.css",
        [],
        null,
        "all"
    );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'));
}

function disable_default_dashboard_widgets()
{
    remove_meta_box("dashboard_right_now", "dashboard", "core");

    remove_meta_box("dashboard_recent_comments", "dashboard", "core");

    remove_meta_box("dashboard_incoming_links", "dashboard", "core");

    remove_meta_box("dashboard_plugins", "dashboard", "core");

    remove_meta_box("dashboard_quick_press", "dashboard", "core");

    remove_meta_box("dashboard_recent_drafts", "dashboard", "core");

    remove_meta_box("dashboard_primary", "dashboard", "core");

    remove_meta_box("dashboard_secondary", "dashboard", "core");
}

if (function_exists("acf_add_options_page")) {
    acf_add_options_page([
        "page_title" => "Theme General Settings",
        "menu_title" => "Theme Settings",
        "menu_slug" => "theme-general-settings",
        "capability" => "edit_posts",
        "redirect" => true,
    ]);
}

function wpb_custom_new_menu()
{
    register_nav_menu("main", __("Main"));
    register_nav_menu("footer", __("Footer"));
}

function atg_menu_classes($classes, $item, $args)
{
    // if($args->theme_location == 'main') {
    //     $classes[] = 'nav-item p-0 ps-5';
    // } elseif($args->theme_location == 'footer') {
    //     $classes[] = 'nav-item nav-col col-6 mb-5 mb-lg-0 pe-5';
    // }
    $classes[] = "nav-item";
    return $classes;
}

function add_menu_link_class($atts, $item, $args)
{
    $atts["class"] = "nav-link";
    return $atts;
}

// function qirolab_posts_where($where, &$wp_query)
// {
//     global $wpdb;
//     if ($title = $wp_query->get("search_title")) {
//         $where .=
//             " AND " .
//             $wpdb->posts .
//             ".post_title LIKE '" .
//             esc_sql($wpdb->esc_like($title)) .
//             "%'";
//     }
//     return $where;
// }

function my_mce4_options($init)
{
    $custom_colours = '
        "FFFFFF", "white",
        "000000", "black",
    ';

    // build colour grid default+custom colors
    $init["textcolor_map"] = "[" . $custom_colours . "]";

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init["textcolor_rows"] = 1;

    return $init;
}

if (function_exists("register_sidebar")) {
    register_sidebar([
        "id" => "footer",
        "name" => __("Footer"),
        "before_widget" => '<aside id="%1$s" class="widget widget_newsletter %2$s">',
        "after_widget" => "</aside>",
        "before_title" => "",
        "after_title" => "",
    ]);
}

/**
 * Change posts per page by post type
 */
function bb_change_posts_per_page($query)
{
    global $wp_query;

    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    $query->set( 'posts_per_page', 8 );

    if( is_search() || is_archive() ) {
        $taxonomies = array();

        if(isset($_GET['orderby'])) {
            $query->set( 'orderby', $_GET['orderby']);
        }

        if(isset($_GET['categoria']) && $_GET['categoria'] !== '') {
            $term = get_term($_GET['categoria']);

            array_push($taxonomies,  array(
                'taxonomy' => $term->taxonomy,
                'field' => 'term_id',
                'terms' => $term->term_id,
                'operator' => 'IN'
            ));
        }

        if(isset($_GET['tag']) && $_GET['tag'] !== '') {
            $term = get_term($_GET['tag']);

            array_push($taxonomies,  array(
                'taxonomy' => $term->taxonomy,
                'field' => 'term_id',
                'terms' => $term->term_id,
                'operator' => 'IN'
            ));
        }

        if($taxonomies) {
            $args = array(
                'relation' => 'OR',
                $taxonomies,
            );        
    
            $query->set( 'tax_query', $args);    
        }
    }
}

function my_search_form($form)
{
    global $wp_query;

    $tax = get_taxonomy(get_queried_object()->taxonomy);

    if($tax) {
        $tax = reset($tax->object_type);
    }
 
    $post_type = is_search() ? $wp_query->query_vars['post_type'] : ($tax ? $tax : get_queried_object()->name);

    $categories = get_terms( array(
        'hide_empty' => false,
        'post_type' => $post_type,
        'taxonomy'  => 'categoria-de-'.$post_type
    ) );

    $tags = get_terms( array(
        'hide_empty' => false,
        'post_type' => $post_type,
        'taxonomy'  => 'tags'
    ) );    

    $form = '<div class="filter">
        <form id="search" action="' . home_url("/") . '" method="GET" class="d-flex flex-wrap align-items-center">';

        if($categories) {
            $form .= '<select value="'.(isset($_GET['categoria']) ? $_GET['categoria'] : '').'" name="categoria">
                <option value="">Filtar por categoria</option>';
            foreach ($categories as $item) {
                $form .= '<option '.(isset($_GET['categoria']) && $_GET['categoria'] == $item->term_id ? 'selected="true"' : '').' value="'.$item->term_id.'">'.$item->name.'</option>';
            }
            $form .= '</select>';
        }

        $form .= '
            <select value="'.$wp_query->query_vars['order'].'" name="order" class="ms-sm-4 mt-4 mt-sm-0">
                <option '.(isset($_GET['order']) && $_GET['order'] == 'ASC' || $wp_query->query_vars['order'] == 'ASC'  ? 'selected="true"' : '').' value="ASC">Mais antigo</option>
                <option '.(isset($_GET['order']) && $_GET['order'] == 'DESC' || $wp_query->query_vars['order'] == 'DESC' ? 'selected="true"' : '').' value="DESC">Mais novo</option>
            </select>
        ';

        if(in_array($post_type, get_taxonomy('tags')->object_type)) {
            $form .= '<ul class="d-flex align-items-center col-12 col-sm-auto mt-4 mt-sm-0 ms-sm-4">';
                foreach ($tags as $tag) {
                    $form .= '
                        <li class="me-4">
                            <div class="checkbox">
                                <!-- 
                                    <input '.(isset($_GET['tag']) && $_GET['tag'] == $tag->term_id ? 'checked' : '').' type="radio" name="tag" value="'.$tag->term_id.'" id="'.$tag->name.'" />
                                -->
                                <label for="tag"><a href="'.get_term_link($tag).'">'.$tag->name.'</a></label>
                            </div>
                        </li>
                    ';
                }
            $form .= '</ul>';
        }

        $form .= '
            <div class="searchbar ms-auto mt-4 mt-lg-0 d-flex flex-wrap align-items-stretch justify-content-between">
                <button class="submit d-flex align-items-center justify-content-center"><i class="icon search"></i></button>
                <input type="hidden" name="post_type" value="'.$post_type.'" /> 
                <input class="d-block input flex-fill" placeholder="Pesquisar" id="s" name="s" type="text" value="' . get_search_query() . '" />
            </div>
        ';

    $form .= '</form>
    </div>';

    return $form;
}

function save_my_form_data_to_my_cpt($contact_form)
{
    // if ($contact_form->id === 1585) {
    //     $submission = WPCF7_Submission::get_instance();
    //     if (!$submission) {
    //         return;
    //     }
    //     $posted_data = $submission->get_posted_data();
    //     //The Sent Fields are now in an array
    //     //Let's say you got 4 Fields in your Contact Form
    //     //my-email, my-name, my-subject and my-message
    //     //you can now access them with $posted_data['my-email']
    //     //Do whatever you want like:
    //     $new_post = [];
    //     if (isset($posted_data["nome"]) && !empty($posted_data["nome"])) {
    //         $new_post["post_title"] = $posted_data["nome"];
    //     }
    //     $new_post["post_type"] = "newsletter"; //insert here your CPT
    //     $new_post["post_status"] = "publish";
    //     //you can also build your post_content from all of the fields of the form, or you can save them into some meta fields
    //     // if(isset($posted_data['my-email']) && !empty($posted_data['my-email'])){
    //     //     $new_post['meta_input']['sender_email_address'] = $posted_data['my-email'];
    //     // }
    //     // if(isset($posted_data['my-name']) && !empty($posted_data['my-name'])){
    //     //     $new_post['meta_input']['sender_name'] = $posted_data['my-name'];
    //     // }
    //     //When everything is prepared, insert the post into your Wordpress Database
    //     if ($post_id = wp_insert_post($new_post)) {
    //         update_field('e-mail', $posted_data["email"], $post_id );
    //         //Everything worked, you can stop here or do whatever
    //     } else {
    //         //The post was not inserted correctly, do something (or don't ;) )
    //     }
    // }
    return;
}

// add this to functions.php
//register acf fields to Wordpress API
////support.advancedcustomfields.com/forums/topic/json-rest-api-and-acf/

function acf_to_rest_api($response, $post, $request)
{
    if (function_exists('get_fields') && isset($post->id)) {
        $response->data['acf'] = get_fields($post->id);
    }
    return $response;
}

function ws_register_images_field()
{
    register_rest_field(
        'post',
        'images',
        array(
            'get_callback' => 'ws_get_images_urls',
            'update_callback' => null,
            'schema' => null,
        )
    );
}

function ws_get_images_urls($object, $field_name, $request)
{
    $medium = wp_get_attachment_image_src(get_post_thumbnail_id($object->id), 'medium');
    $medium_url = $medium['0'];

    $large = wp_get_attachment_image_src(get_post_thumbnail_id($object->id), 'large');
    $large_url = $large['0'];

    return array(
        'medium' => $medium_url,
        'large' => $large_url,
    );
}

// function gp_register_taxonomy_for_object_type() {
//     register_taxonomy_for_object_type( 'post_tag', 'produto' );
// };

// add_action( 'init', 'gp_register_taxonomy_for_object_type' );
// add_filter('show_admin_bar', '__return_false');
function wpb_load_widget()
{
    register_widget('wpb_widget');
}

add_action('widgets_init', 'wpb_load_widget');
add_post_type_support('page', 'excerpt');
add_theme_support("post-thumbnails");
add_action('rest_api_init', 'ws_register_images_field');
add_action("wpcf7_mail_sent", "save_my_form_data_to_my_cpt");
add_action("wpcf7_mail_failed", "save_my_form_data_to_my_cpt");
add_filter("get_search_form", "my_search_form");
add_filter('pre_get_posts', 'bb_change_posts_per_page');
add_filter("tiny_mce_before_init", "my_mce4_options");
// add_filter("posts_where", "qirolab_posts_where", 10, 2);
add_filter("nav_menu_link_attributes", "add_menu_link_class", 1, 3);
add_filter("nav_menu_css_class", "atg_menu_classes", 1, 3);
add_action("get_footer", "prefix_add_footer_styles");
add_action("init", "wpb_custom_new_menu");
add_action("wp_enqueue_scripts", "prefix_add_header_styles");
add_action("admin_menu", "remove_menus");
add_action("admin_menu", "disable_default_dashboard_widgets");
add_action('wp_before_admin_bar_render', 'wp_before_admin_bar_render');