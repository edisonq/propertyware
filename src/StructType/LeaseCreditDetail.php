<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseCreditDetail StructType
 * @subpackage Structs
 */
class LeaseCreditDetail extends LeaseAppliedToChargeItem
{
    /**
     * The credit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\LeaseCredit
     */
    public $credit;
    /**
     * Constructor method for LeaseCreditDetail
     * @uses LeaseCreditDetail::setCredit()
     * @param \StructType\LeaseCredit $credit
     */
    public function __construct(\StructType\LeaseCredit $credit = null)
    {
        $this
            ->setCredit($credit);
    }
    /**
     * Get credit value
     * @return \StructType\LeaseCredit|null
     */
    public function getCredit()
    {
        return $this->credit;
    }
    /**
     * Set credit value
     * @param \StructType\LeaseCredit $credit
     * @return \StructType\LeaseCreditDetail
     */
    public function setCredit(\StructType\LeaseCredit $credit = null)
    {
        $this->credit = $credit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LeaseCreditDetail
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
