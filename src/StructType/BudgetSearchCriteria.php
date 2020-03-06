<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BudgetSearchCriteria StructType
 * @subpackage Structs
 */
class BudgetSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The accountId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $accountId;
    /**
     * The buildingId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingId;
    /**
     * The month
     * @var int
     */
    public $month;
    /**
     * The portfolioId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $portfolioId;
    /**
     * The year
     * @var int
     */
    public $year;
    /**
     * Constructor method for BudgetSearchCriteria
     * @uses BudgetSearchCriteria::setAccountId()
     * @uses BudgetSearchCriteria::setBuildingId()
     * @uses BudgetSearchCriteria::setMonth()
     * @uses BudgetSearchCriteria::setPortfolioId()
     * @uses BudgetSearchCriteria::setYear()
     * @param int $accountId
     * @param int $buildingId
     * @param int $month
     * @param int $portfolioId
     * @param int $year
     */
    public function __construct($accountId = null, $buildingId = null, $month = null, $portfolioId = null, $year = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBuildingId($buildingId)
            ->setMonth($month)
            ->setPortfolioId($portfolioId)
            ->setYear($year);
    }
    /**
     * Get accountId value
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \StructType\BudgetSearchCriteria
     */
    public function setAccountId($accountId = null)
    {
        // validation for constraint: int
        if (!is_null($accountId) && !is_numeric($accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        return $this;
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
     * @return \StructType\BudgetSearchCriteria
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
     * Get month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \StructType\BudgetSearchCriteria
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->month = $month;
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
     * @return \StructType\BudgetSearchCriteria
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
     * Get year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \StructType\BudgetSearchCriteria
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BudgetSearchCriteria
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
