<?php
function tmph_register_post_type_and_taxonomy() {
    // Register post type - team_members
    $labels = array(
        'name'                  => _x( 'Team Members', 'Post type general name', 'team-members-showcase' ),
        'singular_name'         => _x( 'Team Member', 'Post type singular name', 'team-members-showcase' ),
        'menu_name'             => _x( 'Team Members', 'Admin Menu text', 'team-members-showcase' ),
        'name_admin_bar'        => _x( 'Team Member', 'Add New on Toolbar', 'team-members-showcase' ),
        'add_new'               => __( 'Add New', 'team-members-showcase' ),
        'add_new_item'          => __( 'Add New Team Member', 'team-members-showcase' ),
        'new_item'              => __( 'New Team Member', 'team-members-showcase' ),
        'edit_item'             => __( 'Edit Team Member', 'team-members-showcase' ),
        'view_item'             => __( 'View Team Member', 'team-members-showcase' ),
        'all_items'             => __( 'All Team Members', 'team-members-showcase' ),
        'search_items'          => __( 'Search Team Member', 'team-members-showcase' ),
        'parent_item_colon'     => __( 'Parent Team Members:', 'team-members-showcase' ),
        'not_found'             => __( 'No Team Member found.', 'team-members-showcase' ),
        'not_found_in_trash'    => __( 'No Team Member found in Trash.', 'team-members-showcase' ),
        'archives'              => _x( 'Team Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'team-members-showcase' ),
        'featured_image'        => _x( 'Team Member Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'team-members-showcase' ),
        'set_featured_image'    => _x( 'Set Team Member', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'team-members-showcase' ),
        'remove_featured_image' => _x( 'Remove Team Member', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'team-members-showcase' ),
        'use_featured_image'    => _x( 'Use as Team Member', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'team-members-showcase' ),
        'archives'              => _x( 'Team Memberx archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'team-members-showcase' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-groups',
        'rewrite'            => array( 'slug' => 'team_members' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'team_members', $args );
    
    // Flush the rules
    flush_rewrite_rules();

    // Register texonomy
    $labels = array(
        'name'              => _x( 'Member Type', 'taxonomy general name', 'team-members-showcase' ),
        'singular_name'     => _x( 'Member Type', 'taxonomy singular name', 'team-members-showcase' ),
        'search_items'      => __( 'Search Member Type', 'team-members-showcase' ),
        'all_items'         => __( 'All Member Types', 'team-members-showcase' ),
        'view_item'         => __( 'View Member Type', 'team-members-showcase' ),
        'parent_item'       => __( 'Parent Member Type', 'team-members-showcase' ),
        'parent_item_colon' => __( 'Parent Member Type:', 'team-members-showcase' ),
        'edit_item'         => __( 'Edit Member Type', 'team-members-showcase' ),
        'update_item'       => __( 'Update Member Type', 'team-members-showcase' ),
        'add_new_item'      => __( 'Add New Member Type', 'team-members-showcase' ),
        'new_item_name'     => __( 'New Member Type', 'team-members-showcase' ),
        'not_found'         => __( 'No Member Type Found', 'team-members-showcase' ),
        'back_to_items'     => __( 'Back to Member Type', 'team-members-showcase' ),
        'menu_name'         => __( 'Member Type', 'team-members-showcase' ),
    );
 
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'member_type' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'member_type', 'team_members', $args );
}
 
add_action( 'init', 'tmph_register_post_type_and_taxonomy' );

?>