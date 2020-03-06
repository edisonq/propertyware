<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Owner StructType
 * @subpackage Structs
 */
class Owner extends PWObject
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
     * The altPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $altPhone;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyName;
    /**
     * The contactId
     * @var int
     */
    public $contactId;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The customFields
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:CustomField[]
     * - ref: soapenc:arrayType
     * @var \StructType\CustomField[]
     */
    public $customFields;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
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
     * The mobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mobile;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The nameOnCheck
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nameOnCheck;
    /**
     * The notes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Note[]
     * - ref: soapenc:arrayType
     * @var \StructType\Note[]
     */
    public $notes;
    /**
     * The percentageOwnership
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $percentageOwnership;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The taxID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $taxID;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * Constructor method for Owner
     * @uses Owner::setAddress()
     * @uses Owner::setAddress2()
     * @uses Owner::setAltPhone()
     * @uses Owner::setCity()
     * @uses Owner::setCompanyName()
     * @uses Owner::setContactId()
     * @uses Owner::setCountry()
     * @uses Owner::setCustomFields()
     * @uses Owner::setEmail()
     * @uses Owner::setFirstName()
     * @uses Owner::setLastName()
     * @uses Owner::setMobile()
     * @uses Owner::setName()
     * @uses Owner::setNameOnCheck()
     * @uses Owner::setNotes()
     * @uses Owner::setPercentageOwnership()
     * @uses Owner::setPhone()
     * @uses Owner::setState()
     * @uses Owner::setTaxID()
     * @uses Owner::setZip()
     * @param string $address
     * @param string $address2
     * @param string $altPhone
     * @param string $city
     * @param string $companyName
     * @param int $contactId
     * @param string $country
     * @param \StructType\CustomField[] $customFields
     * @param string $email
     * @param string $firstName
     * @param string $lastName
     * @param string $mobile
     * @param string $name
     * @param string $nameOnCheck
     * @param \StructType\Note[] $notes
     * @param float $percentageOwnership
     * @param string $phone
     * @param string $state
     * @param string $taxID
     * @param string $zip
     */
    public function __construct($address = null, $address2 = null, $altPhone = null, $city = null, $companyName = null, $contactId = null, $country = null, array $customFields = array(), $email = null, $firstName = null, $lastName = null, $mobile = null, $name = null, $nameOnCheck = null, array $notes = array(), $percentageOwnership = null, $phone = null, $state = null, $taxID = null, $zip = null)
    {
        $this
            ->setAddress($address)
            ->setAddress2($address2)
            ->setAltPhone($altPhone)
            ->setCity($city)
            ->setCompanyName($companyName)
            ->setContactId($contactId)
            ->setCountry($country)
            ->setCustomFields($customFields)
            ->setEmail($email)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setMobile($mobile)
            ->setName($name)
            ->setNameOnCheck($nameOnCheck)
            ->setNotes($notes)
            ->setPercentageOwnership($percentageOwnership)
            ->setPhone($phone)
            ->setState($state)
            ->setTaxID($taxID)
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * Get altPhone value
     * @return string|null
     */
    public function getAltPhone()
    {
        return $this->altPhone;
    }
    /**
     * Set altPhone value
     * @param string $altPhone
     * @return \StructType\Owner
     */
    public function setAltPhone($altPhone = null)
    {
        // validation for constraint: string
        if (!is_null($altPhone) && !is_string($altPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($altPhone)), __LINE__);
        }
        $this->altPhone = $altPhone;
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
     * @return \StructType\Owner
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \StructType\Owner
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId()
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \StructType\Owner
     */
    public function setContactId($contactId = null)
    {
        // validation for constraint: int
        if (!is_null($contactId) && !is_numeric($contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
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
     * @return \StructType\Owner
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
     * Get customFields value
     * @return \StructType\CustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }
    /**
     * Set customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField[] $customFields
     * @return \StructType\Owner
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $ownerCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$ownerCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($ownerCustomFieldsItem) ? get_class($ownerCustomFieldsItem) : gettype($ownerCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Owner
     */
    public function addToCustomFields(\StructType\CustomField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomField) {
            throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->customFields[] = $item;
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * Get nameOnCheck value
     * @return string|null
     */
    public function getNameOnCheck()
    {
        return $this->nameOnCheck;
    }
    /**
     * Set nameOnCheck value
     * @param string $nameOnCheck
     * @return \StructType\Owner
     */
    public function setNameOnCheck($nameOnCheck = null)
    {
        // validation for constraint: string
        if (!is_null($nameOnCheck) && !is_string($nameOnCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOnCheck)), __LINE__);
        }
        $this->nameOnCheck = $nameOnCheck;
        return $this;
    }
    /**
     * Get notes value
     * @return \StructType\Note[]|null
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @throws \InvalidArgumentException
     * @param \StructType\Note[] $notes
     * @return \StructType\Owner
     */
    public function setNotes(array $notes = array())
    {
        foreach ($notes as $ownerNotesItem) {
            // validation for constraint: itemType
            if (!$ownerNotesItem instanceof \StructType\Note) {
                throw new \InvalidArgumentException(sprintf('The notes property can only contain items of \StructType\Note, "%s" given', is_object($ownerNotesItem) ? get_class($ownerNotesItem) : gettype($ownerNotesItem)), __LINE__);
            }
        }
        $this->notes = $notes;
        return $this;
    }
    /**
     * Add item to notes value
     * @throws \InvalidArgumentException
     * @param \StructType\Note $item
     * @return \StructType\Owner
     */
    public function addToNotes(\StructType\Note $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Note) {
            throw new \InvalidArgumentException(sprintf('The notes property can only contain items of \StructType\Note, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notes[] = $item;
        return $this;
    }
    /**
     * Get percentageOwnership value
     * @return float|null
     */
    public function getPercentageOwnership()
    {
        return $this->percentageOwnership;
    }
    /**
     * Set percentageOwnership value
     * @param float $percentageOwnership
     * @return \StructType\Owner
     */
    public function setPercentageOwnership($percentageOwnership = null)
    {
        $this->percentageOwnership = $percentageOwnership;
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * Get taxID value
     * @return string|null
     */
    public function getTaxID()
    {
        return $this->taxID;
    }
    /**
     * Set taxID value
     * @param string $taxID
     * @return \StructType\Owner
     */
    public function setTaxID($taxID = null)
    {
        // validation for constraint: string
        if (!is_null($taxID) && !is_string($taxID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxID)), __LINE__);
        }
        $this->taxID = $taxID;
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
