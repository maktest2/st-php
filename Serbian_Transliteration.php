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
	 * An array with all Cyrillic characters.
	 *
	 * Because of the way Latin characters can be written, upper case diagraph
	 * are used twice.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var array
	 */
	public $cyrillic = array(
		// Digraphs must be before all other letters because of Latin to Cyrillic transliteration
		'Љ',
		'Љ',
		'Њ',
		'Њ',
		'Џ',
		'Џ',
		'А',
		'Б',
		'В',
		'Г',
		'Д',
		'Ђ',
		'Е',
		'Ж',
		'З',
		'И',
		'Ј',
		'К',
		'Л',
		'М',
		'Н',
		'О',
		'П',
		'Р',
		'С',
		'Т',
		'Ћ',
		'У',
		'Ф',
		'Х',
		'Ц',
		'Ч',
		'Ш',
		'љ',
		'њ',
		'џ',
		'а',
		'б',
		'в',
		'г',
		'д',
		'ђ',
		'е',
		'ж',
		'з',
		'и',
		'ј',
		'к',
		'л',
		'м',
		'н',
		'о',
		'п',
		'р',
		'с',
		'т',
		'ћ',
		'у',
		'ф',
		'х',
		'ц',
		'ч',
		'ш',
	);

	/**
	 * An array with all Latin characters.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var array
	 */
	public $latin = array(
		// Digraphs must be before all other letters because of Latin to Cyrillic transliteration
		'Lj',
		'LJ',
		'Nj',
		'NJ',
		'Dž',
		'DŽ',
		'A',
		'B',
		'V',
		'G',
		'D',
		'Đ',
		'E',
		'Ž',
		'Z',
		'I',
		'J',
		'K',
		'L',
		'M',
		'N',
		'O',
		'P',
		'R',
		'S',
		'T',
		'Ć',
		'U',
		'F',
		'H',
		'C',
		'Č',
		'Š',
		'lj',
		'nj',
		'dž',
		'a',
		'b',
		'v',
		'g',
		'd',
		'đ',
		'e',
		'ž',
		'z',
		'i',
		'j',
		'k',
		'l',
		'm',
		'n',
		'o',
		'p',
		'r',
		's',
		't',
		'ć',
		'u',
		'f',
		'h',
		'c',
		'č',
		'š',
	);

	/**
	 * Original, unchanged string.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @var string
	 */
	public $original;

	/**
	 * Transliterate sting to both string of Serbian language.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @param string $string String for which transliteration should be done.
	 */
	public function __construct( $string ) {
		$this->original = $string;
	}

	/**
	 * Transliterate original string to Latin script.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function latin() {
		return str_replace( $this->cyrillic, $this->latin, $this->original );
	}

	/**
	 * Transliterate original string to Cyrillic script.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	public function cyrillic() {
		return str_replace( $this->latin, $this->cyrillic, $this->original );
	}
}
endif;
