<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyFinancialTransaction StructType
 * @subpackage Structs
 */
abstract class ReadOnlyFinancialTransaction extends PWObject
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
     * The cleared
     * @var bool
     */
    public $cleared;
    /**
     * Constructor method for ReadOnlyFinancialTransaction
     * @uses ReadOnlyFinancialTransaction::setAccount()
     * @uses ReadOnlyFinancialTransaction::setAmount()
     * @uses ReadOnlyFinancialTransaction::setCleared()
     * @param \StructType\Account $account
     * @param float $amount
     * @param bool $cleared
     */
    public function __construct(\StructType\Account $account = null, $amount = null, $cleared = null)
    {
        $this
            ->setAccount($account)
            ->setAmount($amount)
            ->setCleared($cleared);
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
     * @return \StructType\ReadOnlyFinancialTransaction
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
     * @return \StructType\ReadOnlyFinancialTransaction
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get cleared value
     * @return bool|null
     */
    public function getCleared()
    {
        return $this->cleared;
    }
    /**
     * Set cleared value
     * @param bool $cleared
     * @return \StructType\ReadOnlyFinancialTransaction
     */
    public function setCleared($cleared = null)
    {
        // validation for constraint: boolean
        if (!is_null($cleared) && !is_bool($cleared)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cleared)), __LINE__);
        }
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyFinancialTransaction
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
