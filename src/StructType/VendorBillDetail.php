<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorBillDetail StructType
 * @subpackage Structs
 */
class VendorBillDetail extends VendorLedgerItem
{
    /**
     * The bill
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\VendorBill
     */
    public $bill;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The paymentDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:VendorBillPaymentDetail[]
     * - ref: soapenc:arrayType
     * @var \StructType\VendorBillPaymentDetail[]
     */
    public $paymentDetails;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Portfolio
     */
    public $portfolio;
    /**
     * Constructor method for VendorBillDetail
     * @uses VendorBillDetail::setBill()
     * @uses VendorBillDetail::setBuilding()
     * @uses VendorBillDetail::setComments()
     * @uses VendorBillDetail::setPaymentDetails()
     * @uses VendorBillDetail::setPortfolio()
     * @param \StructType\VendorBill $bill
     * @param \StructType\Building $building
     * @param string $comments
     * @param \StructType\VendorBillPaymentDetail[] $paymentDetails
     * @param \StructType\Portfolio $portfolio
     */
    public function __construct(\StructType\VendorBill $bill = null, \StructType\Building $building = null, $comments = null, array $paymentDetails = array(), \StructType\Portfolio $portfolio = null)
    {
        $this
            ->setBill($bill)
            ->setBuilding($building)
            ->setComments($comments)
            ->setPaymentDetails($paymentDetails)
            ->setPortfolio($portfolio);
    }
    /**
     * Get bill value
     * @return \StructType\VendorBill|null
     */
    public function getBill()
    {
        return $this->bill;
    }
    /**
     * Set bill value
     * @param \StructType\VendorBill $bill
     * @return \StructType\VendorBillDetail
     */
    public function setBill(\StructType\VendorBill $bill = null)
    {
        $this->bill = $bill;
        return $this;
    }
    /**
     * Get building value
     * @return \StructType\Building|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \StructType\Building $building
     * @return \StructType\VendorBillDetail
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
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
     * @return \StructType\VendorBillDetail
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
     * Get paymentDetails value
     * @return \StructType\VendorBillPaymentDetail[]|null
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }
    /**
     * Set paymentDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\VendorBillPaymentDetail[] $paymentDetails
     * @return \StructType\VendorBillDetail
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        foreach ($paymentDetails as $vendorBillDetailPaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$vendorBillDetailPaymentDetailsItem instanceof \StructType\VendorBillPaymentDetail) {
                throw new \InvalidArgumentException(sprintf('The paymentDetails property can only contain items of \StructType\VendorBillPaymentDetail, "%s" given', is_object($vendorBillDetailPaymentDetailsItem) ? get_class($vendorBillDetailPaymentDetailsItem) : gettype($vendorBillDetailPaymentDetailsItem)), __LINE__);
            }
        }
        $this->paymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Add item to paymentDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\VendorBillPaymentDetail $item
     * @return \StructType\VendorBillDetail
     */
    public function addToPaymentDetails(\StructType\VendorBillPaymentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VendorBillPaymentDetail) {
            throw new \InvalidArgumentException(sprintf('The paymentDetails property can only contain items of \StructType\VendorBillPaymentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->paymentDetails[] = $item;
        return $this;
    }
    /**
     * Get portfolio value
     * @return \StructType\Portfolio|null
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
    /**
     * Set portfolio value
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\VendorBillDetail
     */
    public function setPortfolio(\StructType\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VendorBillDetail
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
