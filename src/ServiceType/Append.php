<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Append ServiceType
 * @subpackage Services
 */
class Append extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named appendOwnerLedgerItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\OwnerLedger $ownerLedger
     * @param \StructType\Owner $owner
     * @return \StructType\OwnerLedger|bool
     */
    public function appendOwnerLedgerItems(\StructType\OwnerLedger $ownerLedger, \StructType\Owner $owner)
    {
        try {
            $this->setResult(self::getSoapClient()->appendOwnerLedgerItems($ownerLedger, $owner));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendLeaseLedgerItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LeaseLedger $leaseLedger
     * @param \StructType\Lease $lease
     * @return \StructType\LeaseLedger|bool
     */
    public function appendLeaseLedgerItems(\StructType\LeaseLedger $leaseLedger, \StructType\Lease $lease)
    {
        try {
            $this->setResult(self::getSoapClient()->appendLeaseLedgerItems($leaseLedger, $lease));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendVendorLedgerItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\VendorLedger $vendorLedger
     * @param \StructType\Vendor $vendor
     * @return \StructType\VendorLedger|bool
     */
    public function appendVendorLedgerItems(\StructType\VendorLedger $vendorLedger, \StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->appendVendorLedgerItems($vendorLedger, $vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LeaseLedger|\StructType\OwnerLedger|\StructType\VendorLedger
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
