<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyLeaseRefund StructType
 * @subpackage Structs
 */
class ReadOnlyLeaseRefund extends ReadOnlyLeaseLedgerItem
{
    /**
     * The bank
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bank;
    /**
     * Constructor method for ReadOnlyLeaseRefund
     * @uses ReadOnlyLeaseRefund::setBank()
     * @param \StructType\Bank $bank
     */
    public function __construct(\StructType\Bank $bank = null)
    {
        $this
            ->setBank($bank);
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
     * @return \StructType\ReadOnlyLeaseRefund
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyLeaseRefund
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
