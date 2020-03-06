<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\WorkOrder $workOrder
     * @return \StructType\WorkOrder|bool
     */
    public function updateWorkOrder(\StructType\WorkOrder $workOrder)
    {
        try {
            $this->setResult(self::getSoapClient()->updateWorkOrder($workOrder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateWorkOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrders
     * @return \StructType\WorkOrder[]|bool
     */
    public function updateWorkOrders($workOrders)
    {
        try {
            $this->setResult(self::getSoapClient()->updateWorkOrders($workOrders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBudget
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Budget $budget
     * @return \StructType\Budget|bool
     */
    public function updateBudget(\StructType\Budget $budget)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBudget($budget));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBudgets
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $budgets
     * @return \StructType\Budget[]|bool
     */
    public function updateBudgets($budgets)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBudgets($budgets));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBackgroundScreeningStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $screeningId
     * @param string $checkStatusResponseXML
     * @return boolean|bool
     */
    public function updateBackgroundScreeningStatus($screeningId, $checkStatusResponseXML)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBackgroundScreeningStatus($screeningId, $checkStatusResponseXML));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Appointment $dto
     * @return void|bool
     */
    public function updateAppointment(\StructType\Appointment $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->updateAppointment($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateTaskList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TaskList $dto
     * @return void|bool
     */
    public function updateTaskList(\StructType\TaskList $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->updateTaskList($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePortfolio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Portfolio|bool
     */
    public function updatePortfolio(\StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePortfolio($portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePortfolios
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolios
     * @return \StructType\Portfolio[]|bool
     */
    public function updatePortfolios($portfolios)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePortfolios($portfolios));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Owner $owner
     * @return \StructType\Owner|bool
     */
    public function updateOwner(\StructType\Owner $owner)
    {
        try {
            $this->setResult(self::getSoapClient()->updateOwner($owner));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOwners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $owners
     * @return \StructType\Owner[]|bool
     */
    public function updateOwners($owners)
    {
        try {
            $this->setResult(self::getSoapClient()->updateOwners($owners));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Building $building
     * @return \StructType\Building|bool
     */
    public function updateBuilding(\StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBuilding($building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBuildings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $buildings
     * @return \StructType\Building[]|bool
     */
    public function updateBuildings($buildings)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBuildings($buildings));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Unit $unit
     * @return \StructType\Unit|bool
     */
    public function updateUnit(\StructType\Unit $unit)
    {
        try {
            $this->setResult(self::getSoapClient()->updateUnit($unit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateUnits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $units
     * @return \StructType\Unit[]|bool
     */
    public function updateUnits($units)
    {
        try {
            $this->setResult(self::getSoapClient()->updateUnits($units));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateApplicant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Applicant $applicant
     * @return \StructType\Applicant|bool
     */
    public function updateApplicant(\StructType\Applicant $applicant)
    {
        try {
            $this->setResult(self::getSoapClient()->updateApplicant($applicant));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateApplicants
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $applicants
     * @return \StructType\Applicant[]|bool
     */
    public function updateApplicants($applicants)
    {
        try {
            $this->setResult(self::getSoapClient()->updateApplicants($applicants));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateLeases
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $leases
     * @return \StructType\Lease[]|bool
     */
    public function updateLeases($leases)
    {
        try {
            $this->setResult(self::getSoapClient()->updateLeases($leases));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateVendors
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $vendors
     * @return \StructType\Vendor[]|bool
     */
    public function updateVendors($vendors)
    {
        try {
            $this->setResult(self::getSoapClient()->updateVendors($vendors));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $accounts
     * @return \StructType\Account[]|bool
     */
    public function updateAccounts($accounts)
    {
        try {
            $this->setResult(self::getSoapClient()->updateAccounts($accounts));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBank
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Bank $bank
     * @return \StructType\Bank|bool
     */
    public function updateBank(\StructType\Bank $bank)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBank($bank));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBanks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $banks
     * @return \StructType\Bank[]|bool
     */
    public function updateBanks($banks)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBanks($banks));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Vendor $vendor
     * @return \StructType\Vendor|bool
     */
    public function updateVendor(\StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->updateVendor($vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateTimeEntryByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrderID
     * @param string $timeEntryID
     * @param string $vendorID
     * @param string $date
     * @param string $hours
     * @param string $rate
     * @param string $comments
     * @return boolean|bool
     */
    public function updateTimeEntryByID($workOrderID, $timeEntryID, $vendorID, $date, $hours, $rate, $comments)
    {
        try {
            $this->setResult(self::getSoapClient()->updateTimeEntryByID($workOrderID, $timeEntryID, $vendorID, $date, $hours, $rate, $comments));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Account $account
     * @return \StructType\Account|bool
     */
    public function updateAccount(\StructType\Account $account)
    {
        try {
            $this->setResult(self::getSoapClient()->updateAccount($account));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBankDeposit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BankDeposit $deposit
     * @return boolean|bool
     */
    public function updateBankDeposit(\StructType\BankDeposit $deposit)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBankDeposit($deposit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateLease
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Lease $lease
     * @return \StructType\Lease|bool
     */
    public function updateLease(\StructType\Lease $lease)
    {
        try {
            $this->setResult(self::getSoapClient()->updateLease($lease));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contact $dto
     * @return \StructType\Contact|bool
     */
    public function updateContact(\StructType\Contact $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->updateContact($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Prospect $dto
     * @return \StructType\Prospect|bool
     */
    public function updateProspect(\StructType\Prospect $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->updateProspect($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Bill $bill
     * @return boolean|bool
     */
    public function updateBill(\StructType\Bill $bill)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBill($bill));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBillPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BillPayment $billPayment
     * @return boolean|bool
     */
    public function updateBillPayment(\StructType\BillPayment $billPayment)
    {
        try {
            $this->setResult(self::getSoapClient()->updateBillPayment($billPayment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateQuickBooksTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $entityType
     * @param string $pwId
     * @param string $qbID
     * @return boolean|bool
     */
    public function updateQuickBooksTag($entityType, $pwId, $qbID)
    {
        try {
            $this->setResult(self::getSoapClient()->updateQuickBooksTag($entityType, $pwId, $qbID));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePaymentStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $txId
     * @param string $status
     * @param string $errorCode
     * @return void|bool
     */
    public function updatePaymentStatus($orgID, $txId, $status, $errorCode)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePaymentStatus($orgID, $txId, $status, $errorCode));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Task $dto
     * @return void|bool
     */
    public function updateTask(\StructType\Task $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->updateTask($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Document $document
     * @return \StructType\Document|bool
     */
    public function updateDocument(\StructType\Document $document)
    {
        try {
            $this->setResult(self::getSoapClient()->updateDocument($document));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $contacts
     * @return \StructType\Contact[]|bool
     */
    public function updateContacts($contacts)
    {
        try {
            $this->setResult(self::getSoapClient()->updateContacts($contacts));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note
     * @return \StructType\Note|bool
     */
    public function updateNote(\StructType\Note $note)
    {
        try {
            $this->setResult(self::getSoapClient()->updateNote($note));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateJournalEntry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\JournalEntry $journalEntry
     * @return boolean|bool
     */
    public function updateJournalEntry(\StructType\JournalEntry $journalEntry)
    {
        try {
            $this->setResult(self::getSoapClient()->updateJournalEntry($journalEntry));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRefund
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Refund $refund
     * @return boolean|bool
     */
    public function updateRefund(\StructType\Refund $refund)
    {
        try {
            $this->setResult(self::getSoapClient()->updateRefund($refund));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateCharge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Charge $charge
     * @return boolean|bool
     */
    public function updateCharge(\StructType\Charge $charge)
    {
        try {
            $this->setResult(self::getSoapClient()->updateCharge($charge));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateActivity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Activity $activity
     * @return boolean|bool
     */
    public function updateActivity(\StructType\Activity $activity)
    {
        try {
            $this->setResult(self::getSoapClient()->updateActivity($activity));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateCreditMemo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreditMemo $creditMemo
     * @return boolean|bool
     */
    public function updateCreditMemo(\StructType\CreditMemo $creditMemo)
    {
        try {
            $this->setResult(self::getSoapClient()->updateCreditMemo($creditMemo));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Payment $payment
     * @return boolean|bool
     */
    public function updatePayment(\StructType\Payment $payment)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePayment($payment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean|void|\StructType\Account|\StructType\Account[]|\StructType\Applicant|\StructType\Applicant[]|\StructType\Bank|\StructType\Bank[]|\StructType\Budget|\StructType\Budget[]|\StructType\Building|\StructType\Building[]|\StructType\Contact|\StructType\Contact[]|\StructType\Document|\StructType\Lease|\StructType\Lease[]|\StructType\Note|\StructType\Owner|\StructType\Owner[]|\StructType\Portfolio|\StructType\Portfolio[]|\StructType\Prospect|\StructType\Unit|\StructType\Unit[]|\StructType\Vendor|\StructType\Vendor[]|\StructType\WorkOrder|\StructType\WorkOrder[]
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
