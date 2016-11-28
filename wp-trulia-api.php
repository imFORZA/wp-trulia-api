<?php
/**
 * WP-Trulia-API
 *
 * @package WP-Trulia-API
 */

/*
* Plugin Name: WP Trulia API
* Plugin URI: https://github.com/wp-api-libraries/wp-trulia-api
* Description: Perform API requests to Trulia in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-trulia-api
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }


/* Check if class exists. */
if ( ! class_exists( 'TruliaAPI' ) ) {

	/**
	 * Trulia API Class.
	 */
	class TruliaAPI {

		/**
		 * Construct.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {

		}

		/**
		 * Get Trulia Property ID from URL.
		 *
		 * @access public
		 * @param mixed $url URL.
		 * @return Request.
		 */
		function get_trulia_property_info( $url ) {

			if ( empty( $url ) ) {
				return new WP_Error( 'required-fields', __( 'Please provide a URL.', 'text-domain' ) );
			}

			$explode = explode('/', $url);

			var_dump($explode);

			/*
			TODO: This funtion should return the following as JSON array:
			* Trulia Property ID
			* Street Address
			* City
			* State
			* Zip Code
			* Note: Check for mulitple url types for property detail pages, example:
			* https://www.trulia.com/property/3255159905-1301-S-Howard-Ave-C5-Tampa-FL-33606
			* https://www.trulia.com/homes/Oregon/Portland/sold/20568483-4838-NE-34th-Ave-Portland-OR-97211
			*/
		}

		/**
		 * Get Agent/Team Screenname from URL.
		 *
		 * @access public
		 * @param mixed $profile_url URL.
		 * @return void
		 */
		function get_agent_info_from_url( $url ) {

			if ( empty( $url ) ) {
				return new WP_Error( 'required-fields', __( 'Please provide a URL.', 'text-domain' ) );
			}

			$explode = explode('/', $url);

			$remove_agent = str_replace( '-agent', '', $explode['4'] );

			$section = explode('-', $remove_agent);

			var_dump($remove_agent);

			/*
			TODO: This function should return an array with the following as JSON array:
			* Agent Name
			* Trulia Agent Unique String
			* Agent City
			* Agent State
			*/

		}
	}
}
