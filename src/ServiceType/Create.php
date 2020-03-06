<?php

namespace Edisonq\Propertyware\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createWorkOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $workOrders
     * @return \StructType\WorkOrder[]|bool
     */
    public function createWorkOrders($workOrders)
    {
        try {
            $this->setResult(self::getSoapClient()->createWorkOrders($workOrders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBudget
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Budget $budget
     * @param \StructType\Building $building
     * @return \StructType\Budget|bool
     */
    public function createBudget(\StructType\Budget $budget, \StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->createBudget($budget, $building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBudgets
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $budgets
     * @param \StructType\Building $building
     * @return \StructType\Budget[]|bool
     */
    public function createBudgets($budgets, \StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->createBudgets($budgets, $building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createDepositTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DepositTicket $depositTicket
     * @return \StructType\DepositTicket|bool
     */
    public function createDepositTicket(\StructType\DepositTicket $depositTicket)
    {
        try {
            $this->setResult(self::getSoapClient()->createDepositTicket($depositTicket));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createCustomFieldDefinitions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $customFieldDefinitions
     * @return \StructType\CustomFieldDefinition[]|bool
     */
    public function createCustomFieldDefinitions($customFieldDefinitions)
    {
        try {
            $this->setResult(self::getSoapClient()->createCustomFieldDefinitions($customFieldDefinitions));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPaymentV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $leaseId
     * @param string $amt
     * @param string $depositDate
     * @param string $asOfDate
     * @param string $refNo
     * @param string $depositBankAcctNumber
     * @param string $comments
     * @param string $epayTxnId
     * @param string $payor
     * @return string|bool
     */
    public function createPaymentV2($leaseId, $amt, $depositDate, $asOfDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId, $payor)
    {
        try {
            $this->setResult(self::getSoapClient()->createPaymentV2($leaseId, $amt, $depositDate, $asOfDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId, $payor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOwnerContributionV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioId
     * @param string $customerId
     * @param string $amt
     * @param string $depositDate
     * @param string $asOfDate
     * @param string $refNo
     * @param string $depositBankAcctNumber
     * @param string $comments
     * @param string $epayTxnId
     * @param string $payor
     * @return string|bool
     */
    public function createOwnerContributionV2($portfolioId, $customerId, $amt, $depositDate, $asOfDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId, $payor)
    {
        try {
            $this->setResult(self::getSoapClient()->createOwnerContributionV2($portfolioId, $customerId, $amt, $depositDate, $asOfDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId, $payor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createUnitProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $unitID
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $country
     * @param string $phone
     * @param string $alternatePhone
     * @param string $preferredContactMethod
     * @param string $desiredUnitZip
     * @param string $desiredUnitCity
     * @param string $desiredUnitState
     * @param string $comments
     * @return string|bool
     */
    public function createUnitProspect($orgID, $unitID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments)
    {
        try {
            $this->setResult(self::getSoapClient()->createUnitProspect($orgID, $unitID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTaskList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TaskList $dto
     * @return void|bool
     */
    public function createTaskList(\StructType\TaskList $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->createTaskList($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Owner $owner
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Owner|bool
     */
    public function createOwner(\StructType\Owner $owner, \StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->createOwner($owner, $portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOwners
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $owners
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Owner[]|bool
     */
    public function createOwners($owners, \StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->createOwners($owners, $portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBuildings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $buildings
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\Building[]|bool
     */
    public function createBuildings($buildings, \StructType\Portfolio $portfolio)
    {
        try {
            $this->setResult(self::getSoapClient()->createBuildings($buildings, $portfolio));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createUnits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $units
     * @param \StructType\Building $building
     * @return \StructType\Unit[]|bool
     */
    public function createUnits($units, \StructType\Building $building)
    {
        try {
            $this->setResult(self::getSoapClient()->createUnits($units, $building));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $contacts
     * @return \StructType\Contact[]|bool
     */
    public function createContacts($contacts)
    {
        try {
            $this->setResult(self::getSoapClient()->createContacts($contacts));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createApplicant
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Applicant $applicant
     * @return \StructType\Applicant|bool
     */
    public function createApplicant(\StructType\Applicant $applicant)
    {
        try {
            $this->setResult(self::getSoapClient()->createApplicant($applicant));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createApplicants
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $applicants
     * @return \StructType\Applicant[]|bool
     */
    public function createApplicants($applicants)
    {
        try {
            $this->setResult(self::getSoapClient()->createApplicants($applicants));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createLease
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Lease $lease
     * @param \StructType\Unit $unit
     * @return \StructType\Lease|bool
     */
    public function createLease(\StructType\Lease $lease, \StructType\Unit $unit)
    {
        try {
            $this->setResult(self::getSoapClient()->createLease($lease, $unit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createLeases
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $leases
     * @param \StructType\Unit $unit
     * @return \StructType\Lease[]|bool
     */
    public function createLeases($leases, \StructType\Unit $unit)
    {
        try {
            $this->setResult(self::getSoapClient()->createLeases($leases, $unit));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVendors
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $vendors
     * @return \StructType\Vendor[]|bool
     */
    public function createVendors($vendors)
    {
        try {
            $this->setResult(self::getSoapClient()->createVendors($vendors));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $accounts
     * @return \StructType\Account[]|bool
     */
    public function createAccounts($accounts)
    {
        try {
            $this->setResult(self::getSoapClient()->createAccounts($accounts));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBank
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Bank $bank
     * @return \StructType\Bank|bool
     */
    public function createBank(\StructType\Bank $bank)
    {
        try {
            $this->setResult(self::getSoapClient()->createBank($bank));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBanks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $banks
     * @return \StructType\Bank[]|bool
     */
    public function createBanks($banks)
    {
        try {
            $this->setResult(self::getSoapClient()->createBanks($banks));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOrUpdatePaymentInfoForVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EPayInfo $ePayInfo
     * @param \StructType\Vendor $vendor
     * @return \StructType\EPayInfo|bool
     */
    public function createOrUpdatePaymentInfoForVendor(\StructType\EPayInfo $ePayInfo, \StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->createOrUpdatePaymentInfoForVendor($ePayInfo, $vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProspectWithAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param \StructType\Prospect $prospect
     * @param \StructType\Appointment $appointment
     * @return \StructType\Prospect|bool
     */
    public function createProspectWithAppointment($orgID, \StructType\Prospect $prospect, \StructType\Appointment $appointment)
    {
        try {
            $this->setResult(self::getSoapClient()->createProspectWithAppointment($orgID, $prospect, $appointment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBankDeposit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $bankAccountNumber
     * @param string $listOfTxIds
     * @return string|bool
     */
    public function createBankDeposit($bankAccountNumber, $listOfTxIds)
    {
        try {
            $this->setResult(self::getSoapClient()->createBankDeposit($bankAccountNumber, $listOfTxIds));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOrUpdateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Account $account
     * @return string|bool
     */
    public function createOrUpdateAccount(\StructType\Account $account)
    {
        try {
            $this->setResult(self::getSoapClient()->createOrUpdateAccount($account));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOrUpdateVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Vendor $vendor
     * @return string|bool
     */
    public function createOrUpdateVendor(\StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->createOrUpdateVendor($vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVendor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Vendor $vendor
     * @return boolean|bool
     */
    public function createVendor(\StructType\Vendor $vendor)
    {
        try {
            $this->setResult(self::getSoapClient()->createVendor($vendor));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAppointment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Appointment $dto
     * @return \StructType\Appointment|bool
     */
    public function createAppointment(\StructType\Appointment $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->createAppointment($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $unitID
     * @param string $firstName
     * @param string $middle
     * @param string $lastName
     * @param string $dob
     * @param string $gender
     * @param string $address
     * @param string $apt
     * @param string $city
     * @param string $state
     * @param string $zip
     * @return \StructType\Prospect|bool
     */
    public function createApplication($orgID, $unitID, $firstName, $middle, $lastName, $dob, $gender, $address, $apt, $city, $state, $zip)
    {
        try {
            $this->setResult(self::getSoapClient()->createApplication($orgID, $unitID, $firstName, $middle, $lastName, $dob, $gender, $address, $apt, $city, $state, $zip));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createWorkOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\WorkOrder $workOrder
     * @return \StructType\WorkOrder|bool
     */
    public function createWorkOrder(\StructType\WorkOrder $workOrder)
    {
        try {
            $this->setResult(self::getSoapClient()->createWorkOrder($workOrder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $leaseId
     * @param string $amt
     * @param string $depositDate
     * @param string $refNo
     * @param string $depositBankAcctNumber
     * @param string $comments
     * @param string $epayTxnId
     * @return string|bool
     */
    public function createPayment($leaseId, $amt, $depositDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId)
    {
        try {
            $this->setResult(self::getSoapClient()->createPayment($leaseId, $amt, $depositDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOwnerContribution
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioId
     * @param string $customerId
     * @param string $amt
     * @param string $depositDate
     * @param string $refNo
     * @param string $depositBankAcctNumber
     * @param string $comments
     * @param string $epayTxnId
     * @return string|bool
     */
    public function createOwnerContribution($portfolioId, $customerId, $amt, $depositDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId)
    {
        try {
            $this->setResult(self::getSoapClient()->createOwnerContribution($portfolioId, $customerId, $amt, $depositDate, $refNo, $depositBankAcctNumber, $comments, $epayTxnId));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Account $account
     * @return \StructType\Account|bool
     */
    public function createAccount(\StructType\Account $account)
    {
        try {
            $this->setResult(self::getSoapClient()->createAccount($account));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Task $dto
     * @return \StructType\Task|bool
     */
    public function createTask(\StructType\Task $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->createTask($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contact $dto
     * @return \StructType\Contact|bool
     */
    public function createContact(\StructType\Contact $dto)
    {
        try {
            $this->setResult(self::getSoapClient()->createContact($dto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPortfolio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $name
     * @param string $abbreviation
     * @return string|bool
     */
    public function createPortfolio($name, $abbreviation)
    {
        try {
            $this->setResult(self::getSoapClient()->createPortfolio($name, $abbreviation));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBuilding
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioID
     * @param string $name
     * @param string $abbreviation
     * @param string $address
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $isMultiUnitBuilding
     * @return string|bool
     */
    public function createBuilding($portfolioID, $name, $abbreviation, $address, $address2, $city, $state, $zip, $country, $isMultiUnitBuilding)
    {
        try {
            $this->setResult(self::getSoapClient()->createBuilding($portfolioID, $name, $abbreviation, $address, $address2, $city, $state, $zip, $country, $isMultiUnitBuilding));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolioID
     * @param string $buildingID
     * @param string $name
     * @param string $abbreviation
     * @param string $address
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @return string|bool
     */
    public function createUnit($portfolioID, $buildingID, $name, $abbreviation, $address, $address2, $city, $state, $zip, $country)
    {
        try {
            $this->setResult(self::getSoapClient()->createUnit($portfolioID, $buildingID, $name, $abbreviation, $address, $address2, $city, $state, $zip, $country));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createUnitProspectAndEmailBrochure
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $unitID
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $country
     * @param string $phone
     * @param string $alternatePhone
     * @param string $preferredContactMethod
     * @param string $desiredUnitZip
     * @param string $desiredUnitCity
     * @param string $desiredUnitState
     * @param string $comments
     * @return string|bool
     */
    public function createUnitProspectAndEmailBrochure($orgID, $unitID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments)
    {
        try {
            $this->setResult(self::getSoapClient()->createUnitProspectAndEmailBrochure($orgID, $unitID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOrUpdateBill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Bill $bill
     * @return \StructType\Bill|bool
     */
    public function createOrUpdateBill(\StructType\Bill $bill)
    {
        try {
            $this->setResult(self::getSoapClient()->createOrUpdateBill($bill));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBillPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BillPayment $billPayment
     * @return boolean|bool
     */
    public function createBillPayment(\StructType\BillPayment $billPayment)
    {
        try {
            $this->setResult(self::getSoapClient()->createBillPayment($billPayment));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProspect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $orgID
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $country
     * @param string $phone
     * @param string $alternatePhone
     * @param string $preferredContactMethod
     * @param string $desiredUnitZip
     * @param string $desiredUnitCity
     * @param string $desiredUnitState
     * @param string $comments
     * @param string $prospectType
     * @return string|bool
     */
    public function createProspect($orgID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments, $prospectType)
    {
        try {
            $this->setResult(self::getSoapClient()->createProspect($orgID, $firstName, $lastName, $email, $country, $phone, $alternatePhone, $preferredContactMethod, $desiredUnitZip, $desiredUnitCity, $desiredUnitState, $comments, $prospectType));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPortfolios
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $portfolios
     * @return \StructType\Portfolio[]|bool
     */
    public function createPortfolios($portfolios)
    {
        try {
            $this->setResult(self::getSoapClient()->createPortfolios($portfolios));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean|string|void|\StructType\Account|\StructType\Account[]|\StructType\Applicant|\StructType\Applicant[]|\StructType\Appointment|\StructType\Bank|\StructType\Bank[]|\StructType\Bill|\StructType\Budget|\StructType\Budget[]|\StructType\Building[]|\StructType\Contact|\StructType\Contact[]|\StructType\CustomFieldDefinition[]|\StructType\DepositTicket|\StructType\EPayInfo|\StructType\Lease|\StructType\Lease[]|\StructType\Owner|\StructType\Owner[]|\StructType\Portfolio[]|\StructType\Prospect|\StructType\Task|\StructType\Unit[]|\StructType\Vendor[]|\StructType\WorkOrder|\StructType\WorkOrder[]
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
