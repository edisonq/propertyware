<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Log ServiceType
 * @subpackage Services
 */
class Log extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named logProspectActivity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Prospect $prospect
     * @param \StructType\UserActivity $activity
     * @return \StructType\UserActivity|bool
     */
    public function logProspectActivity(\StructType\Prospect $prospect, \StructType\UserActivity $activity)
    {
        try {
            $this->setResult(self::getSoapClient()->logProspectActivity($prospect, $activity));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named logLeasingDeskInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $billingId
     * @param string $billingPeriod
     * @param string $subTotal
     * @param string $salesTax
     * @param string $totalAmount
     * @param string $quantity
     * @param string $invoiceId
     * @return boolean|bool
     */
    public function logLeasingDeskInvoice($billingId, $billingPeriod, $subTotal, $salesTax, $totalAmount, $quantity, $invoiceId)
    {
        try {
            $this->setResult(self::getSoapClient()->logLeasingDeskInvoice($billingId, $billingPeriod, $subTotal, $salesTax, $totalAmount, $quantity, $invoiceId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean|\StructType\UserActivity
     */
    public function getResult()
    {
        return parent::getResult();
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
