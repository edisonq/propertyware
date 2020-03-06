<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyLeaseLedgerSearchCriteria StructType
 * @subpackage Structs
 */
class ReadOnlyLeaseLedgerSearchCriteria extends BaseDTOSearchCriteria
{
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The leaseId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $leaseId;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The transactionType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transactionType;
    /**
     * Constructor method for ReadOnlyLeaseLedgerSearchCriteria
     * @uses ReadOnlyLeaseLedgerSearchCriteria::setEndDate()
     * @uses ReadOnlyLeaseLedgerSearchCriteria::setLeaseId()
     * @uses ReadOnlyLeaseLedgerSearchCriteria::setStartDate()
     * @uses ReadOnlyLeaseLedgerSearchCriteria::setTransactionType()
     * @param string $endDate
     * @param int $leaseId
     * @param string $startDate
     * @param string $transactionType
     */
    public function __construct($endDate = null, $leaseId = null, $startDate = null, $transactionType = null)
    {
        $this
            ->setEndDate($endDate)
            ->setLeaseId($leaseId)
            ->setStartDate($startDate)
            ->setTransactionType($transactionType);
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
     * @return \StructType\ReadOnlyLeaseLedgerSearchCriteria
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
     * Get leaseId value
     * @return int|null
     */
    public function getLeaseId()
    {
        return $this->leaseId;
    }
    /**
     * Set leaseId value
     * @param int $leaseId
     * @return \StructType\ReadOnlyLeaseLedgerSearchCriteria
     */
    public function setLeaseId($leaseId = null)
    {
        // validation for constraint: int
        if (!is_null($leaseId) && !is_numeric($leaseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leaseId)), __LINE__);
        }
        $this->leaseId = $leaseId;
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
     * @return \StructType\ReadOnlyLeaseLedgerSearchCriteria
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
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \StructType\ReadOnlyLeaseLedgerSearchCriteria
     */
    public function setTransactionType($transactionType = null)
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyLeaseLedgerSearchCriteria
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
