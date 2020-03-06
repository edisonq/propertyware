<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * @subpackage Structs
 */
class Payment extends PWFinanceObject
{
    /**
     * The depositToAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositToAccount;
    /**
     * The directDeposit
     * @var bool
     */
    public $directDeposit;
    /**
     * The discountAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $discountAccount;
    /**
     * The discountAmount
     * @var float
     */
    public $discountAmount;
    /**
     * The incomeCheck
     * @var bool
     */
    public $incomeCheck;
    /**
     * The ownerContribution
     * @var bool
     */
    public $ownerContribution;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentType;
    /**
     * The prepaymentAmount
     * @var float
     */
    public $prepaymentAmount;
    /**
     * The vendorPayment
     * @var bool
     */
    public $vendorPayment;
    /**
     * Constructor method for Payment
     * @uses Payment::setDepositToAccount()
     * @uses Payment::setDirectDeposit()
     * @uses Payment::setDiscountAccount()
     * @uses Payment::setDiscountAmount()
     * @uses Payment::setIncomeCheck()
     * @uses Payment::setOwnerContribution()
     * @uses Payment::setPaymentType()
     * @uses Payment::setPrepaymentAmount()
     * @uses Payment::setVendorPayment()
     * @param string $depositToAccount
     * @param bool $directDeposit
     * @param string $discountAccount
     * @param float $discountAmount
     * @param bool $incomeCheck
     * @param bool $ownerContribution
     * @param string $paymentType
     * @param float $prepaymentAmount
     * @param bool $vendorPayment
     */
    public function __construct($depositToAccount = null, $directDeposit = null, $discountAccount = null, $discountAmount = null, $incomeCheck = null, $ownerContribution = null, $paymentType = null, $prepaymentAmount = null, $vendorPayment = null)
    {
        $this
            ->setDepositToAccount($depositToAccount)
            ->setDirectDeposit($directDeposit)
            ->setDiscountAccount($discountAccount)
            ->setDiscountAmount($discountAmount)
            ->setIncomeCheck($incomeCheck)
            ->setOwnerContribution($ownerContribution)
            ->setPaymentType($paymentType)
            ->setPrepaymentAmount($prepaymentAmount)
            ->setVendorPayment($vendorPayment);
    }
    /**
     * Get depositToAccount value
     * @return string|null
     */
    public function getDepositToAccount()
    {
        return $this->depositToAccount;
    }
    /**
     * Set depositToAccount value
     * @param string $depositToAccount
     * @return \StructType\Payment
     */
    public function setDepositToAccount($depositToAccount = null)
    {
        // validation for constraint: string
        if (!is_null($depositToAccount) && !is_string($depositToAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositToAccount)), __LINE__);
        }
        $this->depositToAccount = $depositToAccount;
        return $this;
    }
    /**
     * Get directDeposit value
     * @return bool|null
     */
    public function getDirectDeposit()
    {
        return $this->directDeposit;
    }
    /**
     * Set directDeposit value
     * @param bool $directDeposit
     * @return \StructType\Payment
     */
    public function setDirectDeposit($directDeposit = null)
    {
        // validation for constraint: boolean
        if (!is_null($directDeposit) && !is_bool($directDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($directDeposit)), __LINE__);
        }
        $this->directDeposit = $directDeposit;
        return $this;
    }
    /**
     * Get discountAccount value
     * @return string|null
     */
    public function getDiscountAccount()
    {
        return $this->discountAccount;
    }
    /**
     * Set discountAccount value
     * @param string $discountAccount
     * @return \StructType\Payment
     */
    public function setDiscountAccount($discountAccount = null)
    {
        // validation for constraint: string
        if (!is_null($discountAccount) && !is_string($discountAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountAccount)), __LINE__);
        }
        $this->discountAccount = $discountAccount;
        return $this;
    }
    /**
     * Get discountAmount value
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }
    /**
     * Set discountAmount value
     * @param float $discountAmount
     * @return \StructType\Payment
     */
    public function setDiscountAmount($discountAmount = null)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Get incomeCheck value
     * @return bool|null
     */
    public function getIncomeCheck()
    {
        return $this->incomeCheck;
    }
    /**
     * Set incomeCheck value
     * @param bool $incomeCheck
     * @return \StructType\Payment
     */
    public function setIncomeCheck($incomeCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($incomeCheck) && !is_bool($incomeCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($incomeCheck)), __LINE__);
        }
        $this->incomeCheck = $incomeCheck;
        return $this;
    }
    /**
     * Get ownerContribution value
     * @return bool|null
     */
    public function getOwnerContribution()
    {
        return $this->ownerContribution;
    }
    /**
     * Set ownerContribution value
     * @param bool $ownerContribution
     * @return \StructType\Payment
     */
    public function setOwnerContribution($ownerContribution = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerContribution) && !is_bool($ownerContribution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerContribution)), __LINE__);
        }
        $this->ownerContribution = $ownerContribution;
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \StructType\Payment
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Get prepaymentAmount value
     * @return float|null
     */
    public function getPrepaymentAmount()
    {
        return $this->prepaymentAmount;
    }
    /**
     * Set prepaymentAmount value
     * @param float $prepaymentAmount
     * @return \StructType\Payment
     */
    public function setPrepaymentAmount($prepaymentAmount = null)
    {
        $this->prepaymentAmount = $prepaymentAmount;
        return $this;
    }
    /**
     * Get vendorPayment value
     * @return bool|null
     */
    public function getVendorPayment()
    {
        return $this->vendorPayment;
    }
    /**
     * Set vendorPayment value
     * @param bool $vendorPayment
     * @return \StructType\Payment
     */
    public function setVendorPayment($vendorPayment = null)
    {
        // validation for constraint: boolean
        if (!is_null($vendorPayment) && !is_bool($vendorPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vendorPayment)), __LINE__);
        }
        $this->vendorPayment = $vendorPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Payment
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
