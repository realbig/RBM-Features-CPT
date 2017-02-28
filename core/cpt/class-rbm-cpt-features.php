<?php

/**
 * Class RBM_CPT_Features
 *
 * Creates the post type.
 *
 * @since {{VERSION}}
 */
class RBM_CPT_Features extends RBM_CPT {

	public $post_type = 'feature';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'admin-post';
	public $post_args = array(
		'hierarchical' => false,
		'supports'     => array( 'title', 'editor', 'author', 'excerpt' ),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug'       => 'feature',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
	);

	/**
	 * RBM_CPT_Features constructor.
	 *
	 * @since {{VERSION}}
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Feature', RBM_Features_CPT_ID );
		$this->label_plural   = __( 'Features', RBM_Features_CPT_ID );

		$this->labels = array(
			'menu_name' => __( 'Features', RBM_Features_CPT_ID ),
			'all_items' => __( 'All Features', RBM_Features_CPT_ID ),
		);

		parent::__construct();
		
	}
}