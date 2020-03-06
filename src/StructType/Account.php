<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * @subpackage Structs
 */
class Account extends PWObject
{
    /**
     * The accountCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accountCode;
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
     * The active
     * @var bool
     */
    public $active;
    /**
     * The bankAccountHolder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountHolder;
    /**
     * The bankAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccountNumber;
    /**
     * The bankAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAddress;
    /**
     * The bankAddress2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAddress2;
    /**
     * The bankCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankCity;
    /**
     * The bankInstitution
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankInstitution;
    /**
     * The bankRoutingNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankRoutingNumber;
    /**
     * The bankState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankState;
    /**
     * The bankZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankZip;
    /**
     * The lateFeeApplicable
     * @var bool
     */
    public $lateFeeApplicable;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The parentRef
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $parentRef;
    /**
     * The paymentPriority
     * @var int
     */
    public $paymentPriority;
    /**
     * The transferBalanceToRetainedEarnings
     * @var bool
     */
    public $transferBalanceToRetainedEarnings;
    /**
     * Constructor method for Account
     * @uses Account::setAccountCode()
     * @uses Account::setAccountNumber()
     * @uses Account::setAccountType()
     * @uses Account::setActive()
     * @uses Account::setBankAccountHolder()
     * @uses Account::setBankAccountNumber()
     * @uses Account::setBankAddress()
     * @uses Account::setBankAddress2()
     * @uses Account::setBankCity()
     * @uses Account::setBankInstitution()
     * @uses Account::setBankRoutingNumber()
     * @uses Account::setBankState()
     * @uses Account::setBankZip()
     * @uses Account::setLateFeeApplicable()
     * @uses Account::setName()
     * @uses Account::setParentRef()
     * @uses Account::setPaymentPriority()
     * @uses Account::setTransferBalanceToRetainedEarnings()
     * @param string $accountCode
     * @param string $accountNumber
     * @param string $accountType
     * @param bool $active
     * @param string $bankAccountHolder
     * @param string $bankAccountNumber
     * @param string $bankAddress
     * @param string $bankAddress2
     * @param string $bankCity
     * @param string $bankInstitution
     * @param string $bankRoutingNumber
     * @param string $bankState
     * @param string $bankZip
     * @param bool $lateFeeApplicable
     * @param string $name
     * @param string $parentRef
     * @param int $paymentPriority
     * @param bool $transferBalanceToRetainedEarnings
     */
    public function __construct($accountCode = null, $accountNumber = null, $accountType = null, $active = null, $bankAccountHolder = null, $bankAccountNumber = null, $bankAddress = null, $bankAddress2 = null, $bankCity = null, $bankInstitution = null, $bankRoutingNumber = null, $bankState = null, $bankZip = null, $lateFeeApplicable = null, $name = null, $parentRef = null, $paymentPriority = null, $transferBalanceToRetainedEarnings = null)
    {
        $this
            ->setAccountCode($accountCode)
            ->setAccountNumber($accountNumber)
            ->setAccountType($accountType)
            ->setActive($active)
            ->setBankAccountHolder($bankAccountHolder)
            ->setBankAccountNumber($bankAccountNumber)
            ->setBankAddress($bankAddress)
            ->setBankAddress2($bankAddress2)
            ->setBankCity($bankCity)
            ->setBankInstitution($bankInstitution)
            ->setBankRoutingNumber($bankRoutingNumber)
            ->setBankState($bankState)
            ->setBankZip($bankZip)
            ->setLateFeeApplicable($lateFeeApplicable)
            ->setName($name)
            ->setParentRef($parentRef)
            ->setPaymentPriority($paymentPriority)
            ->setTransferBalanceToRetainedEarnings($transferBalanceToRetainedEarnings);
    }
    /**
     * Get accountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }
    /**
     * Set accountCode value
     * @param string $accountCode
     * @return \StructType\Account
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        $this->accountCode = $accountCode;
        return $this;
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get bankAddress value
     * @return string|null
     */
    public function getBankAddress()
    {
        return $this->bankAddress;
    }
    /**
     * Set bankAddress value
     * @param string $bankAddress
     * @return \StructType\Account
     */
    public function setBankAddress($bankAddress = null)
    {
        // validation for constraint: string
        if (!is_null($bankAddress) && !is_string($bankAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAddress)), __LINE__);
        }
        $this->bankAddress = $bankAddress;
        return $this;
    }
    /**
     * Get bankAddress2 value
     * @return string|null
     */
    public function getBankAddress2()
    {
        return $this->bankAddress2;
    }
    /**
     * Set bankAddress2 value
     * @param string $bankAddress2
     * @return \StructType\Account
     */
    public function setBankAddress2($bankAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($bankAddress2) && !is_string($bankAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAddress2)), __LINE__);
        }
        $this->bankAddress2 = $bankAddress2;
        return $this;
    }
    /**
     * Get bankCity value
     * @return string|null
     */
    public function getBankCity()
    {
        return $this->bankCity;
    }
    /**
     * Set bankCity value
     * @param string $bankCity
     * @return \StructType\Account
     */
    public function setBankCity($bankCity = null)
    {
        // validation for constraint: string
        if (!is_null($bankCity) && !is_string($bankCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankCity)), __LINE__);
        }
        $this->bankCity = $bankCity;
        return $this;
    }
    /**
     * Get bankInstitution value
     * @return string|null
     */
    public function getBankInstitution()
    {
        return $this->bankInstitution;
    }
    /**
     * Set bankInstitution value
     * @param string $bankInstitution
     * @return \StructType\Account
     */
    public function setBankInstitution($bankInstitution = null)
    {
        // validation for constraint: string
        if (!is_null($bankInstitution) && !is_string($bankInstitution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankInstitution)), __LINE__);
        }
        $this->bankInstitution = $bankInstitution;
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
     * @return \StructType\Account
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
     * Get bankState value
     * @return string|null
     */
    public function getBankState()
    {
        return $this->bankState;
    }
    /**
     * Set bankState value
     * @param string $bankState
     * @return \StructType\Account
     */
    public function setBankState($bankState = null)
    {
        // validation for constraint: string
        if (!is_null($bankState) && !is_string($bankState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankState)), __LINE__);
        }
        $this->bankState = $bankState;
        return $this;
    }
    /**
     * Get bankZip value
     * @return string|null
     */
    public function getBankZip()
    {
        return $this->bankZip;
    }
    /**
     * Set bankZip value
     * @param string $bankZip
     * @return \StructType\Account
     */
    public function setBankZip($bankZip = null)
    {
        // validation for constraint: string
        if (!is_null($bankZip) && !is_string($bankZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankZip)), __LINE__);
        }
        $this->bankZip = $bankZip;
        return $this;
    }
    /**
     * Get lateFeeApplicable value
     * @return bool|null
     */
    public function getLateFeeApplicable()
    {
        return $this->lateFeeApplicable;
    }
    /**
     * Set lateFeeApplicable value
     * @param bool $lateFeeApplicable
     * @return \StructType\Account
     */
    public function setLateFeeApplicable($lateFeeApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($lateFeeApplicable) && !is_bool($lateFeeApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lateFeeApplicable)), __LINE__);
        }
        $this->lateFeeApplicable = $lateFeeApplicable;
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
     * @return \StructType\Account
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
     * Get parentRef value
     * @return string|null
     */
    public function getParentRef()
    {
        return $this->parentRef;
    }
    /**
     * Set parentRef value
     * @param string $parentRef
     * @return \StructType\Account
     */
    public function setParentRef($parentRef = null)
    {
        // validation for constraint: string
        if (!is_null($parentRef) && !is_string($parentRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentRef)), __LINE__);
        }
        $this->parentRef = $parentRef;
        return $this;
    }
    /**
     * Get paymentPriority value
     * @return int|null
     */
    public function getPaymentPriority()
    {
        return $this->paymentPriority;
    }
    /**
     * Set paymentPriority value
     * @param int $paymentPriority
     * @return \StructType\Account
     */
    public function setPaymentPriority($paymentPriority = null)
    {
        // validation for constraint: int
        if (!is_null($paymentPriority) && !is_numeric($paymentPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentPriority)), __LINE__);
        }
        $this->paymentPriority = $paymentPriority;
        return $this;
    }
    /**
     * Get transferBalanceToRetainedEarnings value
     * @return bool|null
     */
    public function getTransferBalanceToRetainedEarnings()
    {
        return $this->transferBalanceToRetainedEarnings;
    }
    /**
     * Set transferBalanceToRetainedEarnings value
     * @param bool $transferBalanceToRetainedEarnings
     * @return \StructType\Account
     */
    public function setTransferBalanceToRetainedEarnings($transferBalanceToRetainedEarnings = null)
    {
        // validation for constraint: boolean
        if (!is_null($transferBalanceToRetainedEarnings) && !is_bool($transferBalanceToRetainedEarnings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($transferBalanceToRetainedEarnings)), __LINE__);
        }
        $this->transferBalanceToRetainedEarnings = $transferBalanceToRetainedEarnings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Account
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
