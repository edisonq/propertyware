<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Approve ServiceType
 * @subpackage Services
 */
class Approve extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named approveWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrderID
     * @param string $approved
     * @param string $approvedDate
     * @param string $approvalComment
     * @return boolean|bool
     */
    public function approveWorkOrder($workOrderID, $approved, $approvedDate, $approvalComment)
    {
        try {
            $this->setResult(self::getSoapClient()->approveWorkOrder($workOrderID, $approved, $approvedDate, $approvalComment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean
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
