<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyLeasePayment StructType
 * @subpackage Structs
 */
class ReadOnlyLeasePayment extends ReadOnlyLeaseLedgerItem
{
    /**
     * The bank
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bank;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentType;
    /**
     * Constructor method for ReadOnlyLeasePayment
     * @uses ReadOnlyLeasePayment::setBank()
     * @uses ReadOnlyLeasePayment::setPaymentType()
     * @param \StructType\Bank $bank
     * @param string $paymentType
     */
    public function __construct(\StructType\Bank $bank = null, $paymentType = null)
    {
        $this
            ->setBank($bank)
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
     * @return \StructType\ReadOnlyLeasePayment
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->bank = $bank;
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
     * @return \StructType\ReadOnlyLeasePayment
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
     * @return \StructType\ReadOnlyLeasePayment
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
