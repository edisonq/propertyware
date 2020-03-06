<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nsf StructType
 * @subpackage Structs
 */
class Nsf extends PWFinanceObject
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccount;
    /**
     * The payer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $payer;
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $refNo;
    /**
     * Constructor method for Nsf
     * @uses Nsf::setBankAccount()
     * @uses Nsf::setPayer()
     * @uses Nsf::setRefNo()
     * @param string $bankAccount
     * @param string $payer
     * @param string $refNo
     */
    public function __construct($bankAccount = null, $payer = null, $refNo = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setPayer($payer)
            ->setRefNo($refNo);
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
     * @return \StructType\Nsf
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
     * Get payer value
     * @return string|null
     */
    public function getPayer()
    {
        return $this->payer;
    }
    /**
     * Set payer value
     * @param string $payer
     * @return \StructType\Nsf
     */
    public function setPayer($payer = null)
    {
        // validation for constraint: string
        if (!is_null($payer) && !is_string($payer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payer)), __LINE__);
        }
        $this->payer = $payer;
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
     * @return \StructType\Nsf
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Nsf
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
