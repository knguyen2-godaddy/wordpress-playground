<?php
 if ( ! function_exists( 'wp_cache_add_multiple' ) ) : function wp_cache_add_multiple( array $data, $group = '', $expire = 0 ) { $values = array(); foreach ( $data as $key => $value ) { $values[ $key ] = wp_cache_add( $key, $value, $group, $expire ); } return $values; } endif; if ( ! function_exists( 'wp_cache_set_multiple' ) ) : function wp_cache_set_multiple( array $data, $group = '', $expire = 0 ) { $values = array(); foreach ( $data as $key => $value ) { $values[ $key ] = wp_cache_set( $key, $value, $group, $expire ); } return $values; } endif; if ( ! function_exists( 'wp_cache_get_multiple' ) ) : function wp_cache_get_multiple( $keys, $group = '', $force = false ) { $values = array(); foreach ( $keys as $key ) { $values[ $key ] = wp_cache_get( $key, $group, $force ); } return $values; } endif; if ( ! function_exists( 'wp_cache_delete_multiple' ) ) : function wp_cache_delete_multiple( array $keys, $group = '' ) { $values = array(); foreach ( $keys as $key ) { $values[ $key ] = wp_cache_delete( $key, $group ); } return $values; } endif; if ( ! function_exists( 'wp_cache_flush_runtime' ) ) : function wp_cache_flush_runtime() { return wp_using_ext_object_cache() ? false : wp_cache_flush(); } endif; 