<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyVendorLedgerBillPayment StructType
 * @subpackage Structs
 */
class ReadOnlyVendorLedgerBillPayment extends ReadOnlyVendorLedgerItem
{
    /**
     * The checkNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $checkNumber;
    /**
     * The paymentDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentDate;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentMethod;
    /**
     * Constructor method for ReadOnlyVendorLedgerBillPayment
     * @uses ReadOnlyVendorLedgerBillPayment::setCheckNumber()
     * @uses ReadOnlyVendorLedgerBillPayment::setPaymentDate()
     * @uses ReadOnlyVendorLedgerBillPayment::setPaymentMethod()
     * @param string $checkNumber
     * @param string $paymentDate
     * @param string $paymentMethod
     */
    public function __construct($checkNumber = null, $paymentDate = null, $paymentMethod = null)
    {
        $this
            ->setCheckNumber($checkNumber)
            ->setPaymentDate($paymentDate)
            ->setPaymentMethod($paymentMethod);
    }
    /**
     * Get checkNumber value
     * @return string|null
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }
    /**
     * Set checkNumber value
     * @param string $checkNumber
     * @return \StructType\ReadOnlyVendorLedgerBillPayment
     */
    public function setCheckNumber($checkNumber = null)
    {
        // validation for constraint: string
        if (!is_null($checkNumber) && !is_string($checkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkNumber)), __LINE__);
        }
        $this->checkNumber = $checkNumber;
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
     * @return \StructType\ReadOnlyVendorLedgerBillPayment
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
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \StructType\ReadOnlyVendorLedgerBillPayment
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyVendorLedgerBillPayment
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
