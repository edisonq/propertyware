<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkOrderSearchCriteria StructType
 * @subpackage Structs
 */
class WorkOrderSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The buildingId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingId;
    /**
     * The contactId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $contactId;
    /**
     * The orderByNewestFirst
     * @var bool
     */
    public $orderByNewestFirst;
    /**
     * The portfolioId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $portfolioId;
    /**
     * The unitId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $unitId;
    /**
     * The vendorId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $vendorId;
    /**
     * The workOrderNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $workOrderNumber;
    /**
     * Constructor method for WorkOrderSearchCriteria
     * @uses WorkOrderSearchCriteria::setBuildingId()
     * @uses WorkOrderSearchCriteria::setContactId()
     * @uses WorkOrderSearchCriteria::setOrderByNewestFirst()
     * @uses WorkOrderSearchCriteria::setPortfolioId()
     * @uses WorkOrderSearchCriteria::setUnitId()
     * @uses WorkOrderSearchCriteria::setVendorId()
     * @uses WorkOrderSearchCriteria::setWorkOrderNumber()
     * @param int $buildingId
     * @param int $contactId
     * @param bool $orderByNewestFirst
     * @param int $portfolioId
     * @param int $unitId
     * @param int $vendorId
     * @param int $workOrderNumber
     */
    public function __construct($buildingId = null, $contactId = null, $orderByNewestFirst = null, $portfolioId = null, $unitId = null, $vendorId = null, $workOrderNumber = null)
    {
        $this
            ->setBuildingId($buildingId)
            ->setContactId($contactId)
            ->setOrderByNewestFirst($orderByNewestFirst)
            ->setPortfolioId($portfolioId)
            ->setUnitId($unitId)
            ->setVendorId($vendorId)
            ->setWorkOrderNumber($workOrderNumber);
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
     * @return \StructType\WorkOrderSearchCriteria
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
     * Get contactId value
     * @return int|null
     */
    public function getContactId()
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \StructType\WorkOrderSearchCriteria
     */
    public function setContactId($contactId = null)
    {
        // validation for constraint: int
        if (!is_null($contactId) && !is_numeric($contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Get orderByNewestFirst value
     * @return bool|null
     */
    public function getOrderByNewestFirst()
    {
        return $this->orderByNewestFirst;
    }
    /**
     * Set orderByNewestFirst value
     * @param bool $orderByNewestFirst
     * @return \StructType\WorkOrderSearchCriteria
     */
    public function setOrderByNewestFirst($orderByNewestFirst = null)
    {
        // validation for constraint: boolean
        if (!is_null($orderByNewestFirst) && !is_bool($orderByNewestFirst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($orderByNewestFirst)), __LINE__);
        }
        $this->orderByNewestFirst = $orderByNewestFirst;
        return $this;
    }
    /**
     * Get portfolioId value
     * @return int|null
     */
    public function getPortfolioId()
    {
        return $this->portfolioId;
    }
    /**
     * Set portfolioId value
     * @param int $portfolioId
     * @return \StructType\WorkOrderSearchCriteria
     */
    public function setPortfolioId($portfolioId = null)
    {
        // validation for constraint: int
        if (!is_null($portfolioId) && !is_numeric($portfolioId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portfolioId)), __LINE__);
        }
        $this->portfolioId = $portfolioId;
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
     * @return \StructType\WorkOrderSearchCriteria
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
     * Get vendorId value
     * @return int|null
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }
    /**
     * Set vendorId value
     * @param int $vendorId
     * @return \StructType\WorkOrderSearchCriteria
     */
    public function setVendorId($vendorId = null)
    {
        // validation for constraint: int
        if (!is_null($vendorId) && !is_numeric($vendorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vendorId)), __LINE__);
        }
        $this->vendorId = $vendorId;
        return $this;
    }
    /**
     * Get workOrderNumber value
     * @return int|null
     */
    public function getWorkOrderNumber()
    {
        return $this->workOrderNumber;
    }
    /**
     * Set workOrderNumber value
     * @param int $workOrderNumber
     * @return \StructType\WorkOrderSearchCriteria
     */
    public function setWorkOrderNumber($workOrderNumber = null)
    {
        // validation for constraint: int
        if (!is_null($workOrderNumber) && !is_numeric($workOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($workOrderNumber)), __LINE__);
        }
        $this->workOrderNumber = $workOrderNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkOrderSearchCriteria
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
