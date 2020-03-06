<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Attach ServiceType
 * @subpackage Services
 */
class Attach extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named attachDocumentToContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Contact $contact
     * @return \StructType\Document|bool
     */
    public function attachDocumentToContact(\StructType\Document $document, \StructType\Contact $contact)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToContact($document, $contact));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToLease
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Lease $lease
     * @return \StructType\Document|bool
     */
    public function attachDocumentToLease(\StructType\Document $document, \StructType\Lease $lease)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToLease($document, $lease));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToPortfolio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Document|bool
     */
    public function attachDocumentToPortfolio(\StructType\Document $document, \StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToPortfolio($document, $portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Prospect $prospect
     * @return \StructType\Document|bool
     */
    public function attachDocumentToProspect(\StructType\Document $document, \StructType\Prospect $prospect)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToProspect($document, $prospect));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Unit $unit
     * @return \StructType\Document|bool
     */
    public function attachDocumentToUnit(\StructType\Document $document, \StructType\Unit $unit)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToUnit($document, $unit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Vendor $vendor
     * @return \StructType\Document|bool
     */
    public function attachDocumentToVendor(\StructType\Document $document, \StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToVendor($document, $vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Contact $contact
     * @return \StructType\Note|bool
     */
    public function attachNoteToContact(\StructType\Note $note, \StructType\Contact $contact)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToContact($note, $contact));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToLease
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Lease $lease
     * @return \StructType\Note|bool
     */
    public function attachNoteToLease(\StructType\Note $note, \StructType\Lease $lease)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToLease($note, $lease));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToPortfolio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Note|bool
     */
    public function attachNoteToPortfolio(\StructType\Note $note, \StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToPortfolio($note, $portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Prospect $prospect
     * @return \StructType\Note|bool
     */
    public function attachNoteToProspect(\StructType\Note $note, \StructType\Prospect $prospect)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToProspect($note, $prospect));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Unit $unit
     * @return \StructType\Note|bool
     */
    public function attachNoteToUnit(\StructType\Note $note, \StructType\Unit $unit)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToUnit($note, $unit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Building $building
     * @return \StructType\Note|bool
     */
    public function attachNoteToBuilding(\StructType\Note $note, \StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToBuilding($note, $building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Vendor $vendor
     * @return \StructType\Note|bool
     */
    public function attachNoteToVendor(\StructType\Note $note, \StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToVendor($note, $vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\WorkOrder $workOrder
     * @return \StructType\Note|bool
     */
    public function attachNoteToWorkOrder(\StructType\Note $note, \StructType\WorkOrder $workOrder)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToWorkOrder($note, $workOrder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachImageToBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\Building $building
     * @return \StructType\Document|bool
     */
    public function attachImageToBuilding(\StructType\Document $document, \StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->attachImageToBuilding($document, $building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachNoteToOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @param \StructType\Owner $owner
     * @return \StructType\Note|bool
     */
    public function attachNoteToOwner(\StructType\Note $note, \StructType\Owner $owner)
    {
        try {
            $this->setResult(self::getSoapClient()->attachNoteToOwner($note, $owner));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named attachDocumentToWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @param \StructType\WorkOrder $workOrder
     * @return \StructType\Document|bool
     */
    public function attachDocumentToWorkOrder(\StructType\Document $document, \StructType\WorkOrder $workOrder)
    {
        try {
            $this->setResult(self::getSoapClient()->attachDocumentToWorkOrder($document, $workOrder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Document|\StructType\Note
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
