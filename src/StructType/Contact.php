<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact StructType
 * @subpackage Structs
 */
class Contact extends AbstractDocumentHolder
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
     * The birthDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDate;
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
     * The company
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $company;
    /**
     * The completeName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $completeName;
    /**
     * The contactType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contactType;
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
     * The dirty
     * @var bool
     */
    public $dirty;
    /**
     * The driversLicenseNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $driversLicenseNumber;
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
     * The gender
     * @var int
     */
    public $gender;
    /**
     * The homePhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homePhone;
    /**
     * The jobTitle
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $jobTitle;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastName;
    /**
     * The middleName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $middleName;
    /**
     * The mobilePhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mobilePhone;
    /**
     * The nameOnCheck
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nameOnCheck;
    /**
     * The namedOnLease
     * @var bool
     */
    public $namedOnLease;
    /**
     * The pager
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pager;
    /**
     * The salutation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $salutation;
    /**
     * The searchTag
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $searchTag;
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
     * The suffix
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $suffix;
    /**
     * The webAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $webAddress;
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
     * Constructor method for Contact
     * @uses Contact::setAddress()
     * @uses Contact::setAddress2()
     * @uses Contact::setBirthDate()
     * @uses Contact::setCity()
     * @uses Contact::setComments()
     * @uses Contact::setCompany()
     * @uses Contact::setCompleteName()
     * @uses Contact::setContactType()
     * @uses Contact::setCountry()
     * @uses Contact::setCustomFields()
     * @uses Contact::setDirty()
     * @uses Contact::setDriversLicenseNumber()
     * @uses Contact::setEmail()
     * @uses Contact::setFax()
     * @uses Contact::setFirstName()
     * @uses Contact::setGender()
     * @uses Contact::setHomePhone()
     * @uses Contact::setJobTitle()
     * @uses Contact::setLastName()
     * @uses Contact::setMiddleName()
     * @uses Contact::setMobilePhone()
     * @uses Contact::setNameOnCheck()
     * @uses Contact::setNamedOnLease()
     * @uses Contact::setPager()
     * @uses Contact::setSalutation()
     * @uses Contact::setSearchTag()
     * @uses Contact::setSsn()
     * @uses Contact::setState()
     * @uses Contact::setSuffix()
     * @uses Contact::setWebAddress()
     * @uses Contact::setWorkPhone()
     * @uses Contact::setZip()
     * @param string $address
     * @param string $address2
     * @param string $birthDate
     * @param string $city
     * @param string $comments
     * @param string $company
     * @param string $completeName
     * @param string $contactType
     * @param string $country
     * @param \StructType\CustomField[] $customFields
     * @param bool $dirty
     * @param string $driversLicenseNumber
     * @param string $email
     * @param string $fax
     * @param string $firstName
     * @param int $gender
     * @param string $homePhone
     * @param string $jobTitle
     * @param string $lastName
     * @param string $middleName
     * @param string $mobilePhone
     * @param string $nameOnCheck
     * @param bool $namedOnLease
     * @param string $pager
     * @param string $salutation
     * @param string $searchTag
     * @param string $ssn
     * @param string $state
     * @param string $suffix
     * @param string $webAddress
     * @param string $workPhone
     * @param string $zip
     */
    public function __construct($address = null, $address2 = null, $birthDate = null, $city = null, $comments = null, $company = null, $completeName = null, $contactType = null, $country = null, array $customFields = array(), $dirty = null, $driversLicenseNumber = null, $email = null, $fax = null, $firstName = null, $gender = null, $homePhone = null, $jobTitle = null, $lastName = null, $middleName = null, $mobilePhone = null, $nameOnCheck = null, $namedOnLease = null, $pager = null, $salutation = null, $searchTag = null, $ssn = null, $state = null, $suffix = null, $webAddress = null, $workPhone = null, $zip = null)
    {
        $this
            ->setAddress($address)
            ->setAddress2($address2)
            ->setBirthDate($birthDate)
            ->setCity($city)
            ->setComments($comments)
            ->setCompany($company)
            ->setCompleteName($completeName)
            ->setContactType($contactType)
            ->setCountry($country)
            ->setCustomFields($customFields)
            ->setDirty($dirty)
            ->setDriversLicenseNumber($driversLicenseNumber)
            ->setEmail($email)
            ->setFax($fax)
            ->setFirstName($firstName)
            ->setGender($gender)
            ->setHomePhone($homePhone)
            ->setJobTitle($jobTitle)
            ->setLastName($lastName)
            ->setMiddleName($middleName)
            ->setMobilePhone($mobilePhone)
            ->setNameOnCheck($nameOnCheck)
            ->setNamedOnLease($namedOnLease)
            ->setPager($pager)
            ->setSalutation($salutation)
            ->setSearchTag($searchTag)
            ->setSsn($ssn)
            ->setState($state)
            ->setSuffix($suffix)
            ->setWebAddress($webAddress)
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * Get birthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * Set birthDate value
     * @param string $birthDate
     * @return \StructType\Contact
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->birthDate = $birthDate;
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * Get completeName value
     * @return string|null
     */
    public function getCompleteName()
    {
        return $this->completeName;
    }
    /**
     * Set completeName value
     * @param string $completeName
     * @return \StructType\Contact
     */
    public function setCompleteName($completeName = null)
    {
        // validation for constraint: string
        if (!is_null($completeName) && !is_string($completeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($completeName)), __LINE__);
        }
        $this->completeName = $completeName;
        return $this;
    }
    /**
     * Get contactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->contactType;
    }
    /**
     * Set contactType value
     * @param string $contactType
     * @return \StructType\Contact
     */
    public function setContactType($contactType = null)
    {
        // validation for constraint: string
        if (!is_null($contactType) && !is_string($contactType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactType)), __LINE__);
        }
        $this->contactType = $contactType;
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $contactCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$contactCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($contactCustomFieldsItem) ? get_class($contactCustomFieldsItem) : gettype($contactCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Contact
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
     * Get dirty value
     * @return bool|null
     */
    public function getDirty()
    {
        return $this->dirty;
    }
    /**
     * Set dirty value
     * @param bool $dirty
     * @return \StructType\Contact
     */
    public function setDirty($dirty = null)
    {
        // validation for constraint: boolean
        if (!is_null($dirty) && !is_bool($dirty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dirty)), __LINE__);
        }
        $this->dirty = $dirty;
        return $this;
    }
    /**
     * Get driversLicenseNumber value
     * @return string|null
     */
    public function getDriversLicenseNumber()
    {
        return $this->driversLicenseNumber;
    }
    /**
     * Set driversLicenseNumber value
     * @param string $driversLicenseNumber
     * @return \StructType\Contact
     */
    public function setDriversLicenseNumber($driversLicenseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($driversLicenseNumber) && !is_string($driversLicenseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driversLicenseNumber)), __LINE__);
        }
        $this->driversLicenseNumber = $driversLicenseNumber;
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * Get gender value
     * @return int|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \StructType\Contact
     */
    public function setGender($gender = null)
    {
        // validation for constraint: int
        if (!is_null($gender) && !is_numeric($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
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
     * @return \StructType\Contact
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
     * Get jobTitle value
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }
    /**
     * Set jobTitle value
     * @param string $jobTitle
     * @return \StructType\Contact
     */
    public function setJobTitle($jobTitle = null)
    {
        // validation for constraint: string
        if (!is_null($jobTitle) && !is_string($jobTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobTitle)), __LINE__);
        }
        $this->jobTitle = $jobTitle;
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
     * @return \StructType\Contact
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
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \StructType\Contact
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * Get mobilePhone value
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }
    /**
     * Set mobilePhone value
     * @param string $mobilePhone
     * @return \StructType\Contact
     */
    public function setMobilePhone($mobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobilePhone)), __LINE__);
        }
        $this->mobilePhone = $mobilePhone;
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
     * @return \StructType\Contact
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
     * Get namedOnLease value
     * @return bool|null
     */
    public function getNamedOnLease()
    {
        return $this->namedOnLease;
    }
    /**
     * Set namedOnLease value
     * @param bool $namedOnLease
     * @return \StructType\Contact
     */
    public function setNamedOnLease($namedOnLease = null)
    {
        // validation for constraint: boolean
        if (!is_null($namedOnLease) && !is_bool($namedOnLease)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($namedOnLease)), __LINE__);
        }
        $this->namedOnLease = $namedOnLease;
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
     * @return \StructType\Contact
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
     * Get salutation value
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \StructType\Contact
     */
    public function setSalutation($salutation = null)
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * Get searchTag value
     * @return string|null
     */
    public function getSearchTag()
    {
        return $this->searchTag;
    }
    /**
     * Set searchTag value
     * @param string $searchTag
     * @return \StructType\Contact
     */
    public function setSearchTag($searchTag = null)
    {
        // validation for constraint: string
        if (!is_null($searchTag) && !is_string($searchTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchTag)), __LINE__);
        }
        $this->searchTag = $searchTag;
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * Get suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
    /**
     * Set suffix value
     * @param string $suffix
     * @return \StructType\Contact
     */
    public function setSuffix($suffix = null)
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suffix)), __LINE__);
        }
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * Get webAddress value
     * @return string|null
     */
    public function getWebAddress()
    {
        return $this->webAddress;
    }
    /**
     * Set webAddress value
     * @param string $webAddress
     * @return \StructType\Contact
     */
    public function setWebAddress($webAddress = null)
    {
        // validation for constraint: string
        if (!is_null($webAddress) && !is_string($webAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webAddress)), __LINE__);
        }
        $this->webAddress = $webAddress;
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
     * @return \StructType\Contact
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
