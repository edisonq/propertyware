<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Prospect StructType
 * @subpackage Structs
 */
class Prospect extends AbstractDocumentHolder
{
    /**
     * The applicationFeePaid
     * @var bool
     */
    public $applicationFeePaid;
    /**
     * The assignedToFullName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $assignedToFullName;
    /**
     * The campaign
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Campaign
     */
    public $campaign;
    /**
     * The cityDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cityDesired;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The contact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Contact
     */
    public $contact;
    /**
     * The createdBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdBy;
    /**
     * The createdByID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $createdByID;
    /**
     * The createdTs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdTs;
    /**
     * The currentHomeType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentHomeType;
    /**
     * The currentRentMortgage
     * @var float
     */
    public $currentRentMortgage;
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
     * The desiredLocation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Unit
     */
    public $desiredLocation;
    /**
     * The externalSource
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $externalSource;
    /**
     * The generateAlert
     * @var bool
     */
    public $generateAlert;
    /**
     * The hasPets
     * @var bool
     */
    public $hasPets;
    /**
     * The leaseEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leaseEndDate;
    /**
     * The leaseStartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leaseStartDate;
    /**
     * The modifiedBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $modifiedBy;
    /**
     * The modifiedByID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $modifiedByID;
    /**
     * The modifiedByTs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $modifiedByTs;
    /**
     * The moveInDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $moveInDate;
    /**
     * The neighborhoodDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $neighborhoodDesired;
    /**
     * The numberBathrooms
     * @var float
     */
    public $numberBathrooms;
    /**
     * The numberBedrooms
     * @var int
     */
    public $numberBedrooms;
    /**
     * The numberOfOccupants
     * @var int
     */
    public $numberOfOccupants;
    /**
     * The numberOfPets
     * @var int
     */
    public $numberOfPets;
    /**
     * The otherContacts
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Contact[]
     * - ref: soapenc:arrayType
     * @var \StructType\Contact[]
     */
    public $otherContacts;
    /**
     * The petType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $petType;
    /**
     * The petWeights
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $petWeights;
    /**
     * The preferredContactMethod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $preferredContactMethod;
    /**
     * The propertyAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyAddress;
    /**
     * The propertyAddress2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyAddress2;
    /**
     * The propertyArea
     * @var float
     */
    public $propertyArea;
    /**
     * The propertyAreaUnits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyAreaUnits;
    /**
     * The propertyCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyCity;
    /**
     * The propertyCountry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyCountry;
    /**
     * The propertyNumberBathrooms
     * @var float
     */
    public $propertyNumberBathrooms;
    /**
     * The propertyNumberBedrooms
     * @var int
     */
    public $propertyNumberBedrooms;
    /**
     * The propertyState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyState;
    /**
     * The propertyZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $propertyZip;
    /**
     * The prospectID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $prospectID;
    /**
     * The reasonForMoving
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reasonForMoving;
    /**
     * The rent
     * @var float
     */
    public $rent;
    /**
     * The rentMax
     * @var float
     */
    public $rentMax;
    /**
     * The rentMin
     * @var float
     */
    public $rentMin;
    /**
     * The securityDeposit
     * @var float
     */
    public $securityDeposit;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $source;
    /**
     * The stateDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $stateDesired;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The systemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $systemID;
    /**
     * The timeAtCurrentResidence
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $timeAtCurrentResidence;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The typeOfInquiry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $typeOfInquiry;
    /**
     * The unitDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unitDesired;
    /**
     * The unitTypeDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unitTypeDesired;
    /**
     * The zipDesired
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zipDesired;
    /**
     * Constructor method for Prospect
     * @uses Prospect::setApplicationFeePaid()
     * @uses Prospect::setAssignedToFullName()
     * @uses Prospect::setCampaign()
     * @uses Prospect::setCityDesired()
     * @uses Prospect::setComments()
     * @uses Prospect::setContact()
     * @uses Prospect::setCreatedBy()
     * @uses Prospect::setCreatedByID()
     * @uses Prospect::setCreatedTs()
     * @uses Prospect::setCurrentHomeType()
     * @uses Prospect::setCurrentRentMortgage()
     * @uses Prospect::setCustomFields()
     * @uses Prospect::setDesiredLocation()
     * @uses Prospect::setExternalSource()
     * @uses Prospect::setGenerateAlert()
     * @uses Prospect::setHasPets()
     * @uses Prospect::setLeaseEndDate()
     * @uses Prospect::setLeaseStartDate()
     * @uses Prospect::setModifiedBy()
     * @uses Prospect::setModifiedByID()
     * @uses Prospect::setModifiedByTs()
     * @uses Prospect::setMoveInDate()
     * @uses Prospect::setNeighborhoodDesired()
     * @uses Prospect::setNumberBathrooms()
     * @uses Prospect::setNumberBedrooms()
     * @uses Prospect::setNumberOfOccupants()
     * @uses Prospect::setNumberOfPets()
     * @uses Prospect::setOtherContacts()
     * @uses Prospect::setPetType()
     * @uses Prospect::setPetWeights()
     * @uses Prospect::setPreferredContactMethod()
     * @uses Prospect::setPropertyAddress()
     * @uses Prospect::setPropertyAddress2()
     * @uses Prospect::setPropertyArea()
     * @uses Prospect::setPropertyAreaUnits()
     * @uses Prospect::setPropertyCity()
     * @uses Prospect::setPropertyCountry()
     * @uses Prospect::setPropertyNumberBathrooms()
     * @uses Prospect::setPropertyNumberBedrooms()
     * @uses Prospect::setPropertyState()
     * @uses Prospect::setPropertyZip()
     * @uses Prospect::setProspectID()
     * @uses Prospect::setReasonForMoving()
     * @uses Prospect::setRent()
     * @uses Prospect::setRentMax()
     * @uses Prospect::setRentMin()
     * @uses Prospect::setSecurityDeposit()
     * @uses Prospect::setSource()
     * @uses Prospect::setStateDesired()
     * @uses Prospect::setStatus()
     * @uses Prospect::setSystemID()
     * @uses Prospect::setTimeAtCurrentResidence()
     * @uses Prospect::setType()
     * @uses Prospect::setTypeOfInquiry()
     * @uses Prospect::setUnitDesired()
     * @uses Prospect::setUnitTypeDesired()
     * @uses Prospect::setZipDesired()
     * @param bool $applicationFeePaid
     * @param string $assignedToFullName
     * @param \StructType\Campaign $campaign
     * @param string $cityDesired
     * @param string $comments
     * @param \StructType\Contact $contact
     * @param string $createdBy
     * @param int $createdByID
     * @param string $createdTs
     * @param string $currentHomeType
     * @param float $currentRentMortgage
     * @param \StructType\CustomField[] $customFields
     * @param \StructType\Unit $desiredLocation
     * @param string $externalSource
     * @param bool $generateAlert
     * @param bool $hasPets
     * @param string $leaseEndDate
     * @param string $leaseStartDate
     * @param string $modifiedBy
     * @param int $modifiedByID
     * @param string $modifiedByTs
     * @param string $moveInDate
     * @param string $neighborhoodDesired
     * @param float $numberBathrooms
     * @param int $numberBedrooms
     * @param int $numberOfOccupants
     * @param int $numberOfPets
     * @param \StructType\Contact[] $otherContacts
     * @param string $petType
     * @param string $petWeights
     * @param string $preferredContactMethod
     * @param string $propertyAddress
     * @param string $propertyAddress2
     * @param float $propertyArea
     * @param string $propertyAreaUnits
     * @param string $propertyCity
     * @param string $propertyCountry
     * @param float $propertyNumberBathrooms
     * @param int $propertyNumberBedrooms
     * @param string $propertyState
     * @param string $propertyZip
     * @param int $prospectID
     * @param string $reasonForMoving
     * @param float $rent
     * @param float $rentMax
     * @param float $rentMin
     * @param float $securityDeposit
     * @param string $source
     * @param string $stateDesired
     * @param string $status
     * @param int $systemID
     * @param string $timeAtCurrentResidence
     * @param string $type
     * @param string $typeOfInquiry
     * @param string $unitDesired
     * @param string $unitTypeDesired
     * @param string $zipDesired
     */
    public function __construct($applicationFeePaid = null, $assignedToFullName = null, \StructType\Campaign $campaign = null, $cityDesired = null, $comments = null, \StructType\Contact $contact = null, $createdBy = null, $createdByID = null, $createdTs = null, $currentHomeType = null, $currentRentMortgage = null, array $customFields = array(), \StructType\Unit $desiredLocation = null, $externalSource = null, $generateAlert = null, $hasPets = null, $leaseEndDate = null, $leaseStartDate = null, $modifiedBy = null, $modifiedByID = null, $modifiedByTs = null, $moveInDate = null, $neighborhoodDesired = null, $numberBathrooms = null, $numberBedrooms = null, $numberOfOccupants = null, $numberOfPets = null, array $otherContacts = array(), $petType = null, $petWeights = null, $preferredContactMethod = null, $propertyAddress = null, $propertyAddress2 = null, $propertyArea = null, $propertyAreaUnits = null, $propertyCity = null, $propertyCountry = null, $propertyNumberBathrooms = null, $propertyNumberBedrooms = null, $propertyState = null, $propertyZip = null, $prospectID = null, $reasonForMoving = null, $rent = null, $rentMax = null, $rentMin = null, $securityDeposit = null, $source = null, $stateDesired = null, $status = null, $systemID = null, $timeAtCurrentResidence = null, $type = null, $typeOfInquiry = null, $unitDesired = null, $unitTypeDesired = null, $zipDesired = null)
    {
        $this
            ->setApplicationFeePaid($applicationFeePaid)
            ->setAssignedToFullName($assignedToFullName)
            ->setCampaign($campaign)
            ->setCityDesired($cityDesired)
            ->setComments($comments)
            ->setContact($contact)
            ->setCreatedBy($createdBy)
            ->setCreatedByID($createdByID)
            ->setCreatedTs($createdTs)
            ->setCurrentHomeType($currentHomeType)
            ->setCurrentRentMortgage($currentRentMortgage)
            ->setCustomFields($customFields)
            ->setDesiredLocation($desiredLocation)
            ->setExternalSource($externalSource)
            ->setGenerateAlert($generateAlert)
            ->setHasPets($hasPets)
            ->setLeaseEndDate($leaseEndDate)
            ->setLeaseStartDate($leaseStartDate)
            ->setModifiedBy($modifiedBy)
            ->setModifiedByID($modifiedByID)
            ->setModifiedByTs($modifiedByTs)
            ->setMoveInDate($moveInDate)
            ->setNeighborhoodDesired($neighborhoodDesired)
            ->setNumberBathrooms($numberBathrooms)
            ->setNumberBedrooms($numberBedrooms)
            ->setNumberOfOccupants($numberOfOccupants)
            ->setNumberOfPets($numberOfPets)
            ->setOtherContacts($otherContacts)
            ->setPetType($petType)
            ->setPetWeights($petWeights)
            ->setPreferredContactMethod($preferredContactMethod)
            ->setPropertyAddress($propertyAddress)
            ->setPropertyAddress2($propertyAddress2)
            ->setPropertyArea($propertyArea)
            ->setPropertyAreaUnits($propertyAreaUnits)
            ->setPropertyCity($propertyCity)
            ->setPropertyCountry($propertyCountry)
            ->setPropertyNumberBathrooms($propertyNumberBathrooms)
            ->setPropertyNumberBedrooms($propertyNumberBedrooms)
            ->setPropertyState($propertyState)
            ->setPropertyZip($propertyZip)
            ->setProspectID($prospectID)
            ->setReasonForMoving($reasonForMoving)
            ->setRent($rent)
            ->setRentMax($rentMax)
            ->setRentMin($rentMin)
            ->setSecurityDeposit($securityDeposit)
            ->setSource($source)
            ->setStateDesired($stateDesired)
            ->setStatus($status)
            ->setSystemID($systemID)
            ->setTimeAtCurrentResidence($timeAtCurrentResidence)
            ->setType($type)
            ->setTypeOfInquiry($typeOfInquiry)
            ->setUnitDesired($unitDesired)
            ->setUnitTypeDesired($unitTypeDesired)
            ->setZipDesired($zipDesired);
    }
    /**
     * Get applicationFeePaid value
     * @return bool|null
     */
    public function getApplicationFeePaid()
    {
        return $this->applicationFeePaid;
    }
    /**
     * Set applicationFeePaid value
     * @param bool $applicationFeePaid
     * @return \StructType\Prospect
     */
    public function setApplicationFeePaid($applicationFeePaid = null)
    {
        // validation for constraint: boolean
        if (!is_null($applicationFeePaid) && !is_bool($applicationFeePaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($applicationFeePaid)), __LINE__);
        }
        $this->applicationFeePaid = $applicationFeePaid;
        return $this;
    }
    /**
     * Get assignedToFullName value
     * @return string|null
     */
    public function getAssignedToFullName()
    {
        return $this->assignedToFullName;
    }
    /**
     * Set assignedToFullName value
     * @param string $assignedToFullName
     * @return \StructType\Prospect
     */
    public function setAssignedToFullName($assignedToFullName = null)
    {
        // validation for constraint: string
        if (!is_null($assignedToFullName) && !is_string($assignedToFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($assignedToFullName)), __LINE__);
        }
        $this->assignedToFullName = $assignedToFullName;
        return $this;
    }
    /**
     * Get campaign value
     * @return \StructType\Campaign|null
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
    /**
     * Set campaign value
     * @param \StructType\Campaign $campaign
     * @return \StructType\Prospect
     */
    public function setCampaign(\StructType\Campaign $campaign = null)
    {
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * Get cityDesired value
     * @return string|null
     */
    public function getCityDesired()
    {
        return $this->cityDesired;
    }
    /**
     * Set cityDesired value
     * @param string $cityDesired
     * @return \StructType\Prospect
     */
    public function setCityDesired($cityDesired = null)
    {
        // validation for constraint: string
        if (!is_null($cityDesired) && !is_string($cityDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityDesired)), __LINE__);
        }
        $this->cityDesired = $cityDesired;
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
     * @return \StructType\Prospect
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
     * Get contact value
     * @return \StructType\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param \StructType\Contact $contact
     * @return \StructType\Prospect
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * Get createdBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    /**
     * Set createdBy value
     * @param string $createdBy
     * @return \StructType\Prospect
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdBy)), __LINE__);
        }
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Get createdByID value
     * @return int|null
     */
    public function getCreatedByID()
    {
        return $this->createdByID;
    }
    /**
     * Set createdByID value
     * @param int $createdByID
     * @return \StructType\Prospect
     */
    public function setCreatedByID($createdByID = null)
    {
        // validation for constraint: int
        if (!is_null($createdByID) && !is_numeric($createdByID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($createdByID)), __LINE__);
        }
        $this->createdByID = $createdByID;
        return $this;
    }
    /**
     * Get createdTs value
     * @return string|null
     */
    public function getCreatedTs()
    {
        return $this->createdTs;
    }
    /**
     * Set createdTs value
     * @param string $createdTs
     * @return \StructType\Prospect
     */
    public function setCreatedTs($createdTs = null)
    {
        // validation for constraint: string
        if (!is_null($createdTs) && !is_string($createdTs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdTs)), __LINE__);
        }
        $this->createdTs = $createdTs;
        return $this;
    }
    /**
     * Get currentHomeType value
     * @return string|null
     */
    public function getCurrentHomeType()
    {
        return $this->currentHomeType;
    }
    /**
     * Set currentHomeType value
     * @param string $currentHomeType
     * @return \StructType\Prospect
     */
    public function setCurrentHomeType($currentHomeType = null)
    {
        // validation for constraint: string
        if (!is_null($currentHomeType) && !is_string($currentHomeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentHomeType)), __LINE__);
        }
        $this->currentHomeType = $currentHomeType;
        return $this;
    }
    /**
     * Get currentRentMortgage value
     * @return float|null
     */
    public function getCurrentRentMortgage()
    {
        return $this->currentRentMortgage;
    }
    /**
     * Set currentRentMortgage value
     * @param float $currentRentMortgage
     * @return \StructType\Prospect
     */
    public function setCurrentRentMortgage($currentRentMortgage = null)
    {
        $this->currentRentMortgage = $currentRentMortgage;
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
     * @return \StructType\Prospect
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $prospectCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$prospectCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($prospectCustomFieldsItem) ? get_class($prospectCustomFieldsItem) : gettype($prospectCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Prospect
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
     * Get desiredLocation value
     * @return \StructType\Unit|null
     */
    public function getDesiredLocation()
    {
        return $this->desiredLocation;
    }
    /**
     * Set desiredLocation value
     * @param \StructType\Unit $desiredLocation
     * @return \StructType\Prospect
     */
    public function setDesiredLocation(\StructType\Unit $desiredLocation = null)
    {
        $this->desiredLocation = $desiredLocation;
        return $this;
    }
    /**
     * Get externalSource value
     * @return string|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }
    /**
     * Set externalSource value
     * @param string $externalSource
     * @return \StructType\Prospect
     */
    public function setExternalSource($externalSource = null)
    {
        // validation for constraint: string
        if (!is_null($externalSource) && !is_string($externalSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalSource)), __LINE__);
        }
        $this->externalSource = $externalSource;
        return $this;
    }
    /**
     * Get generateAlert value
     * @return bool|null
     */
    public function getGenerateAlert()
    {
        return $this->generateAlert;
    }
    /**
     * Set generateAlert value
     * @param bool $generateAlert
     * @return \StructType\Prospect
     */
    public function setGenerateAlert($generateAlert = null)
    {
        // validation for constraint: boolean
        if (!is_null($generateAlert) && !is_bool($generateAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($generateAlert)), __LINE__);
        }
        $this->generateAlert = $generateAlert;
        return $this;
    }
    /**
     * Get hasPets value
     * @return bool|null
     */
    public function getHasPets()
    {
        return $this->hasPets;
    }
    /**
     * Set hasPets value
     * @param bool $hasPets
     * @return \StructType\Prospect
     */
    public function setHasPets($hasPets = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPets) && !is_bool($hasPets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasPets)), __LINE__);
        }
        $this->hasPets = $hasPets;
        return $this;
    }
    /**
     * Get leaseEndDate value
     * @return string|null
     */
    public function getLeaseEndDate()
    {
        return $this->leaseEndDate;
    }
    /**
     * Set leaseEndDate value
     * @param string $leaseEndDate
     * @return \StructType\Prospect
     */
    public function setLeaseEndDate($leaseEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($leaseEndDate) && !is_string($leaseEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leaseEndDate)), __LINE__);
        }
        $this->leaseEndDate = $leaseEndDate;
        return $this;
    }
    /**
     * Get leaseStartDate value
     * @return string|null
     */
    public function getLeaseStartDate()
    {
        return $this->leaseStartDate;
    }
    /**
     * Set leaseStartDate value
     * @param string $leaseStartDate
     * @return \StructType\Prospect
     */
    public function setLeaseStartDate($leaseStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($leaseStartDate) && !is_string($leaseStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leaseStartDate)), __LINE__);
        }
        $this->leaseStartDate = $leaseStartDate;
        return $this;
    }
    /**
     * Get modifiedBy value
     * @return string|null
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }
    /**
     * Set modifiedBy value
     * @param string $modifiedBy
     * @return \StructType\Prospect
     */
    public function setModifiedBy($modifiedBy = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedBy) && !is_string($modifiedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifiedBy)), __LINE__);
        }
        $this->modifiedBy = $modifiedBy;
        return $this;
    }
    /**
     * Get modifiedByID value
     * @return int|null
     */
    public function getModifiedByID()
    {
        return $this->modifiedByID;
    }
    /**
     * Set modifiedByID value
     * @param int $modifiedByID
     * @return \StructType\Prospect
     */
    public function setModifiedByID($modifiedByID = null)
    {
        // validation for constraint: int
        if (!is_null($modifiedByID) && !is_numeric($modifiedByID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modifiedByID)), __LINE__);
        }
        $this->modifiedByID = $modifiedByID;
        return $this;
    }
    /**
     * Get modifiedByTs value
     * @return string|null
     */
    public function getModifiedByTs()
    {
        return $this->modifiedByTs;
    }
    /**
     * Set modifiedByTs value
     * @param string $modifiedByTs
     * @return \StructType\Prospect
     */
    public function setModifiedByTs($modifiedByTs = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedByTs) && !is_string($modifiedByTs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifiedByTs)), __LINE__);
        }
        $this->modifiedByTs = $modifiedByTs;
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
     * @return \StructType\Prospect
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
     * Get neighborhoodDesired value
     * @return string|null
     */
    public function getNeighborhoodDesired()
    {
        return $this->neighborhoodDesired;
    }
    /**
     * Set neighborhoodDesired value
     * @param string $neighborhoodDesired
     * @return \StructType\Prospect
     */
    public function setNeighborhoodDesired($neighborhoodDesired = null)
    {
        // validation for constraint: string
        if (!is_null($neighborhoodDesired) && !is_string($neighborhoodDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($neighborhoodDesired)), __LINE__);
        }
        $this->neighborhoodDesired = $neighborhoodDesired;
        return $this;
    }
    /**
     * Get numberBathrooms value
     * @return float|null
     */
    public function getNumberBathrooms()
    {
        return $this->numberBathrooms;
    }
    /**
     * Set numberBathrooms value
     * @param float $numberBathrooms
     * @return \StructType\Prospect
     */
    public function setNumberBathrooms($numberBathrooms = null)
    {
        $this->numberBathrooms = $numberBathrooms;
        return $this;
    }
    /**
     * Get numberBedrooms value
     * @return int|null
     */
    public function getNumberBedrooms()
    {
        return $this->numberBedrooms;
    }
    /**
     * Set numberBedrooms value
     * @param int $numberBedrooms
     * @return \StructType\Prospect
     */
    public function setNumberBedrooms($numberBedrooms = null)
    {
        // validation for constraint: int
        if (!is_null($numberBedrooms) && !is_numeric($numberBedrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberBedrooms)), __LINE__);
        }
        $this->numberBedrooms = $numberBedrooms;
        return $this;
    }
    /**
     * Get numberOfOccupants value
     * @return int|null
     */
    public function getNumberOfOccupants()
    {
        return $this->numberOfOccupants;
    }
    /**
     * Set numberOfOccupants value
     * @param int $numberOfOccupants
     * @return \StructType\Prospect
     */
    public function setNumberOfOccupants($numberOfOccupants = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfOccupants) && !is_numeric($numberOfOccupants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfOccupants)), __LINE__);
        }
        $this->numberOfOccupants = $numberOfOccupants;
        return $this;
    }
    /**
     * Get numberOfPets value
     * @return int|null
     */
    public function getNumberOfPets()
    {
        return $this->numberOfPets;
    }
    /**
     * Set numberOfPets value
     * @param int $numberOfPets
     * @return \StructType\Prospect
     */
    public function setNumberOfPets($numberOfPets = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPets) && !is_numeric($numberOfPets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPets)), __LINE__);
        }
        $this->numberOfPets = $numberOfPets;
        return $this;
    }
    /**
     * Get otherContacts value
     * @return \StructType\Contact[]|null
     */
    public function getOtherContacts()
    {
        return $this->otherContacts;
    }
    /**
     * Set otherContacts value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact[] $otherContacts
     * @return \StructType\Prospect
     */
    public function setOtherContacts(array $otherContacts = array())
    {
        foreach ($otherContacts as $prospectOtherContactsItem) {
            // validation for constraint: itemType
            if (!$prospectOtherContactsItem instanceof \StructType\Contact) {
                throw new \InvalidArgumentException(sprintf('The otherContacts property can only contain items of \StructType\Contact, "%s" given', is_object($prospectOtherContactsItem) ? get_class($prospectOtherContactsItem) : gettype($prospectOtherContactsItem)), __LINE__);
            }
        }
        $this->otherContacts = $otherContacts;
        return $this;
    }
    /**
     * Add item to otherContacts value
     * @throws \InvalidArgumentException
     * @param \StructType\Contact $item
     * @return \StructType\Prospect
     */
    public function addToOtherContacts(\StructType\Contact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contact) {
            throw new \InvalidArgumentException(sprintf('The otherContacts property can only contain items of \StructType\Contact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->otherContacts[] = $item;
        return $this;
    }
    /**
     * Get petType value
     * @return string|null
     */
    public function getPetType()
    {
        return $this->petType;
    }
    /**
     * Set petType value
     * @param string $petType
     * @return \StructType\Prospect
     */
    public function setPetType($petType = null)
    {
        // validation for constraint: string
        if (!is_null($petType) && !is_string($petType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($petType)), __LINE__);
        }
        $this->petType = $petType;
        return $this;
    }
    /**
     * Get petWeights value
     * @return string|null
     */
    public function getPetWeights()
    {
        return $this->petWeights;
    }
    /**
     * Set petWeights value
     * @param string $petWeights
     * @return \StructType\Prospect
     */
    public function setPetWeights($petWeights = null)
    {
        // validation for constraint: string
        if (!is_null($petWeights) && !is_string($petWeights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($petWeights)), __LINE__);
        }
        $this->petWeights = $petWeights;
        return $this;
    }
    /**
     * Get preferredContactMethod value
     * @return string|null
     */
    public function getPreferredContactMethod()
    {
        return $this->preferredContactMethod;
    }
    /**
     * Set preferredContactMethod value
     * @param string $preferredContactMethod
     * @return \StructType\Prospect
     */
    public function setPreferredContactMethod($preferredContactMethod = null)
    {
        // validation for constraint: string
        if (!is_null($preferredContactMethod) && !is_string($preferredContactMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredContactMethod)), __LINE__);
        }
        $this->preferredContactMethod = $preferredContactMethod;
        return $this;
    }
    /**
     * Get propertyAddress value
     * @return string|null
     */
    public function getPropertyAddress()
    {
        return $this->propertyAddress;
    }
    /**
     * Set propertyAddress value
     * @param string $propertyAddress
     * @return \StructType\Prospect
     */
    public function setPropertyAddress($propertyAddress = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAddress) && !is_string($propertyAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAddress)), __LINE__);
        }
        $this->propertyAddress = $propertyAddress;
        return $this;
    }
    /**
     * Get propertyAddress2 value
     * @return string|null
     */
    public function getPropertyAddress2()
    {
        return $this->propertyAddress2;
    }
    /**
     * Set propertyAddress2 value
     * @param string $propertyAddress2
     * @return \StructType\Prospect
     */
    public function setPropertyAddress2($propertyAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAddress2) && !is_string($propertyAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAddress2)), __LINE__);
        }
        $this->propertyAddress2 = $propertyAddress2;
        return $this;
    }
    /**
     * Get propertyArea value
     * @return float|null
     */
    public function getPropertyArea()
    {
        return $this->propertyArea;
    }
    /**
     * Set propertyArea value
     * @param float $propertyArea
     * @return \StructType\Prospect
     */
    public function setPropertyArea($propertyArea = null)
    {
        $this->propertyArea = $propertyArea;
        return $this;
    }
    /**
     * Get propertyAreaUnits value
     * @return string|null
     */
    public function getPropertyAreaUnits()
    {
        return $this->propertyAreaUnits;
    }
    /**
     * Set propertyAreaUnits value
     * @param string $propertyAreaUnits
     * @return \StructType\Prospect
     */
    public function setPropertyAreaUnits($propertyAreaUnits = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAreaUnits) && !is_string($propertyAreaUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAreaUnits)), __LINE__);
        }
        $this->propertyAreaUnits = $propertyAreaUnits;
        return $this;
    }
    /**
     * Get propertyCity value
     * @return string|null
     */
    public function getPropertyCity()
    {
        return $this->propertyCity;
    }
    /**
     * Set propertyCity value
     * @param string $propertyCity
     * @return \StructType\Prospect
     */
    public function setPropertyCity($propertyCity = null)
    {
        // validation for constraint: string
        if (!is_null($propertyCity) && !is_string($propertyCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyCity)), __LINE__);
        }
        $this->propertyCity = $propertyCity;
        return $this;
    }
    /**
     * Get propertyCountry value
     * @return string|null
     */
    public function getPropertyCountry()
    {
        return $this->propertyCountry;
    }
    /**
     * Set propertyCountry value
     * @param string $propertyCountry
     * @return \StructType\Prospect
     */
    public function setPropertyCountry($propertyCountry = null)
    {
        // validation for constraint: string
        if (!is_null($propertyCountry) && !is_string($propertyCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyCountry)), __LINE__);
        }
        $this->propertyCountry = $propertyCountry;
        return $this;
    }
    /**
     * Get propertyNumberBathrooms value
     * @return float|null
     */
    public function getPropertyNumberBathrooms()
    {
        return $this->propertyNumberBathrooms;
    }
    /**
     * Set propertyNumberBathrooms value
     * @param float $propertyNumberBathrooms
     * @return \StructType\Prospect
     */
    public function setPropertyNumberBathrooms($propertyNumberBathrooms = null)
    {
        $this->propertyNumberBathrooms = $propertyNumberBathrooms;
        return $this;
    }
    /**
     * Get propertyNumberBedrooms value
     * @return int|null
     */
    public function getPropertyNumberBedrooms()
    {
        return $this->propertyNumberBedrooms;
    }
    /**
     * Set propertyNumberBedrooms value
     * @param int $propertyNumberBedrooms
     * @return \StructType\Prospect
     */
    public function setPropertyNumberBedrooms($propertyNumberBedrooms = null)
    {
        // validation for constraint: int
        if (!is_null($propertyNumberBedrooms) && !is_numeric($propertyNumberBedrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($propertyNumberBedrooms)), __LINE__);
        }
        $this->propertyNumberBedrooms = $propertyNumberBedrooms;
        return $this;
    }
    /**
     * Get propertyState value
     * @return string|null
     */
    public function getPropertyState()
    {
        return $this->propertyState;
    }
    /**
     * Set propertyState value
     * @param string $propertyState
     * @return \StructType\Prospect
     */
    public function setPropertyState($propertyState = null)
    {
        // validation for constraint: string
        if (!is_null($propertyState) && !is_string($propertyState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyState)), __LINE__);
        }
        $this->propertyState = $propertyState;
        return $this;
    }
    /**
     * Get propertyZip value
     * @return string|null
     */
    public function getPropertyZip()
    {
        return $this->propertyZip;
    }
    /**
     * Set propertyZip value
     * @param string $propertyZip
     * @return \StructType\Prospect
     */
    public function setPropertyZip($propertyZip = null)
    {
        // validation for constraint: string
        if (!is_null($propertyZip) && !is_string($propertyZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyZip)), __LINE__);
        }
        $this->propertyZip = $propertyZip;
        return $this;
    }
    /**
     * Get prospectID value
     * @return int|null
     */
    public function getProspectID()
    {
        return $this->prospectID;
    }
    /**
     * Set prospectID value
     * @param int $prospectID
     * @return \StructType\Prospect
     */
    public function setProspectID($prospectID = null)
    {
        // validation for constraint: int
        if (!is_null($prospectID) && !is_numeric($prospectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($prospectID)), __LINE__);
        }
        $this->prospectID = $prospectID;
        return $this;
    }
    /**
     * Get reasonForMoving value
     * @return string|null
     */
    public function getReasonForMoving()
    {
        return $this->reasonForMoving;
    }
    /**
     * Set reasonForMoving value
     * @param string $reasonForMoving
     * @return \StructType\Prospect
     */
    public function setReasonForMoving($reasonForMoving = null)
    {
        // validation for constraint: string
        if (!is_null($reasonForMoving) && !is_string($reasonForMoving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonForMoving)), __LINE__);
        }
        $this->reasonForMoving = $reasonForMoving;
        return $this;
    }
    /**
     * Get rent value
     * @return float|null
     */
    public function getRent()
    {
        return $this->rent;
    }
    /**
     * Set rent value
     * @param float $rent
     * @return \StructType\Prospect
     */
    public function setRent($rent = null)
    {
        $this->rent = $rent;
        return $this;
    }
    /**
     * Get rentMax value
     * @return float|null
     */
    public function getRentMax()
    {
        return $this->rentMax;
    }
    /**
     * Set rentMax value
     * @param float $rentMax
     * @return \StructType\Prospect
     */
    public function setRentMax($rentMax = null)
    {
        $this->rentMax = $rentMax;
        return $this;
    }
    /**
     * Get rentMin value
     * @return float|null
     */
    public function getRentMin()
    {
        return $this->rentMin;
    }
    /**
     * Set rentMin value
     * @param float $rentMin
     * @return \StructType\Prospect
     */
    public function setRentMin($rentMin = null)
    {
        $this->rentMin = $rentMin;
        return $this;
    }
    /**
     * Get securityDeposit value
     * @return float|null
     */
    public function getSecurityDeposit()
    {
        return $this->securityDeposit;
    }
    /**
     * Set securityDeposit value
     * @param float $securityDeposit
     * @return \StructType\Prospect
     */
    public function setSecurityDeposit($securityDeposit = null)
    {
        $this->securityDeposit = $securityDeposit;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \StructType\Prospect
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get stateDesired value
     * @return string|null
     */
    public function getStateDesired()
    {
        return $this->stateDesired;
    }
    /**
     * Set stateDesired value
     * @param string $stateDesired
     * @return \StructType\Prospect
     */
    public function setStateDesired($stateDesired = null)
    {
        // validation for constraint: string
        if (!is_null($stateDesired) && !is_string($stateDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateDesired)), __LINE__);
        }
        $this->stateDesired = $stateDesired;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \StructType\Prospect
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemID value
     * @return int|null
     */
    public function getSystemID()
    {
        return $this->systemID;
    }
    /**
     * Set systemID value
     * @param int $systemID
     * @return \StructType\Prospect
     */
    public function setSystemID($systemID = null)
    {
        // validation for constraint: int
        if (!is_null($systemID) && !is_numeric($systemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($systemID)), __LINE__);
        }
        $this->systemID = $systemID;
        return $this;
    }
    /**
     * Get timeAtCurrentResidence value
     * @return string|null
     */
    public function getTimeAtCurrentResidence()
    {
        return $this->timeAtCurrentResidence;
    }
    /**
     * Set timeAtCurrentResidence value
     * @param string $timeAtCurrentResidence
     * @return \StructType\Prospect
     */
    public function setTimeAtCurrentResidence($timeAtCurrentResidence = null)
    {
        // validation for constraint: string
        if (!is_null($timeAtCurrentResidence) && !is_string($timeAtCurrentResidence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeAtCurrentResidence)), __LINE__);
        }
        $this->timeAtCurrentResidence = $timeAtCurrentResidence;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\Prospect
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get typeOfInquiry value
     * @return string|null
     */
    public function getTypeOfInquiry()
    {
        return $this->typeOfInquiry;
    }
    /**
     * Set typeOfInquiry value
     * @param string $typeOfInquiry
     * @return \StructType\Prospect
     */
    public function setTypeOfInquiry($typeOfInquiry = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfInquiry) && !is_string($typeOfInquiry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfInquiry)), __LINE__);
        }
        $this->typeOfInquiry = $typeOfInquiry;
        return $this;
    }
    /**
     * Get unitDesired value
     * @return string|null
     */
    public function getUnitDesired()
    {
        return $this->unitDesired;
    }
    /**
     * Set unitDesired value
     * @param string $unitDesired
     * @return \StructType\Prospect
     */
    public function setUnitDesired($unitDesired = null)
    {
        // validation for constraint: string
        if (!is_null($unitDesired) && !is_string($unitDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitDesired)), __LINE__);
        }
        $this->unitDesired = $unitDesired;
        return $this;
    }
    /**
     * Get unitTypeDesired value
     * @return string|null
     */
    public function getUnitTypeDesired()
    {
        return $this->unitTypeDesired;
    }
    /**
     * Set unitTypeDesired value
     * @param string $unitTypeDesired
     * @return \StructType\Prospect
     */
    public function setUnitTypeDesired($unitTypeDesired = null)
    {
        // validation for constraint: string
        if (!is_null($unitTypeDesired) && !is_string($unitTypeDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitTypeDesired)), __LINE__);
        }
        $this->unitTypeDesired = $unitTypeDesired;
        return $this;
    }
    /**
     * Get zipDesired value
     * @return string|null
     */
    public function getZipDesired()
    {
        return $this->zipDesired;
    }
    /**
     * Set zipDesired value
     * @param string $zipDesired
     * @return \StructType\Prospect
     */
    public function setZipDesired($zipDesired = null)
    {
        // validation for constraint: string
        if (!is_null($zipDesired) && !is_string($zipDesired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipDesired)), __LINE__);
        }
        $this->zipDesired = $zipDesired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Prospect
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
