<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bank StructType
 * @subpackage Structs
 */
class Bank extends PWObject
{
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accountNumber;
    /**
     * The accountType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accountType;
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
     * The bankAccountHolder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountHolder;
    /**
     * The bankAccountHolderSSN
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountHolderSSN;
    /**
     * The bankAccountTypeAsInt
     * @var int
     */
    public $bankAccountTypeAsInt;
    /**
     * The bankGLAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $bankGLAccount;
    /**
     * The bankGLAccountCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankGLAccountCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The depositMICRLine
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositMICRLine;
    /**
     * The depositTicketType
     * @var int
     */
    public $depositTicketType;
    /**
     * The institutionName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $institutionName;
    /**
     * The mappedGLAccountCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mappedGLAccountCode;
    /**
     * The routingNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $routingNumber;
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
     * Constructor method for Bank
     * @uses Bank::setAccountNumber()
     * @uses Bank::setAccountType()
     * @uses Bank::setAddress()
     * @uses Bank::setAddress2()
     * @uses Bank::setBankAccountHolder()
     * @uses Bank::setBankAccountHolderSSN()
     * @uses Bank::setBankAccountTypeAsInt()
     * @uses Bank::setBankGLAccount()
     * @uses Bank::setBankGLAccountCode()
     * @uses Bank::setCity()
     * @uses Bank::setDepositMICRLine()
     * @uses Bank::setDepositTicketType()
     * @uses Bank::setInstitutionName()
     * @uses Bank::setMappedGLAccountCode()
     * @uses Bank::setRoutingNumber()
     * @uses Bank::setState()
     * @uses Bank::setZip()
     * @param string $accountNumber
     * @param string $accountType
     * @param string $address
     * @param string $address2
     * @param string $bankAccountHolder
     * @param string $bankAccountHolderSSN
     * @param int $bankAccountTypeAsInt
     * @param \StructType\Account $bankGLAccount
     * @param string $bankGLAccountCode
     * @param string $city
     * @param string $depositMICRLine
     * @param int $depositTicketType
     * @param string $institutionName
     * @param string $mappedGLAccountCode
     * @param string $routingNumber
     * @param string $state
     * @param string $zip
     */
    public function __construct($accountNumber = null, $accountType = null, $address = null, $address2 = null, $bankAccountHolder = null, $bankAccountHolderSSN = null, $bankAccountTypeAsInt = null, \StructType\Account $bankGLAccount = null, $bankGLAccountCode = null, $city = null, $depositMICRLine = null, $depositTicketType = null, $institutionName = null, $mappedGLAccountCode = null, $routingNumber = null, $state = null, $zip = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setAccountType($accountType)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setBankAccountHolder($bankAccountHolder)
            ->setBankAccountHolderSSN($bankAccountHolderSSN)
            ->setBankAccountTypeAsInt($bankAccountTypeAsInt)
            ->setBankGLAccount($bankGLAccount)
            ->setBankGLAccountCode($bankGLAccountCode)
            ->setCity($city)
            ->setDepositMICRLine($depositMICRLine)
            ->setDepositTicketType($depositTicketType)
            ->setInstitutionName($institutionName)
            ->setMappedGLAccountCode($mappedGLAccountCode)
            ->setRoutingNumber($routingNumber)
            ->setState($state)
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
     * @return \StructType\Bank
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
     * Get accountType value
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \StructType\Bank
     */
    public function setAccountType($accountType = null)
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * Get bankAccountHolder value
     * @return string|null
     */
    public function getBankAccountHolder()
    {
        return $this->bankAccountHolder;
    }
    /**
     * Set bankAccountHolder value
     * @param string $bankAccountHolder
     * @return \StructType\Bank
     */
    public function setBankAccountHolder($bankAccountHolder = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountHolder) && !is_string($bankAccountHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountHolder)), __LINE__);
        }
        $this->bankAccountHolder = $bankAccountHolder;
        return $this;
    }
    /**
     * Get bankAccountHolderSSN value
     * @return string|null
     */
    public function getBankAccountHolderSSN()
    {
        return $this->bankAccountHolderSSN;
    }
    /**
     * Set bankAccountHolderSSN value
     * @param string $bankAccountHolderSSN
     * @return \StructType\Bank
     */
    public function setBankAccountHolderSSN($bankAccountHolderSSN = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountHolderSSN) && !is_string($bankAccountHolderSSN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountHolderSSN)), __LINE__);
        }
        $this->bankAccountHolderSSN = $bankAccountHolderSSN;
        return $this;
    }
    /**
     * Get bankAccountTypeAsInt value
     * @return int|null
     */
    public function getBankAccountTypeAsInt()
    {
        return $this->bankAccountTypeAsInt;
    }
    /**
     * Set bankAccountTypeAsInt value
     * @param int $bankAccountTypeAsInt
     * @return \StructType\Bank
     */
    public function setBankAccountTypeAsInt($bankAccountTypeAsInt = null)
    {
        // validation for constraint: int
        if (!is_null($bankAccountTypeAsInt) && !is_numeric($bankAccountTypeAsInt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bankAccountTypeAsInt)), __LINE__);
        }
        $this->bankAccountTypeAsInt = $bankAccountTypeAsInt;
        return $this;
    }
    /**
     * Get bankGLAccount value
     * @return \StructType\Account|null
     */
    public function getBankGLAccount()
    {
        return $this->bankGLAccount;
    }
    /**
     * Set bankGLAccount value
     * @param \StructType\Account $bankGLAccount
     * @return \StructType\Bank
     */
    public function setBankGLAccount(\StructType\Account $bankGLAccount = null)
    {
        $this->bankGLAccount = $bankGLAccount;
        return $this;
    }
    /**
     * Get bankGLAccountCode value
     * @return string|null
     */
    public function getBankGLAccountCode()
    {
        return $this->bankGLAccountCode;
    }
    /**
     * Set bankGLAccountCode value
     * @param string $bankGLAccountCode
     * @return \StructType\Bank
     */
    public function setBankGLAccountCode($bankGLAccountCode = null)
    {
        // validation for constraint: string
        if (!is_null($bankGLAccountCode) && !is_string($bankGLAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankGLAccountCode)), __LINE__);
        }
        $this->bankGLAccountCode = $bankGLAccountCode;
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
     * @return \StructType\Bank
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
     * Get depositMICRLine value
     * @return string|null
     */
    public function getDepositMICRLine()
    {
        return $this->depositMICRLine;
    }
    /**
     * Set depositMICRLine value
     * @param string $depositMICRLine
     * @return \StructType\Bank
     */
    public function setDepositMICRLine($depositMICRLine = null)
    {
        // validation for constraint: string
        if (!is_null($depositMICRLine) && !is_string($depositMICRLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositMICRLine)), __LINE__);
        }
        $this->depositMICRLine = $depositMICRLine;
        return $this;
    }
    /**
     * Get depositTicketType value
     * @return int|null
     */
    public function getDepositTicketType()
    {
        return $this->depositTicketType;
    }
    /**
     * Set depositTicketType value
     * @param int $depositTicketType
     * @return \StructType\Bank
     */
    public function setDepositTicketType($depositTicketType = null)
    {
        // validation for constraint: int
        if (!is_null($depositTicketType) && !is_numeric($depositTicketType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($depositTicketType)), __LINE__);
        }
        $this->depositTicketType = $depositTicketType;
        return $this;
    }
    /**
     * Get institutionName value
     * @return string|null
     */
    public function getInstitutionName()
    {
        return $this->institutionName;
    }
    /**
     * Set institutionName value
     * @param string $institutionName
     * @return \StructType\Bank
     */
    public function setInstitutionName($institutionName = null)
    {
        // validation for constraint: string
        if (!is_null($institutionName) && !is_string($institutionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($institutionName)), __LINE__);
        }
        $this->institutionName = $institutionName;
        return $this;
    }
    /**
     * Get mappedGLAccountCode value
     * @return string|null
     */
    public function getMappedGLAccountCode()
    {
        return $this->mappedGLAccountCode;
    }
    /**
     * Set mappedGLAccountCode value
     * @param string $mappedGLAccountCode
     * @return \StructType\Bank
     */
    public function setMappedGLAccountCode($mappedGLAccountCode = null)
    {
        // validation for constraint: string
        if (!is_null($mappedGLAccountCode) && !is_string($mappedGLAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mappedGLAccountCode)), __LINE__);
        }
        $this->mappedGLAccountCode = $mappedGLAccountCode;
        return $this;
    }
    /**
     * Get routingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }
    /**
     * Set routingNumber value
     * @param string $routingNumber
     * @return \StructType\Bank
     */
    public function setRoutingNumber($routingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingNumber)), __LINE__);
        }
        $this->routingNumber = $routingNumber;
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
