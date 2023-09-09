<?php

/*
Plugin Name: WordCamp TDD Demo
Plugin URI: https://wordcamptdddemo.test
Description: WordCamp Kathmandu 2023 TDD demo
Version: 1.0
Author: Sudip Limbu
Author URI: https://sudiplimbu.com
*/

/**
 * Main Class - WordCamp TDD Demo
 */
class WordCampTddDemo
{

	/*--------------------------------------------*
	* Attributes
	*--------------------------------------------*/

	/** Refers to a single instance of this class. */
	private static $instance = null;

	/*--------------------------------------------*
	* Constructor
	*--------------------------------------------*/

	/**
	 * Creates or returns an instance of this class.
	 *
	 * @return WordCampTddDemo A single instance of this class.
	 */
	public static function get_instance()
	{

		if (null == self::$instance) {
			self::$instance = new self;
		}

		return self::$instance;
	} // end get_instance;

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	private function __construct()
	{
		// Register scripts
		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
	}

	/*--------------------------------------------*
	* Functions
	*--------------------------------------------*/

	/**
	 * Function that will add css and javascript file.
	 */
	public function enqueue_admin_scripts()
	{
		// CSS rules
		wp_enqueue_style('wctdd-main-css', plugins_url('main.css', __FILE__));


		// Make sure to add the dependecy to js file
		wp_enqueue_script('wctdd-main-js', plugins_url('main.js', __FILE__), array('jquery'), '', true);
	}
}

WordCampTddDemo::get_instance();
