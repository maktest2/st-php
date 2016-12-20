<?php
/**
 * Get all variants of word for Serbian language.
 *
 * @package   Serbian_Transliteration
 * @version   1.0
 * @author    Milan Dinić <blog.milandinic.com>
 * @copyright Copyright (c) 2016, Milan Dinić
 * @license   http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link      https://github.com/dimadin/serbian-variants
 */


if ( ! class_exists( 'Serbian_Transliteration' ) ) :
/**
 * The Serbian Variants Class
 *
 * Get all variants of word for Serbian language.
 *
 * @since 1.0.0
 */
class Serbian_Transliteration {
	/**
	 * An array with all variants of original string.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var array
	 */
	public $combinations = array(
		// Digraphs must be before all other letters because of Latin to Cyrillic transliteration
		'Љ' => 'Lj',
		'Љ' => 'LJ',
		'Њ' => 'Nj',
		'Њ' => 'NJ',
		'Џ' => 'Dž',
		'Џ' => 'DŽ',
		'А' => 'A',
		'Б' => 'B',
		'В' => 'V',
		'Г' => 'G',
		'Д' => 'D',
		'Ђ' => 'Đ',
		'Е' => 'E',
		'Ж' => 'Ž',
		'З' => 'Z',
		'И' => 'I',
		'Ј' => 'J',
		'К' => 'K',
		'Л' => 'L',
		'М' => 'M',
		'Н' => 'N',
		'О' => 'O',
		'П' => 'P',
		'Р' => 'R',
		'С' => 'S',
		'Т' => 'T',
		'Ћ' => 'Ć',
		'У' => 'U',
		'Ф' => 'F',
		'Х' => 'H',
		'Ц' => 'C',
		'Ч' => 'Č',
		'Ш' => 'Š',
		'љ' => 'lj',
		'њ' => 'nj',
		'џ' => 'dž',
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'ђ' => 'đ',
		'е' => 'e',
		'ж' => 'ž',
		'з' => 'z',
		'и' => 'i',
		'ј' => 'j',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'ћ' => 'ć',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'h',
		'ц' => 'c',
		'ч' => 'č',
		'ш' => 'š',
	);

	/**
	 * An array with all variants of original string.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var array
	 */
	public $original;

	/**
	 * Get all variants of string for Serbian language.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @param string $term String for which all variants are searched for.
	 */
	public function __construct( $string ) {
		$this->original = $string;
	}

	/**
	 * Get all characters in Latin script.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function latin() {
		return str_replace( array_keys( $this->combinations ), array_values( $this->combinations ), $this->original );
	}

	/**
	 * Get all characters to Cyrillic script.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function cyrillic() {
		return str_replace( array_values( $this->combinations ), array_keys( $this->combinations ), $this->original );
	}
}
endif;
