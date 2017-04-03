<?php

namespace Sentric\Workforce;

class Employee {

	private $first_name;
	private $last_name;
	private $applicant_id;
	private $birth_country_code;
	private $birth_date;
	private $citizen_country_code;
	private $company_email_address;
	private $death_date;
	private $disability_code;
	private $do_not_pass_to_payroll = FALSE;
	private $ethnic_group_code;
	private $family_status_code;
	private $former_last_name;
	private $gender_code;
	private $allow_access_to_system = FALSE;
	private $latest_military_discharge_date;
	private $middle_name;
	private $nickname;
	private $personal_email_address;
	private $picture_date;
	private $pronunciation;
	private $salutation;
	private $suffix;
	private $time_clock_id;

	/** @var DriversLicense $drivers_license */
	private $drivers_license;

	/**
	 * @return mixed
	 */
	public function getFirstName()
	{
		return Utils::getString( $this->first_name );
	}

	/**
	 * @param mixed $first_name
	 *
	 * @return Employee
	 */
	public function setFirstName( $first_name )
	{
		$this->first_name = Utils::setNullString( $first_name );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return Utils::getString( $this->last_name );
	}

	/**
	 * @param mixed $last_name
	 *
	 * @return Employee
	 */
	public function setLastName( $last_name )
	{
		$this->last_name = Utils::setNullString( $last_name );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getApplicantId()
	{
		return Utils::getString( $this->applicant_id );
	}

	/**
	 * @param mixed $applicant_id
	 *
	 * @return Employee
	 */
	public function setApplicantId( $applicant_id )
	{
		$this->applicant_id = Utils::setNullString( $applicant_id );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBirthCountryCode()
	{
		return Utils::getString( $this->birth_country_code );
	}

	/**
	 * @param mixed $birth_country_code
	 *
	 * @return Employee
	 */
	public function setBirthCountryCode( $birth_country_code )
	{
		$this->birth_country_code = Utils::setNullString( $birth_country_code );

		return $this;
	}

	/**
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public function getBirthDate( $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		return Utils::getDateTime( $this->birth_date, $iso, $format );
	}

	/**
	 * @param mixed $birth_date
	 *
	 * @return Employee
	 */
	public function setBirthDate( $birth_date )
	{
		$this->birth_date = $birth_date;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCitizenCountryCode()
	{
		return Utils::getString( $this->citizen_country_code );
	}

	/**
	 * @param mixed $citizen_country_code
	 *
	 * @return Employee
	 */
	public function setCitizenCountryCode( $citizen_country_code )
	{
		$this->citizen_country_code = Utils::setNullString( $citizen_country_code );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCompanyEmailAddress()
	{
		return Utils::getString( $this->company_email_address );
	}

	/**
	 * @param mixed $company_email_address
	 *
	 * @return Employee
	 */
	public function setCompanyEmailAddress( $company_email_address )
	{
		$this->company_email_address = Utils::setNullString( $company_email_address );

		return $this;
	}

	/**
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public function getDeathDate( $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		return Utils::getDateTime( $this->death_date, $iso, $format );
	}

	/**
	 * @param mixed $death_date
	 *
	 * @return Employee
	 */
	public function setDeathDate( $death_date )
	{
		$this->death_date = Utils::setDateTime( $death_date );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDisabilityCode()
	{
		return Utils::getString( $this->disability_code );
	}

	/**
	 * @param mixed $disability_code
	 *
	 * @return Employee
	 */
	public function setDisabilityCode( $disability_code )
	{
		$this->disability_code = Utils::setNullString( $disability_code );

		return $this;
	}

	/**
	 * @return bool
	 */
	public function doNotPassToPayroll()
	{
		return Utils::getBool( $this->do_not_pass_to_payroll );
	}

	/**
	 * @param bool $do_not_pass_to_payroll
	 *
	 * @return Employee
	 */
	public function setDoNotPassToPayroll( $do_not_pass_to_payroll )
	{
		$this->do_not_pass_to_payroll = Utils::setBool( $do_not_pass_to_payroll );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEthnicGroupCode()
	{
		return Utils::getString( $this->ethnic_group_code );
	}

	/**
	 * @param mixed $ethnic_group_code
	 *
	 * @return Employee
	 */
	public function setEthnicGroupCode( $ethnic_group_code )
	{
		$this->ethnic_group_code = Utils::setNullString( $ethnic_group_code );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFamilyStatusCode()
	{
		return Utils::getString( $this->family_status_code );
	}

	/**
	 * @param mixed $family_status_code
	 *
	 * @return Employee
	 */
	public function setFamilyStatusCode( $family_status_code )
	{
		$this->family_status_code = Utils::setNullString( $family_status_code );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFormerLastName()
	{
		return Utils::getString( $this->former_last_name );
	}

	/**
	 * @param mixed $former_last_name
	 *
	 * @return Employee
	 */
	public function setFormerLastName( $former_last_name )
	{
		$this->former_last_name = Utils::setNullString( $former_last_name );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGenderCode()
	{
		return Utils::getString( $this->gender_code );
	}

	/**
	 * @param mixed $gender_code
	 *
	 * @return Employee
	 */
	public function setGenderCode( $gender_code )
	{
		$this->gender_code = Utils::setNullString( $gender_code );

		return $this;
	}

	/**
	 * @return bool
	 */
	public function allowAccessToSystem()
	{
		return Utils::getBool( $this->allow_access_to_system );
	}

	/**
	 * @param bool $allow_access_to_system
	 *
	 * @return Employee
	 */
	public function setAllowAccessToSystem( $allow_access_to_system )
	{
		$this->allow_access_to_system = Utils::setBool( $allow_access_to_system );

		return $this;
	}

	/**
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public function getLatestMilitaryDischargeDate( $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		return Utils::getDateTime( $this->latest_military_discharge_date, $iso, $format );
	}

	/**
	 * @param mixed $latest_military_discharge_date
	 *
	 * @return Employee
	 */
	public function setLatestMilitaryDischargeDate( $latest_military_discharge_date )
	{
		$this->latest_military_discharge_date = $latest_military_discharge_date;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMiddleName()
	{
		return Utils::getString( $this->middle_name );
	}

	/**
	 * @param mixed $middle_name
	 *
	 * @return Employee
	 */
	public function setMiddleName( $middle_name )
	{
		$this->middle_name = Utils::setNullString( $middle_name );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNickname()
	{
		return Utils::getString( $this->nickname );
	}

	/**
	 * @param mixed $nickname
	 *
	 * @return Employee
	 */
	public function setNickname( $nickname )
	{
		$this->nickname = Utils::setNullString( $nickname );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPersonalEmailAddress()
	{
		return Utils::getString( $this->personal_email_address );
	}

	/**
	 * @param mixed $personal_email_address
	 *
	 * @return Employee
	 */
	public function setPersonalEmailAddress( $personal_email_address )
	{
		$this->personal_email_address = Utils::setNullString( $personal_email_address );

		return $this;
	}

	/**
	 * @param bool $iso
	 * @param string $format
	 *
	 * @return false|null|string
	 */
	public function getPictureDate( $iso = TRUE, $format = 'Y-m-d H:i:s' )
	{
		return Utils::getDateTime( $this->picture_date, $iso, $format );
	}

	/**
	 * @param mixed $picture_date
	 *
	 * @return Employee
	 */
	public function setPictureDate( $picture_date )
	{
		$this->picture_date = Utils::setDateTime( $picture_date );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPronunciation()
	{
		return Utils::getString( $this->pronunciation );
	}

	/**
	 * @param mixed $pronunciation
	 *
	 * @return Employee
	 */
	public function setPronunciation( $pronunciation )
	{
		$this->pronunciation = Utils::setNullString( $pronunciation );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSalutation()
	{
		return Utils::getString( $this->salutation );
	}

	/**
	 * @param mixed $salutation
	 *
	 * @return Employee
	 */
	public function setSalutation( $salutation )
	{
		$this->salutation = Utils::setNullString( $salutation );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSuffix()
	{
		return Utils::getString( $this->suffix );
	}

	/**
	 * @param mixed $suffix
	 *
	 * @return Employee
	 */
	public function setSuffix( $suffix )
	{
		$this->suffix = Utils::setNullString( $suffix );

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTimeClockId()
	{
		return Utils::getString( $this->time_clock_id );
	}

	/**
	 * @param mixed $time_clock_id
	 *
	 * @return Employee
	 */
	public function setTimeClockId( $time_clock_id )
	{
		$this->time_clock_id = Utils::setNullString( $time_clock_id );

		return $this;
	}

	/**
	 * @return DriversLicense
	 */
	public function getDriversLicense()
	{
		return $this->drivers_license;
	}

	/**
	 * @param DriversLicense $drivers_license
	 *
	 * @return Employee
	 */
	public function setDriversLicense( $drivers_license )
	{
		$this->drivers_license = $drivers_license;

		return $this;
	}
}