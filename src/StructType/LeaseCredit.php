<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseCredit StructType
 * @subpackage Structs
 */
class LeaseCredit extends FinancialTransactionHeader
{
    /**
     * The creditGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $creditGroupId;
    /**
     * Constructor method for LeaseCredit
     * @uses LeaseCredit::setCreditGroupId()
     * @param string $creditGroupId
     */
    public function __construct($creditGroupId = null)
    {
        $this
            ->setCreditGroupId($creditGroupId);
    }
    /**
     * Get creditGroupId value
     * @return string|null
     */
    public function getCreditGroupId()
    {
        return $this->creditGroupId;
    }
    /**
     * Set creditGroupId value
     * @param string $creditGroupId
     * @return \StructType\LeaseCredit
     */
    public function setCreditGroupId($creditGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($creditGroupId) && !is_string($creditGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditGroupId)), __LINE__);
        }
        $this->creditGroupId = $creditGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LeaseCredit
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
