<?php

namespace Sentric\Workforce;

class Workforce {

	private $token;

	/**
	 * Workforce constructor.
	 *
	 * @param string $token
	 */
	public function __construct( $token )
	{
		$this->setToken( $token );
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
		$this->token = $token;

		return $this;
	}
}