<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VMMLeaseCharge StructType
 * @subpackage Structs
 */
class VMMLeaseCharge extends AbstractCustomizableSystemId
{
    /**
     * The amount
     * @var float
     */
    public $amount;
    /**
     * The amountPaid
     * @var float
     */
    public $amountPaid;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The glAccountId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $glAccountId;
    /**
     * The leaseId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $leaseId;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceNumber;
    /**
     * Constructor method for VMMLeaseCharge
     * @uses VMMLeaseCharge::setAmount()
     * @uses VMMLeaseCharge::setAmountPaid()
     * @uses VMMLeaseCharge::setComments()
     * @uses VMMLeaseCharge::setDate()
     * @uses VMMLeaseCharge::setGlAccountId()
     * @uses VMMLeaseCharge::setLeaseId()
     * @uses VMMLeaseCharge::setReferenceNumber()
     * @param float $amount
     * @param float $amountPaid
     * @param string $comments
     * @param string $date
     * @param int $glAccountId
     * @param int $leaseId
     * @param string $referenceNumber
     */
    public function __construct($amount = null, $amountPaid = null, $comments = null, $date = null, $glAccountId = null, $leaseId = null, $referenceNumber = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountPaid($amountPaid)
            ->setComments($comments)
            ->setDate($date)
            ->setGlAccountId($glAccountId)
            ->setLeaseId($leaseId)
            ->setReferenceNumber($referenceNumber);
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
     * @return \StructType\VMMLeaseCharge
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get amountPaid value
     * @return float|null
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }
    /**
     * Set amountPaid value
     * @param float $amountPaid
     * @return \StructType\VMMLeaseCharge
     */
    public function setAmountPaid($amountPaid = null)
    {
        $this->amountPaid = $amountPaid;
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
     * @return \StructType\VMMLeaseCharge
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
     * @return \StructType\VMMLeaseCharge
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
     * Get glAccountId value
     * @return int|null
     */
    public function getGlAccountId()
    {
        return $this->glAccountId;
    }
    /**
     * Set glAccountId value
     * @param int $glAccountId
     * @return \StructType\VMMLeaseCharge
     */
    public function setGlAccountId($glAccountId = null)
    {
        // validation for constraint: int
        if (!is_null($glAccountId) && !is_numeric($glAccountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($glAccountId)), __LINE__);
        }
        $this->glAccountId = $glAccountId;
        return $this;
    }
    /**
     * Get leaseId value
     * @return int|null
     */
    public function getLeaseId()
    {
        return $this->leaseId;
    }
    /**
     * Set leaseId value
     * @param int $leaseId
     * @return \StructType\VMMLeaseCharge
     */
    public function setLeaseId($leaseId = null)
    {
        // validation for constraint: int
        if (!is_null($leaseId) && !is_numeric($leaseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leaseId)), __LINE__);
        }
        $this->leaseId = $leaseId;
        return $this;
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $referenceNumber
     * @return \StructType\VMMLeaseCharge
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VMMLeaseCharge
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
