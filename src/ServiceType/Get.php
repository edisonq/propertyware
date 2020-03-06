<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAccountDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Account|bool
     */
    public function getAccountDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getAccountDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillSplitDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BillSplit|bool
     */
    public function getBillSplitDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getBillSplitDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Vendor|bool
     */
    public function getVendorDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorTypeDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\VendorType|bool
     */
    public function getVendorTypeDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorTypeDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCreditMemoDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\CreditMemo|bool
     */
    public function getCreditMemoDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getCreditMemoDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRefunds
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @return anyType[]|bool
     */
    public function getRefunds($lastSync, $cutoffDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getRefunds($lastSync, $cutoffDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFinanceObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $id
     * @return \StructType\PWFinanceObject|bool
     */
    public function getFinanceObject($id)
    {
        try {
            $this->setResult(self::getSoapClient()->getFinanceObject($id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $name
     * @return \StructType\Vendor|bool
     */
    public function getVendorByName($name)
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorByName($name));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRefundDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Refund|bool
     */
    public function getRefundDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getRefundDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwnerDrawDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OwnerDraw|bool
     */
    public function getOwnerDrawDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getOwnerDrawDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVoidedBillPayments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @param string $group
     * @return anyType[]|bool
     */
    public function getVoidedBillPayments($lastSync, $cutoffDate, $portfolioIds, $group)
    {
        try {
            $this->setResult(self::getSoapClient()->getVoidedBillPayments($lastSync, $cutoffDate, $portfolioIds, $group));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildingListGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $lastModified
     * @return int|bool
     */
    public function getBuildingListGroupCount($orgID, $lastModified)
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildingListGroupCount($orgID, $lastModified));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPublishedUnitList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getPublishedUnitList()
    {
        try {
            $this->setResult(self::getSoapClient()->getPublishedUnitList());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildingsForPortfolio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioID
     * @return anyType[]|bool
     */
    public function getBuildingsForPortfolio($portfolioID)
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildingsForPortfolio($portfolioID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitsForBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $buildingID
     * @return anyType[]|bool
     */
    public function getUnitsForBuilding($orgID, $buildingID)
    {
        try {
            $this->setResult(self::getSoapClient()->getUnitsForBuilding($orgID, $buildingID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSyncGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getSyncGroups()
    {
        try {
            $this->setResult(self::getSoapClient()->getSyncGroups());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSyncVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return string|bool
     */
    public function getSyncVersion()
    {
        try {
            $this->setResult(self::getSoapClient()->getSyncVersion());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActivities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getActivities($lastSync, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getActivities($lastSync, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getCustomers($portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getCustomers($portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCreditMemos
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getCreditMemos($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getCreditMemos($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDirectDepositChecks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getDirectDepositChecks($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getDirectDepositChecks($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCharges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @param string $group
     * @return anyType[]|bool
     */
    public function getCharges($lastSync, $cutoffDate, $portfolioIds, $group)
    {
        try {
            $this->setResult(self::getSoapClient()->getCharges($lastSync, $cutoffDate, $portfolioIds, $group));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLineItemsForJournalEntry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $txID
     * @return anyType[]|bool
     */
    public function getLineItemsForJournalEntry($txID)
    {
        try {
            $this->setResult(self::getSoapClient()->getLineItemsForJournalEntry($txID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentMethodList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getPaymentMethodList()
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentMethodList());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankDeposits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @return anyType[]|bool
     */
    public function getBankDeposits($lastSync, $cutoffDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getBankDeposits($lastSync, $cutoffDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillsForPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $billPaymentID
     * @return anyType[]|bool
     */
    public function getBillsForPayment($billPaymentID)
    {
        try {
            $this->setResult(self::getSoapClient()->getBillsForPayment($billPaymentID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getItemDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Item|bool
     */
    public function getItemDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getItemDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getChargeDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Charge|bool
     */
    public function getChargeDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getChargeDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPortfolioDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Portfolio|bool
     */
    public function getPortfolioDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getPortfolioDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Unit|bool
     */
    public function getUnitDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getUnitDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSyncGroupDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\SyncGroup|bool
     */
    public function getSyncGroupDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getSyncGroupDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActivityDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Activity|bool
     */
    public function getActivityDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getActivityDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwnerDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Owner|bool
     */
    public function getOwnerDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getOwnerDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseJournalEntryDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseJournalEntryDetail|bool
     */
    public function getLeaseJournalEntryDetail()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseJournalEntryDetail());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseJournalEntry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseJournalEntry|bool
     */
    public function getLeaseJournalEntry()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseJournalEntry());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseCharge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseCharge|bool
     */
    public function getLeaseCharge()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseCharge());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeasePaymentDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeasePaymentDetail|bool
     */
    public function getLeasePaymentDetail()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeasePaymentDetail());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeasePrepaymentDetailDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeasePrepaymentDetail|bool
     */
    public function getLeasePrepaymentDetailDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeasePrepaymentDetailDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseDiscountDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseDiscount|bool
     */
    public function getLeaseDiscountDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseDiscountDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseAppliedDiscountDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseAppliedDiscount|bool
     */
    public function getLeaseAppliedDiscountDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseAppliedDiscountDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseCreditDetailDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseCreditDetail|bool
     */
    public function getLeaseCreditDetailDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseCreditDetailDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseCreditDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseCredit|bool
     */
    public function getLeaseCreditDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseCreditDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseRefundDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseRefund|bool
     */
    public function getLeaseRefundDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseRefundDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorBillDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\VendorBillDetail|bool
     */
    public function getVendorBillDetail()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorBillDetail());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorBillPaymentDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\VendorBillPaymentDetail|bool
     */
    public function getVendorBillPaymentDetail()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorBillPaymentDetail());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwnerJournalEntryDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OwnerJournalEntryDetail|bool
     */
    public function getOwnerJournalEntryDetail()
    {
        try {
            $this->setResult(self::getSoapClient()->getOwnerJournalEntryDetail());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeaseSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LeaseSearchCriteria|bool
     */
    public function getLeaseSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeaseSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildingSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BuildingSearchCriteria|bool
     */
    public function getBuildingSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildingSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWorkOrderSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\WorkOrderSearchCriteria|bool
     */
    public function getWorkOrderSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getWorkOrderSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\UnitSearchCriteria|bool
     */
    public function getUnitSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getUnitSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\CampaignSearchCriteria|bool
     */
    public function getCampaignSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getCampaignSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeasingAgentsForBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $buildingID
     * @return anyType[]|bool
     */
    public function getLeasingAgentsForBuilding($orgID, $buildingID)
    {
        try {
            $this->setResult(self::getSoapClient()->getLeasingAgentsForBuilding($orgID, $buildingID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAppointmentsByDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $appointmentDate
     * @return anyType[]|bool
     */
    public function getAppointmentsByDate($appointmentDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getAppointmentsByDate($appointmentDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAppointments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @return anyType[]|bool
     */
    public function getAppointments($lastSync, $cutoffDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getAppointments($lastSync, $cutoffDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAppointmentSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\AppointmentSearchCriteria|bool
     */
    public function getAppointmentSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getAppointmentSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAppointmentByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $appointmentID
     * @return \StructType\Appointment|bool
     */
    public function getAppointmentByID($appointmentID)
    {
        try {
            $this->setResult(self::getSoapClient()->getAppointmentByID($appointmentID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactsByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $firstName
     * @param string $lastName
     * @return anyType[]|bool
     */
    public function getContactsByName($firstName, $lastName)
    {
        try {
            $this->setResult(self::getSoapClient()->getContactsByName($firstName, $lastName));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactsByType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $type
     * @return anyType[]|bool
     */
    public function getContactsByType($type)
    {
        try {
            $this->setResult(self::getSoapClient()->getContactsByType($type));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $contactID
     * @return \StructType\Contact|bool
     */
    public function getContactByID($contactID)
    {
        try {
            $this->setResult(self::getSoapClient()->getContactByID($contactID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ContactSearchCriteria|bool
     */
    public function getContactSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getContactSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskListsByDueDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $dueDate
     * @return anyType[]|bool
     */
    public function getTaskListsByDueDate($dueDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskListsByDueDate($dueDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspectSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ProspectSearchCriteria|bool
     */
    public function getProspectSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getProspectSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspectsByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $firstName
     * @param string $lastName
     * @return anyType[]|bool
     */
    public function getProspectsByName($firstName, $lastName)
    {
        try {
            $this->setResult(self::getSoapClient()->getProspectsByName($firstName, $lastName));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspectsByStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $status
     * @return anyType[]|bool
     */
    public function getProspectsByStatus($status)
    {
        try {
            $this->setResult(self::getSoapClient()->getProspectsByStatus($status));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspectsByCreateDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $createDate
     * @return anyType[]|bool
     */
    public function getProspectsByCreateDate($createDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getProspectsByCreateDate($createDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLineItemDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LineItem|bool
     */
    public function getLineItemDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getLineItemDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspectDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Prospect|bool
     */
    public function getProspectDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getProspectDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Contact|bool
     */
    public function getContactDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getContactDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAppointmentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Appointment|bool
     */
    public function getAppointmentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getAppointmentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Task|bool
     */
    public function getTaskDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskListDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\TaskList|bool
     */
    public function getTaskListDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskListDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankDepositDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BankDeposit|bool
     */
    public function getBankDepositDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getBankDepositDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentMethodDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PaymentMethod|bool
     */
    public function getPaymentMethodDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentMethodDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNsfDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Nsf|bool
     */
    public function getNsfDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getNsfDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillPaymentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BillPayment|bool
     */
    public function getBillPaymentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getBillPaymentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTasksByDueDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $dueDate
     * @return anyType[]|bool
     */
    public function getTasksByDueDate($dueDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getTasksByDueDate($dueDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $taskID
     * @return \StructType\Task|bool
     */
    public function getTaskByID($taskID)
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskByID($taskID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwnerSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OwnerSearchCriteria|bool
     */
    public function getOwnerSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getOwnerSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomFieldDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\CustomField|bool
     */
    public function getCustomFieldDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getCustomFieldDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPropertyManagerDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PropertyManager|bool
     */
    public function getPropertyManagerDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getPropertyManagerDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserActivityDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\UserActivity|bool
     */
    public function getUserActivityDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getUserActivityDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Campaign|bool
     */
    public function getCampaignDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getCampaignDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignSourceDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\CampaignSource|bool
     */
    public function getCampaignSourceDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getCampaignSourceDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocumentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Document|bool
     */
    public function getDocumentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getDocumentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCheckDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Check|bool
     */
    public function getCheckDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getCheckDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJournalEntryDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\JournalEntry|bool
     */
    public function getJournalEntryDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getJournalEntryDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Bill|bool
     */
    public function getBillDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getBillDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPWFinanceObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PWFinanceObject|bool
     */
    public function getPWFinanceObject()
    {
        try {
            $this->setResult(self::getSoapClient()->getPWFinanceObject());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseLedger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReadOnlyLeaseLedgerSearchCriteria $criteria
     * @return \StructType\ReadOnlyLeaseLedger|bool
     */
    public function getReadOnlyLeaseLedger(\StructType\ReadOnlyLeaseLedgerSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseLedger($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseChargeDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseCharge|bool
     */
    public function getReadOnlyLeaseChargeDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseChargeDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseCreditDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseCredit|bool
     */
    public function getReadOnlyLeaseCreditDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseCreditDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseDiscountDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseDiscount|bool
     */
    public function getReadOnlyLeaseDiscountDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseDiscountDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseJournalEntryDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseJournalEntry|bool
     */
    public function getReadOnlyLeaseJournalEntryDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseJournalEntryDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReadOnlyLeaseJournalEntryDetailDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseJournalEntryDetail|bool
     */
    public function getReadOnlyLeaseJournalEntryDetailDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseJournalEntryDetailDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeasePaymentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeasePayment|bool
     */
    public function getReadOnlyLeasePaymentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeasePaymentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyLeaseRefundDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyLeaseRefund|bool
     */
    public function getReadOnlyLeaseRefundDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyLeaseRefundDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildingInsuranceCarrierDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BuildingInsuranceCarrier|bool
     */
    public function getBuildingInsuranceCarrierDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildingInsuranceCarrierDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocumentsForDocumentHolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AbstractFinancialDocumentHolder $holderDTO
     * @return \StructType\Document[]|bool
     */
    public function getDocumentsForDocumentHolder(\StructType\AbstractFinancialDocumentHolder $holderDTO)
    {
        try {
            $this->setResult(self::getSoapClient()->getDocumentsForDocumentHolder($holderDTO));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBudgetSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BudgetSearchCriteria|bool
     */
    public function getBudgetSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getBudgetSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\BillSearchCriteria|bool
     */
    public function getBillSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getBillSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyVendorLedger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReadOnlyVendorLedgerSearchCriteria $criteria
     * @return \StructType\ReadOnlyVendorLedger|bool
     */
    public function getReadOnlyVendorLedger(\StructType\ReadOnlyVendorLedgerSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedger($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyVendorLedgerBillDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedgerBill|bool
     */
    public function getReadOnlyVendorLedgerBillDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerBillDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReadOnlyVendorLedgerBillSplitDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedgerBillSplit|bool
     */
    public function getReadOnlyVendorLedgerBillSplitDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerBillSplitDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReadOnlyVendorLedgerBillPaymentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedgerBillPayment|bool
     */
    public function getReadOnlyVendorLedgerBillPaymentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerBillPaymentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyVendorLedgerCheckDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedgerCheck|bool
     */
    public function getReadOnlyVendorLedgerCheckDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerCheckDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReadOnlyVendorLedgerDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedger|bool
     */
    public function getReadOnlyVendorLedgerDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReadOnlyVendorLedgerDTOSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\ReadOnlyVendorLedgerSearchCriteria|bool
     */
    public function getReadOnlyVendorLedgerDTOSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getReadOnlyVendorLedgerDTOSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEPayInfoDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\EPayInfo|bool
     */
    public function getEPayInfoDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getEPayInfoDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInspectionSearchCriteria
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\InspectionSearchCriteria|bool
     */
    public function getInspectionSearchCriteria()
    {
        try {
            $this->setResult(self::getSoapClient()->getInspectionSearchCriteria());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInspectionItemDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\InspectionItem|bool
     */
    public function getInspectionItemDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getInspectionItemDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInspectionAreaDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\InspectionArea|bool
     */
    public function getInspectionAreaDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getInspectionAreaDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInspectionDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Inspection|bool
     */
    public function getInspectionDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getInspectionDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $vendorID
     * @return \StructType\Vendor|bool
     */
    public function getVendor($vendorID)
    {
        try {
            $this->setResult(self::getSoapClient()->getVendor($vendorID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\OwnerSearchCriteria $criteria
     * @return \StructType\Owner|bool
     */
    public function getOwner(\StructType\OwnerSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getOwner($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactsGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @return int|bool
     */
    public function getContactsGroupCount($lastSync, $cutoffDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getContactsGroupCount($lastSync, $cutoffDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getUsers()
    {
        try {
            $this->setResult(self::getSoapClient()->getUsers());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentDTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Payment|bool
     */
    public function getPaymentDTO()
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentDTO());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $taskListID
     * @return \StructType\TaskList|bool
     */
    public function getTaskList($taskListID)
    {
        try {
            $this->setResult(self::getSoapClient()->getTaskList($taskListID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaign
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CampaignSearchCriteria $criteria
     * @return \StructType\Campaign|bool
     */
    public function getCampaign(\StructType\CampaignSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getCampaign($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeasingAgent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $agentID
     * @return \StructType\LeasingAgent|bool
     */
    public function getLeasingAgent($agentID)
    {
        try {
            $this->setResult(self::getSoapClient()->getLeasingAgent($agentID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwnerContribution
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OwnerContribution|bool
     */
    public function getOwnerContribution()
    {
        try {
            $this->setResult(self::getSoapClient()->getOwnerContribution());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRefund
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $id
     * @return \StructType\Refund|bool
     */
    public function getRefund($id)
    {
        try {
            $this->setResult(self::getSoapClient()->getRefund($id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBudgets
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BudgetSearchCriteria $criteria
     * @return \StructType\Budget[]|bool
     */
    public function getBudgets(\StructType\BudgetSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getBudgets($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBudget
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BudgetSearchCriteria $criteria
     * @return \StructType\Budget|bool
     */
    public function getBudget(\StructType\BudgetSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getBudget($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReportOutput
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportConfiguration $reportConfiguration
     * @return string|bool
     */
    public function getReportOutput(\StructType\ReportConfiguration $reportConfiguration)
    {
        try {
            $this->setResult(self::getSoapClient()->getReportOutput($reportConfiguration));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $paymentID
     * @return \StructType\Payment|bool
     */
    public function getPayment($paymentID)
    {
        try {
            $this->setResult(self::getSoapClient()->getPayment($paymentID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPortfolioList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @return anyType[]|bool
     */
    public function getPortfolioList($orgID)
    {
        try {
            $this->setResult(self::getSoapClient()->getPortfolioList($orgID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildingList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $lastModified
     * @return anyType[]|bool
     */
    public function getBuildingList($orgID, $lastModified)
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildingList($orgID, $lastModified));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $id
     * @return \StructType\Account|bool
     */
    public function getAccount($id)
    {
        try {
            $this->setResult(self::getSoapClient()->getAccount($id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLease
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LeaseSearchCriteria $criteria
     * @return \StructType\Lease|bool
     */
    public function getLease(\StructType\LeaseSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getLease($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return int|bool
     */
    public function getPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getChargeGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return int|bool
     */
    public function getChargeGroupCount($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getChargeGroupCount($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPayments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $bankDepositID
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getPayments($bankDepositID, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getPayments($bankDepositID, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return anyType[]|bool
     */
    public function getJournalEntries($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getJournalEntries($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $customerID
     * @return \StructType\Customer|bool
     */
    public function getCustomer($customerID)
    {
        try {
            $this->setResult(self::getSoapClient()->getCustomer($customerID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getItemList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getItemList()
    {
        try {
            $this->setResult(self::getSoapClient()->getItemList());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBills
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @param string $group
     * @return anyType[]|bool
     */
    public function getBills($lastSync, $cutoffDate, $portfolioIds, $group)
    {
        try {
            $this->setResult(self::getSoapClient()->getBills($lastSync, $cutoffDate, $portfolioIds, $group));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\WorkOrderSearchCriteria $criteria
     * @return \StructType\WorkOrder|bool
     */
    public function getWorkOrder(\StructType\WorkOrderSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getWorkOrder($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ContactSearchCriteria $criteria
     * @return \StructType\Contact|bool
     */
    public function getContact(\StructType\ContactSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getContact($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillPayments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @param string $group
     * @return anyType[]|bool
     */
    public function getBillPayments($lastSync, $cutoffDate, $portfolioIds, $group)
    {
        try {
            $this->setResult(self::getSoapClient()->getBillPayments($lastSync, $cutoffDate, $portfolioIds, $group));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWorkOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\WorkOrderSearchCriteria $criteria
     * @return \StructType\WorkOrder[]|bool
     */
    public function getWorkOrders(\StructType\WorkOrderSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getWorkOrders($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillSplits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $billID
     * @return anyType[]|bool
     */
    public function getBillSplits($billID)
    {
        try {
            $this->setResult(self::getSoapClient()->getBillSplits($billID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BuildingSearchCriteria $criteria
     * @return \StructType\Building|bool
     */
    public function getBuilding(\StructType\BuildingSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getBuilding($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProspectSearchCriteria $criteria
     * @return \StructType\Prospect[]|bool
     */
    public function getProspects(\StructType\ProspectSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getProspects($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @return anyType[]|bool
     */
    public function getTasks($lastSync, $cutoffDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getTasks($lastSync, $cutoffDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UnitSearchCriteria $criteria
     * @return \StructType\Unit[]|bool
     */
    public function getUnits(\StructType\UnitSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getUnits($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeases
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LeaseSearchCriteria $criteria
     * @return \StructType\Lease[]|bool
     */
    public function getLeases(\StructType\LeaseSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getLeases($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInspections
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InspectionSearchCriteria $criteria
     * @return \StructType\Inspection[]|bool
     */
    public function getInspections(\StructType\InspectionSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getInspections($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTenant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $leaseID
     * @return \StructType\Tenant|bool
     */
    public function getTenant($orgID, $leaseID)
    {
        try {
            $this->setResult(self::getSoapClient()->getTenant($orgID, $leaseID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProspectSearchCriteria $criteria
     * @return \StructType\Prospect|bool
     */
    public function getProspect(\StructType\ProspectSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getProspect($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UnitSearchCriteria $criteria
     * @return \StructType\Unit|bool
     */
    public function getUnit(\StructType\UnitSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getUnit($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendors
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getVendors()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendors());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ContactSearchCriteria $criteria
     * @return \StructType\Contact[]|bool
     */
    public function getContacts(\StructType\ContactSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getContacts($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBuildings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BuildingSearchCriteria $criteria
     * @return \StructType\Building[]|bool
     */
    public function getBuildings(\StructType\BuildingSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getBuildings($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOwners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\OwnerSearchCriteria $criteria
     * @return \StructType\Owner[]|bool
     */
    public function getOwners(\StructType\OwnerSearchCriteria $criteria)
    {
        try {
            $this->setResult(self::getSoapClient()->getOwners($criteria));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return int|bool
     */
    public function getBillGroupCount($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getBillGroupCount($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillPaymentGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return int|bool
     */
    public function getBillPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getBillPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVoidedBillPaymentGroupCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $lastSync
     * @param string $cutoffDate
     * @param string $portfolioIds
     * @return int|bool
     */
    public function getVoidedBillPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getVoidedBillPaymentGroupCount($lastSync, $cutoffDate, $portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrentUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\User|bool
     */
    public function getCurrentUser()
    {
        try {
            $this->setResult(self::getSoapClient()->getCurrentUser());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLeasingAgents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getLeasingAgents()
    {
        try {
            $this->setResult(self::getSoapClient()->getLeasingAgents());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLineItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $id
     * @return anyType[]|bool
     */
    public function getLineItems($id)
    {
        try {
            $this->setResult(self::getSoapClient()->getLineItems($id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getAccountList()
    {
        try {
            $this->setResult(self::getSoapClient()->getAccountList());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVendorTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getVendorTypes()
    {
        try {
            $this->setResult(self::getSoapClient()->getVendorTypes());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNachaChecks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $startDate
     * @param string $endDate
     * @return anyType[]|bool
     */
    public function getNachaChecks($startDate, $endDate)
    {
        try {
            $this->setResult(self::getSoapClient()->getNachaChecks($startDate, $endDate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPropertyPhotos
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $buildingID
     * @return anyType[]|bool
     */
    public function getPropertyPhotos($buildingID)
    {
        try {
            $this->setResult(self::getSoapClient()->getPropertyPhotos($buildingID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPropertyPhoto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $buildingID
     * @param string $documentID
     * @return \StructType\PropertyPhoto|bool
     */
    public function getPropertyPhoto($buildingID, $documentID)
    {
        try {
            $this->setResult(self::getSoapClient()->getPropertyPhoto($buildingID, $documentID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllPortfolios
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Portfolio[]|bool
     */
    public function getAllPortfolios()
    {
        try {
            $this->setResult(self::getSoapClient()->getAllPortfolios());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Account[]|bool
     */
    public function getAllAccounts()
    {
        try {
            $this->setResult(self::getSoapClient()->getAllAccounts());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActiveLeaseForRentableBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $buildingId
     * @return \StructType\Lease|bool
     */
    public function getActiveLeaseForRentableBuilding($buildingId)
    {
        try {
            $this->setResult(self::getSoapClient()->getActiveLeaseForRentableBuilding($buildingId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActiveLeaseForUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $unitId
     * @return \StructType\Lease|bool
     */
    public function getActiveLeaseForUnit($unitId)
    {
        try {
            $this->setResult(self::getSoapClient()->getActiveLeaseForUnit($unitId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDefaultReportConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $reportName
     * @return \StructType\ReportConfiguration|bool
     */
    public function getDefaultReportConfiguration($reportName)
    {
        try {
            $this->setResult(self::getSoapClient()->getDefaultReportConfiguration($reportName));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPublishedReportsForContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $contactID
     * @return \StructType\Report[]|bool
     */
    public function getPublishedReportsForContact($contactID)
    {
        try {
            $this->setResult(self::getSoapClient()->getPublishedReportsForContact($contactID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPortfolioBuildingUnitDOM
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioIds
     * @return string|bool
     */
    public function getPortfolioBuildingUnitDOM($portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getPortfolioBuildingUnitDOM($portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPortfolioBuildingUnitLeaseDOM
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioIds
     * @return string|bool
     */
    public function getPortfolioBuildingUnitLeaseDOM($portfolioIds)
    {
        try {
            $this->setResult(self::getSoapClient()->getPortfolioBuildingUnitLeaseDOM($portfolioIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $entityType
     * @param string $entityID
     * @return anyType[]|bool
     */
    public function getCustomData($entityType, $entityID)
    {
        try {
            $this->setResult(self::getSoapClient()->getCustomData($entityType, $entityID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return anyType[]|int|string|\StructType\Account|\StructType\Account[]|\StructType\Activity|\StructType\Appointment|\StructType\AppointmentSearchCriteria|\StructType\BankDeposit|\StructType\Bill|\StructType\BillPayment|\StructType\BillSearchCriteria|\StructType\BillSplit|\StructType\Budget|\StructType\BudgetSearchCriteria|\StructType\Budget[]|\StructType\Building|\StructType\BuildingInsuranceCarrier|\StructType\BuildingSearchCriteria|\StructType\Building[]|\StructType\Campaign|\StructType\CampaignSearchCriteria|\StructType\CampaignSource|\StructType\Charge|\StructType\Check|\StructType\Contact|\StructType\ContactSearchCriteria|\StructType\Contact[]|\StructType\CreditMemo|\StructType\Customer|\StructType\CustomField|\StructType\Document|\StructType\Document[]|\StructType\EPayInfo|\StructType\Inspection|\StructType\InspectionArea|\StructType\InspectionItem|\StructType\InspectionSearchCriteria|\StructType\Inspection[]|\StructType\Item|\StructType\JournalEntry|\StructType\Lease|\StructType\LeaseAppliedDiscount|\StructType\LeaseCharge|\StructType\LeaseCredit|\StructType\LeaseCreditDetail|\StructType\LeaseDiscount|\StructType\LeaseJournalEntry|\StructType\LeaseJournalEntryDetail|\StructType\LeasePaymentDetail|\StructType\LeasePrepaymentDetail|\StructType\LeaseRefund|\StructType\LeaseSearchCriteria|\StructType\Lease[]|\StructType\LeasingAgent|\StructType\LineItem|\StructType\Nsf|\StructType\Owner|\StructType\OwnerContribution|\StructType\OwnerDraw|\StructType\OwnerJournalEntryDetail|\StructType\OwnerSearchCriteria|\StructType\Owner[]|\StructType\Payment|\StructType\PaymentMethod|\StructType\Portfolio|\StructType\Portfolio[]|\StructType\PropertyManager|\StructType\PropertyPhoto|\StructType\Prospect|\StructType\ProspectSearchCriteria|\StructType\Prospect[]|\StructType\PWFinanceObject|\StructType\ReadOnlyLeaseCharge|\StructType\ReadOnlyLeaseCredit|\StructType\ReadOnlyLeaseDiscount|\StructType\ReadOnlyLeaseJournalEntry|\StructType\ReadOnlyLeaseJournalEntryDetail|\StructType\ReadOnlyLeaseLedger|\StructType\ReadOnlyLeasePayment|\StructType\ReadOnlyLeaseRefund|\StructType\ReadOnlyVendorLedger|\StructType\ReadOnlyVendorLedgerBill|\StructType\ReadOnlyVendorLedgerBillPayment|\StructType\ReadOnlyVendorLedgerBillSplit|\StructType\ReadOnlyVendorLedgerCheck|\StructType\ReadOnlyVendorLedgerSearchCriteria|\StructType\Refund|\StructType\ReportConfiguration|\StructType\Report[]|\StructType\SyncGroup|\StructType\Task|\StructType\TaskList|\StructType\Tenant|\StructType\Unit|\StructType\UnitSearchCriteria|\StructType\Unit[]|\StructType\User|\StructType\UserActivity|\StructType\Vendor|\StructType\VendorBillDetail|\StructType\VendorBillPaymentDetail|\StructType\VendorType|\StructType\WorkOrder|\StructType\WorkOrderSearchCriteria|\StructType\WorkOrder[]
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
