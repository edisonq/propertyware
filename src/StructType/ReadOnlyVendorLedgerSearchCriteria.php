<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyVendorLedgerSearchCriteria StructType
 * @subpackage Structs
 */
class ReadOnlyVendorLedgerSearchCriteria extends BaseDTOSearchCriteria
{
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The vendorId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $vendorId;
    /**
     * Constructor method for ReadOnlyVendorLedgerSearchCriteria
     * @uses ReadOnlyVendorLedgerSearchCriteria::setEndDate()
     * @uses ReadOnlyVendorLedgerSearchCriteria::setStartDate()
     * @uses ReadOnlyVendorLedgerSearchCriteria::setVendorId()
     * @param string $endDate
     * @param string $startDate
     * @param int $vendorId
     */
    public function __construct($endDate = null, $startDate = null, $vendorId = null)
    {
        $this
            ->setEndDate($endDate)
            ->setStartDate($startDate)
            ->setVendorId($vendorId);
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\ReadOnlyVendorLedgerSearchCriteria
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\ReadOnlyVendorLedgerSearchCriteria
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
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
     * @return \StructType\ReadOnlyVendorLedgerSearchCriteria
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyVendorLedgerSearchCriteria
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
