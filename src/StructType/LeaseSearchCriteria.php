<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseSearchCriteria StructType
 * @subpackage Structs
 */
class LeaseSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The tenantId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $tenantId;
    /**
     * Constructor method for LeaseSearchCriteria
     * @uses LeaseSearchCriteria::setTenantId()
     * @param int $tenantId
     */
    public function __construct($tenantId = null)
    {
        $this
            ->setTenantId($tenantId);
    }
    /**
     * Get tenantId value
     * @return int|null
     */
    public function getTenantId()
    {
        return $this->tenantId;
    }
    /**
     * Set tenantId value
     * @param int $tenantId
     * @return \StructType\LeaseSearchCriteria
     */
    public function setTenantId($tenantId = null)
    {
        // validation for constraint: int
        if (!is_null($tenantId) && !is_numeric($tenantId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tenantId)), __LINE__);
        }
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LeaseSearchCriteria
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
