<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InspectionSearchCriteria StructType
 * @subpackage Structs
 */
class InspectionSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The buildingId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingId;
    /**
     * The unitId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $unitId;
    /**
     * Constructor method for InspectionSearchCriteria
     * @uses InspectionSearchCriteria::setBuildingId()
     * @uses InspectionSearchCriteria::setUnitId()
     * @param int $buildingId
     * @param int $unitId
     */
    public function __construct($buildingId = null, $unitId = null)
    {
        $this
            ->setBuildingId($buildingId)
            ->setUnitId($unitId);
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
     * @return \StructType\InspectionSearchCriteria
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
     * Get unitId value
     * @return int|null
     */
    public function getUnitId()
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param int $unitId
     * @return \StructType\InspectionSearchCriteria
     */
    public function setUnitId($unitId = null)
    {
        // validation for constraint: int
        if (!is_null($unitId) && !is_numeric($unitId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InspectionSearchCriteria
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
