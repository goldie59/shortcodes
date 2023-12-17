    add_action('admin_init', 'register_custom_taxonomy_for_books');
function register_custom_taxonomy_for_books() {

    $labels = array(
        'name'                       => _x('Genres', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Genre', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Genre', 'text_domain'),
        'all_items'                  => __('All Genres', 'text_domain'),
        'parent_item'                => __('Parent Genre', 'text_domain'),
        'parent_item_colon'          => __('Parent Genre:', 'text_domain'),
        'new_item_name'              => __('New Genre Name', 'text_domain'),
        'add_new_item'               => __('Add New Genre', 'text_domain'),
        'edit_item'                  => __('Edit Genre', 'text_domain'),
        'update_item'                => __('Update Genre', 'text_domain'),
        'view_item'                  => __('View Genre', 'text_domain'),
        'separate_items_with_commas' => __('Separate genres with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove genres', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Genres', 'text_domain'),
        'search_items'               => __('Search Genres', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No genres', 'text_domain'),
        'items_list'                 => __('Genres list', 'text_domain'),
        'items_list_navigation'      => __('Genres list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'genre'),
    );
    register_taxonomy('genre', array('book'), $args);
}
