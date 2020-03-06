<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 */
class User extends PWObject
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
     * The alertEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $alertEmail;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The company
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $company;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
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
     * The firstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The homePhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homePhone;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastName;
    /**
     * The mobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mobile;
    /**
     * The orgId
     * @var int
     */
    public $orgId;
    /**
     * The pager
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pager;
    /**
     * The propertyRestricted
     * @var bool
     */
    public $propertyRestricted;
    /**
     * The replyToEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $replyToEmail;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The systemTimeZoneId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $systemTimeZoneId;
    /**
     * The userTimeZoneId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $userTimeZoneId;
    /**
     * The workPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $workPhone;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * Constructor method for User
     * @uses User::setAddress()
     * @uses User::setAddress2()
     * @uses User::setAlertEmail()
     * @uses User::setCity()
     * @uses User::setCompany()
     * @uses User::setCountry()
     * @uses User::setEmail()
     * @uses User::setFax()
     * @uses User::setFirstName()
     * @uses User::setHomePhone()
     * @uses User::setLastName()
     * @uses User::setMobile()
     * @uses User::setOrgId()
     * @uses User::setPager()
     * @uses User::setPropertyRestricted()
     * @uses User::setReplyToEmail()
     * @uses User::setState()
     * @uses User::setStatus()
     * @uses User::setSystemTimeZoneId()
     * @uses User::setUserTimeZoneId()
     * @uses User::setWorkPhone()
     * @uses User::setZip()
     * @param string $address
     * @param string $address2
     * @param string $alertEmail
     * @param string $city
     * @param string $company
     * @param string $country
     * @param string $email
     * @param string $fax
     * @param string $firstName
     * @param string $homePhone
     * @param string $lastName
     * @param string $mobile
     * @param int $orgId
     * @param string $pager
     * @param bool $propertyRestricted
     * @param string $replyToEmail
     * @param string $state
     * @param string $status
     * @param string $systemTimeZoneId
     * @param string $userTimeZoneId
     * @param string $workPhone
     * @param string $zip
     */
    public function __construct($address = null, $address2 = null, $alertEmail = null, $city = null, $company = null, $country = null, $email = null, $fax = null, $firstName = null, $homePhone = null, $lastName = null, $mobile = null, $orgId = null, $pager = null, $propertyRestricted = null, $replyToEmail = null, $state = null, $status = null, $systemTimeZoneId = null, $userTimeZoneId = null, $workPhone = null, $zip = null)
    {
        $this
            ->setAddress($address)
            ->setAddress2($address2)
            ->setAlertEmail($alertEmail)
            ->setCity($city)
            ->setCompany($company)
            ->setCountry($country)
            ->setEmail($email)
            ->setFax($fax)
            ->setFirstName($firstName)
            ->setHomePhone($homePhone)
            ->setLastName($lastName)
            ->setMobile($mobile)
            ->setOrgId($orgId)
            ->setPager($pager)
            ->setPropertyRestricted($propertyRestricted)
            ->setReplyToEmail($replyToEmail)
            ->setState($state)
            ->setStatus($status)
            ->setSystemTimeZoneId($systemTimeZoneId)
            ->setUserTimeZoneId($userTimeZoneId)
            ->setWorkPhone($workPhone)
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * Get alertEmail value
     * @return string|null
     */
    public function getAlertEmail()
    {
        return $this->alertEmail;
    }
    /**
     * Set alertEmail value
     * @param string $alertEmail
     * @return \StructType\User
     */
    public function setAlertEmail($alertEmail = null)
    {
        // validation for constraint: string
        if (!is_null($alertEmail) && !is_string($alertEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertEmail)), __LINE__);
        }
        $this->alertEmail = $alertEmail;
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
     * @return \StructType\User
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
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \StructType\User
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->company = $company;
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * Get homePhone value
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }
    /**
     * Set homePhone value
     * @param string $homePhone
     * @return \StructType\User
     */
    public function setHomePhone($homePhone = null)
    {
        // validation for constraint: string
        if (!is_null($homePhone) && !is_string($homePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($homePhone)), __LINE__);
        }
        $this->homePhone = $homePhone;
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
     * @return \StructType\User
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
     * Get mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \StructType\User
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Get orgId value
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->orgId;
    }
    /**
     * Set orgId value
     * @param int $orgId
     * @return \StructType\User
     */
    public function setOrgId($orgId = null)
    {
        // validation for constraint: int
        if (!is_null($orgId) && !is_numeric($orgId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orgId)), __LINE__);
        }
        $this->orgId = $orgId;
        return $this;
    }
    /**
     * Get pager value
     * @return string|null
     */
    public function getPager()
    {
        return $this->pager;
    }
    /**
     * Set pager value
     * @param string $pager
     * @return \StructType\User
     */
    public function setPager($pager = null)
    {
        // validation for constraint: string
        if (!is_null($pager) && !is_string($pager)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pager)), __LINE__);
        }
        $this->pager = $pager;
        return $this;
    }
    /**
     * Get propertyRestricted value
     * @return bool|null
     */
    public function getPropertyRestricted()
    {
        return $this->propertyRestricted;
    }
    /**
     * Set propertyRestricted value
     * @param bool $propertyRestricted
     * @return \StructType\User
     */
    public function setPropertyRestricted($propertyRestricted = null)
    {
        // validation for constraint: boolean
        if (!is_null($propertyRestricted) && !is_bool($propertyRestricted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($propertyRestricted)), __LINE__);
        }
        $this->propertyRestricted = $propertyRestricted;
        return $this;
    }
    /**
     * Get replyToEmail value
     * @return string|null
     */
    public function getReplyToEmail()
    {
        return $this->replyToEmail;
    }
    /**
     * Set replyToEmail value
     * @param string $replyToEmail
     * @return \StructType\User
     */
    public function setReplyToEmail($replyToEmail = null)
    {
        // validation for constraint: string
        if (!is_null($replyToEmail) && !is_string($replyToEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyToEmail)), __LINE__);
        }
        $this->replyToEmail = $replyToEmail;
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
     * @return \StructType\User
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \StructType\User
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemTimeZoneId value
     * @return string|null
     */
    public function getSystemTimeZoneId()
    {
        return $this->systemTimeZoneId;
    }
    /**
     * Set systemTimeZoneId value
     * @param string $systemTimeZoneId
     * @return \StructType\User
     */
    public function setSystemTimeZoneId($systemTimeZoneId = null)
    {
        // validation for constraint: string
        if (!is_null($systemTimeZoneId) && !is_string($systemTimeZoneId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($systemTimeZoneId)), __LINE__);
        }
        $this->systemTimeZoneId = $systemTimeZoneId;
        return $this;
    }
    /**
     * Get userTimeZoneId value
     * @return string|null
     */
    public function getUserTimeZoneId()
    {
        return $this->userTimeZoneId;
    }
    /**
     * Set userTimeZoneId value
     * @param string $userTimeZoneId
     * @return \StructType\User
     */
    public function setUserTimeZoneId($userTimeZoneId = null)
    {
        // validation for constraint: string
        if (!is_null($userTimeZoneId) && !is_string($userTimeZoneId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userTimeZoneId)), __LINE__);
        }
        $this->userTimeZoneId = $userTimeZoneId;
        return $this;
    }
    /**
     * Get workPhone value
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }
    /**
     * Set workPhone value
     * @param string $workPhone
     * @return \StructType\User
     */
    public function setWorkPhone($workPhone = null)
    {
        // validation for constraint: string
        if (!is_null($workPhone) && !is_string($workPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($workPhone)), __LINE__);
        }
        $this->workPhone = $workPhone;
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
     * @return \StructType\User
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
     * @return \StructType\User
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
