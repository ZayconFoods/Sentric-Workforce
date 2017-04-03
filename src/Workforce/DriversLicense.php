<?php

namespace Sentric\Workforce;

class DriversLicense {

	private $class;
	private $expiration_date;
	private $number;
	private $state_province_code;

	/**
	 * @return mixed
	 */
	public function getClass()
	{
		return Utils::getString( $this->class );
	}

	/**
	 * @param mixed $class
	 *
	 * @return DriversLicense
	 */
	public function setClass( $class )
	{
		$this->class = Utils::setNullString( $class );

		return $this;
	}

	/**
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public function getExpirationDate( $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		return Utils::getDateTime( $this->expiration_date, $iso, $format );
	}

	/**
	 * @param mixed $expiration_date
	 *
	 * @return DriversLicense
	 */
	public function setExpirationDate( $expiration_date )
	{
		$this->expiration_date = Utils::setDateTime( $expiration_date );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumber()
	{
		return Utils::getString( $this->number );
	}

	/**
	 * @param mixed $number
	 *
	 * @return DriversLicense
	 */
	public function setNumber( $number )
	{
		$this->number = Utils::setNullString( $number );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStateProvinceCode()
	{
		return Utils::getString( $this->state_province_code );
	}

	/**
	 * @param mixed $state_province_code
	 *
	 * @return DriversLicense
	 */
	public function setStateProvinceCode( $state_province_code )
	{
		$this->state_province_code = Utils::setNullString( $state_province_code );

		return $this;
	}
}