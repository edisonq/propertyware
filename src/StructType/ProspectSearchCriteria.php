<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProspectSearchCriteria StructType
 * @subpackage Structs
 */
class ProspectSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The dateCreated
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateCreated;
    /**
     * The primaryContactId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $primaryContactId;
    /**
     * Constructor method for ProspectSearchCriteria
     * @uses ProspectSearchCriteria::setDateCreated()
     * @uses ProspectSearchCriteria::setPrimaryContactId()
     * @param string $dateCreated
     * @param int $primaryContactId
     */
    public function __construct($dateCreated = null, $primaryContactId = null)
    {
        $this
            ->setDateCreated($dateCreated)
            ->setPrimaryContactId($primaryContactId);
    }
    /**
     * Get dateCreated value
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
    /**
     * Set dateCreated value
     * @param string $dateCreated
     * @return \StructType\ProspectSearchCriteria
     */
    public function setDateCreated($dateCreated = null)
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateCreated)), __LINE__);
        }
        $this->dateCreated = $dateCreated;
        return $this;
    }
    /**
     * Get primaryContactId value
     * @return int|null
     */
    public function getPrimaryContactId()
    {
        return $this->primaryContactId;
    }
    /**
     * Set primaryContactId value
     * @param int $primaryContactId
     * @return \StructType\ProspectSearchCriteria
     */
    public function setPrimaryContactId($primaryContactId = null)
    {
        // validation for constraint: int
        if (!is_null($primaryContactId) && !is_numeric($primaryContactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($primaryContactId)), __LINE__);
        }
        $this->primaryContactId = $primaryContactId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ProspectSearchCriteria
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
