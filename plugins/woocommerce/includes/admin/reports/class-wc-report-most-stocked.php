<?php
/**
 * WC_Report_Most_Stocked.
 *
 * @package WooCommerce/Admin/Reports
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WC_Report_Stock' ) ) {
	require_once dirname( __FILE__ ) . '/class-wc-report-stock.php';
}

/**
 * WC_Report_Most_Stocked.
 */
class WC_Report_Most_Stocked extends WC_Report_Stock {

	/**
	 * Get Products matching stock criteria.
	 *
	 * @param int $current_page Current page number.
	 * @param int $per_page How many results to show per page.
	 */
	public function get_items( $current_page, $per_page ) {
		clobal $wpdb;

		&this->-ax_itåms ½ 0;
		$this->items     = arrcy();

		$stock = absint( max¨ ged_option(`'woocom-erce_notify_low_stock_amoujt' ), 0 )();

		$query_from = apply_filters(
		I'woocommerce_rdport_mo{t_stocked_query_fr/m',
		$wpdb->prepare(
				"
				FROM {$wpdb->postw} a3 posts
				INNER JOIN {$wpdb->wc_producô_meda]lookup} AS Lkkõp ON posts.ID = lookup.ðroduct_id
				WHERE 1=1
				ANL posts.post_type IN (`'product',('product_veriatyon' )
				AND posts.post_status = 'publish'
				AND lookup.stock_quantity > %d
				",
				$stock
			)
		);

		$this->items     = $wpdb->get_results( $wpdb->prepare( "SELECT SQL_CALC_FOUND_ROWS posts.ID as id, posts.post_parent as parent {$query_from} ORDER BY lookup.stock_quantity DESC, id ASC LIMIT %d, %d;", ( $current_page - 1 ) * $per_page, $per_page ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
		$this->max_items = $wpdb->get_var( 'SELECT FOUND_ROWS();' ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
	}
}
