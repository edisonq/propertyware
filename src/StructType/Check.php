<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Check StructType
 * @subpackage Structs
 */
class Check extends PWFinanceObject
{
    /**
     * The destBankAcctNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destBankAcctNo;
    /**
     * The destBankHolder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destBankHolder;
    /**
     * The destBankRoutingNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destBankRoutingNo;
    /**
     * The destBankType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destBankType;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentType;
    /**
     * The sourceBankAcctNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sourceBankAcctNo;
    /**
     * The sourceBankHolder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sourceBankHolder;
    /**
     * The sourceBankRoutingNo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sourceBankRoutingNo;
    /**
     * The sourceBankType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sourceBankType;
    /**
     * Constructor method for Check
     * @uses Check::setDestBankAcctNo()
     * @uses Check::setDestBankHolder()
     * @uses Check::setDestBankRoutingNo()
     * @uses Check::setDestBankType()
     * @uses Check::setPaymentType()
     * @uses Check::setSourceBankAcctNo()
     * @uses Check::setSourceBankHolder()
     * @uses Check::setSourceBankRoutingNo()
     * @uses Check::setSourceBankType()
     * @param string $destBankAcctNo
     * @param string $destBankHolder
     * @param string $destBankRoutingNo
     * @param string $destBankType
     * @param string $paymentType
     * @param string $sourceBankAcctNo
     * @param string $sourceBankHolder
     * @param string $sourceBankRoutingNo
     * @param string $sourceBankType
     */
    public function __construct($destBankAcctNo = null, $destBankHolder = null, $destBankRoutingNo = null, $destBankType = null, $paymentType = null, $sourceBankAcctNo = null, $sourceBankHolder = null, $sourceBankRoutingNo = null, $sourceBankType = null)
    {
        $this
            ->setDestBankAcctNo($destBankAcctNo)
            ->setDestBankHolder($destBankHolder)
            ->setDestBankRoutingNo($destBankRoutingNo)
            ->setDestBankType($destBankType)
            ->setPaymentType($paymentType)
            ->setSourceBankAcctNo($sourceBankAcctNo)
            ->setSourceBankHolder($sourceBankHolder)
            ->setSourceBankRoutingNo($sourceBankRoutingNo)
            ->setSourceBankType($sourceBankType);
    }
    /**
     * Get destBankAcctNo value
     * @return string|null
     */
    public function getDestBankAcctNo()
    {
        return $this->destBankAcctNo;
    }
    /**
     * Set destBankAcctNo value
     * @param string $destBankAcctNo
     * @return \StructType\Check
     */
    public function setDestBankAcctNo($destBankAcctNo = null)
    {
        // validation for constraint: string
        if (!is_null($destBankAcctNo) && !is_string($destBankAcctNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destBankAcctNo)), __LINE__);
        }
        $this->destBankAcctNo = $destBankAcctNo;
        return $this;
    }
    /**
     * Get destBankHolder value
     * @return string|null
     */
    public function getDestBankHolder()
    {
        return $this->destBankHolder;
    }
    /**
     * Set destBankHolder value
     * @param string $destBankHolder
     * @return \StructType\Check
     */
    public function setDestBankHolder($destBankHolder = null)
    {
        // validation for constraint: string
        if (!is_null($destBankHolder) && !is_string($destBankHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destBankHolder)), __LINE__);
        }
        $this->destBankHolder = $destBankHolder;
        return $this;
    }
    /**
     * Get destBankRoutingNo value
     * @return string|null
     */
    public function getDestBankRoutingNo()
    {
        return $this->destBankRoutingNo;
    }
    /**
     * Set destBankRoutingNo value
     * @param string $destBankRoutingNo
     * @return \StructType\Check
     */
    public function setDestBankRoutingNo($destBankRoutingNo = null)
    {
        // validation for constraint: string
        if (!is_null($destBankRoutingNo) && !is_string($destBankRoutingNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destBankRoutingNo)), __LINE__);
        }
        $this->destBankRoutingNo = $destBankRoutingNo;
        return $this;
    }
    /**
     * Get destBankType value
     * @return string|null
     */
    public function getDestBankType()
    {
        return $this->destBankType;
    }
    /**
     * Set destBankType value
     * @param string $destBankType
     * @return \StructType\Check
     */
    public function setDestBankType($destBankType = null)
    {
        // validation for constraint: string
        if (!is_null($destBankType) && !is_string($destBankType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destBankType)), __LINE__);
        }
        $this->destBankType = $destBankType;
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
     * @return \StructType\Check
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
     * Get sourceBankAcctNo value
     * @return string|null
     */
    public function getSourceBankAcctNo()
    {
        return $this->sourceBankAcctNo;
    }
    /**
     * Set sourceBankAcctNo value
     * @param string $sourceBankAcctNo
     * @return \StructType\Check
     */
    public function setSourceBankAcctNo($sourceBankAcctNo = null)
    {
        // validation for constraint: string
        if (!is_null($sourceBankAcctNo) && !is_string($sourceBankAcctNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceBankAcctNo)), __LINE__);
        }
        $this->sourceBankAcctNo = $sourceBankAcctNo;
        return $this;
    }
    /**
     * Get sourceBankHolder value
     * @return string|null
     */
    public function getSourceBankHolder()
    {
        return $this->sourceBankHolder;
    }
    /**
     * Set sourceBankHolder value
     * @param string $sourceBankHolder
     * @return \StructType\Check
     */
    public function setSourceBankHolder($sourceBankHolder = null)
    {
        // validation for constraint: string
        if (!is_null($sourceBankHolder) && !is_string($sourceBankHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceBankHolder)), __LINE__);
        }
        $this->sourceBankHolder = $sourceBankHolder;
        return $this;
    }
    /**
     * Get sourceBankRoutingNo value
     * @return string|null
     */
    public function getSourceBankRoutingNo()
    {
        return $this->sourceBankRoutingNo;
    }
    /**
     * Set sourceBankRoutingNo value
     * @param string $sourceBankRoutingNo
     * @return \StructType\Check
     */
    public function setSourceBankRoutingNo($sourceBankRoutingNo = null)
    {
        // validation for constraint: string
        if (!is_null($sourceBankRoutingNo) && !is_string($sourceBankRoutingNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceBankRoutingNo)), __LINE__);
        }
        $this->sourceBankRoutingNo = $sourceBankRoutingNo;
        return $this;
    }
    /**
     * Get sourceBankType value
     * @return string|null
     */
    public function getSourceBankType()
    {
        return $this->sourceBankType;
    }
    /**
     * Set sourceBankType value
     * @param string $sourceBankType
     * @return \StructType\Check
     */
    public function setSourceBankType($sourceBankType = null)
    {
        // validation for constraint: string
        if (!is_null($sourceBankType) && !is_string($sourceBankType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceBankType)), __LINE__);
        }
        $this->sourceBankType = $sourceBankType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Check
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
