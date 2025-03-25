<?php 
function exhibitions_register_post_types() {

	$labels_Exhibitions = array(
		'name'					=> 'Exhibitions',
		'singular_name'			=> 'Exhibition',
		'menu_name'				=> 'Exhibitions',
		'name_admin_bar'		=> 'Exhibition',
		'archives'				=> 'Exhibition Archives',
		'attributes'			=> 'Exhibition Attributes',
		'parent_item_colon'		=> 'Parent Item:',
		'all_items'				=> 'Exhibitions',
		'add_new_item'			=> 'Add New Exhibition',
		'add_new'				=> 'Add Exhibition',
		'new_item'				=> 'New Item',
		'edit_item'				=> 'Edit Item',
		'update_item'			=> 'Update Item',
		'view_item'				=> 'View Item',
		'view_items'			=> 'View Items',
		'search_items'			=> 'Search Item',
		'not_found'				=> 'Not found',
		'not_found_in_trash'	=> 'Not found in Trash',
		'featured_image'		=> 'Featured Image',
		'set_featured_image'	=> 'Set featured image',
		'remove_featured_image'	=> 'Remove featured image',
		'use_featured_image'	=> 'Use as featured image',
		'insert_into_item'		=> 'Insert into item',
		'uploaded_to_this_item'	=> 'Uploaded to this item',
		'items_list'			=> 'Items list',
		'items_list_navigation'	=> 'Items list navigation',
		'filter_items_list'		=> 'Filter items list',
	);
	$args_Exhibitions = array(
		'label'					=> 'Exhibitions',
		'description'			=> 'Exhibition Records',
		'labels'				=> $labels_Exhibitions,
		'supports'				=> array('title', 'editor', 'thumbnail'),
		'taxonomies'			=> array('exhyear'),
		'hierarchical'			=> true,
		'public'				=> true,
		'show_in_rest'			=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'menu_position'			=> 20,
		'menu_icon'				=> 'dashicons-text-page',
		'show_in_admin_bar'		=> true,
		'show_in_nav_menus'		=> true,
		'can_export'			=> true,
		'has_archive'			=> false,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'capability_type'		=> 'page',
		'rewrite' => true
	);
	register_post_type('exhibitions', $args_Exhibitions);

}
add_action( 'init', 'exhibitions_register_post_types' ); // Le hook init lance la fonction


// Register Custom Taxonomy
function exhibtions_taxonomies() {
	$labels_ExhibitionYear = array(
		'name'						=> _x( 'Year', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'				=> _x( 'Year', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'					=> __( 'Year', 'text_domain' ),
		'all_items'					=> __( 'All Year', 'text_domain' ),
		'parent_item'				=> __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'			=> __( 'Parent Item:', 'text_domain' ),
		'new_item_name'				=> __( 'New Year', 'text_domain' ),
		'add_new_item'				=> __( 'Add Year', 'text_domain' ),
		'edit_item'					=> __( 'Edit Year', 'text_domain' ),
		'update_item'				=> __( 'Update Year', 'text_domain' ),
		'view_item'					=> __( 'View Year', 'text_domain' ),
		'separate_items_with_commas'	=> __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'		=> __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'		=> __( 'Choose from the most used', 'text_domain' ),
		'popular_items'				=> __( 'Popular Items', 'text_domain' ),
		'search_items'				=> __( 'Search Items', 'text_domain' ),
		'not_found'					=> __( 'Not Found', 'text_domain' ),
		'no_terms'					=> __( 'No items', 'text_domain' ),
		'items_list'				=> __( 'Items list', 'text_domain' ),
		'items_list_navigation'		=> __( 'Items list navigation', 'text_domain' ),
	);
	$args_ExhibitionYear = array(
		'labels'					=> $labels_ExhibitionYear,
		'hierarchical'				=> true,
		'public'					=> true,
		'show_ui'					=> true,
		'show_admin_column'			=> true,
		'show_in_nav_menus'			=> true,
		'show_tagcloud'				=> false,
		'show_in_rest'				=> true,
		'rewrite'					=> array( 'slug' => 'year' )
	);
	register_taxonomy( 'exhyear', array( 'exhibitions' ), $args_ExhibitionYear );


	$labels_ExhibitionContinent = array(
		'name'						=> _x( 'Continent / City', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'				=> _x( 'Continent / City', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'					=> __( 'Continent / City', 'text_domain' ),
		'all_items'					=> __( 'All Continent', 'text_domain' ),
		'parent_item'				=> __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'			=> __( 'Parent Item:', 'text_domain' ),
		'new_item_name'				=> __( 'New Continent', 'text_domain' ),
		'add_new_item'				=> __( 'Add Continent', 'text_domain' ),
		'edit_item'					=> __( 'Edit Continent', 'text_domain' ),
		'update_item'				=> __( 'Update Continent', 'text_domain' ),
		'view_item'					=> __( 'View Continent', 'text_domain' ),
		'separate_items_with_commas'	=> __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'		=> __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'		=> __( 'Choose from the most used', 'text_domain' ),
		'popular_items'				=> __( 'Popular Items', 'text_domain' ),
		'search_items'				=> __( 'Search Items', 'text_domain' ),
		'not_found'					=> __( 'Not Found', 'text_domain' ),
		'no_terms'					=> __( 'No items', 'text_domain' ),
		'items_list'				=> __( 'Items list', 'text_domain' ),
		'items_list_navigation'		=> __( 'Items list navigation', 'text_domain' ),
	);
	$args_ExhibitionContinent = array(
		'labels'					=> $labels_ExhibitionContinent,
		'hierarchical'				=> true,
		'public'					=> true,
		'show_ui'					=> true,
		'show_admin_column'			=> true,
		'show_in_nav_menus'			=> true,
		'show_tagcloud'				=> false,
		'show_in_rest'				=> true,
		'rewrite'					=> array( 'slug' => 'continent' )
	);
	register_taxonomy( 'exhcontinent', array( 'exhibitions' ), $args_ExhibitionContinent );


	$labels_ExhibitionPermanent = array(
		'name'						=> _x( 'Permanent exhibition', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'				=> _x( 'Permanent exhibition', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'					=> __( 'Permanent exhibition', 'text_domain' ),
		'all_items'					=> __( 'All', 'text_domain' ),
	);
	$args_ExhibitionPermanent = array(
		'labels'					=> $labels_ExhibitionPermanent,
		'hierarchical'				=> true,
		'public'					=> true,
		'show_ui'					=> true,
		'show_admin_column'			=> true,
		'show_in_nav_menus'			=> true,
		'show_tagcloud'				=> false,
		'show_in_rest'				=> true,
	);
	register_taxonomy( 'exhpermanent', array( 'exhibitions' ), $args_ExhibitionPermanent );

}
add_action( 'init', 'exhibtions_taxonomies', 0 );