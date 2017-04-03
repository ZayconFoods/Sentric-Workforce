<?php

namespace Sentric\Workforce;

class Workforce {

	private $token;
	private $base_url;

	/**
	 * Workforce constructor.
	 *
	 * @param string $token
	 * @param string $base_url
	 */
	public function __construct( $token, $base_url )
	{
		$this
			->setToken( $token )
			->setBaseUrl( $base_url );
	}

	/**
	 * @return mixed
	 */
	public function getToken()
	{
		return $this->token;
	}

	/**
	 * @param mixed $token
	 *
	 * @return Workforce
	 */
	public function setToken( $token )
	{
		$token = trim( $token );

		$this->token = $token;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBaseUrl()
	{
		return $this->base_url;
	}

	/**
	 * @param mixed $base_url
	 *
	 * @return Workforce
	 */
	public function setBaseUrl( $base_url )
	{
		$base_url = trim( $base_url );

		if ( substr( strtolower( $base_url ), 0, 4 ) != 'http' )
		{
			$base_url = 'http://' . $base_url;
		}

		if ( substr( $base_url, -1 ) != '/' )
		{
			$base_url .= '/';
		}

		$this->base_url = $base_url;

		return $this;
	}


}