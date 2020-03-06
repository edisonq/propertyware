<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lease StructType
 * @subpackage Structs
 */
class Lease extends AbstractDocumentHolder
{
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The autoCharges
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:AutoCharge[]
     * - ref: soapenc:arrayType
     * @var \StructType\AutoCharge[]
     */
    public $autoCharges;
    /**
     * The balance
     * @var float
     */
    public $balance;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * The buildingID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingID;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The commercial
     * @var bool
     */
    public $commercial;
    /**
     * The customFields
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:CustomField[]
     * - ref: soapenc:arrayType
     * @var \StructType\CustomField[]
     */
    public $customFields;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The evictionDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $evictionDate;
    /**
     * The keysReturned
     * @var bool
     */
    public $keysReturned;
    /**
     * The lateFeeRule
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\LateFeeRule
     */
    public $lateFeeRule;
    /**
     * The leaseName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leaseName;
    /**
     * The leaseStatus
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leaseStatus;
    /**
     * The moveInDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $moveInDate;
    /**
     * The moveOutDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $moveOutDate;
    /**
     * The noticeGivenDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $noticeGivenDate;
    /**
     * The primaryContact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Contact
     */
    public $primaryContact;
    /**
     * The publicAssistanceProgram
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $publicAssistanceProgram;
    /**
     * The reasonForLeaving
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reasonForLeaving;
    /**
     * The scheduleMoveOutDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $scheduleMoveOutDate;
    /**
     * The skipPostAutoCharges
     * @var bool
     */
    public $skipPostAutoCharges;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The tenants
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Contact[]
     * - ref: soapenc:arrayType
     * @var \StructType\Contact[]
     */
    public $tenants;
    /**
     * The terminatedDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $terminatedDate;
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Unit
     */
    public $unit;
    /**
     * The unitID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $unitID;
    /**
     * Constructor method for Lease
     * @uses Lease::setActive()
     * @uses Lease::setAutoCharges()
     * @uses Lease::setBalance()
     * @uses Lease::setBuilding()
     * @uses Lease::setBuildingID()
     * @uses Lease::setComments()
     * @uses Lease::setCommercial()
     * @uses Lease::setCustomFields()
     * @uses Lease::setEndDate()
     * @uses Lease::setEvictionDate()
     * @uses Lease::setKeysReturned()
     * @uses Lease::setLateFeeRule()
     * @uses Lease::setLeaseName()
     * @uses Lease::setLeaseStatus()
     * @uses Lease::setMoveInDate()
     * @uses Lease::setMoveOutDate()
     * @uses Lease::setNoticeGivenDate()
     * @uses Lease::setPrimaryContact()
     * @uses Lease::setPublicAssistanceProgram()
     * @uses Lease::setReasonForLeaving()
     * @uses Lease::setScheduleMoveOutDate()
     * @uses Lease::setSkipPostAutoCharges()
     * @uses Lease::setStartDate()
     * @uses Lease::setTenants()
     * @uses Lease::setTerminatedDate()
     * @uses Lease::setUnit()
     * @uses Lease::setUnitID()
     * @param bool $active
     * @param \StructType\AutoCharge[] $autoCharges
     * @param float $balance
     * @param \StructType\Building $building
     * @param int $buildingID
     * @param string $comments
     * @param bool $commercial
     * @param \StructType\CustomField[] $customFields
     * @param string $endDate
     * @param string $evictionDate
     * @param bool $keysReturned
     * @param \StructType\LateFeeRule $lateFeeRule
     * @param string $leaseName
     * @param string $leaseStatus
     * @param string $moveInDate
     * @param string $moveOutDate
     * @param string $noticeGivenDate
     * @param \StructType\Contact $primaryContact
     * @param string $publicAssistanceProgram
     * @param string $reasonForLeaving
     * @param string $scheduleMoveOutDate
     * @param bool $skipPostAutoCharges
     * @param string $startDate
     * @param \StructType\Contact[] $tenants
     * @param string $terminatedDate
     * @param \StructType\Unit $unit
     * @param int $unitID
     */
    public function __construct($active = null, array $autoCharges = array(), $balance = null, \StructType\Building $building = null, $buildingID = null, $comments = null, $commercial = null, array $customFields = array(), $endDate = null, $evictionDate = null, $keysReturned = null, \StructType\LateFeeRule $lateFeeRule = null, $leaseName = null, $leaseStatus = null, $moveInDate = null, $moveOutDate = null, $noticeGivenDate = null, \StructType\Contact $primaryContact = null, $publicAssistanceProgram = null, $reasonForLeaving = null, $scheduleMoveOutDate = null, $skipPostAutoCharges = null, $startDate = null, array $tenants = array(), $terminatedDate = null, \StructType\Unit $unit = null, $unitID = null)
    {
        $this
            ->setActive($active)
            ->setAutoCharges($autoCharges)
            ->setBalance($balance)
            ->setBuilding($building)
            ->setBuildingID($buildingID)
            ->setComments($comments)
            ->setCommercial($commercial)
            ->setCustomFields($customFields)
            ->setEndDate($endDate)
            ->setEvictionDate($evictionDate)
            ->setKeysReturned($keysReturned)
            ->setLateFeeRule($lateFeeRule)
            ->setLeaseName($leaseName)
            ->setLeaseStatus($leaseStatus)
            ->setMoveInDate($moveInDate)
            ->setMoveOutDate($moveOutDate)
            ->setNoticeGivenDate($noticeGivenDate)
            ->setPrimaryContact($primaryContact)
            ->setPublicAssistanceProgram($publicAssistanceProgram)
            ->setReasonForLeaving($reasonForLeaving)
            ->setScheduleMoveOutDate($scheduleMoveOutDate)
            ->setSkipPostAutoCharges($skipPostAutoCharges)
            ->setStartDate($startDate)
            ->setTenants($tenants)
            ->setTerminatedDate($terminatedDate)
            ->setUnit($unit)
            ->setUnitID($unitID);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \StructType\Lease
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get autoCharges value
     * @return \StructType\AutoCharge[]|null
     */
    public function getAutoCharges()
    {
        return $this->autoCharges;
    }
    /**
     * Set autoCharges value
     * @throws \InvalidArgumentException
     * @param \StructType\AutoCharge[] $autoCharges
     * @return \StructType\Lease
     */
    public function setAutoCharges(array $autoCharges = array())
    {
        foreach ($autoCharges as $leaseAutoChargesItem) {
            // validation for constraint: itemType
            if (!$leaseAutoChargesItem instanceof \StructType\AutoCharge) {
                throw new \InvalidArgumentException(sprintf('The autoCharges property can only contain items of \StructType\AutoCharge, "%s" given', is_object($leaseAutoChargesItem) ? get_class($leaseAutoChargesItem) : gettype($leaseAutoChargesItem)), __LINE__);
            }
        }
        $this->autoCharges = $autoCharges;
        return $this;
    }
    /**
     * Add item to autoCharges value
     * @throws \InvalidArgumentException
     * @param \StructType\AutoCharge $item
     * @return \StructType\Lease
     */
    public function addToAutoCharges(\StructType\AutoCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AutoCharge) {
            throw new \InvalidArgumentException(sprintf('The autoCharges property can only contain items of \StructType\AutoCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->autoCharges[] = $item;
        return $this;
    }
    /**
     * Get balance value
     * @return float|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \StructType\Lease
     */
    public function setBalance($balance = null)
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Get building value
     * @return \StructType\Building|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \StructType\Building $building
     * @return \StructType\Lease
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
        return $this;
    }
    /**
     * Get buildingID value
     * @return int|null
     */
    public function getBuildingID()
    {
        return $this->buildingID;
    }
    /**
     * Set buildingID value
     * @param int $buildingID
     * @return \StructType\Lease
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !is_numeric($buildingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingID)), __LINE__);
        }
        $this->buildingID = $buildingID;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \StructType\Lease
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get commercial value
     * @return bool|null
     */
    public function getCommercial()
    {
        return $this->commercial;
    }
    /**
     * Set commercial value
     * @param bool $commercial
     * @return \StructType\Lease
     */
    public function setCommercial($commercial = null)
    {
        // validation for constraint: boolean
        if (!is_null($commercial) && !is_bool($commercial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commercial)), __LINE__);
        }
        $this->commercial = $commercial;
        return $this;
    }
    /**
     * Get customFields value
     * @return \StructType\CustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }
    /**
     * Set customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField[] $customFields
     * @return \StructType\Lease
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $leaseCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$leaseCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($leaseCustomFieldsItem) ? get_class($leaseCustomFieldsItem) : gettype($leaseCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Lease
     */
    public function addToCustomFields(\StructType\CustomField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomField) {
            throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->customFields[] = $item;
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\Lease
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get evictionDate value
     * @return string|null
     */
    public function getEvictionDate()
    {
        return $this->evictionDate;
    }
    /**
     * Set evictionDate value
     * @param string $evictionDate
     * @return \StructType\Lease
     */
    public function setEvictionDate($evictionDate = null)
    {
        // validation for constraint: string
        if (!is_null($evictionDate) && !is_string($evictionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($evictionDate)), __LINE__);
        }
        $this->evictionDate = $evictionDate;
        return $this;
    }
    /**
     * Get keysReturned value
     * @return bool|null
     */
    public function getKeysReturned()
    {
        return $this->keysReturned;
    }
    /**
     * Set keysReturned value
     * @param bool $keysReturned
     * @return \StructType\Lease
     */
    public function setKeysReturned($keysReturned = null)
    {
        // validation for constraint: boolean
        if (!is_null($keysReturned) && !is_bool($keysReturned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keysReturned)), __LINE__);
        }
        $this->keysReturned = $keysReturned;
        return $this;
    }
    /**
     * Get lateFeeRule value
     * @return \StructType\LateFeeRule|null
     */
    public function getLateFeeRule()
    {
        return $this->lateFeeRule;
    }
    /**
     * Set lateFeeRule value
     * @param \StructType\LateFeeRule $lateFeeRule
     * @return \StructType\Lease
     */
    public function setLateFeeRule(\StructType\LateFeeRule $lateFeeRule = null)
    {
        $this->lateFeeRule = $lateFeeRule;
        return $this;
    }
    /**
     * Get leaseName value
     * @return string|null
     */
    public function getLeaseName()
    {
        return $this->leaseName;
    }
    /**
     * Set leaseName value
     * @param string $leaseName
     * @return \StructType\Lease
     */
    public function setLeaseName($leaseName = null)
    {
        // validation for constraint: string
        if (!is_null($leaseName) && !is_string($leaseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leaseName)), __LINE__);
        }
        $this->leaseName = $leaseName;
        return $this;
    }
    /**
     * Get leaseStatus value
     * @return string|null
     */
    public function getLeaseStatus()
    {
        return $this->leaseStatus;
    }
    /**
     * Set leaseStatus value
     * @param string $leaseStatus
     * @return \StructType\Lease
     */
    public function setLeaseStatus($leaseStatus = null)
    {
        // validation for constraint: string
        if (!is_null($leaseStatus) && !is_string($leaseStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leaseStatus)), __LINE__);
        }
        $this->leaseStatus = $leaseStatus;
        return $this;
    }
    /**
     * Get moveInDate value
     * @return string|null
     */
    public function getMoveInDate()
    {
        return $this->moveInDate;
    }
    /**
     * Set moveInDate value
     * @param string $moveInDate
     * @return \StructType\Lease
     */
    public function setMoveInDate($moveInDate = null)
    {
        // validation for constraint: string
        if (!is_null($moveInDate) && !is_string($moveInDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moveInDate)), __LINE__);
        }
        $this->moveInDate = $moveInDate;
        return $this;
    }
    /**
     * Get moveOutDate value
     * @return string|null
     */
    public function getMoveOutDate()
    {
        return $this->moveOutDate;
    }
    /**
     * Set moveOutDate value
     * @param string $moveOutDate
     * @return \StructType\Lease
     */
    public function setMoveOutDate($moveOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($moveOutDate) && !is_string($moveOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moveOutDate)), __LINE__);
        }
        $this->moveOutDate = $moveOutDate;
        return $this;
    }
    /**
     * Get noticeGivenDate value
     * @return string|null
     */
    public function getNoticeGivenDate()
    {
        return $this->noticeGivenDate;
    }
    /**
     * Set noticeGivenDate value
     * @param string $noticeGivenDate
     * @return \StructType\Lease
     */
    public function setNoticeGivenDate($noticeGivenDate = null)
    {
        // validation for constraint: string
        if (!is_null($noticeGivenDate) && !is_string($noticeGivenDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noticeGivenDate)), __LINE__);
        }
        $this->noticeGivenDate = $noticeGivenDate;
        return $this;
    }
    /**
     * Get primaryContact value
     * @return \StructType\Contact|null
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }
    /**
     * Set primaryContact value
     * @param \StructType\Contact $primaryContact
     * @return \StructType\Lease
     */
    public function setPrimaryContact(\StructType\Contact $primaryContact = null)
    {
        $this->primaryContact = $primaryContact;
        return $this;
    }
    /**
     * Get publicAssistanceProgram value
     * @return string|null
     */
    public function getPublicAssistanceProgram()
    {
        return $this->publicAssistanceProgram;
    }
    /**
     * Set publicAssistanceProgram value
     * @param string $publicAssistanceProgram
     * @return \StructType\Lease
     */
    public function setPublicAssistanceProgram($publicAssistanceProgram = null)
    {
        // validation for constraint: string
        if (!is_null($publicAssistanceProgram) && !is_string($publicAssistanceProgram)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publicAssistanceProgram)), __LINE__);
        }
        $this->publicAssistanceProgram = $publicAssistanceProgram;
        return $this;
    }
    /**
     * Get reasonForLeaving value
     * @return string|null
     */
    public function getReasonForLeaving()
    {
        return $this->reasonForLeaving;
    }
    /**
     * Set reasonForLeaving value
     * @param string $reasonForLeaving
     * @return \StructType\Lease
     */
    public function setReasonForLeaving($reasonForLeaving = null)
    {
        // validation for constraint: string
        if (!is_null($reasonForLeaving) && !is_string($reasonForLeaving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonForLeaving)), __LINE__);
        }
        $this->reasonForLeaving = $reasonForLeaving;
        return $this;
    }
    /**
     * Get scheduleMoveOutDate value
     * @return string|null
     */
    public function getScheduleMoveOutDate()
    {
        return $this->scheduleMoveOutDate;
    }
    /**
     * Set scheduleMoveOutDate value
     * @param string $scheduleMoveOutDate
     * @return \StructType\Lease
     */
    public function setScheduleMoveOutDate($scheduleMoveOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleMoveOutDate) && !is_string($scheduleMoveOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleMoveOutDate)), __LINE__);
        }
        $this->scheduleMoveOutDate = $scheduleMoveOutDate;
        return $this;
    }
    /**
     * Get skipPostAutoCharges value
     * @return bool|null
     */
    public function getSkipPostAutoCharges()
    {
        return $this->skipPostAutoCharges;
    }
    /**
     * Set skipPostAutoCharges value
     * @param bool $skipPostAutoCharges
     * @return \StructType\Lease
     */
    public function setSkipPostAutoCharges($skipPostAutoCharges = null)
    {
        // validation for constraint: boolean
        if (!is_null($skipPostAutoCharges) && !is_bool($skipPostAutoCharges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($skipPostAutoCharges)), __LINE__);
        }
        $this->skipPostAutoCharges = $skipPostAutoCharges;
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\Lease
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get tenants value
     * @return \StructType\Contact[]|null
     */
    public function getTenants()
    {
        return $this->tenants;
    }
    /**
     * Set tenants value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact[] $tenants
     * @return \StructType\Lease
     */
    public function setTenants(array $tenants = array())
    {
        foreach ($tenants as $leaseTenantsItem) {
            // validation for constraint: itemType
            if (!$leaseTenantsItem instanceof \StructType\Contact) {
                throw new \InvalidArgumentException(sprintf('The tenants property can only contain items of \StructType\Contact, "%s" given', is_object($leaseTenantsItem) ? get_class($leaseTenantsItem) : gettype($leaseTenantsItem)), __LINE__);
            }
        }
        $this->tenants = $tenants;
        return $this;
    }
    /**
     * Add item to tenants value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact $item
     * @return \StructType\Lease
     */
    public function addToTenants(\StructType\Contact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contact) {
            throw new \InvalidArgumentException(sprintf('The tenants property can only contain items of \StructType\Contact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tenants[] = $item;
        return $this;
    }
    /**
     * Get terminatedDate value
     * @return string|null
     */
    public function getTerminatedDate()
    {
        return $this->terminatedDate;
    }
    /**
     * Set terminatedDate value
     * @param string $terminatedDate
     * @return \StructType\Lease
     */
    public function setTerminatedDate($terminatedDate = null)
    {
        // validation for constraint: string
        if (!is_null($terminatedDate) && !is_string($terminatedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminatedDate)), __LINE__);
        }
        $this->terminatedDate = $terminatedDate;
        return $this;
    }
    /**
     * Get unit value
     * @return \StructType\Unit|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param \StructType\Unit $unit
     * @return \StructType\Lease
     */
    public function setUnit(\StructType\Unit $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get unitID value
     * @return int|null
     */
    public function getUnitID()
    {
        return $this->unitID;
    }
    /**
     * Set unitID value
     * @param int $unitID
     * @return \StructType\Lease
     */
    public function setUnitID($unitID = null)
    {
        // validation for constraint: int
        if (!is_null($unitID) && !is_numeric($unitID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitID)), __LINE__);
        }
        $this->unitID = $unitID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Lease
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
