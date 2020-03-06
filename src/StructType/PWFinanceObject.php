<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PWFinanceObject StructType
 * @subpackage Structs
 */
class PWFinanceObject extends PWObject
{
    /**
     * The amount
     * @var float
     */
    public $amount;
    /**
     * The buildingAbbr
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $buildingAbbr;
    /**
     * The buildingID
     * @var int
     */
    public $buildingID;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The customer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customer;
    /**
     * The customerID
     * @var int
     */
    public $customerID;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The glAccountCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $glAccountCode;
    /**
     * The glAccountDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $glAccountDescription;
    /**
     * The glAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $glAccountNumber;
    /**
     * The leaseID
     * @var int
     */
    public $leaseID;
    /**
     * The ownerTransaction
     * @var bool
     */
    public $ownerTransaction;
    /**
     * The portfolioAbbr
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $portfolioAbbr;
    /**
     * The portfolioID
     * @var int
     */
    public $portfolioID;
    /**
     * The qbEditSequence
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbEditSequence;
    /**
     * The qbTxnID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbTxnID;
    /**
     * The refNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $refNumber;
    /**
     * The unitAbbr
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unitAbbr;
    /**
     * The unitID
     * @var int
     */
    public $unitID;
    /**
     * The vendorID
     * @var int
     */
    public $vendorID;
    /**
     * Constructor method for PWFinanceObject
     * @uses PWFinanceObject::setAmount()
     * @uses PWFinanceObject::setBuildingAbbr()
     * @uses PWFinanceObject::setBuildingID()
     * @uses PWFinanceObject::setComments()
     * @uses PWFinanceObject::setCustomer()
     * @uses PWFinanceObject::setCustomerID()
     * @uses PWFinanceObject::setDate()
     * @uses PWFinanceObject::setGlAccountCode()
     * @uses PWFinanceObject::setGlAccountDescription()
     * @uses PWFinanceObject::setGlAccountNumber()
     * @uses PWFinanceObject::setLeaseID()
     * @uses PWFinanceObject::setOwnerTransaction()
     * @uses PWFinanceObject::setPortfolioAbbr()
     * @uses PWFinanceObject::setPortfolioID()
     * @uses PWFinanceObject::setQbEditSequence()
     * @uses PWFinanceObject::setQbTxnID()
     * @uses PWFinanceObject::setRefNumber()
     * @uses PWFinanceObject::setUnitAbbr()
     * @uses PWFinanceObject::setUnitID()
     * @uses PWFinanceObject::setVendorID()
     * @param float $amount
     * @param string $buildingAbbr
     * @param int $buildingID
     * @param string $comments
     * @param string $customer
     * @param int $customerID
     * @param string $date
     * @param string $glAccountCode
     * @param string $glAccountDescription
     * @param string $glAccountNumber
     * @param int $leaseID
     * @param bool $ownerTransaction
     * @param string $portfolioAbbr
     * @param int $portfolioID
     * @param string $qbEditSequence
     * @param string $qbTxnID
     * @param string $refNumber
     * @param string $unitAbbr
     * @param int $unitID
     * @param int $vendorID
     */
    public function __construct($amount = null, $buildingAbbr = null, $buildingID = null, $comments = null, $customer = null, $customerID = null, $date = null, $glAccountCode = null, $glAccountDescription = null, $glAccountNumber = null, $leaseID = null, $ownerTransaction = null, $portfolioAbbr = null, $portfolioID = null, $qbEditSequence = null, $qbTxnID = null, $refNumber = null, $unitAbbr = null, $unitID = null, $vendorID = null)
    {
        $this
            ->setAmount($amount)
            ->setBuildingAbbr($buildingAbbr)
            ->setBuildingID($buildingID)
            ->setComments($comments)
            ->setCustomer($customer)
            ->setCustomerID($customerID)
            ->setDate($date)
            ->setGlAccountCode($glAccountCode)
            ->setGlAccountDescription($glAccountDescription)
            ->setGlAccountNumber($glAccountNumber)
            ->setLeaseID($leaseID)
            ->setOwnerTransaction($ownerTransaction)
            ->setPortfolioAbbr($portfolioAbbr)
            ->setPortfolioID($portfolioID)
            ->setQbEditSequence($qbEditSequence)
            ->setQbTxnID($qbTxnID)
            ->setRefNumber($refNumber)
            ->setUnitAbbr($unitAbbr)
            ->setUnitID($unitID)
            ->setVendorID($vendorID);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\PWFinanceObject
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get buildingAbbr value
     * @return string|null
     */
    public function getBuildingAbbr()
    {
        return $this->buildingAbbr;
    }
    /**
     * Set buildingAbbr value
     * @param string $buildingAbbr
     * @return \StructType\PWFinanceObject
     */
    public function setBuildingAbbr($buildingAbbr = null)
    {
        // validation for constraint: string
        if (!is_null($buildingAbbr) && !is_string($buildingAbbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingAbbr)), __LINE__);
        }
        $this->buildingAbbr = $buildingAbbr;
        return $this;
    }
    /**
     * Get buildingID value
     * @return int|null
     */
    public function getBuildingID()
    {
        return $this->buildingID;
    }
    /**
     * Set buildingID value
     * @param int $buildingID
     * @return \StructType\PWFinanceObject
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !is_numeric($buildingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingID)), __LINE__);
        }
        $this->buildingID = $buildingID;
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
     * @return \StructType\PWFinanceObject
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
     * Get customer value
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param string $customer
     * @return \StructType\PWFinanceObject
     */
    public function setCustomer($customer = null)
    {
        // validation for constraint: string
        if (!is_null($customer) && !is_string($customer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customer)), __LINE__);
        }
        $this->customer = $customer;
        return $this;
    }
    /**
     * Get customerID value
     * @return int|null
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }
    /**
     * Set customerID value
     * @param int $customerID
     * @return \StructType\PWFinanceObject
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: int
        if (!is_null($customerID) && !is_numeric($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerID)), __LINE__);
        }
        $this->customerID = $customerID;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\PWFinanceObject
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get glAccountCode value
     * @return string|null
     */
    public function getGlAccountCode()
    {
        return $this->glAccountCode;
    }
    /**
     * Set glAccountCode value
     * @param string $glAccountCode
     * @return \StructType\PWFinanceObject
     */
    public function setGlAccountCode($glAccountCode = null)
    {
        // validation for constraint: string
        if (!is_null($glAccountCode) && !is_string($glAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($glAccountCode)), __LINE__);
        }
        $this->glAccountCode = $glAccountCode;
        return $this;
    }
    /**
     * Get glAccountDescription value
     * @return string|null
     */
    public function getGlAccountDescription()
    {
        return $this->glAccountDescription;
    }
    /**
     * Set glAccountDescription value
     * @param string $glAccountDescription
     * @return \StructType\PWFinanceObject
     */
    public function setGlAccountDescription($glAccountDescription = null)
    {
        // validation for constraint: string
        if (!is_null($glAccountDescription) && !is_string($glAccountDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($glAccountDescription)), __LINE__);
        }
        $this->glAccountDescription = $glAccountDescription;
        return $this;
    }
    /**
     * Get glAccountNumber value
     * @return string|null
     */
    public function getGlAccountNumber()
    {
        return $this->glAccountNumber;
    }
    /**
     * Set glAccountNumber value
     * @param string $glAccountNumber
     * @return \StructType\PWFinanceObject
     */
    public function setGlAccountNumber($glAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($glAccountNumber) && !is_string($glAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($glAccountNumber)), __LINE__);
        }
        $this->glAccountNumber = $glAccountNumber;
        return $this;
    }
    /**
     * Get leaseID value
     * @return int|null
     */
    public function getLeaseID()
    {
        return $this->leaseID;
    }
    /**
     * Set leaseID value
     * @param int $leaseID
     * @return \StructType\PWFinanceObject
     */
    public function setLeaseID($leaseID = null)
    {
        // validation for constraint: int
        if (!is_null($leaseID) && !is_numeric($leaseID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leaseID)), __LINE__);
        }
        $this->leaseID = $leaseID;
        return $this;
    }
    /**
     * Get ownerTransaction value
     * @return bool|null
     */
    public function getOwnerTransaction()
    {
        return $this->ownerTransaction;
    }
    /**
     * Set ownerTransaction value
     * @param bool $ownerTransaction
     * @return \StructType\PWFinanceObject
     */
    public function setOwnerTransaction($ownerTransaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerTransaction) && !is_bool($ownerTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerTransaction)), __LINE__);
        }
        $this->ownerTransaction = $ownerTransaction;
        return $this;
    }
    /**
     * Get portfolioAbbr value
     * @return string|null
     */
    public function getPortfolioAbbr()
    {
        return $this->portfolioAbbr;
    }
    /**
     * Set portfolioAbbr value
     * @param string $portfolioAbbr
     * @return \StructType\PWFinanceObject
     */
    public function setPortfolioAbbr($portfolioAbbr = null)
    {
        // validation for constraint: string
        if (!is_null($portfolioAbbr) && !is_string($portfolioAbbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portfolioAbbr)), __LINE__);
        }
        $this->portfolioAbbr = $portfolioAbbr;
        return $this;
    }
    /**
     * Get portfolioID value
     * @return int|null
     */
    public function getPortfolioID()
    {
        return $this->portfolioID;
    }
    /**
     * Set portfolioID value
     * @param int $portfolioID
     * @return \StructType\PWFinanceObject
     */
    public function setPortfolioID($portfolioID = null)
    {
        // validation for constraint: int
        if (!is_null($portfolioID) && !is_numeric($portfolioID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portfolioID)), __LINE__);
        }
        $this->portfolioID = $portfolioID;
        return $this;
    }
    /**
     * Get qbEditSequence value
     * @return string|null
     */
    public function getQbEditSequence()
    {
        return $this->qbEditSequence;
    }
    /**
     * Set qbEditSequence value
     * @param string $qbEditSequence
     * @return \StructType\PWFinanceObject
     */
    public function setQbEditSequence($qbEditSequence = null)
    {
        // validation for constraint: string
        if (!is_null($qbEditSequence) && !is_string($qbEditSequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbEditSequence)), __LINE__);
        }
        $this->qbEditSequence = $qbEditSequence;
        return $this;
    }
    /**
     * Get qbTxnID value
     * @return string|null
     */
    public function getQbTxnID()
    {
        return $this->qbTxnID;
    }
    /**
     * Set qbTxnID value
     * @param string $qbTxnID
     * @return \StructType\PWFinanceObject
     */
    public function setQbTxnID($qbTxnID = null)
    {
        // validation for constraint: string
        if (!is_null($qbTxnID) && !is_string($qbTxnID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbTxnID)), __LINE__);
        }
        $this->qbTxnID = $qbTxnID;
        return $this;
    }
    /**
     * Get refNumber value
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }
    /**
     * Set refNumber value
     * @param string $refNumber
     * @return \StructType\PWFinanceObject
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: string
        if (!is_null($refNumber) && !is_string($refNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNumber)), __LINE__);
        }
        $this->refNumber = $refNumber;
        return $this;
    }
    /**
     * Get unitAbbr value
     * @return string|null
     */
    public function getUnitAbbr()
    {
        return $this->unitAbbr;
    }
    /**
     * Set unitAbbr value
     * @param string $unitAbbr
     * @return \StructType\PWFinanceObject
     */
    public function setUnitAbbr($unitAbbr = null)
    {
        // validation for constraint: string
        if (!is_null($unitAbbr) && !is_string($unitAbbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitAbbr)), __LINE__);
        }
        $this->unitAbbr = $unitAbbr;
        return $this;
    }
    /**
     * Get unitID value
     * @return int|null
     */
    public function getUnitID()
    {
        return $this->unitID;
    }
    /**
     * Set unitID value
     * @param int $unitID
     * @return \StructType\PWFinanceObject
     */
    public function setUnitID($unitID = null)
    {
        // validation for constraint: int
        if (!is_null($unitID) && !is_numeric($unitID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitID)), __LINE__);
        }
        $this->unitID = $unitID;
        return $this;
    }
    /**
     * Get vendorID value
     * @return int|null
     */
    public function getVendorID()
    {
        return $this->vendorID;
    }
    /**
     * Set vendorID value
     * @param int $vendorID
     * @return \StructType\PWFinanceObject
     */
    public function setVendorID($vendorID = null)
    {
        // validation for constraint: int
        if (!is_null($vendorID) && !is_numeric($vendorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vendorID)), __LINE__);
        }
        $this->vendorID = $vendorID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PWFinanceObject
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
