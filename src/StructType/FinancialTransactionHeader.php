<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinancialTransactionHeader StructType
 * @subpackage Structs
 */
abstract class FinancialTransactionHeader extends PWObject
{
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $account;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceNumber;
    /**
     * Constructor method for FinancialTransactionHeader
     * @uses FinancialTransactionHeader::setAccount()
     * @uses FinancialTransactionHeader::setComments()
     * @uses FinancialTransactionHeader::setDate()
     * @uses FinancialTransactionHeader::setReferenceNumber()
     * @param \StructType\Account $account
     * @param string $comments
     * @param string $date
     * @param string $referenceNumber
     */
    public function __construct(\StructType\Account $account = null, $comments = null, $date = null, $referenceNumber = null)
    {
        $this
            ->setAccount($account)
            ->setComments($comments)
            ->setDate($date)
            ->setReferenceNumber($referenceNumber);
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
     * @return \StructType\FinancialTransactionHeader
     */
    public function setAccount(\StructType\Account $account = null)
    {
        $this->account = $account;
        return $this;
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
     * @return \StructType\FinancialTransactionHeader
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\FinancialTransactionHeader
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
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
     * @return \StructType\FinancialTransactionHeader
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FinancialTransactionHeader
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
