<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer StructType
 * @subpackage Structs
 */
class Customer extends PWObject
{
    /**
     * The address1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address1;
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
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The customerType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customerType;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The fax
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fax;
    /**
     * The mailToName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mailToName;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The qbListID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbListID;
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
     * Constructor method for Customer
     * @uses Customer::setAddress1()
     * @uses Customer::setAddress2()
     * @uses Customer::setCity()
     * @uses Customer::setComments()
     * @uses Customer::setCountry()
     * @uses Customer::setCustomerType()
     * @uses Customer::setEmail()
     * @uses Customer::setFax()
     * @uses Customer::setMailToName()
     * @uses Customer::setName()
     * @uses Customer::setPhone()
     * @uses Customer::setQbListID()
     * @uses Customer::setState()
     * @uses Customer::setZip()
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $comments
     * @param string $country
     * @param string $customerType
     * @param string $email
     * @param string $fax
     * @param string $mailToName
     * @param string $name
     * @param string $phone
     * @param string $qbListID
     * @param string $state
     * @param string $zip
     */
    public function __construct($address1 = null, $address2 = null, $city = null, $comments = null, $country = null, $customerType = null, $email = null, $fax = null, $mailToName = null, $name = null, $phone = null, $qbListID = null, $state = null, $zip = null)
    {
        $this
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCity($city)
            ->setComments($comments)
            ->setCountry($country)
            ->setCustomerType($customerType)
            ->setEmail($email)
            ->setFax($fax)
            ->setMailToName($mailToName)
            ->setName($name)
            ->setPhone($phone)
            ->setQbListID($qbListID)
            ->setState($state)
            ->setZip($zip);
    }
    /**
     * Get address1 value
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }
    /**
     * Set address1 value
     * @param string $address1
     * @return \StructType\Customer
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address1)), __LINE__);
        }
        $this->address1 = $address1;
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
     * @return \StructType\Customer
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
     * @return \StructType\Customer
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
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \StructType\Customer
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
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
     * @return \StructType\Customer
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
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \StructType\Customer
     */
    public function setCustomerType($customerType = null)
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \StructType\Customer
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \StructType\Customer
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        return $this;
    }
    /**
     * Get mailToName value
     * @return string|null
     */
    public function getMailToName()
    {
        return $this->mailToName;
    }
    /**
     * Set mailToName value
     * @param string $mailToName
     * @return \StructType\Customer
     */
    public function setMailToName($mailToName = null)
    {
        // validation for constraint: string
        if (!is_null($mailToName) && !is_string($mailToName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailToName)), __LINE__);
        }
        $this->mailToName = $mailToName;
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
     * @return \StructType\Customer
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
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \StructType\Customer
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get qbListID value
     * @return string|null
     */
    public function getQbListID()
    {
        return $this->qbListID;
    }
    /**
     * Set qbListID value
     * @param string $qbListID
     * @return \StructType\Customer
     */
    public function setQbListID($qbListID = null)
    {
        // validation for constraint: string
        if (!is_null($qbListID) && !is_string($qbListID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbListID)), __LINE__);
        }
        $this->qbListID = $qbListID;
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
     * @return \StructType\Customer
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
     * @return \StructType\Customer
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
     * @return \StructType\Customer
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
