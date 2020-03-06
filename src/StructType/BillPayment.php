<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillPayment StructType
 * @subpackage Structs
 */
class BillPayment extends AbstractFinancialDocumentHolder
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bankAccount;
    /**
     * The billID
     * @var int
     */
    public $billID;
    /**
     * The billNumber
     * @var int
     */
    public $billNumber;
    /**
     * The billTxnID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billTxnID;
    /**
     * The checkNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $checkNumber;
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
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $paymentMethod;
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
     * The vendor
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vendor;
    /**
     * Constructor method for BillPayment
     * @uses BillPayment::setBankAccount()
     * @uses BillPayment::setBillID()
     * @uses BillPayment::setBillNumber()
     * @uses BillPayment::setBillTxnID()
     * @uses BillPayment::setCheckNumber()
     * @uses BillPayment::setCheckPrintedBy()
     * @uses BillPayment::setCheckPrintedOn()
     * @uses BillPayment::setNameOnCheck()
     * @uses BillPayment::setPaymentMethod()
     * @uses BillPayment::setRefNo()
     * @uses BillPayment::setToBePrinted()
     * @uses BillPayment::setVendor()
     * @param string $bankAccount
     * @param int $billID
     * @param int $billNumber
     * @param string $billTxnID
     * @param string $checkNumber
     * @param string $checkPrintedBy
     * @param string $checkPrintedOn
     * @param string $nameOnCheck
     * @param string $paymentMethod
     * @param string $refNo
     * @param bool $toBePrinted
     * @param string $vendor
     */
    public function __construct($bankAccount = null, $billID = null, $billNumber = null, $billTxnID = null, $checkNumber = null, $checkPrintedBy = null, $checkPrintedOn = null, $nameOnCheck = null, $paymentMethod = null, $refNo = null, $toBePrinted = null, $vendor = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setBillID($billID)
            ->setBillNumber($billNumber)
            ->setBillTxnID($billTxnID)
            ->setCheckNumber($checkNumber)
            ->setCheckPrintedBy($checkPrintedBy)
            ->setCheckPrintedOn($checkPrintedOn)
            ->setNameOnCheck($nameOnCheck)
            ->setPaymentMethod($paymentMethod)
            ->setRefNo($refNo)
            ->setToBePrinted($toBePrinted)
            ->setVendor($vendor);
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
     * @return \StructType\BillPayment
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
     * Get billID value
     * @return int|null
     */
    public function getBillID()
    {
        return $this->billID;
    }
    /**
     * Set billID value
     * @param int $billID
     * @return \StructType\BillPayment
     */
    public function setBillID($billID = null)
    {
        // validation for constraint: int
        if (!is_null($billID) && !is_numeric($billID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($billID)), __LINE__);
        }
        $this->billID = $billID;
        return $this;
    }
    /**
     * Get billNumber value
     * @return int|null
     */
    public function getBillNumber()
    {
        return $this->billNumber;
    }
    /**
     * Set billNumber value
     * @param int $billNumber
     * @return \StructType\BillPayment
     */
    public function setBillNumber($billNumber = null)
    {
        // validation for constraint: int
        if (!is_null($billNumber) && !is_numeric($billNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($billNumber)), __LINE__);
        }
        $this->billNumber = $billNumber;
        return $this;
    }
    /**
     * Get billTxnID value
     * @return string|null
     */
    public function getBillTxnID()
    {
        return $this->billTxnID;
    }
    /**
     * Set billTxnID value
     * @param string $billTxnID
     * @return \StructType\BillPayment
     */
    public function setBillTxnID($billTxnID = null)
    {
        // validation for constraint: string
        if (!is_null($billTxnID) && !is_string($billTxnID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billTxnID)), __LINE__);
        }
        $this->billTxnID = $billTxnID;
        return $this;
    }
    /**
     * Get checkNumber value
     * @return string|null
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }
    /**
     * Set checkNumber value
     * @param string $checkNumber
     * @return \StructType\BillPayment
     */
    public function setCheckNumber($checkNumber = null)
    {
        // validation for constraint: string
        if (!is_null($checkNumber) && !is_string($checkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkNumber)), __LINE__);
        }
        $this->checkNumber = $checkNumber;
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
     * @return \StructType\BillPayment
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
     * @return \StructType\BillPayment
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
     * @return \StructType\BillPayment
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
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \StructType\BillPayment
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
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
     * @return \StructType\BillPayment
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
     * @return \StructType\BillPayment
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
     * Get vendor value
     * @return string|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }
    /**
     * Set vendor value
     * @param string $vendor
     * @return \StructType\BillPayment
     */
    public function setVendor($vendor = null)
    {
        // validation for constraint: string
        if (!is_null($vendor) && !is_string($vendor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendor)), __LINE__);
        }
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BillPayment
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
