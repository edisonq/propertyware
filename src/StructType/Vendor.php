<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor StructType
 * @subpackage Structs
 */
class Vendor extends AbstractDocumentHolder
{
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accountNumber;
    /**
     * The active
     * @var bool
     */
    public $active;
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
     * The billSplitAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $billSplitAccount;
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
     * The companyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyName;
    /**
     * The contacts
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Contact[]
     * - ref: soapenc:arrayType
     * @var \StructType\Contact[]
     */
    public $contacts;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The creditLimit
     * @var float
     */
    public $creditLimit;
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
     * The eligible1099
     * @var bool
     */
    public $eligible1099;
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
     * The otherPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $otherPhone;
    /**
     * The paymentTermDaysToPay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $paymentTermDaysToPay;
    /**
     * The paymentTerms
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentTerms;
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
     * The syncToVMM
     * @var bool
     */
    public $syncToVMM;
    /**
     * The taxID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $taxID;
    /**
     * The vendorType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vendorType;
    /**
     * The website
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $website;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * Constructor method for Vendor
     * @uses Vendor::setAccountNumber()
     * @uses Vendor::setActive()
     * @uses Vendor::setAddress()
     * @uses Vendor::setAddress2()
     * @uses Vendor::setBillSplitAccount()
     * @uses Vendor::setCity()
     * @uses Vendor::setComments()
     * @uses Vendor::setCompanyName()
     * @uses Vendor::setContacts()
     * @uses Vendor::setCountry()
     * @uses Vendor::setCreditLimit()
     * @uses Vendor::setCustomFields()
     * @uses Vendor::setEligible1099()
     * @uses Vendor::setEmail()
     * @uses Vendor::setFax()
     * @uses Vendor::setName()
     * @uses Vendor::setNameOnCheck()
     * @uses Vendor::setOtherPhone()
     * @uses Vendor::setPaymentTermDaysToPay()
     * @uses Vendor::setPaymentTerms()
     * @uses Vendor::setPhone()
     * @uses Vendor::setState()
     * @uses Vendor::setSyncToVMM()
     * @uses Vendor::setTaxID()
     * @uses Vendor::setVendorType()
     * @uses Vendor::setWebsite()
     * @uses Vendor::setZip()
     * @param string $accountNumber
     * @param bool $active
     * @param string $address
     * @param string $address2
     * @param \StructType\Account $billSplitAccount
     * @param string $city
     * @param string $comments
     * @param string $companyName
     * @param \StructType\Contact[] $contacts
     * @param string $country
     * @param float $creditLimit
     * @param \StructType\CustomField[] $customFields
     * @param bool $eligible1099
     * @param string $email
     * @param string $fax
     * @param string $name
     * @param string $nameOnCheck
     * @param string $otherPhone
     * @param int $paymentTermDaysToPay
     * @param string $paymentTerms
     * @param string $phone
     * @param string $state
     * @param bool $syncToVMM
     * @param string $taxID
     * @param string $vendorType
     * @param string $website
     * @param string $zip
     */
    public function __construct($accountNumber = null, $active = null, $address = null, $address2 = null, \StructType\Account $billSplitAccount = null, $city = null, $comments = null, $companyName = null, array $contacts = array(), $country = null, $creditLimit = null, array $customFields = array(), $eligible1099 = null, $email = null, $fax = null, $name = null, $nameOnCheck = null, $otherPhone = null, $paymentTermDaysToPay = null, $paymentTerms = null, $phone = null, $state = null, $syncToVMM = null, $taxID = null, $vendorType = null, $website = null, $zip = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setActive($active)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setBillSplitAccount($billSplitAccount)
            ->setCity($city)
            ->setComments($comments)
            ->setCompanyName($companyName)
            ->setContacts($contacts)
            ->setCountry($country)
            ->setCreditLimit($creditLimit)
            ->setCustomFields($customFields)
            ->setEligible1099($eligible1099)
            ->setEmail($email)
            ->setFax($fax)
            ->setName($name)
            ->setNameOnCheck($nameOnCheck)
            ->setOtherPhone($otherPhone)
            ->setPaymentTermDaysToPay($paymentTermDaysToPay)
            ->setPaymentTerms($paymentTerms)
            ->setPhone($phone)
            ->setState($state)
            ->setSyncToVMM($syncToVMM)
            ->setTaxID($taxID)
            ->setVendorType($vendorType)
            ->setWebsite($website)
            ->setZip($zip);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \StructType\Vendor
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \StructType\Vendor
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * Get billSplitAccount value
     * @return \StructType\Account|null
     */
    public function getBillSplitAccount()
    {
        return $this->billSplitAccount;
    }
    /**
     * Set billSplitAccount value
     * @param \StructType\Account $billSplitAccount
     * @return \StructType\Vendor
     */
    public function setBillSplitAccount(\StructType\Account $billSplitAccount = null)
    {
        $this->billSplitAccount = $billSplitAccount;
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * Get contacts value
     * @return \StructType\Contact[]|null
     */
    public function getContacts()
    {
        return $this->contacts;
    }
    /**
     * Set contacts value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact[] $contacts
     * @return \StructType\Vendor
     */
    public function setContacts(array $contacts = array())
    {
        foreach ($contacts as $vendorContactsItem) {
            // validation for constraint: itemType
            if (!$vendorContactsItem instanceof \StructType\Contact) {
                throw new \InvalidArgumentException(sprintf('The contacts property can only contain items of \StructType\Contact, "%s" given', is_object($vendorContactsItem) ? get_class($vendorContactsItem) : gettype($vendorContactsItem)), __LINE__);
            }
        }
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * Add item to contacts value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact $item
     * @return \StructType\Vendor
     */
    public function addToContacts(\StructType\Contact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contact) {
            throw new \InvalidArgumentException(sprintf('The contacts property can only contain items of \StructType\Contact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->contacts[] = $item;
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
     * @return \StructType\Vendor
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
     * Get creditLimit value
     * @return float|null
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param float $creditLimit
     * @return \StructType\Vendor
     */
    public function setCreditLimit($creditLimit = null)
    {
        $this->creditLimit = $creditLimit;
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
     * @return \StructType\Vendor
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $vendorCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$vendorCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($vendorCustomFieldsItem) ? get_class($vendorCustomFieldsItem) : gettype($vendorCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Vendor
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
     * Get eligible1099 value
     * @return bool|null
     */
    public function getEligible1099()
    {
        return $this->eligible1099;
    }
    /**
     * Set eligible1099 value
     * @param bool $eligible1099
     * @return \StructType\Vendor
     */
    public function setEligible1099($eligible1099 = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligible1099) && !is_bool($eligible1099)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligible1099)), __LINE__);
        }
        $this->eligible1099 = $eligible1099;
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * Get otherPhone value
     * @return string|null
     */
    public function getOtherPhone()
    {
        return $this->otherPhone;
    }
    /**
     * Set otherPhone value
     * @param string $otherPhone
     * @return \StructType\Vendor
     */
    public function setOtherPhone($otherPhone = null)
    {
        // validation for constraint: string
        if (!is_null($otherPhone) && !is_string($otherPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPhone)), __LINE__);
        }
        $this->otherPhone = $otherPhone;
        return $this;
    }
    /**
     * Get paymentTermDaysToPay value
     * @return int|null
     */
    public function getPaymentTermDaysToPay()
    {
        return $this->paymentTermDaysToPay;
    }
    /**
     * Set paymentTermDaysToPay value
     * @param int $paymentTermDaysToPay
     * @return \StructType\Vendor
     */
    public function setPaymentTermDaysToPay($paymentTermDaysToPay = null)
    {
        // validation for constraint: int
        if (!is_null($paymentTermDaysToPay) && !is_numeric($paymentTermDaysToPay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentTermDaysToPay)), __LINE__);
        }
        $this->paymentTermDaysToPay = $paymentTermDaysToPay;
        return $this;
    }
    /**
     * Get paymentTerms value
     * @return string|null
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }
    /**
     * Set paymentTerms value
     * @param string $paymentTerms
     * @return \StructType\Vendor
     */
    public function setPaymentTerms($paymentTerms = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTerms) && !is_string($paymentTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTerms)), __LINE__);
        }
        $this->paymentTerms = $paymentTerms;
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
     * Get syncToVMM value
     * @return bool|null
     */
    public function getSyncToVMM()
    {
        return $this->syncToVMM;
    }
    /**
     * Set syncToVMM value
     * @param bool $syncToVMM
     * @return \StructType\Vendor
     */
    public function setSyncToVMM($syncToVMM = null)
    {
        // validation for constraint: boolean
        if (!is_null($syncToVMM) && !is_bool($syncToVMM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($syncToVMM)), __LINE__);
        }
        $this->syncToVMM = $syncToVMM;
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
     * @return \StructType\Vendor
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
     * Get vendorType value
     * @return string|null
     */
    public function getVendorType()
    {
        return $this->vendorType;
    }
    /**
     * Set vendorType value
     * @param string $vendorType
     * @return \StructType\Vendor
     */
    public function setVendorType($vendorType = null)
    {
        // validation for constraint: string
        if (!is_null($vendorType) && !is_string($vendorType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorType)), __LINE__);
        }
        $this->vendorType = $vendorType;
        return $this;
    }
    /**
     * Get website value
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * Set website value
     * @param string $website
     * @return \StructType\Vendor
     */
    public function setWebsite($website = null)
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($website)), __LINE__);
        }
        $this->website = $website;
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
     * @return \StructType\Vendor
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
     * @return \StructType\Vendor
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
