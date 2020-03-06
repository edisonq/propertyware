<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorBillPaymentDetail StructType
 * @subpackage Structs
 */
class VendorBillPaymentDetail extends FinancialTransaction
{
    /**
     * The billPayment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\VendorBillPayment
     */
    public $billPayment;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Portfolio
     */
    public $portfolio;
    /**
     * Constructor method for VendorBillPaymentDetail
     * @uses VendorBillPaymentDetail::setBillPayment()
     * @uses VendorBillPaymentDetail::setBuilding()
     * @uses VendorBillPaymentDetail::setPortfolio()
     * @param \StructType\VendorBillPayment $billPayment
     * @param \StructType\Building $building
     * @param \StructType\Portfolio $portfolio
     */
    public function __construct(\StructType\VendorBillPayment $billPayment = null, \StructType\Building $building = null, \StructType\Portfolio $portfolio = null)
    {
        $this
            ->setBillPayment($billPayment)
            ->setBuilding($building)
            ->setPortfolio($portfolio);
    }
    /**
     * Get billPayment value
     * @return \StructType\VendorBillPayment|null
     */
    public function getBillPayment()
    {
        return $this->billPayment;
    }
    /**
     * Set billPayment value
     * @param \StructType\VendorBillPayment $billPayment
     * @return \StructType\VendorBillPaymentDetail
     */
    public function setBillPayment(\StructType\VendorBillPayment $billPayment = null)
    {
        $this->billPayment = $billPayment;
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
     * @return \StructType\VendorBillPaymentDetail
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
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
     * @return \StructType\VendorBillPaymentDetail
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
     * @return \StructType\VendorBillPaymentDetail
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
