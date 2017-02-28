<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	RBM_Features_CPT
 * @subpackage RBM_Features_CPT/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		RBM_Features_CPT
 */
function RBMFEATURESCPT() {
	return RBM_Features_CPT::instance();
}