<?php
/**
 * Mstoic Enable Media Uploads From Contributors plugin.
 *
 * After enabling this plugin, contributors will be able to upload media files on your WordPress website.
 *
 * @package Mstoic_Contributors_Media_Upload
 * @author mstoic
 * @version 1.2
 *
 * @wordpress
 * Plugin Name: Contributors Media Upload by Mstoic
 * Plugin URI: http://wordpress.org/extend/plugins/mstoic-contributors_media_upload/
 * Description: This plugin allows contributors to upload media files
 * Author: <a href="http://hemantaggarwal.com">Hemant Aggarwal</a>
 * Version: 1.2
 * Text Domain: mstoic-contributors-media-upload
 */

/**
 * Plugin class for Mstoic Contributors Media Upload plugin
 *
 * @package Mstoic_Contributors_Media_Upload
 */
class Mstoic_Contributors_Media_Upload {

	/**
	 * Loads plugin textdomain, and hooks in further actions.
	 */
	function __construct() {

		add_action( 'init', array( $this, 'mstoic_shortcodes_buttons' ) );

	}

	/**
	 * Add Mstoic Shortcode generator
	 */
	function mstoic_shortcodes_buttons() {
		get_role('contributor')->add_cap('upload_files');
	}

}

new Mstoic_Contributors_Media_Upload;