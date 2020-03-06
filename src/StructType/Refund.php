<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Refund StructType
 * @subpackage Structs
 */
class Refund extends PWFinanceObject
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccount;
    /**
     * The checkPrintedBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $checkPrintedBy;
    /**
     * The checkPrintedOn
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $checkPrintedOn;
    /**
     * The nameOnCheck
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nameOnCheck;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentType;
    /**
     * The prepaymentRefund
     * @var bool
     */
    public $prepaymentRefund;
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $refNo;
    /**
     * The toBePrinted
     * @var bool
     */
    public $toBePrinted;
    /**
     * The transactionType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transactionType;
    /**
     * The voidedCheck
     * @var bool
     */
    public $voidedCheck;
    /**
     * Constructor method for Refund
     * @uses Refund::setBankAccount()
     * @uses Refund::setCheckPrintedBy()
     * @uses Refund::setCheckPrintedOn()
     * @uses Refund::setNameOnCheck()
     * @uses Refund::setPaymentType()
     * @uses Refund::setPrepaymentRefund()
     * @uses Refund::setRefNo()
     * @uses Refund::setToBePrinted()
     * @uses Refund::setTransactionType()
     * @uses Refund::setVoidedCheck()
     * @param string $bankAccount
     * @param string $checkPrintedBy
     * @param string $checkPrintedOn
     * @param string $nameOnCheck
     * @param string $paymentType
     * @param bool $prepaymentRefund
     * @param string $refNo
     * @param bool $toBePrinted
     * @param string $transactionType
     * @param bool $voidedCheck
     */
    public function __construct($bankAccount = null, $checkPrintedBy = null, $checkPrintedOn = null, $nameOnCheck = null, $paymentType = null, $prepaymentRefund = null, $refNo = null, $toBePrinted = null, $transactionType = null, $voidedCheck = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setCheckPrintedBy($checkPrintedBy)
            ->setCheckPrintedOn($checkPrintedOn)
            ->setNameOnCheck($nameOnCheck)
            ->setPaymentType($paymentType)
            ->setPrepaymentRefund($prepaymentRefund)
            ->setRefNo($refNo)
            ->setToBePrinted($toBePrinted)
            ->setTransactionType($transactionType)
            ->setVoidedCheck($voidedCheck);
    }
    /**
     * Get bankAccount value
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }
    /**
     * Set bankAccount value
     * @param string $bankAccount
     * @return \StructType\Refund
     */
    public function setBankAccount($bankAccount = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccount) && !is_string($bankAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccount)), __LINE__);
        }
        $this->bankAccount = $bankAccount;
        return $this;
    }
    /**
     * Get checkPrintedBy value
     * @return string|null
     */
    public function getCheckPrintedBy()
    {
        return $this->checkPrintedBy;
    }
    /**
     * Set checkPrintedBy value
     * @param string $checkPrintedBy
     * @return \StructType\Refund
     */
    public function setCheckPrintedBy($checkPrintedBy = null)
    {
        // validation for constraint: string
        if (!is_null($checkPrintedBy) && !is_string($checkPrintedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkPrintedBy)), __LINE__);
        }
        $this->checkPrintedBy = $checkPrintedBy;
        return $this;
    }
    /**
     * Get checkPrintedOn value
     * @return string|null
     */
    public function getCheckPrintedOn()
    {
        return $this->checkPrintedOn;
    }
    /**
     * Set checkPrintedOn value
     * @param string $checkPrintedOn
     * @return \StructType\Refund
     */
    public function setCheckPrintedOn($checkPrintedOn = null)
    {
        // validation for constraint: string
        if (!is_null($checkPrintedOn) && !is_string($checkPrintedOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkPrintedOn)), __LINE__);
        }
        $this->checkPrintedOn = $checkPrintedOn;
        return $this;
    }
    /**
     * Get nameOnCheck value
     * @return string|null
     */
    public function getNameOnCheck()
    {
        return $this->nameOnCheck;
    }
    /**
     * Set nameOnCheck value
     * @param string $nameOnCheck
     * @return \StructType\Refund
     */
    public function setNameOnCheck($nameOnCheck = null)
    {
        // validation for constraint: string
        if (!is_null($nameOnCheck) && !is_string($nameOnCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOnCheck)), __LINE__);
        }
        $this->nameOnCheck = $nameOnCheck;
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
     * @return \StructType\Refund
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
     * Get prepaymentRefund value
     * @return bool|null
     */
    public function getPrepaymentRefund()
    {
        return $this->prepaymentRefund;
    }
    /**
     * Set prepaymentRefund value
     * @param bool $prepaymentRefund
     * @return \StructType\Refund
     */
    public function setPrepaymentRefund($prepaymentRefund = null)
    {
        // validation for constraint: boolean
        if (!is_null($prepaymentRefund) && !is_bool($prepaymentRefund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($prepaymentRefund)), __LINE__);
        }
        $this->prepaymentRefund = $prepaymentRefund;
        return $this;
    }
    /**
     * Get refNo value
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->refNo;
    }
    /**
     * Set refNo value
     * @param string $refNo
     * @return \StructType\Refund
     */
    public function setRefNo($refNo = null)
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;
        return $this;
    }
    /**
     * Get toBePrinted value
     * @return bool|null
     */
    public function getToBePrinted()
    {
        return $this->toBePrinted;
    }
    /**
     * Set toBePrinted value
     * @param bool $toBePrinted
     * @return \StructType\Refund
     */
    public function setToBePrinted($toBePrinted = null)
    {
        // validation for constraint: boolean
        if (!is_null($toBePrinted) && !is_bool($toBePrinted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($toBePrinted)), __LINE__);
        }
        $this->toBePrinted = $toBePrinted;
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
     * @return \StructType\Refund
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
     * Get voidedCheck value
     * @return bool|null
     */
    public function getVoidedCheck()
    {
        return $this->voidedCheck;
    }
    /**
     * Set voidedCheck value
     * @param bool $voidedCheck
     * @return \StructType\Refund
     */
    public function setVoidedCheck($voidedCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($voidedCheck) && !is_bool($voidedCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($voidedCheck)), __LINE__);
        }
        $this->voidedCheck = $voidedCheck;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Refund
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
