<?php

namespace Sentric\Workforce;

class CompanyController {

	/** @var Workforce $workforce */
	private $workforce;

	/**
	 * CompanyController constructor.
	 *
	 * @param Workforce $workforce
	 */
	public function __construct( $workforce )
	{
		$this->setWorkforce( $workforce );
	}

	/**
	 * @return Workforce
	 */
	public function getWorkforce()
	{
		return $this->workforce;
	}

	/**
	 * @param Workforce $workforce
	 *
	 * @return CompanyController
	 */
	public function setWorkforce( $workforce )
	{
		$this->workforce = $workforce;

		return $this;
	}

}