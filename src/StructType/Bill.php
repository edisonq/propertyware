<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bill StructType
 * @subpackage Structs
 */
class Bill extends AbstractFinancialDocumentHolder
{
    /**
     * The billNumber
     * @var int
     */
    public $billNumber;
    /**
     * The billSplits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:BillSplit[]
     * - ref: soapenc:arrayType
     * @var \StructType\BillSplit[]
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
     * The paymentDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentDate;
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $refNo;
    /**
     * The tenantCharges
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:VMMLeaseCharge[]
     * - ref: soapenc:arrayType
     * @var \StructType\VMMLeaseCharge[]
     */
    public $tenantCharges;
    /**
     * The terms
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $terms;
    /**
     * The vendor
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vendor;
    /**
     * The workOrderID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $workOrderID;
    /**
     * Constructor method for Bill
     * @uses Bill::setBillNumber()
     * @uses Bill::setBillSplits()
     * @uses Bill::setCredit()
     * @uses Bill::setDueDate()
     * @uses Bill::setOwnerDraw()
     * @uses Bill::setPaymentDate()
     * @uses Bill::setRefNo()
     * @uses Bill::setTenantCharges()
     * @uses Bill::setTerms()
     * @uses Bill::setVendor()
     * @uses Bill::setWorkOrderID()
     * @param int $billNumber
     * @param \StructType\BillSplit[] $billSplits
     * @param bool $credit
     * @param string $dueDate
     * @param bool $ownerDraw
     * @param string $paymentDate
     * @param string $refNo
     * @param \StructType\VMMLeaseCharge[] $tenantCharges
     * @param string $terms
     * @param string $vendor
     * @param int $workOrderID
     */
    public function __construct($billNumber = null, array $billSplits = array(), $credit = null, $dueDate = null, $ownerDraw = null, $paymentDate = null, $refNo = null, array $tenantCharges = array(), $terms = null, $vendor = null, $workOrderID = null)
    {
        $this
            ->setBillNumber($billNumber)
            ->setBillSplits($billSplits)
            ->setCredit($credit)
            ->setDueDate($dueDate)
            ->setOwnerDraw($ownerDraw)
            ->setPaymentDate($paymentDate)
            ->setRefNo($refNo)
            ->setTenantCharges($tenantCharges)
            ->setTerms($terms)
            ->setVendor($vendor)
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
     * @return \StructType\Bill
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
     * Get billSplits value
     * @return \StructType\BillSplit[]|null
     */
    public function getBillSplits()
    {
        return $this->billSplits;
    }
    /**
     * Set billSplits value
     * @throws \InvalidArgumentException
     * @param \StructType\BillSplit[] $billSplits
     * @return \StructType\Bill
     */
    public function setBillSplits(array $billSplits = array())
    {
        foreach ($billSplits as $billBillSplitsItem) {
            // validation for constraint: itemType
            if (!$billBillSplitsItem instanceof \StructType\BillSplit) {
                throw new \InvalidArgumentException(sprintf('The billSplits property can only contain items of \StructType\BillSplit, "%s" given', is_object($billBillSplitsItem) ? get_class($billBillSplitsItem) : gettype($billBillSplitsItem)), __LINE__);
            }
        }
        $this->billSplits = $billSplits;
        return $this;
    }
    /**
     * Add item to billSplits value
     * @throws \InvalidArgumentException
     * @param \StructType\BillSplit $item
     * @return \StructType\Bill
     */
    public function addToBillSplits(\StructType\BillSplit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BillSplit) {
            throw new \InvalidArgumentException(sprintf('The billSplits property can only contain items of \StructType\BillSplit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\Bill
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
     * @return \StructType\Bill
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
     * @return \StructType\Bill
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
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \StructType\Bill
     */
    public function setPaymentDate($paymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        return $this;
    }
    /**
     * Get refNo value
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->refNo;
    }
    /**
     * Set refNo value
     * @param string $refNo
     * @return \StructType\Bill
     */
    public function setRefNo($refNo = null)
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;
        return $this;
    }
    /**
     * Get tenantCharges value
     * @return \StructType\VMMLeaseCharge[]|null
     */
    public function getTenantCharges()
    {
        return $this->tenantCharges;
    }
    /**
     * Set tenantCharges value
     * @throws \InvalidArgumentException
     * @param \StructType\VMMLeaseCharge[] $tenantCharges
     * @return \StructType\Bill
     */
    public function setTenantCharges(array $tenantCharges = array())
    {
        foreach ($tenantCharges as $billTenantChargesItem) {
            // validation for constraint: itemType
            if (!$billTenantChargesItem instanceof \StructType\VMMLeaseCharge) {
                throw new \InvalidArgumentException(sprintf('The tenantCharges property can only contain items of \StructType\VMMLeaseCharge, "%s" given', is_object($billTenantChargesItem) ? get_class($billTenantChargesItem) : gettype($billTenantChargesItem)), __LINE__);
            }
        }
        $this->tenantCharges = $tenantCharges;
        return $this;
    }
    /**
     * Add item to tenantCharges value
     * @throws \InvalidArgumentException
     * @param \StructType\VMMLeaseCharge $item
     * @return \StructType\Bill
     */
    public function addToTenantCharges(\StructType\VMMLeaseCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VMMLeaseCharge) {
            throw new \InvalidArgumentException(sprintf('The tenantCharges property can only contain items of \StructType\VMMLeaseCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tenantCharges[] = $item;
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
     * @return \StructType\Bill
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
     * Get vendor value
     * @return string|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }
    /**
     * Set vendor value
     * @param string $vendor
     * @return \StructType\Bill
     */
    public function setVendor($vendor = null)
    {
        // validation for constraint: string
        if (!is_null($vendor) && !is_string($vendor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendor)), __LINE__);
        }
        $this->vendor = $vendor;
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
     * @return \StructType\Bill
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
     * @return \StructType\Bill
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
