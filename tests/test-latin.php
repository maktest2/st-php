<?php
/**
 * Class Tests_CET_Transient
 *
 * @package Clean_Expired_Transients
 * @subpackage Test
 */

/**
* Test case for site transients.
*
* @since 1.0.0
*/
class Tests_ST_Latin extends PHPUnit_Framework_TestCase {
	/**
	 * Test latin inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_inputs() {
		$keyword1 = new Serbian_Transliteration( 'milan' );
		$this->assertEquals( $keyword1->latin(), 'milan' );

		$keyword2 = new Serbian_Transliteration( 'pera' );
		$this->assertEquals( $keyword2->latin(), 'pera' );

		$keyword3 = new Serbian_Transliteration( 'TUNISOVCI' );
		$this->assertEquals( $keyword3->latin(), 'TUNISOVCI' );

		$keyword4 = new Serbian_Transliteration( 'LIKOVI' );
		$this->assertEquals( $keyword4->latin(), 'LIKOVI' );

		$keyword5 = new Serbian_Transliteration( 'Ilija' );
		$this->assertEquals( $keyword5->latin(), 'Ilija' );

		$keyword6 = new Serbian_Transliteration( 'bigPinTheMiddle' );
		$this->assertEquals( $keyword6->latin(), 'bigPinTheMiddle' );

		$keyword7 = new Serbian_Transliteration( 'Čivijaši' );
		$this->assertEquals( $keyword7->latin(), 'Čivijaši' );

		$keyword8 = new Serbian_Transliteration( 'eXtreme' );
		$this->assertEquals( $keyword8->latin(), 'eXtreme' );
	}

	/**
	 * Test Cyrillic inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_inputs() {
		$keyword1 = new Serbian_Transliteration( 'лудило' );
		$this->assertEquals( $keyword1->cyrillic(), 'ludilo' );

		$keyword2 = new Serbian_Transliteration( 'рзава' );
		$this->assertEquals( $keyword2->cyrillic(), 'rzava' );

		$keyword3 = new Serbian_Transliteration( 'Тврђава' );
		$this->assertEquals( $keyword3->cyrillic(), 'Tvrđava' );

		$keyword4 = new Serbian_Transliteration( 'Милијаш' );
		$this->assertEquals( $keyword4->cyrillic(), 'Milijaš' );

		$keyword5 = new Serbian_Transliteration( 'врло опасно' );
		$this->assertEquals( $keyword5->cyrillic(), 'vrlo opasno' );

		$keyword6 = new Serbian_Transliteration( 'А шта да радим?' );
		$this->assertEquals( $keyword6->cyrillic(), 'A šta da radim?' );
	}
}
