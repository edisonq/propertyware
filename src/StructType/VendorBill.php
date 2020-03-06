<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorBill StructType
 * @subpackage Structs
 */
class VendorBill extends FinancialTransactionHeader
{
    /**
     * The dueDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dueDate;
    /**
     * The managementFee
     * @var bool
     */
    public $managementFee;
    /**
     * The vendorBillGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vendorBillGroupId;
    /**
     * Constructor method for VendorBill
     * @uses VendorBill::setDueDate()
     * @uses VendorBill::setManagementFee()
     * @uses VendorBill::setVendorBillGroupId()
     * @param string $dueDate
     * @param bool $managementFee
     * @param string $vendorBillGroupId
     */
    public function __construct($dueDate = null, $managementFee = null, $vendorBillGroupId = null)
    {
        $this
            ->setDueDate($dueDate)
            ->setManagementFee($managementFee)
            ->setVendorBillGroupId($vendorBillGroupId);
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
     * @return \StructType\VendorBill
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
     * Get managementFee value
     * @return bool|null
     */
    public function getManagementFee()
    {
        return $this->managementFee;
    }
    /**
     * Set managementFee value
     * @param bool $managementFee
     * @return \StructType\VendorBill
     */
    public function setManagementFee($managementFee = null)
    {
        // validation for constraint: boolean
        if (!is_null($managementFee) && !is_bool($managementFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($managementFee)), __LINE__);
        }
        $this->managementFee = $managementFee;
        return $this;
    }
    /**
     * Get vendorBillGroupId value
     * @return string|null
     */
    public function getVendorBillGroupId()
    {
        return $this->vendorBillGroupId;
    }
    /**
     * Set vendorBillGroupId value
     * @param string $vendorBillGroupId
     * @return \StructType\VendorBill
     */
    public function setVendorBillGroupId($vendorBillGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($vendorBillGroupId) && !is_string($vendorBillGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorBillGroupId)), __LINE__);
        }
        $this->vendorBillGroupId = $vendorBillGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VendorBill
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
