<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMethod StructType
 * @subpackage Structs
 */
class PaymentMethod extends PWFinanceObject
{
    /**
     * The method
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $method;
    /**
     * Constructor method for PaymentMethod
     * @uses PaymentMethod::setMethod()
     * @param string $method
     */
    public function __construct($method = null)
    {
        $this
            ->setMethod($method);
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \StructType\PaymentMethod
     */
    public function setMethod($method = null)
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($method)), __LINE__);
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentMethod
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
