<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Budget StructType
 * @subpackage Structs
 */
class Budget extends PWObject
{
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $account;
    /**
     * The budget
     * @var float
     */
    public $budget;
    /**
     * The buildingID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingID;
    /**
     * The month
     * @var int
     */
    public $month;
    /**
     * The portfolioID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $portfolioID;
    /**
     * The year
     * @var int
     */
    public $year;
    /**
     * Constructor method for Budget
     * @uses Budget::setAccount()
     * @uses Budget::setBudget()
     * @uses Budget::setBuildingID()
     * @uses Budget::setMonth()
     * @uses Budget::setPortfolioID()
     * @uses Budget::setYear()
     * @param \StructType\Account $account
     * @param float $budget
     * @param int $buildingID
     * @param int $month
     * @param int $portfolioID
     * @param int $year
     */
    public function __construct(\StructType\Account $account = null, $budget = null, $buildingID = null, $month = null, $portfolioID = null, $year = null)
    {
        $this
            ->setAccount($account)
            ->setBudget($budget)
            ->setBuildingID($buildingID)
            ->setMonth($month)
            ->setPortfolioID($portfolioID)
            ->setYear($year);
    }
    /**
     * Get account value
     * @return \StructType\Account|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \StructType\Account $account
     * @return \StructType\Budget
     */
    public function setAccount(\StructType\Account $account = null)
    {
        $this->account = $account;
        return $this;
    }
    /**
     * Get budget value
     * @return float|null
     */
    public function getBudget()
    {
        return $this->budget;
    }
    /**
     * Set budget value
     * @param float $budget
     * @return \StructType\Budget
     */
    public function setBudget($budget = null)
    {
        $this->budget = $budget;
        return $this;
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
     * @return \StructType\Budget
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
     * @return \StructType\Budget
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
     * @return \StructType\Budget
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
     * @return \StructType\Budget
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
     * @return \StructType\Budget
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
