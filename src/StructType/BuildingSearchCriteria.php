<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuildingSearchCriteria StructType
 * @subpackage Structs
 */
class BuildingSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The ownerId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ownerId;
    /**
     * Constructor method for BuildingSearchCriteria
     * @uses BuildingSearchCriteria::setOwnerId()
     * @param int $ownerId
     */
    public function __construct($ownerId = null)
    {
        $this
            ->setOwnerId($ownerId);
    }
    /**
     * Get ownerId value
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param int $ownerId
     * @return \StructType\BuildingSearchCriteria
     */
    public function setOwnerId($ownerId = null)
    {
        // validation for constraint: int
        if (!is_null($ownerId) && !is_numeric($ownerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerId)), __LINE__);
        }
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BuildingSearchCriteria
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
