<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseAppliedPaymentItem StructType
 * @subpackage Structs
 */
abstract class LeaseAppliedPaymentItem extends LeaseAppliedToChargeItem
{
    /**
     * The payment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\LeasePayment
     */
    public $payment;
    /**
     * Constructor method for LeaseAppliedPaymentItem
     * @uses LeaseAppliedPaymentItem::setPayment()
     * @param \StructType\LeasePayment $payment
     */
    public function __construct(\StructType\LeasePayment $payment = null)
    {
        $this
            ->setPayment($payment);
    }
    /**
     * Get payment value
     * @return \StructType\LeasePayment|null
     */
    public function getPayment()
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \StructType\LeasePayment $payment
     * @return \StructType\LeaseAppliedPaymentItem
     */
    public function setPayment(\StructType\LeasePayment $payment = null)
    {
        $this->payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LeaseAppliedPaymentItem
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
