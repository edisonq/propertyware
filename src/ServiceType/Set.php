<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setPublishStatusForUnitByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $publishStatus
     * @param string $featureStatus
     * @param string $unitID
     * @param string $systemID
     * @return boolean|bool
     */
    public function setPublishStatusForUnitByID($publishStatus, $featureStatus, $unitID, $systemID)
    {
        try {
            $this->setResult(self::getSoapClient()->setPublishStatusForUnitByID($publishStatus, $featureStatus, $unitID, $systemID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named setPublishStatusForBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $publishStatus
     * @param string $featureStatus
     * @param string $isForRent
     * @param string $unitID
     * @param string $systemID
     * @return boolean|bool
     */
    public function setPublishStatusForBuilding($publishStatus, $featureStatus, $isForRent, $unitID, $systemID)
    {
        try {
            $this->setResult(self::getSoapClient()->setPublishStatusForBuilding($publishStatus, $featureStatus, $isForRent, $unitID, $systemID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named setProspectStatusByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $systemID
     * @param string $prospectID
     * @param string $status
     * @return boolean|bool
     */
    public function setProspectStatusByID($systemID, $prospectID, $status)
    {
        try {
            $this->setResult(self::getSoapClient()->setProspectStatusByID($systemID, $prospectID, $status));
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
