<?php
/**
 * Class Tests_CET_SiteTransient
 *
 * @package Clean_Expired_Transients
 * @subpackage Test
 */

/**
 * Test case for basics.
 *
 * @since 1.0.0
 */
class Tests_ST_Basic extends PHPUnit_Framework_TestCase {
	/**
	 * Test original property.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_original() {
		// Original should always be available
		$not_empty = new Serbian_Transliteration( 'input' );
		$this->assertNotEmpty( $not_empty->original );

		// Test that original is same as input
		$this->assertEquals( $not_empty->original, 'input' );
	}
}
