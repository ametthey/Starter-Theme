<?php

// Register Taxonomy Skill
// Taxonomy Key: skill
function _themename_taxonomy_skill() {

	$labels = array(
		'name'              => _x( 'Skills', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'Skill', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search Skills', '_themename' ),
		'all_items'         => __( 'All Skills', '_themename' ),
		'parent_item'       => __( 'Parent Skill', '_themename' ),
		'parent_item_colon' => __( 'Parent Skill:', '_themename' ),
		'edit_item'         => __( 'Edit Skill', '_themename' ),
		'update_item'       => __( 'Update Skill', '_themename' ),
		'add_new_item'      => __( 'Add New Skill', '_themename' ),
		'new_item_name'     => __( 'New Skill Name', '_themename' ),
		'menu_name'         => __( 'Skills', '_themename' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Skill', '_themename' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'skill', array( 'project' ), $args );

}
add_action( 'init', '_themename_taxonomy_skill' );
