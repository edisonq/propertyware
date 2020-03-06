<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoCharge StructType
 * @subpackage Structs
 */
class AutoCharge extends PWObject
{
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $account;
    /**
     * The amount
     * @var float
     */
    public $amount;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The dueDay
     * @var int
     */
    public $dueDay;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The frequency
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frequency;
    /**
     * The lastPostDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastPostDate;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceNumber;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * Constructor method for AutoCharge
     * @uses AutoCharge::setAccount()
     * @uses AutoCharge::setAmount()
     * @uses AutoCharge::setDescription()
     * @uses AutoCharge::setDueDay()
     * @uses AutoCharge::setEndDate()
     * @uses AutoCharge::setFrequency()
     * @uses AutoCharge::setLastPostDate()
     * @uses AutoCharge::setReferenceNumber()
     * @uses AutoCharge::setStartDate()
     * @param \StructType\Account $account
     * @param float $amount
     * @param string $description
     * @param int $dueDay
     * @param string $endDate
     * @param string $frequency
     * @param string $lastPostDate
     * @param string $referenceNumber
     * @param string $startDate
     */
    public function __construct(\StructType\Account $account = null, $amount = null, $description = null, $dueDay = null, $endDate = null, $frequency = null, $lastPostDate = null, $referenceNumber = null, $startDate = null)
    {
        $this
            ->setAccount($account)
            ->setAmount($amount)
            ->setDescription($description)
            ->setDueDay($dueDay)
            ->setEndDate($endDate)
            ->setFrequency($frequency)
            ->setLastPostDate($lastPostDate)
            ->setReferenceNumber($referenceNumber)
            ->setStartDate($startDate);
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
     * @return \StructType\AutoCharge
     */
    public function setAccount(\StructType\Account $account = null)
    {
        $this->account = $account;
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\AutoCharge
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\AutoCharge
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get dueDay value
     * @return int|null
     */
    public function getDueDay()
    {
        return $this->dueDay;
    }
    /**
     * Set dueDay value
     * @param int $dueDay
     * @return \StructType\AutoCharge
     */
    public function setDueDay($dueDay = null)
    {
        // validation for constraint: int
        if (!is_null($dueDay) && !is_numeric($dueDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dueDay)), __LINE__);
        }
        $this->dueDay = $dueDay;
        return $this;
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
     * @return \StructType\AutoCharge
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
     * Get frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \StructType\AutoCharge
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Get lastPostDate value
     * @return string|null
     */
    public function getLastPostDate()
    {
        return $this->lastPostDate;
    }
    /**
     * Set lastPostDate value
     * @param string $lastPostDate
     * @return \StructType\AutoCharge
     */
    public function setLastPostDate($lastPostDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPostDate) && !is_string($lastPostDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastPostDate)), __LINE__);
        }
        $this->lastPostDate = $lastPostDate;
        return $this;
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $referenceNumber
     * @return \StructType\AutoCharge
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;
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
     * @return \StructType\AutoCharge
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AutoCharge
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
