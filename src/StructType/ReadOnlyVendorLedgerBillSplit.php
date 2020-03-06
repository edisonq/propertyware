<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyVendorLedgerBillSplit StructType
 * @subpackage Structs
 */
class ReadOnlyVendorLedgerBillSplit extends ReadOnlyVendorLedgerItem
{
    /**
     * The buildingID
     * @var int
     */
    public $buildingID;
    /**
     * The portfolioID
     * @var int
     */
    public $portfolioID;
    /**
     * The unitID
     * @var int
     */
    public $unitID;
    /**
     * Constructor method for ReadOnlyVendorLedgerBillSplit
     * @uses ReadOnlyVendorLedgerBillSplit::setBuildingID()
     * @uses ReadOnlyVendorLedgerBillSplit::setPortfolioID()
     * @uses ReadOnlyVendorLedgerBillSplit::setUnitID()
     * @param int $buildingID
     * @param int $portfolioID
     * @param int $unitID
     */
    public function __construct($buildingID = null, $portfolioID = null, $unitID = null)
    {
        $this
            ->setBuildingID($buildingID)
            ->setPortfolioID($portfolioID)
            ->setUnitID($unitID);
    }
    /**
     * Get buildingID value
     * @return int|null
     */
    public function getBuildingID()
    {
        return $this->buildingID;
    }
    /**
     * Set buildingID value
     * @param int $buildingID
     * @return \StructType\ReadOnlyVendorLedgerBillSplit
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !is_numeric($buildingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingID)), __LINE__);
        }
        $this->buildingID = $buildingID;
        return $this;
    }
    /**
     * Get portfolioID value
     * @return int|null
     */
    public function getPortfolioID()
    {
        return $this->portfolioID;
    }
    /**
     * Set portfolioID value
     * @param int $portfolioID
     * @return \StructType\ReadOnlyVendorLedgerBillSplit
     */
    public function setPortfolioID($portfolioID = null)
    {
        // validation for constraint: int
        if (!is_null($portfolioID) && !is_numeric($portfolioID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portfolioID)), __LINE__);
        }
        $this->portfolioID = $portfolioID;
        return $this;
    }
    /**
     * Get unitID value
     * @return int|null
     */
    public function getUnitID()
    {
        return $this->unitID;
    }
    /**
     * Set unitID value
     * @param int $unitID
     * @return \StructType\ReadOnlyVendorLedgerBillSplit
     */
    public function setUnitID($unitID = null)
    {
        // validation for constraint: int
        if (!is_null($unitID) && !is_numeric($unitID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitID)), __LINE__);
        }
        $this->unitID = $unitID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyVendorLedgerBillSplit
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
