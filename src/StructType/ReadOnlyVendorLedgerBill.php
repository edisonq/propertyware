<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyVendorLedgerBill StructType
 * @subpackage Structs
 */
class ReadOnlyVendorLedgerBill extends ReadOnlyVendorLedgerItem
{
    /**
     * The billNumber
     * @var int
     */
    public $billNumber;
    /**
     * The billPaid
     * @var bool
     */
    public $billPaid;
    /**
     * The billSplits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ReadOnlyVendorLedgerBillSplit[]
     * - ref: soapenc:arrayType
     * @var \StructType\ReadOnlyVendorLedgerBillSplit[]
     */
    public $billSplits;
    /**
     * The credit
     * @var bool
     */
    public $credit;
    /**
     * The dueDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dueDate;
    /**
     * The ownerDraw
     * @var bool
     */
    public $ownerDraw;
    /**
     * The terms
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $terms;
    /**
     * The workOrderID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $workOrderID;
    /**
     * Constructor method for ReadOnlyVendorLedgerBill
     * @uses ReadOnlyVendorLedgerBill::setBillNumber()
     * @uses ReadOnlyVendorLedgerBill::setBillPaid()
     * @uses ReadOnlyVendorLedgerBill::setBillSplits()
     * @uses ReadOnlyVendorLedgerBill::setCredit()
     * @uses ReadOnlyVendorLedgerBill::setDueDate()
     * @uses ReadOnlyVendorLedgerBill::setOwnerDraw()
     * @uses ReadOnlyVendorLedgerBill::setTerms()
     * @uses ReadOnlyVendorLedgerBill::setWorkOrderID()
     * @param int $billNumber
     * @param bool $billPaid
     * @param \StructType\ReadOnlyVendorLedgerBillSplit[] $billSplits
     * @param bool $credit
     * @param string $dueDate
     * @param bool $ownerDraw
     * @param string $terms
     * @param int $workOrderID
     */
    public function __construct($billNumber = null, $billPaid = null, array $billSplits = array(), $credit = null, $dueDate = null, $ownerDraw = null, $terms = null, $workOrderID = null)
    {
        $this
            ->setBillNumber($billNumber)
            ->setBillPaid($billPaid)
            ->setBillSplits($billSplits)
            ->setCredit($credit)
            ->setDueDate($dueDate)
            ->setOwnerDraw($ownerDraw)
            ->setTerms($terms)
            ->setWorkOrderID($workOrderID);
    }
    /**
     * Get billNumber value
     * @return int|null
     */
    public function getBillNumber()
    {
        return $this->billNumber;
    }
    /**
     * Set billNumber value
     * @param int $billNumber
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setBillNumber($billNumber = null)
    {
        // validation for constraint: int
        if (!is_null($billNumber) && !is_numeric($billNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($billNumber)), __LINE__);
        }
        $this->billNumber = $billNumber;
        return $this;
    }
    /**
     * Get billPaid value
     * @return bool|null
     */
    public function getBillPaid()
    {
        return $this->billPaid;
    }
    /**
     * Set billPaid value
     * @param bool $billPaid
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setBillPaid($billPaid = null)
    {
        // validation for constraint: boolean
        if (!is_null($billPaid) && !is_bool($billPaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($billPaid)), __LINE__);
        }
        $this->billPaid = $billPaid;
        return $this;
    }
    /**
     * Get billSplits value
     * @return \StructType\ReadOnlyVendorLedgerBillSplit[]|null
     */
    public function getBillSplits()
    {
        return $this->billSplits;
    }
    /**
     * Set billSplits value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyVendorLedgerBillSplit[] $billSplits
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setBillSplits(array $billSplits = array())
    {
        foreach ($billSplits as $readOnlyVendorLedgerBillBillSplitsItem) {
            // validation for constraint: itemType
            if (!$readOnlyVendorLedgerBillBillSplitsItem instanceof \StructType\ReadOnlyVendorLedgerBillSplit) {
                throw new \InvalidArgumentException(sprintf('The billSplits property can only contain items of \StructType\ReadOnlyVendorLedgerBillSplit, "%s" given', is_object($readOnlyVendorLedgerBillBillSplitsItem) ? get_class($readOnlyVendorLedgerBillBillSplitsItem) : gettype($readOnlyVendorLedgerBillBillSplitsItem)), __LINE__);
            }
        }
        $this->billSplits = $billSplits;
        return $this;
    }
    /**
     * Add item to billSplits value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyVendorLedgerBillSplit $item
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function addToBillSplits(\StructType\ReadOnlyVendorLedgerBillSplit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReadOnlyVendorLedgerBillSplit) {
            throw new \InvalidArgumentException(sprintf('The billSplits property can only contain items of \StructType\ReadOnlyVendorLedgerBillSplit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->billSplits[] = $item;
        return $this;
    }
    /**
     * Get credit value
     * @return bool|null
     */
    public function getCredit()
    {
        return $this->credit;
    }
    /**
     * Set credit value
     * @param bool $credit
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setCredit($credit = null)
    {
        // validation for constraint: boolean
        if (!is_null($credit) && !is_bool($credit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($credit)), __LINE__);
        }
        $this->credit = $credit;
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * Get ownerDraw value
     * @return bool|null
     */
    public function getOwnerDraw()
    {
        return $this->ownerDraw;
    }
    /**
     * Set ownerDraw value
     * @param bool $ownerDraw
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setOwnerDraw($ownerDraw = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerDraw) && !is_bool($ownerDraw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerDraw)), __LINE__);
        }
        $this->ownerDraw = $ownerDraw;
        return $this;
    }
    /**
     * Get terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->terms;
    }
    /**
     * Set terms value
     * @param string $terms
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setTerms($terms = null)
    {
        // validation for constraint: string
        if (!is_null($terms) && !is_string($terms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terms)), __LINE__);
        }
        $this->terms = $terms;
        return $this;
    }
    /**
     * Get workOrderID value
     * @return int|null
     */
    public function getWorkOrderID()
    {
        return $this->workOrderID;
    }
    /**
     * Set workOrderID value
     * @param int $workOrderID
     * @return \StructType\ReadOnlyVendorLedgerBill
     */
    public function setWorkOrderID($workOrderID = null)
    {
        // validation for constraint: int
        if (!is_null($workOrderID) && !is_numeric($workOrderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($workOrderID)), __LINE__);
        }
        $this->workOrderID = $workOrderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyVendorLedgerBill
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
