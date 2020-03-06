<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeasePayment StructType
 * @subpackage Structs
 */
class LeasePayment extends FinancialTransactionHeader
{
    /**
     * The bank
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bank;
    /**
     * The paymentGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentGroupId;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentType;
    /**
     * Constructor method for LeasePayment
     * @uses LeasePayment::setBank()
     * @uses LeasePayment::setPaymentGroupId()
     * @uses LeasePayment::setPaymentType()
     * @param \StructType\Bank $bank
     * @param string $paymentGroupId
     * @param string $paymentType
     */
    public function __construct(\StructType\Bank $bank = null, $paymentGroupId = null, $paymentType = null)
    {
        $this
            ->setBank($bank)
            ->setPaymentGroupId($paymentGroupId)
            ->setPaymentType($paymentType);
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
     * @return \StructType\LeasePayment
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }
    /**
     * Get paymentGroupId value
     * @return string|null
     */
    public function getPaymentGroupId()
    {
        return $this->paymentGroupId;
    }
    /**
     * Set paymentGroupId value
     * @param string $paymentGroupId
     * @return \StructType\LeasePayment
     */
    public function setPaymentGroupId($paymentGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($paymentGroupId) && !is_string($paymentGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentGroupId)), __LINE__);
        }
        $this->paymentGroupId = $paymentGroupId;
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \StructType\LeasePayment
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LeasePayment
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
