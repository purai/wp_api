<?php

add_theme_support( 'post-thumbnails' );

add_filter( 'restsplain_docs_base', function() {
	return '/docs';
} );

require_once TEMPLATEPATH . '/posts/events/create-post-events.php';
require_once TEMPLATEPATH . '/api/events/events.php';
require_once TEMPLATEPATH . '/api/events/event.php';
require_once TEMPLATEPATH . '/api/categories/categories.php';
require_once TEMPLATEPATH . '/api/cities/cities.php';

add_filter( 'rest_url_prefix', 'wp_json_api_slug'); 
function wp_json_api_slug( $slug ) { return 'api'; }
