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
		'Љ' => 'Lj',
		'М' => 'M',
		'Н' => 'N',
		'Њ' => 'Nj',
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
		'Џ' => 'Dž',
		'Ш' => 'Š',
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
		'љ' => 'lj',
		'м' => 'm',
		'н' => 'n',
		'њ' => 'nj',
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
		'џ' => 'dž',
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
		return strtr( $this->original, $this->combinations );
	}

	/**
	 * Get all characters to Cyrillic script.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function cyrillic() {
		return strtr( $this->original, array_flip( $this->combinations ) );
	}
}
endif;
