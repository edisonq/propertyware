<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseRefund StructType
 * @subpackage Structs
 */
class LeaseRefund extends LeaseLedgerItem
{
    /**
     * The bank
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bank;
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
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceNumber;
    /**
     * Constructor method for LeaseRefund
     * @uses LeaseRefund::setBank()
     * @uses LeaseRefund::setComments()
     * @uses LeaseRefund::setDate()
     * @uses LeaseRefund::setReferenceNumber()
     * @param \StructType\Bank $bank
     * @param string $comments
     * @param string $date
     * @param string $referenceNumber
     */
    public function __construct(\StructType\Bank $bank = null, $comments = null, $date = null, $referenceNumber = null)
    {
        $this
            ->setBank($bank)
            ->setComments($comments)
            ->setDate($date)
            ->setReferenceNumber($referenceNumber);
    }
    /**
     * Get bank value
     * @return \StructType\Bank|null
     */
    public function getBank()
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param \StructType\Bank $bank
     * @return \StructType\LeaseRefund
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->bank = $bank;
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
     * @return \StructType\LeaseRefund
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
     * @return \StructType\LeaseRefund
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
     * @return \StructType\LeaseRefund
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
     * @return \StructType\LeaseRefund
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
