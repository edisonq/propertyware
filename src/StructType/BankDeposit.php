<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankDeposit StructType
 * @subpackage Structs
 */
class BankDeposit extends AbstractFinancialDocumentHolder
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccount;
    /**
     * The cashBackAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cashBackAccount;
    /**
     * The cashBackAmount
     * @var float
     */
    public $cashBackAmount;
    /**
     * The cashBackMemo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cashBackMemo;
    /**
     * The depositDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositDate;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for BankDeposit
     * @uses BankDeposit::setBankAccount()
     * @uses BankDeposit::setCashBackAccount()
     * @uses BankDeposit::setCashBackAmount()
     * @uses BankDeposit::setCashBackMemo()
     * @uses BankDeposit::setDepositDate()
     * @uses BankDeposit::setName()
     * @param string $bankAccount
     * @param string $cashBackAccount
     * @param float $cashBackAmount
     * @param string $cashBackMemo
     * @param string $depositDate
     * @param string $name
     */
    public function __construct($bankAccount = null, $cashBackAccount = null, $cashBackAmount = null, $cashBackMemo = null, $depositDate = null, $name = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setCashBackAccount($cashBackAccount)
            ->setCashBackAmount($cashBackAmount)
            ->setCashBackMemo($cashBackMemo)
            ->setDepositDate($depositDate)
            ->setName($name);
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
     * @return \StructType\BankDeposit
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
     * Get cashBackAccount value
     * @return string|null
     */
    public function getCashBackAccount()
    {
        return $this->cashBackAccount;
    }
    /**
     * Set cashBackAccount value
     * @param string $cashBackAccount
     * @return \StructType\BankDeposit
     */
    public function setCashBackAccount($cashBackAccount = null)
    {
        // validation for constraint: string
        if (!is_null($cashBackAccount) && !is_string($cashBackAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cashBackAccount)), __LINE__);
        }
        $this->cashBackAccount = $cashBackAccount;
        return $this;
    }
    /**
     * Get cashBackAmount value
     * @return float|null
     */
    public function getCashBackAmount()
    {
        return $this->cashBackAmount;
    }
    /**
     * Set cashBackAmount value
     * @param float $cashBackAmount
     * @return \StructType\BankDeposit
     */
    public function setCashBackAmount($cashBackAmount = null)
    {
        $this->cashBackAmount = $cashBackAmount;
        return $this;
    }
    /**
     * Get cashBackMemo value
     * @return string|null
     */
    public function getCashBackMemo()
    {
        return $this->cashBackMemo;
    }
    /**
     * Set cashBackMemo value
     * @param string $cashBackMemo
     * @return \StructType\BankDeposit
     */
    public function setCashBackMemo($cashBackMemo = null)
    {
        // validation for constraint: string
        if (!is_null($cashBackMemo) && !is_string($cashBackMemo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cashBackMemo)), __LINE__);
        }
        $this->cashBackMemo = $cashBackMemo;
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \StructType\BankDeposit
     */
    public function setDepositDate($depositDate = null)
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\BankDeposit
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BankDeposit
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
