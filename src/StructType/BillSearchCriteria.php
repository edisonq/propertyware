<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillSearchCriteria StructType
 * @subpackage Structs
 */
class BillSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The vendorId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $vendorId;
    /**
     * The workOrderId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $workOrderId;
    /**
     * Constructor method for BillSearchCriteria
     * @uses BillSearchCriteria::setVendorId()
     * @uses BillSearchCriteria::setWorkOrderId()
     * @param int $vendorId
     * @param int $workOrderId
     */
    public function __construct($vendorId = null, $workOrderId = null)
    {
        $this
            ->setVendorId($vendorId)
            ->setWorkOrderId($workOrderId);
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
     * @return \StructType\BillSearchCriteria
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
     * Get workOrderId value
     * @return int|null
     */
    public function getWorkOrderId()
    {
        return $this->workOrderId;
    }
    /**
     * Set workOrderId value
     * @param int $workOrderId
     * @return \StructType\BillSearchCriteria
     */
    public function setWorkOrderId($workOrderId = null)
    {
        // validation for constraint: int
        if (!is_null($workOrderId) && !is_numeric($workOrderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($workOrderId)), __LINE__);
        }
        $this->workOrderId = $workOrderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BillSearchCriteria
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
