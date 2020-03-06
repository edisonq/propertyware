<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmploymentHistory StructType
 * @subpackage Structs
 */
class EmploymentHistory extends PWObject
{
    /**
     * The employmentHistoryEmployerName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistoryEmployerName;
    /**
     * The employmentHistoryEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistoryEndDate;
    /**
     * The employmentHistoryMonthlyGrossPay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistoryMonthlyGrossPay;
    /**
     * The employmentHistoryOccupation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistoryOccupation;
    /**
     * The employmentHistoryStartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistoryStartDate;
    /**
     * The employmentHistorySupervisorName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistorySupervisorName;
    /**
     * The employmentHistorySupervisorPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $employmentHistorySupervisorPhone;
    /**
     * Constructor method for EmploymentHistory
     * @uses EmploymentHistory::setEmploymentHistoryEmployerName()
     * @uses EmploymentHistory::setEmploymentHistoryEndDate()
     * @uses EmploymentHistory::setEmploymentHistoryMonthlyGrossPay()
     * @uses EmploymentHistory::setEmploymentHistoryOccupation()
     * @uses EmploymentHistory::setEmploymentHistoryStartDate()
     * @uses EmploymentHistory::setEmploymentHistorySupervisorName()
     * @uses EmploymentHistory::setEmploymentHistorySupervisorPhone()
     * @param string $employmentHistoryEmployerName
     * @param string $employmentHistoryEndDate
     * @param string $employmentHistoryMonthlyGrossPay
     * @param string $employmentHistoryOccupation
     * @param string $employmentHistoryStartDate
     * @param string $employmentHistorySupervisorName
     * @param string $employmentHistorySupervisorPhone
     */
    public function __construct($employmentHistoryEmployerName = null, $employmentHistoryEndDate = null, $employmentHistoryMonthlyGrossPay = null, $employmentHistoryOccupation = null, $employmentHistoryStartDate = null, $employmentHistorySupervisorName = null, $employmentHistorySupervisorPhone = null)
    {
        $this
            ->setEmploymentHistoryEmployerName($employmentHistoryEmployerName)
            ->setEmploymentHistoryEndDate($employmentHistoryEndDate)
            ->setEmploymentHistoryMonthlyGrossPay($employmentHistoryMonthlyGrossPay)
            ->setEmploymentHistoryOccupation($employmentHistoryOccupation)
            ->setEmploymentHistoryStartDate($employmentHistoryStartDate)
            ->setEmploymentHistorySupervisorName($employmentHistorySupervisorName)
            ->setEmploymentHistorySupervisorPhone($employmentHistorySupervisorPhone);
    }
    /**
     * Get employmentHistoryEmployerName value
     * @return string|null
     */
    public function getEmploymentHistoryEmployerName()
    {
        return $this->employmentHistoryEmployerName;
    }
    /**
     * Set employmentHistoryEmployerName value
     * @param string $employmentHistoryEmployerName
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistoryEmployerName($employmentHistoryEmployerName = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistoryEmployerName) && !is_string($employmentHistoryEmployerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistoryEmployerName)), __LINE__);
        }
        $this->employmentHistoryEmployerName = $employmentHistoryEmployerName;
        return $this;
    }
    /**
     * Get employmentHistoryEndDate value
     * @return string|null
     */
    public function getEmploymentHistoryEndDate()
    {
        return $this->employmentHistoryEndDate;
    }
    /**
     * Set employmentHistoryEndDate value
     * @param string $employmentHistoryEndDate
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistoryEndDate($employmentHistoryEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistoryEndDate) && !is_string($employmentHistoryEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistoryEndDate)), __LINE__);
        }
        $this->employmentHistoryEndDate = $employmentHistoryEndDate;
        return $this;
    }
    /**
     * Get employmentHistoryMonthlyGrossPay value
     * @return string|null
     */
    public function getEmploymentHistoryMonthlyGrossPay()
    {
        return $this->employmentHistoryMonthlyGrossPay;
    }
    /**
     * Set employmentHistoryMonthlyGrossPay value
     * @param string $employmentHistoryMonthlyGrossPay
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistoryMonthlyGrossPay($employmentHistoryMonthlyGrossPay = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistoryMonthlyGrossPay) && !is_string($employmentHistoryMonthlyGrossPay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistoryMonthlyGrossPay)), __LINE__);
        }
        $this->employmentHistoryMonthlyGrossPay = $employmentHistoryMonthlyGrossPay;
        return $this;
    }
    /**
     * Get employmentHistoryOccupation value
     * @return string|null
     */
    public function getEmploymentHistoryOccupation()
    {
        return $this->employmentHistoryOccupation;
    }
    /**
     * Set employmentHistoryOccupation value
     * @param string $employmentHistoryOccupation
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistoryOccupation($employmentHistoryOccupation = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistoryOccupation) && !is_string($employmentHistoryOccupation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistoryOccupation)), __LINE__);
        }
        $this->employmentHistoryOccupation = $employmentHistoryOccupation;
        return $this;
    }
    /**
     * Get employmentHistoryStartDate value
     * @return string|null
     */
    public function getEmploymentHistoryStartDate()
    {
        return $this->employmentHistoryStartDate;
    }
    /**
     * Set employmentHistoryStartDate value
     * @param string $employmentHistoryStartDate
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistoryStartDate($employmentHistoryStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistoryStartDate) && !is_string($employmentHistoryStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistoryStartDate)), __LINE__);
        }
        $this->employmentHistoryStartDate = $employmentHistoryStartDate;
        return $this;
    }
    /**
     * Get employmentHistorySupervisorName value
     * @return string|null
     */
    public function getEmploymentHistorySupervisorName()
    {
        return $this->employmentHistorySupervisorName;
    }
    /**
     * Set employmentHistorySupervisorName value
     * @param string $employmentHistorySupervisorName
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistorySupervisorName($employmentHistorySupervisorName = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistorySupervisorName) && !is_string($employmentHistorySupervisorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistorySupervisorName)), __LINE__);
        }
        $this->employmentHistorySupervisorName = $employmentHistorySupervisorName;
        return $this;
    }
    /**
     * Get employmentHistorySupervisorPhone value
     * @return string|null
     */
    public function getEmploymentHistorySupervisorPhone()
    {
        return $this->employmentHistorySupervisorPhone;
    }
    /**
     * Set employmentHistorySupervisorPhone value
     * @param string $employmentHistorySupervisorPhone
     * @return \StructType\EmploymentHistory
     */
    public function setEmploymentHistorySupervisorPhone($employmentHistorySupervisorPhone = null)
    {
        // validation for constraint: string
        if (!is_null($employmentHistorySupervisorPhone) && !is_string($employmentHistorySupervisorPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($employmentHistorySupervisorPhone)), __LINE__);
        }
        $this->employmentHistorySupervisorPhone = $employmentHistorySupervisorPhone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EmploymentHistory
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
