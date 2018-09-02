<?php
/**
 * Content Functions
 */

/**
 * Register custom query vars for filtering/sorting
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/query_vars
 */

function register_query_vars( $vars ) {
    $vars[] = 'sort';
    return $vars;
}
add_filter( 'query_vars', 'register_query_vars' );