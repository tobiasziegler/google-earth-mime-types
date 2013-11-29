<?php
/**
 * Plugin Name: Google Earth Mime Types
 * Plugin URI: https://github.com/tobiasziegler/google-earth-mime-types
 * Description: A basic plugin that enables support for KML and KMZ files to be uploaded using the Media Library.
 * Version: 1.0
 * Author: David Mallard
 * Author URI: http://davidmallard.id.au/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
add_filter('mime_types', 'google_earth_mime_types_add_mimes');

function google_earth_mime_types_add_mimes ( $mimes=array() ) {
	$mimes['kml'] = 'application/vnd.google-earth.kml+xml';
	$mimes['kmz'] = 'application/vnd.google-earth.kmz';
	
	return $mimes;
}
