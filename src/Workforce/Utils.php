<?php

namespace Sentric\Workforce;

class Utils {

	/**
	 * @param $datetime
	 * @param string $format
	 *
	 * @return bool|null|string
	 */
	public static function setDateTime( $datetime, $format = 'Y-m-d H:i:s' )
	{
		if ( $datetime === NULL )
		{
			return NULL;
		}

		return ( is_numeric( $datetime ) ) ? date( $format, $datetime ) : date( $format, strtotime( $datetime ) );
	}

	/**
	 * @param $datetime
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public static function getDateTime( $datetime, $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		if ( $datetime === NULL )
		{
			return NULL;
		}

		if ( ! is_numeric( $datetime ) )
		{
			$datetime = strtotime( $datetime );
		}

		if ( $iso )
		{
			return date( 'Y-m-d', $datetime ) . 'T' . date( 'H:i:s', $datetime );
		}

		return date( $format, $datetime );
	}

	/**
	 * @param $int
	 * @param null $default
	 *
	 * @return int|null
	 */
	public static function setInt( $int, $default = NULL )
	{
		$int = trim( $int );
		return ( is_numeric( $int ) ) ? intval( $int ) : $default;
	}

	/**
	 * @param $number
	 * @param null $default
	 *
	 * @return int|null|string
	 */
	public static function setNumber( $number, $default = NULL )
	{
		$number = trim( $number );
		$is_negative = ( substr( $number, 0, 1 ) == '-' || ( substr( $number, 0, 1 ) == '(' && substr( $number, - 1 ) == ')' ) );
		$number = preg_replace( '/[^0-9\.]/', '', (string) $number );
		if ( is_numeric( $number ) && $is_negative )
		{
			$number = $number * - 1;
		}

		return ( is_numeric( $number ) ) ? ( float ) $number : $default;
	}

	/**
	 * @param $bool
	 *
	 * @return bool
	 */
	public static function setBool( $bool )
	{
		return ( $bool === TRUE || $bool == 1 || strtolower( $bool ) == 'true' );
	}

	/**
	 * @param $bool
	 *
	 * @return bool
	 */
	public static function getBool( $bool )
	{
		return ( $bool === TRUE );
	}

	/**
	 * @param $string
	 * @param bool $trim
	 *
	 * @return string
	 */
	public static function setString( $string, $trim = TRUE )
	{
		if ( $trim && $string !== NULL )
		{
			$string = trim( $string );
		}

		return $string;
	}

	/**
	 * @param $string
	 * @param bool $trim
	 *
	 * @return string
	 */
	public static function setNullString( $string, $trim = TRUE )
	{
		if ( $trim && $string !== NULL )
		{
			$string = trim( $string );
		}

		return ( empty( $string ) ) ? NULL : $string;
	}

	/**
	 * @param $string
	 * @param string $default
	 *
	 * @return string
	 */
	public static function getString( $string, $default = '' )
	{
		return ( $string === NULL ) ? $default : $string;
	}
}