<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tenant StructType
 * @subpackage Structs
 */
class Tenant extends PWObject
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
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The contactEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactEmail;
    /**
     * The contactMobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactMobile;
    /**
     * The contactPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactPhone;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The primaryContact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $primaryContact;
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
     * Constructor method for Tenant
     * @uses Tenant::setAddress()
     * @uses Tenant::setAddress2()
     * @uses Tenant::setCity()
     * @uses Tenant::setContactEmail()
     * @uses Tenant::setContactMobile()
     * @uses Tenant::setContactPhone()
     * @uses Tenant::setCountry()
     * @uses Tenant::setName()
     * @uses Tenant::setPrimaryContact()
     * @uses Tenant::setState()
     * @uses Tenant::setZip()
     * @param string $address
     * @param string $address2
     * @param string $city
     * @param string $contactEmail
     * @param string $contactMobile
     * @param string $contactPhone
     * @param string $country
     * @param string $name
     * @param string $primaryContact
     * @param string $state
     * @param string $zip
     */
    public function __construct($address = null, $address2 = null, $city = null, $contactEmail = null, $contactMobile = null, $contactPhone = null, $country = null, $name = null, $primaryContact = null, $state = null, $zip = null)
    {
        $this
            ->setAddress($address)
            ->setAddress2($address2)
            ->setCity($city)
            ->setContactEmail($contactEmail)
            ->setContactMobile($contactMobile)
            ->setContactPhone($contactPhone)
            ->setCountry($country)
            ->setName($name)
            ->setPrimaryContact($primaryContact)
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
     * @return \StructType\Tenant
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
     * @return \StructType\Tenant
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
     * @return \StructType\Tenant
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
     * Get contactEmail value
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }
    /**
     * Set contactEmail value
     * @param string $contactEmail
     * @return \StructType\Tenant
     */
    public function setContactEmail($contactEmail = null)
    {
        // validation for constraint: string
        if (!is_null($contactEmail) && !is_string($contactEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactEmail)), __LINE__);
        }
        $this->contactEmail = $contactEmail;
        return $this;
    }
    /**
     * Get contactMobile value
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }
    /**
     * Set contactMobile value
     * @param string $contactMobile
     * @return \StructType\Tenant
     */
    public function setContactMobile($contactMobile = null)
    {
        // validation for constraint: string
        if (!is_null($contactMobile) && !is_string($contactMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactMobile)), __LINE__);
        }
        $this->contactMobile = $contactMobile;
        return $this;
    }
    /**
     * Get contactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }
    /**
     * Set contactPhone value
     * @param string $contactPhone
     * @return \StructType\Tenant
     */
    public function setContactPhone($contactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactPhone)), __LINE__);
        }
        $this->contactPhone = $contactPhone;
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
     * @return \StructType\Tenant
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Tenant
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get primaryContact value
     * @return string|null
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }
    /**
     * Set primaryContact value
     * @param string $primaryContact
     * @return \StructType\Tenant
     */
    public function setPrimaryContact($primaryContact = null)
    {
        // validation for constraint: string
        if (!is_null($primaryContact) && !is_string($primaryContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryContact)), __LINE__);
        }
        $this->primaryContact = $primaryContact;
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
     * @return \StructType\Tenant
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
     * @return \StructType\Tenant
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
     * @return \StructType\Tenant
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
