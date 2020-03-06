<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentSearchCriteria StructType
 * @subpackage Structs
 */
class AppointmentSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The prospectID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $prospectID;
    /**
     * Constructor method for AppointmentSearchCriteria
     * @uses AppointmentSearchCriteria::setProspectID()
     * @param int $prospectID
     */
    public function __construct($prospectID = null)
    {
        $this
            ->setProspectID($prospectID);
    }
    /**
     * Get prospectID value
     * @return int|null
     */
    public function getProspectID()
    {
        return $this->prospectID;
    }
    /**
     * Set prospectID value
     * @param int $prospectID
     * @return \StructType\AppointmentSearchCriteria
     */
    public function setProspectID($prospectID = null)
    {
        // validation for constraint: int
        if (!is_null($prospectID) && !is_numeric($prospectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($prospectID)), __LINE__);
        }
        $this->prospectID = $prospectID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AppointmentSearchCriteria
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
