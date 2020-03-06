<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillSplit StructType
 * @subpackage Structs
 */
class BillSplit extends PWFinanceObject
{
    /**
     * The billID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $billID;
    /**
     * The markupBillSplit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\BillSplit
     */
    public $markupBillSplit;
    /**
     * The markupDiscountSplit
     * @var bool
     */
    public $markupDiscountSplit;
    /**
     * Constructor method for BillSplit
     * @uses BillSplit::setBillID()
     * @uses BillSplit::setMarkupBillSplit()
     * @uses BillSplit::setMarkupDiscountSplit()
     * @param int $billID
     * @param \StructType\BillSplit $markupBillSplit
     * @param bool $markupDiscountSplit
     */
    public function __construct($billID = null, \StructType\BillSplit $markupBillSplit = null, $markupDiscountSplit = null)
    {
        $this
            ->setBillID($billID)
            ->setMarkupBillSplit($markupBillSplit)
            ->setMarkupDiscountSplit($markupDiscountSplit);
    }
    /**
     * Get billID value
     * @return int|null
     */
    public function getBillID()
    {
        return $this->billID;
    }
    /**
     * Set billID value
     * @param int $billID
     * @return \StructType\BillSplit
     */
    public function setBillID($billID = null)
    {
        // validation for constraint: int
        if (!is_null($billID) && !is_numeric($billID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($billID)), __LINE__);
        }
        $this->billID = $billID;
        return $this;
    }
    /**
     * Get markupBillSplit value
     * @return \StructType\BillSplit|null
     */
    public function getMarkupBillSplit()
    {
        return $this->markupBillSplit;
    }
    /**
     * Set markupBillSplit value
     * @param \StructType\BillSplit $markupBillSplit
     * @return \StructType\BillSplit
     */
    public function setMarkupBillSplit(\StructType\BillSplit $markupBillSplit = null)
    {
        $this->markupBillSplit = $markupBillSplit;
        return $this;
    }
    /**
     * Get markupDiscountSplit value
     * @return bool|null
     */
    public function getMarkupDiscountSplit()
    {
        return $this->markupDiscountSplit;
    }
    /**
     * Set markupDiscountSplit value
     * @param bool $markupDiscountSplit
     * @return \StructType\BillSplit
     */
    public function setMarkupDiscountSplit($markupDiscountSplit = null)
    {
        // validation for constraint: boolean
        if (!is_null($markupDiscountSplit) && !is_bool($markupDiscountSplit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($markupDiscountSplit)), __LINE__);
        }
        $this->markupDiscountSplit = $markupDiscountSplit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BillSplit
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
