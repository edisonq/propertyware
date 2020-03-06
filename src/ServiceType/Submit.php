<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submit ServiceType
 * @subpackage Services
 */
class Submit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named submitApplicationPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $prospectID
     * @param string $nameOnCard
     * @param string $cardNumber
     * @param string $cardMonth
     * @param string $cardYear
     * @return string|bool
     */
    public function submitApplicationPayment($prospectID, $nameOnCard, $cardNumber, $cardMonth, $cardYear)
    {
        try {
            $this->setResult(self::getSoapClient()->submitApplicationPayment($prospectID, $nameOnCard, $cardNumber, $cardMonth, $cardYear));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string
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
