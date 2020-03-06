<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyVendorLedgerItem StructType
 * @subpackage Structs
 */
abstract class ReadOnlyVendorLedgerItem extends ReadOnlyLedgerItem
{
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
     * The vendorID
     * @var int
     */
    public $vendorID;
    /**
     * Constructor method for ReadOnlyVendorLedgerItem
     * @uses ReadOnlyVendorLedgerItem::setComments()
     * @uses ReadOnlyVendorLedgerItem::setDate()
     * @uses ReadOnlyVendorLedgerItem::setReferenceNumber()
     * @uses ReadOnlyVendorLedgerItem::setVendorID()
     * @param string $comments
     * @param string $date
     * @param string $referenceNumber
     * @param int $vendorID
     */
    public function __construct($comments = null, $date = null, $referenceNumber = null, $vendorID = null)
    {
        $this
            ->setComments($comments)
            ->setDate($date)
            ->setReferenceNumber($referenceNumber)
            ->setVendorID($vendorID);
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
     * @return \StructType\ReadOnlyVendorLedgerItem
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
     * @return \StructType\ReadOnlyVendorLedgerItem
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
     * @return \StructType\ReadOnlyVendorLedgerItem
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
     * @return \StructType\ReadOnlyVendorLedgerItem
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
     * @return \StructType\ReadOnlyVendorLedgerItem
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
