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
class Tests_ST_Cyrillic extends PHPUnit_Framework_TestCase {
	/**
	 * Test Cyrillic inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_inputs() {
		$keyword1 = new Serbian_Transliteration( 'стевица' );
		$this->assertEquals( $keyword1->cyrillic(), 'стевица' );

		$keyword2 = new Serbian_Transliteration( 'поеска' );
		$this->assertEquals( $keyword2->cyrillic(), 'поеска' );

		$keyword3 = new Serbian_Transliteration( 'ТРУСНО' );
		$this->assertEquals( $keyword3->cyrillic(), 'ТРУСНО' );

		$keyword4 = new Serbian_Transliteration( 'МИЛИЈАРДЕРИ' );
		$this->assertEquals( $keyword4->cyrillic(), 'МИЛИЈАРДЕРИ' );

		$keyword5 = new Serbian_Transliteration( 'Павле' );
		$this->assertEquals( $keyword5->cyrillic(), 'Павле' );

		$keyword6 = new Serbian_Transliteration( 'великоТпаМалеП' );
		$this->assertEquals( $keyword6->cyrillic(), 'великоТпаМалеП' );
	}

	/**
	 * Test Latin inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_inputs() {
		$keyword1 = new Serbian_Transliteration( 'pomešana osećanja' );
		$this->assertEquals( $keyword1->cyrillic(), 'помешана осећања' );

		$keyword2 = new Serbian_Transliteration( 'Đurađ Branković' );
		$this->assertEquals( $keyword2->cyrillic(), 'Ђурађ Бранковић' );

		$keyword3 = new Serbian_Transliteration( 'područje' );
		$this->assertEquals( $keyword3->cyrillic(), 'подручје' );

		$keyword4 = new Serbian_Transliteration( 'obilno' );
		$this->assertEquals( $keyword4->cyrillic(), 'обилно' );

		$keyword5 = new Serbian_Transliteration( 'Plava je boja neba.' );
		$this->assertEquals( $keyword5->cyrillic(), 'Плава је боја неба.' );

		$keyword6 = new Serbian_Transliteration( 'ǈuljaška se zaljuljala!' );
		$this->assertEquals( $keyword6->cyrillic(), 'Љуљашка се заљуљала!' );
	}
}
