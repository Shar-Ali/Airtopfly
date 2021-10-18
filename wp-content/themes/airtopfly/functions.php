<?php 



//  CSS and JS Register

function airtopfly_stylesheet_style(){
    
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"', false );
    
    wp_enqueue_style('easy-autocomplete-themes-css', get_template_directory_uri(). '/assets/css/easy-autocomplete.themes.css', array(), '1.0', 'all');
    wp_enqueue_style('easy-autocomplete-css', get_template_directory_uri(). '/assets/css/easy-autocomplete.css', array(),'1.0', 'all');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri(). '/assets/css/slick-theme.css', array(),'1.0', 'all');
    wp_enqueue_style('selectric-css', get_template_directory_uri(). '/assets/css/selectric.css', array(),'1.0', 'all');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri(). '/assets/css/jquery-ui.css', array(),'1.0', 'all');
    wp_enqueue_style('slick-css', get_template_directory_uri(). '/assets/css/slick.css', array(),'1.0', 'all');
    wp_enqueue_style('style-css', get_template_directory_uri(). '/assets/css/style.css', array(),'1.0', 'all');
    
    wp_enqueue_script('jquery-min-js',get_template_directory_uri(). '/assets/js/jquery-3.3.1.min.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('jquery-selectric-js',get_template_directory_uri(). '/assets/js/jquery.selectric.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick-js',get_template_directory_uri(). '/assets/js/slick.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-easy-autocomplete-js',get_template_directory_uri(). '/assets/js/jquery.easy-autocomplete.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-ui-js',get_template_directory_uri(). '/assets/js/jquery-ui.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('common-scripts-js',get_template_directory_uri(). '/assets/js/common-scripts.js', array('jquery'), '1.0', true);
     
}

add_action('wp_enqueue_scripts','airtopfly_stylesheet_style');

// SetUp Theme and Menu Register 

function airtopfly_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','sliders','service','team','client'));
        
    register_nav_menus(array(
        'header-menu' => __('Header Menu','airtopfly'),
        'Footer-Menu' => __('Footer Menu','airtopfly')
        
    ));

}

add_action('after_setup_theme','airtopfly_setup_theme');

// Custom Post Type Register 

function airtopfly_custom_post(){
    

    // Slider Custom Post Type 
    register_post_type('sliders', array(
        
        'labels'=> array(
            'name'=> __('Slides', 'airtopfly'),
            'singular_name'=> __('Slider', 'airtopfly'),
            'menu_name'           => __( 'Slider ', 'airtopfly' ),
            'parent_item_colon'   => __( 'Parent Slider', 'airtopfly' ),
            'all_items'           => __( 'All Sliders', 'airtopfly' ),
            'view_item'           => __( 'View Slider Item', 'airtopfly' ),
            'add_new_item'        => __( 'Add New Slider', 'airtopfly' ),
            'add_new'             => __( 'Add New', 'airtopfly' ),
            'edit_item'           => __( 'Edit Slider', 'airtopfly' ),
            'update_item'         => __( 'Update Slider', 'airtopfly' ),
            'search_items'        => __( 'Search Slider', 'airtopfly' ),
            'not_found'           => __( 'Not Found', 'airtopfly' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'airtopfly' ),
        
        ),
        
        'public'=> true,
        'supports'=> array('title', 'thumbnail', 'custom-fields')
    
    ));
    
    // Services Custom Post Type
    register_post_type('service', array(
        'labels'=> array(
            'name'=> __('Services', 'airtopfly'),
            'singular_name'=> __('Service', 'airtopfly'),
            'menu_name'           => __( 'Services ', 'airtopfly' ),
            'parent_item_colon'   => __( 'Parent Services', 'airtopfly' ),
            'all_items'           => __( 'All Services', 'airtopfly' ),
            'view_item'           => __( 'View Services', 'airtopfly' ),
            'add_new_item'        => __( 'Add New Services', 'airtopfly' ),
            'add_new'             => __( 'Add New', 'airtopfly' ),
            'edit_item'           => __( 'Edit Services', 'airtopfly' ),
            'update_item'         => __( 'Update Services', 'airtopfly' ),
            'search_items'        => __( 'Search Services', 'airtopfly' ),
            'not_found'           => __( 'Not Found', 'airtopfly' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'airtopfly' ),
        
        ),
        
        'public'=> true,
        'supports'=> array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes')
    
    ));
    
    
    // Team Post Type Register
    
    register_post_type('team', array(
        'labels'=> array(
            'name'=> __('Teams', 'airtopfly'),
            'singular_name'=> __('Team', 'airtopfly'),
            'menu_name'           => __( 'Team ', 'airtopfly' ),
            'parent_item_colon'   => __( 'Parent Team', 'airtopfly' ),
            'all_items'           => __( 'All Teams ', 'airtopfly' ),
            'view_item'           => __( 'View Team', 'airtopfly' ),
            'add_new_item'        => __( 'Add New Team', 'airtopfly' ),
            'add_new'             => __( 'Add New', 'airtopfly' ),
            'edit_item'           => __( 'Edit Team', 'airtopfly' ),
            'update_item'         => __( 'Update Team', 'airtopfly' ),
            'search_items'        => __( 'Search Team', 'airtopfly' ),
            'not_found'           => __( 'Not Found', 'airtopfly' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'airtopfly' ),
        
        ),
        
        'public'=> true,
        'supports'=> array('title', 'editor', 'thumbnail', 'custom-fields')
    
    ));
    
    // Client Post Type Register
    
     register_post_type('client', array(
        'labels'=> array(
            'name'=> __('Clients', 'airtopfly'),
            'singular_name'=> __('Client', 'airtopfly'),
            'menu_name'           => __( 'Client ', 'airtopfly' ),
            'parent_item_colon'   => __( 'Parent Client', 'airtopfly' ),
            'all_items'           => __( 'All Clients ', 'airtopfly' ),
            'view_item'           => __( 'View Client', 'airtopfly' ),
            'add_new_item'        => __( 'Add New Client', 'airtopfly' ),
            'add_new'             => __( 'Add New', 'airtopfly' ),
            'edit_item'           => __( 'Edit Client', 'airtopfly' ),
            'update_item'         => __( 'Update Client', 'airtopfly' ),
            'search_items'        => __( 'Search Client', 'airtopfly' ),
            'not_found'           => __( 'Not Found', 'airtopfly' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'airtopfly' ),
        
        ),
        
        'public'=> true,
        'supports'=> array('title', 'editor', 'thumbnail', 'custom-fields')
    
    ));
    
// Sidebar Register 

register_sidebar(array(

    'name' => __('searchbar','airtopfly'),
    'id' => 'Searchbar',
    'before_widget' => '<div class="search-wrap float-wide">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'

));

   
}

add_action('init','airtopfly_custom_post');

// Remove empty <p>&nbsp;</p> tags from post content

add_filter( 'the_content', 'wpse_257854_remove_empty_p', PHP_INT_MAX );
add_filter( 'the_excerpt', 'wpse_257854_remove_empty_p', PHP_INT_MAX );
function wpse_257854_remove_empty_p( $content ) {
    return str_ireplace( '<p>&nbsp;</p>', '', $content );
};


// Option Page Resigter

if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page(array(
        'page_title'    => 'Theme Option Settings',
        'menu_title'    => 'Option Settings',
        'menu_slug'     => 'theme-option-settings',
        'capability'    => 'edit_posts',
        'redirect'  => false,
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => $parent['menu_slug'],
        'capability'    => 'edit_posts',
        'redirect'  => false,
    ));


};

// Excerpt Function 
function get_excerpt( $count ) {
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = '<p>'.$excerpt.'... <a class="morebtn" href="'.$permalink.'">Read More</a></p>';
    return $excerpt;
    };












