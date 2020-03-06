<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPayInfo StructType
 * @subpackage Structs
 */
class EPayInfo extends PWObject
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The address2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address2;
    /**
     * The bankAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountNumber;
    /**
     * The bankAccountType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountType;
    /**
     * The bankName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankName;
    /**
     * The bankRoutingNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankRoutingNumber;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The driversLicense
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $driversLicense;
    /**
     * The driversLicenseState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $driversLicenseState;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastName;
    /**
     * The middleInitial
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $middleInitial;
    /**
     * The ssn
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ssn;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * Constructor method for EPayInfo
     * @uses EPayInfo::setAddress()
     * @uses EPayInfo::setAddress2()
     * @uses EPayInfo::setBankAccountNumber()
     * @uses EPayInfo::setBankAccountType()
     * @uses EPayInfo::setBankName()
     * @uses EPayInfo::setBankRoutingNumber()
     * @uses EPayInfo::setCity()
     * @uses EPayInfo::setCountry()
     * @uses EPayInfo::setDriversLicense()
     * @uses EPayInfo::setDriversLicenseState()
     * @uses EPayInfo::setFirstName()
     * @uses EPayInfo::setLastName()
     * @uses EPayInfo::setMiddleInitial()
     * @uses EPayInfo::setSsn()
     * @uses EPayInfo::setState()
     * @uses EPayInfo::setZip()
     * @param string $address
     * @param string $address2
     * @param string $bankAccountNumber
     * @param string $bankAccountType
     * @param string $bankName
     * @param string $bankRoutingNumber
     * @param string $city
     * @param string $country
     * @param string $driversLicense
     * @param string $driversLicenseState
     * @param string $firstName
     * @param string $lastName
     * @param string $middleInitial
     * @param string $ssn
     * @param string $state
     * @param string $zip
     */
    public function __construct($address = null, $address2 = null, $bankAccountNumber = null, $bankAccountType = null, $bankName = null, $bankRoutingNumber = null, $city = null, $country = null, $driversLicense = null, $driversLicenseState = null, $firstName = null, $lastName = null, $middleInitial = null, $ssn = null, $state = null, $zip = null)
    {
        $this
            ->setAddress($address)
            ->setAddress2($address2)
            ->setBankAccountNumber($bankAccountNumber)
            ->setBankAccountType($bankAccountType)
            ->setBankName($bankName)
            ->setBankRoutingNumber($bankRoutingNumber)
            ->setCity($city)
            ->setCountry($country)
            ->setDriversLicense($driversLicense)
            ->setDriversLicenseState($driversLicenseState)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setMiddleInitial($middleInitial)
            ->setSsn($ssn)
            ->setState($state)
            ->setZip($zip);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \StructType\EPayInfo
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }
    /**
     * Set address2 value
     * @param string $address2
     * @return \StructType\EPayInfo
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->address2 = $address2;
        return $this;
    }
    /**
     * Get bankAccountNumber value
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }
    /**
     * Set bankAccountNumber value
     * @param string $bankAccountNumber
     * @return \StructType\EPayInfo
     */
    public function setBankAccountNumber($bankAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountNumber) && !is_string($bankAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountNumber)), __LINE__);
        }
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }
    /**
     * Get bankAccountType value
     * @return string|null
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }
    /**
     * Set bankAccountType value
     * @param string $bankAccountType
     * @return \StructType\EPayInfo
     */
    public function setBankAccountType($bankAccountType = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountType) && !is_string($bankAccountType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountType)), __LINE__);
        }
        $this->bankAccountType = $bankAccountType;
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName()
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \StructType\EPayInfo
     */
    public function setBankName($bankName = null)
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * Get bankRoutingNumber value
     * @return string|null
     */
    public function getBankRoutingNumber()
    {
        return $this->bankRoutingNumber;
    }
    /**
     * Set bankRoutingNumber value
     * @param string $bankRoutingNumber
     * @return \StructType\EPayInfo
     */
    public function setBankRoutingNumber($bankRoutingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bankRoutingNumber) && !is_string($bankRoutingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankRoutingNumber)), __LINE__);
        }
        $this->bankRoutingNumber = $bankRoutingNumber;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \StructType\EPayInfo
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \StructType\EPayInfo
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get driversLicense value
     * @return string|null
     */
    public function getDriversLicense()
    {
        return $this->driversLicense;
    }
    /**
     * Set driversLicense value
     * @param string $driversLicense
     * @return \StructType\EPayInfo
     */
    public function setDriversLicense($driversLicense = null)
    {
        // validation for constraint: string
        if (!is_null($driversLicense) && !is_string($driversLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driversLicense)), __LINE__);
        }
        $this->driversLicense = $driversLicense;
        return $this;
    }
    /**
     * Get driversLicenseState value
     * @return string|null
     */
    public function getDriversLicenseState()
    {
        return $this->driversLicenseState;
    }
    /**
     * Set driversLicenseState value
     * @param string $driversLicenseState
     * @return \StructType\EPayInfo
     */
    public function setDriversLicenseState($driversLicenseState = null)
    {
        // validation for constraint: string
        if (!is_null($driversLicenseState) && !is_string($driversLicenseState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driversLicenseState)), __LINE__);
        }
        $this->driversLicenseState = $driversLicenseState;
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \StructType\EPayInfo
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \StructType\EPayInfo
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get middleInitial value
     * @return string|null
     */
    public function getMiddleInitial()
    {
        return $this->middleInitial;
    }
    /**
     * Set middleInitial value
     * @param string $middleInitial
     * @return \StructType\EPayInfo
     */
    public function setMiddleInitial($middleInitial = null)
    {
        // validation for constraint: string
        if (!is_null($middleInitial) && !is_string($middleInitial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleInitial)), __LINE__);
        }
        $this->middleInitial = $middleInitial;
        return $this;
    }
    /**
     * Get ssn value
     * @return string|null
     */
    public function getSsn()
    {
        return $this->ssn;
    }
    /**
     * Set ssn value
     * @param string $ssn
     * @return \StructType\EPayInfo
     */
    public function setSsn($ssn = null)
    {
        // validation for constraint: string
        if (!is_null($ssn) && !is_string($ssn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ssn)), __LINE__);
        }
        $this->ssn = $ssn;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \StructType\EPayInfo
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \StructType\EPayInfo
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EPayInfo
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
