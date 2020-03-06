<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorBillPayment StructType
 * @subpackage Structs
 */
class VendorBillPayment extends FinancialTransactionHeader
{
    /**
     * The checkNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $checkNumber;
    /**
     * The cleared
     * @var bool
     */
    public $cleared;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentMethod;
    /**
     * The vendorBillPaymentGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vendorBillPaymentGroupId;
    /**
     * Constructor method for VendorBillPayment
     * @uses VendorBillPayment::setCheckNumber()
     * @uses VendorBillPayment::setCleared()
     * @uses VendorBillPayment::setPaymentMethod()
     * @uses VendorBillPayment::setVendorBillPaymentGroupId()
     * @param string $checkNumber
     * @param bool $cleared
     * @param string $paymentMethod
     * @param string $vendorBillPaymentGroupId
     */
    public function __construct($checkNumber = null, $cleared = null, $paymentMethod = null, $vendorBillPaymentGroupId = null)
    {
        $this
            ->setCheckNumber($checkNumber)
            ->setCleared($cleared)
            ->setPaymentMethod($paymentMethod)
            ->setVendorBillPaymentGroupId($vendorBillPaymentGroupId);
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
     * @return \StructType\VendorBillPayment
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
     * Get cleared value
     * @return bool|null
     */
    public function getCleared()
    {
        return $this->cleared;
    }
    /**
     * Set cleared value
     * @param bool $cleared
     * @return \StructType\VendorBillPayment
     */
    public function setCleared($cleared = null)
    {
        // validation for constraint: boolean
        if (!is_null($cleared) && !is_bool($cleared)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cleared)), __LINE__);
        }
        $this->cleared = $cleared;
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
     * @return \StructType\VendorBillPayment
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
     * Get vendorBillPaymentGroupId value
     * @return string|null
     */
    public function getVendorBillPaymentGroupId()
    {
        return $this->vendorBillPaymentGroupId;
    }
    /**
     * Set vendorBillPaymentGroupId value
     * @param string $vendorBillPaymentGroupId
     * @return \StructType\VendorBillPayment
     */
    public function setVendorBillPaymentGroupId($vendorBillPaymentGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($vendorBillPaymentGroupId) && !is_string($vendorBillPaymentGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorBillPaymentGroupId)), __LINE__);
        }
        $this->vendorBillPaymentGroupId = $vendorBillPaymentGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VendorBillPayment
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
