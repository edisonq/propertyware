<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charge StructType
 * @subpackage Structs
 */
class Charge extends PWFinanceObject
{
    /**
     * The amountPaid
     * @var float
     */
    public $amountPaid;
    /**
     * Constructor method for Charge
     * @uses Charge::setAmountPaid()
     * @param float $amountPaid
     */
    public function __construct($amountPaid = null)
    {
        $this
            ->setAmountPaid($amountPaid);
    }
    /**
     * Get amountPaid value
     * @return float|null
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }
    /**
     * Set amountPaid value
     * @param float $amountPaid
     * @return \StructType\Charge
     */
    public function setAmountPaid($amountPaid = null)
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Charge
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
