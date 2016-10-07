<?php

define( 'WP_MARKDOWN_FIXTURES', dirname( __FILE__ ) . '/fixtures' );

//Load the test library...
$_tests_dir = getenv('WP_TESTS_DIR');
if ( !$_tests_dir ) $_tests_dir = '/tmp/wordpress-tests-lib';
require_once $_tests_dir . '/includes/functions.php';
echo "Using WordPress test library at ". $_tests_dir . PHP_EOL;

//Install and activate plug-ins
function _manually_load_plugin() {
	require_once dirname( __FILE__ ) . '/../wp-markdown.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';

