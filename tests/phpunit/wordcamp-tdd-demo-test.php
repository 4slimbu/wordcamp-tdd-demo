<?php

/**
 * Class WordCampTddDemo
 *
 * @package wordcamp_tdd_demo
 */

/**
 * WordCampTddDemo test case.
 */
class Test_WordCampTddDemo extends WP_UnitTestCase
{
	public function testEnqueueAdminScripts()
	{
		// Given
		$instance = WordCampTddDemo::get_instance();

		// When
		$instance->enqueue_admin_scripts();

		// Then
		$this->assertContains('wctdd-main-css', wp_styles()->queue);
		$this->assertContains('wctdd-main-js', wp_scripts()->queue);
	}
}
