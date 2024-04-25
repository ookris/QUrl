<?php

// Get URLs Count for current filter, total links in DB & total clicks
require_once( dirname( __DIR__ ).'/includes/load-yourls.php' );

$table_url       = YOURLS_DB_TABLE_URL;
$where           = array('sql' => '', 'binds' => array());

list( $total_urls, $total_clicks ) = array_values( yourls_get_db_stats() );
if ( !empty($where['sql']) ) {
	list( $total_items, $total_items_clicks ) = array_values( yourls_get_db_stats( $where ) );
} else {
	$total_items = $total_urls;
	$total_items_clicks = false;
}

?>