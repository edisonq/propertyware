<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitSearchCriteria StructType
 * @subpackage Structs
 */
class UnitSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The buildingId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingId;
    /**
     * Constructor method for UnitSearchCriteria
     * @uses UnitSearchCriteria::setBuildingId()
     * @param int $buildingId
     */
    public function __construct($buildingId = null)
    {
        $this
            ->setBuildingId($buildingId);
    }
    /**
     * Get buildingId value
     * @return int|null
     */
    public function getBuildingId()
    {
        return $this->buildingId;
    }
    /**
     * Set buildingId value
     * @param int $buildingId
     * @return \StructType\UnitSearchCriteria
     */
    public function setBuildingId($buildingId = null)
    {
        // validation for constraint: int
        if (!is_null($buildingId) && !is_numeric($buildingId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingId)), __LINE__);
        }
        $this->buildingId = $buildingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UnitSearchCriteria
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
