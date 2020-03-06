<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LateFeeRule StructType
 * @subpackage Structs
 */
class LateFeeRule extends PWObject
{
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
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
     * The feeType
     * @var int
     */
    public $feeType;
    /**
     * The finalRangeAmount
     * @var float
     */
    public $finalRangeAmount;
    /**
     * The flatFee
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flatFee;
    /**
     * The graceThreshold
     * @var int
     */
    public $graceThreshold;
    /**
     * The initialFeeMethod
     * @var int
     */
    public $initialFeeMethod;
    /**
     * The initialRangeAmount
     * @var float
     */
    public $initialRangeAmount;
    /**
     * The initialRangeEndDay
     * @var int
     */
    public $initialRangeEndDay;
    /**
     * The limitAmountToMaximum
     * @var bool
     */
    public $limitAmountToMaximum;
    /**
     * The maximumAmount
     * @var float
     */
    public $maximumAmount;
    /**
     * The middleRangeAmount
     * @var float
     */
    public $middleRangeAmount;
    /**
     * The middleRangeEndDay
     * @var int
     */
    public $middleRangeEndDay;
    /**
     * The minimumDue
     * @var float
     */
    public $minimumDue;
    /**
     * The oneTimeFee
     * @var float
     */
    public $oneTimeFee;
    /**
     * The perDayFee
     * @var float
     */
    public $perDayFee;
    /**
     * The perDayFeeMethod
     * @var int
     */
    public $perDayFeeMethod;
    /**
     * The percentage
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $percentage;
    /**
     * Constructor method for LateFeeRule
     * @uses LateFeeRule::setComments()
     * @uses LateFeeRule::setDescription()
     * @uses LateFeeRule::setDueDay()
     * @uses LateFeeRule::setFeeType()
     * @uses LateFeeRule::setFinalRangeAmount()
     * @uses LateFeeRule::setFlatFee()
     * @uses LateFeeRule::setGraceThreshold()
     * @uses LateFeeRule::setInitialFeeMethod()
     * @uses LateFeeRule::setInitialRangeAmount()
     * @uses LateFeeRule::setInitialRangeEndDay()
     * @uses LateFeeRule::setLimitAmountToMaximum()
     * @uses LateFeeRule::setMaximumAmount()
     * @uses LateFeeRule::setMiddleRangeAmount()
     * @uses LateFeeRule::setMiddleRangeEndDay()
     * @uses LateFeeRule::setMinimumDue()
     * @uses LateFeeRule::setOneTimeFee()
     * @uses LateFeeRule::setPerDayFee()
     * @uses LateFeeRule::setPerDayFeeMethod()
     * @uses LateFeeRule::setPercentage()
     * @param string $comments
     * @param string $description
     * @param int $dueDay
     * @param int $feeType
     * @param float $finalRangeAmount
     * @param string $flatFee
     * @param int $graceThreshold
     * @param int $initialFeeMethod
     * @param float $initialRangeAmount
     * @param int $initialRangeEndDay
     * @param bool $limitAmountToMaximum
     * @param float $maximumAmount
     * @param float $middleRangeAmount
     * @param int $middleRangeEndDay
     * @param float $minimumDue
     * @param float $oneTimeFee
     * @param float $perDayFee
     * @param int $perDayFeeMethod
     * @param string $percentage
     */
    public function __construct($comments = null, $description = null, $dueDay = null, $feeType = null, $finalRangeAmount = null, $flatFee = null, $graceThreshold = null, $initialFeeMethod = null, $initialRangeAmount = null, $initialRangeEndDay = null, $limitAmountToMaximum = null, $maximumAmount = null, $middleRangeAmount = null, $middleRangeEndDay = null, $minimumDue = null, $oneTimeFee = null, $perDayFee = null, $perDayFeeMethod = null, $percentage = null)
    {
        $this
            ->setComments($comments)
            ->setDescription($description)
            ->setDueDay($dueDay)
            ->setFeeType($feeType)
            ->setFinalRangeAmount($finalRangeAmount)
            ->setFlatFee($flatFee)
            ->setGraceThreshold($graceThreshold)
            ->setInitialFeeMethod($initialFeeMethod)
            ->setInitialRangeAmount($initialRangeAmount)
            ->setInitialRangeEndDay($initialRangeEndDay)
            ->setLimitAmountToMaximum($limitAmountToMaximum)
            ->setMaximumAmount($maximumAmount)
            ->setMiddleRangeAmount($middleRangeAmount)
            ->setMiddleRangeEndDay($middleRangeEndDay)
            ->setMinimumDue($minimumDue)
            ->setOneTimeFee($oneTimeFee)
            ->setPerDayFee($perDayFee)
            ->setPerDayFeeMethod($perDayFeeMethod)
            ->setPercentage($percentage);
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \StructType\LateFeeRule
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
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
     * @return \StructType\LateFeeRule
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
     * @return \StructType\LateFeeRule
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
     * Get feeType value
     * @return int|null
     */
    public function getFeeType()
    {
        return $this->feeType;
    }
    /**
     * Set feeType value
     * @param int $feeType
     * @return \StructType\LateFeeRule
     */
    public function setFeeType($feeType = null)
    {
        // validation for constraint: int
        if (!is_null($feeType) && !is_numeric($feeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feeType)), __LINE__);
        }
        $this->feeType = $feeType;
        return $this;
    }
    /**
     * Get finalRangeAmount value
     * @return float|null
     */
    public function getFinalRangeAmount()
    {
        return $this->finalRangeAmount;
    }
    /**
     * Set finalRangeAmount value
     * @param float $finalRangeAmount
     * @return \StructType\LateFeeRule
     */
    public function setFinalRangeAmount($finalRangeAmount = null)
    {
        $this->finalRangeAmount = $finalRangeAmount;
        return $this;
    }
    /**
     * Get flatFee value
     * @return string|null
     */
    public function getFlatFee()
    {
        return $this->flatFee;
    }
    /**
     * Set flatFee value
     * @param string $flatFee
     * @return \StructType\LateFeeRule
     */
    public function setFlatFee($flatFee = null)
    {
        // validation for constraint: string
        if (!is_null($flatFee) && !is_string($flatFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flatFee)), __LINE__);
        }
        $this->flatFee = $flatFee;
        return $this;
    }
    /**
     * Get graceThreshold value
     * @return int|null
     */
    public function getGraceThreshold()
    {
        return $this->graceThreshold;
    }
    /**
     * Set graceThreshold value
     * @param int $graceThreshold
     * @return \StructType\LateFeeRule
     */
    public function setGraceThreshold($graceThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($graceThreshold) && !is_numeric($graceThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graceThreshold)), __LINE__);
        }
        $this->graceThreshold = $graceThreshold;
        return $this;
    }
    /**
     * Get initialFeeMethod value
     * @return int|null
     */
    public function getInitialFeeMethod()
    {
        return $this->initialFeeMethod;
    }
    /**
     * Set initialFeeMethod value
     * @param int $initialFeeMethod
     * @return \StructType\LateFeeRule
     */
    public function setInitialFeeMethod($initialFeeMethod = null)
    {
        // validation for constraint: int
        if (!is_null($initialFeeMethod) && !is_numeric($initialFeeMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($initialFeeMethod)), __LINE__);
        }
        $this->initialFeeMethod = $initialFeeMethod;
        return $this;
    }
    /**
     * Get initialRangeAmount value
     * @return float|null
     */
    public function getInitialRangeAmount()
    {
        return $this->initialRangeAmount;
    }
    /**
     * Set initialRangeAmount value
     * @param float $initialRangeAmount
     * @return \StructType\LateFeeRule
     */
    public function setInitialRangeAmount($initialRangeAmount = null)
    {
        $this->initialRangeAmount = $initialRangeAmount;
        return $this;
    }
    /**
     * Get initialRangeEndDay value
     * @return int|null
     */
    public function getInitialRangeEndDay()
    {
        return $this->initialRangeEndDay;
    }
    /**
     * Set initialRangeEndDay value
     * @param int $initialRangeEndDay
     * @return \StructType\LateFeeRule
     */
    public function setInitialRangeEndDay($initialRangeEndDay = null)
    {
        // validation for constraint: int
        if (!is_null($initialRangeEndDay) && !is_numeric($initialRangeEndDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($initialRangeEndDay)), __LINE__);
        }
        $this->initialRangeEndDay = $initialRangeEndDay;
        return $this;
    }
    /**
     * Get limitAmountToMaximum value
     * @return bool|null
     */
    public function getLimitAmountToMaximum()
    {
        return $this->limitAmountToMaximum;
    }
    /**
     * Set limitAmountToMaximum value
     * @param bool $limitAmountToMaximum
     * @return \StructType\LateFeeRule
     */
    public function setLimitAmountToMaximum($limitAmountToMaximum = null)
    {
        // validation for constraint: boolean
        if (!is_null($limitAmountToMaximum) && !is_bool($limitAmountToMaximum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($limitAmountToMaximum)), __LINE__);
        }
        $this->limitAmountToMaximum = $limitAmountToMaximum;
        return $this;
    }
    /**
     * Get maximumAmount value
     * @return float|null
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }
    /**
     * Set maximumAmount value
     * @param float $maximumAmount
     * @return \StructType\LateFeeRule
     */
    public function setMaximumAmount($maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }
    /**
     * Get middleRangeAmount value
     * @return float|null
     */
    public function getMiddleRangeAmount()
    {
        return $this->middleRangeAmount;
    }
    /**
     * Set middleRangeAmount value
     * @param float $middleRangeAmount
     * @return \StructType\LateFeeRule
     */
    public function setMiddleRangeAmount($middleRangeAmount = null)
    {
        $this->middleRangeAmount = $middleRangeAmount;
        return $this;
    }
    /**
     * Get middleRangeEndDay value
     * @return int|null
     */
    public function getMiddleRangeEndDay()
    {
        return $this->middleRangeEndDay;
    }
    /**
     * Set middleRangeEndDay value
     * @param int $middleRangeEndDay
     * @return \StructType\LateFeeRule
     */
    public function setMiddleRangeEndDay($middleRangeEndDay = null)
    {
        // validation for constraint: int
        if (!is_null($middleRangeEndDay) && !is_numeric($middleRangeEndDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($middleRangeEndDay)), __LINE__);
        }
        $this->middleRangeEndDay = $middleRangeEndDay;
        return $this;
    }
    /**
     * Get minimumDue value
     * @return float|null
     */
    public function getMinimumDue()
    {
        return $this->minimumDue;
    }
    /**
     * Set minimumDue value
     * @param float $minimumDue
     * @return \StructType\LateFeeRule
     */
    public function setMinimumDue($minimumDue = null)
    {
        $this->minimumDue = $minimumDue;
        return $this;
    }
    /**
     * Get oneTimeFee value
     * @return float|null
     */
    public function getOneTimeFee()
    {
        return $this->oneTimeFee;
    }
    /**
     * Set oneTimeFee value
     * @param float $oneTimeFee
     * @return \StructType\LateFeeRule
     */
    public function setOneTimeFee($oneTimeFee = null)
    {
        $this->oneTimeFee = $oneTimeFee;
        return $this;
    }
    /**
     * Get perDayFee value
     * @return float|null
     */
    public function getPerDayFee()
    {
        return $this->perDayFee;
    }
    /**
     * Set perDayFee value
     * @param float $perDayFee
     * @return \StructType\LateFeeRule
     */
    public function setPerDayFee($perDayFee = null)
    {
        $this->perDayFee = $perDayFee;
        return $this;
    }
    /**
     * Get perDayFeeMethod value
     * @return int|null
     */
    public function getPerDayFeeMethod()
    {
        return $this->perDayFeeMethod;
    }
    /**
     * Set perDayFeeMethod value
     * @param int $perDayFeeMethod
     * @return \StructType\LateFeeRule
     */
    public function setPerDayFeeMethod($perDayFeeMethod = null)
    {
        // validation for constraint: int
        if (!is_null($perDayFeeMethod) && !is_numeric($perDayFeeMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($perDayFeeMethod)), __LINE__);
        }
        $this->perDayFeeMethod = $perDayFeeMethod;
        return $this;
    }
    /**
     * Get percentage value
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param string $percentage
     * @return \StructType\LateFeeRule
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentage)), __LINE__);
        }
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LateFeeRule
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
