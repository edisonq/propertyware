<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addTimeEntry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrderID
     * @param string $vendorID
     * @param string $date
     * @param string $hours
     * @param string $rate
     * @param string $comments
     * @return boolean|bool
     */
    public function addTimeEntry($workOrderID, $vendorID, $date, $hours, $rate, $comments)
    {
        try {
            $this->setResult(self::getSoapClient()->addTimeEntry($workOrderID, $vendorID, $date, $hours, $rate, $comments));
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
