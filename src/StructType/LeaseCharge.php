<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseCharge StructType
 * @subpackage Structs
 */
class LeaseCharge extends LeaseLedgerItem
{
    /**
     * The appliedItems
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:LeaseAppliedToChargeItem[]
     * - ref: soapenc:arrayType
     * @var \StructType\LeaseAppliedToChargeItem[]
     */
    public $appliedItems;
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
     * Constructor method for LeaseCharge
     * @uses LeaseCharge::setAppliedItems()
     * @uses LeaseCharge::setComments()
     * @uses LeaseCharge::setDate()
     * @uses LeaseCharge::setReferenceNumber()
     * @param \StructType\LeaseAppliedToChargeItem[] $appliedItems
     * @param string $comments
     * @param string $date
     * @param string $referenceNumber
     */
    public function __construct(array $appliedItems = array(), $comments = null, $date = null, $referenceNumber = null)
    {
        $this
            ->setAppliedItems($appliedItems)
            ->setComments($comments)
            ->setDate($date)
            ->setReferenceNumber($referenceNumber);
    }
    /**
     * Get appliedItems value
     * @return \StructType\LeaseAppliedToChargeItem[]|null
     */
    public function getAppliedItems()
    {
        return $this->appliedItems;
    }
    /**
     * Set appliedItems value
     * @throws \InvalidArgumentException
     * @param \StructType\LeaseAppliedToChargeItem[] $appliedItems
     * @return \StructType\LeaseCharge
     */
    public function setAppliedItems(array $appliedItems = array())
    {
        foreach ($appliedItems as $leaseChargeAppliedItemsItem) {
            // validation for constraint: itemType
            if (!$leaseChargeAppliedItemsItem instanceof \StructType\LeaseAppliedToChargeItem) {
                throw new \InvalidArgumentException(sprintf('The appliedItems property can only contain items of \StructType\LeaseAppliedToChargeItem, "%s" given', is_object($leaseChargeAppliedItemsItem) ? get_class($leaseChargeAppliedItemsItem) : gettype($leaseChargeAppliedItemsItem)), __LINE__);
            }
        }
        $this->appliedItems = $appliedItems;
        return $this;
    }
    /**
     * Add item to appliedItems value
     * @throws \InvalidArgumentException
     * @param \StructType\LeaseAppliedToChargeItem $item
     * @return \StructType\LeaseCharge
     */
    public function addToAppliedItems(\StructType\LeaseAppliedToChargeItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LeaseAppliedToChargeItem) {
            throw new \InvalidArgumentException(sprintf('The appliedItems property can only contain items of \StructType\LeaseAppliedToChargeItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->appliedItems[] = $item;
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
     * @return \StructType\LeaseCharge
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
     * @return \StructType\LeaseCharge
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
     * @return \StructType\LeaseCharge
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
     * @return \StructType\LeaseCharge
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
