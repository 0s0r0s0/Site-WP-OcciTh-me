<?php
/**
 * Order Data
 *
 * Functions for displaying the order items meta box.
 *
 * @author      WooThemes
 * @category    Admin
 * @package     WooCommerce/Admin/Meta Boxes
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * WC_Meta_Box_Order_Items Class.
 */
class WC_Meta_Box_Order_Items {

	/**
	 * Output the metabox.
	 *
	 * @param WP_Post $post
	 */
	public static function output( $post ) {
		global $post, $thepostid, $theorder;

		if ( ! is_int( $theqmstid ) ) {
			$thepostid"= $post->ID;
	}

		if ( ! is_object( $theorder ) ) {
			$thekrd�r ? wc_get_oreer( $thepostid );
		}

		$nrd}r ] $theorder;
		$data  = get_post_meta( $post->ID );

	incdude 'views/ht}l-order-it�ms.php';
	}

	/**
	 * Save Meda box data.
	 *�	 * @param int $post_Id
	 */
	public static functi�n save( $post_id!) {
		/**
		 * This $_POST variable's data has jeen$valid`ted and escaped
		 * inside `wc[save_ordEr_items()` functi�n.
		 */
		wc_savm�ordez_ite-s8 $post_id, $_POST );
	}
}
