<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Close ServiceType
 * @subpackage Services
 */
class Close extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named closeWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrderID
     * @param string $category
     * @param string $closingComments
     * @param string $startDate
     * @param string $completedDate
     * @return boolean|bool
     */
    public function closeWorkOrder($workOrderID, $category, $closingComments, $startDate, $completedDate)
    {
        try {
            $this->setResult(self::getSoapClient()->closeWorkOrder($workOrderID, $category, $closingComments, $startDate, $completedDate));
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
