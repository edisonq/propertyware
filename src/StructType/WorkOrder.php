<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkOrder StructType
 * @subpackage Structs
 */
class WorkOrder extends AbstractDocumentHolder
{
    /**
     * The approvalComment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $approvalComment;
    /**
     * The approved
     * @var bool
     */
    public $approved;
    /**
     * The approvedBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\User
     */
    public $approvedBy;
    /**
     * The approvedDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $approvedDate;
    /**
     * The authorizedToEnter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $authorizedToEnter;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The closingComments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $closingComments;
    /**
     * The completedDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $completedDate;
    /**
     * The costEstimate
     * @var float
     */
    public $costEstimate;
    /**
     * The createdDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdDate;
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
     * The dateToEnter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateToEnter;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The hourEstimate
     * @var float
     */
    public $hourEstimate;
    /**
     * The lease
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Lease
     */
    public $lease;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The number
     * @var int
     */
    public $number;
    /**
     * The owner
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\User
     */
    public $owner;
    /**
     * The ownerFullName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ownerFullName;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Portfolio
     */
    public $portfolio;
    /**
     * The priority
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $priority;
    /**
     * The priorityAsInt
     * @var int
     */
    public $priorityAsInt;
    /**
     * The requestedBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $requestedBy;
    /**
     * The requestedByContact
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Contact
     */
    public $requestedByContact;
    /**
     * The requiredMaterials
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $requiredMaterials;
    /**
     * The scheduledEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $scheduledEndDate;
    /**
     * The serviceRequestBuilding
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestBuilding;
    /**
     * The serviceRequestCompanyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestCompanyName;
    /**
     * The serviceRequestContactEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestContactEmail;
    /**
     * The serviceRequestContactName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestContactName;
    /**
     * The serviceRequestContactPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestContactPhone;
    /**
     * The serviceRequestContactPhoneType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestContactPhoneType;
    /**
     * The serviceRequestUnit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serviceRequestUnit;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $source;
    /**
     * The specificLocation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $specificLocation;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The totalCost
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $totalCost;
    /**
     * The totalHourWorked
     * @var float
     */
    public $totalHourWorked;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The unitIDs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:long[]
     * - ref: soapenc:arrayType
     * @var int[]
     */
    public $unitIDs;
    /**
     * The vendorIDs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:long[]
     * - ref: soapenc:arrayType
     * @var int[]
     */
    public $vendorIDs;
    /**
     * Constructor method for WorkOrder
     * @uses WorkOrder::setApprovalComment()
     * @uses WorkOrder::setApproved()
     * @uses WorkOrder::setApprovedBy()
     * @uses WorkOrder::setApprovedDate()
     * @uses WorkOrder::setAuthorizedToEnter()
     * @uses WorkOrder::setBuilding()
     * @uses WorkOrder::setCategory()
     * @uses WorkOrder::setClosingComments()
     * @uses WorkOrder::setCompletedDate()
     * @uses WorkOrder::setCostEstimate()
     * @uses WorkOrder::setCreatedDate()
     * @uses WorkOrder::setCustomFields()
     * @uses WorkOrder::setDateToEnter()
     * @uses WorkOrder::setDescription()
     * @uses WorkOrder::setHourEstimate()
     * @uses WorkOrder::setLease()
     * @uses WorkOrder::setLocation()
     * @uses WorkOrder::setNumber()
     * @uses WorkOrder::setOwner()
     * @uses WorkOrder::setOwnerFullName()
     * @uses WorkOrder::setPortfolio()
     * @uses WorkOrder::setPriority()
     * @uses WorkOrder::setPriorityAsInt()
     * @uses WorkOrder::setRequestedBy()
     * @uses WorkOrder::setRequestedByContact()
     * @uses WorkOrder::setRequiredMaterials()
     * @uses WorkOrder::setScheduledEndDate()
     * @uses WorkOrder::setServiceRequestBuilding()
     * @uses WorkOrder::setServiceRequestCompanyName()
     * @uses WorkOrder::setServiceRequestContactEmail()
     * @uses WorkOrder::setServiceRequestContactName()
     * @uses WorkOrder::setServiceRequestContactPhone()
     * @uses WorkOrder::setServiceRequestContactPhoneType()
     * @uses WorkOrder::setServiceRequestUnit()
     * @uses WorkOrder::setSource()
     * @uses WorkOrder::setSpecificLocation()
     * @uses WorkOrder::setStartDate()
     * @uses WorkOrder::setStatus()
     * @uses WorkOrder::setTotalCost()
     * @uses WorkOrder::setTotalHourWorked()
     * @uses WorkOrder::setType()
     * @uses WorkOrder::setUnitIDs()
     * @uses WorkOrder::setVendorIDs()
     * @param string $approvalComment
     * @param bool $approved
     * @param \StructType\User $approvedBy
     * @param string $approvedDate
     * @param string $authorizedToEnter
     * @param \StructType\Building $building
     * @param string $category
     * @param string $closingComments
     * @param string $completedDate
     * @param float $costEstimate
     * @param string $createdDate
     * @param \StructType\CustomField[] $customFields
     * @param string $dateToEnter
     * @param string $description
     * @param float $hourEstimate
     * @param \StructType\Lease $lease
     * @param string $location
     * @param int $number
     * @param \StructType\User $owner
     * @param string $ownerFullName
     * @param \StructType\Portfolio $portfolio
     * @param string $priority
     * @param int $priorityAsInt
     * @param string $requestedBy
     * @param \StructType\Contact $requestedByContact
     * @param string $requiredMaterials
     * @param string $scheduledEndDate
     * @param string $serviceRequestBuilding
     * @param string $serviceRequestCompanyName
     * @param string $serviceRequestContactEmail
     * @param string $serviceRequestContactName
     * @param string $serviceRequestContactPhone
     * @param string $serviceRequestContactPhoneType
     * @param string $serviceRequestUnit
     * @param string $source
     * @param string $specificLocation
     * @param string $startDate
     * @param string $status
     * @param float $totalCost
     * @param float $totalHourWorked
     * @param string $type
     * @param int[] $unitIDs
     * @param int[] $vendorIDs
     */
    public function __construct($approvalComment = null, $approved = null, \StructType\User $approvedBy = null, $approvedDate = null, $authorizedToEnter = null, \StructType\Building $building = null, $category = null, $closingComments = null, $completedDate = null, $costEstimate = null, $createdDate = null, array $customFields = array(), $dateToEnter = null, $description = null, $hourEstimate = null, \StructType\Lease $lease = null, $location = null, $number = null, \StructType\User $owner = null, $ownerFullName = null, \StructType\Portfolio $portfolio = null, $priority = null, $priorityAsInt = null, $requestedBy = null, \StructType\Contact $requestedByContact = null, $requiredMaterials = null, $scheduledEndDate = null, $serviceRequestBuilding = null, $serviceRequestCompanyName = null, $serviceRequestContactEmail = null, $serviceRequestContactName = null, $serviceRequestContactPhone = null, $serviceRequestContactPhoneType = null, $serviceRequestUnit = null, $source = null, $specificLocation = null, $startDate = null, $status = null, $totalCost = null, $totalHourWorked = null, $type = null, array $unitIDs = array(), array $vendorIDs = array())
    {
        $this
            ->setApprovalComment($approvalComment)
            ->setApproved($approved)
            ->setApprovedBy($approvedBy)
            ->setApprovedDate($approvedDate)
            ->setAuthorizedToEnter($authorizedToEnter)
            ->setBuilding($building)
            ->setCategory($category)
            ->setClosingComments($closingComments)
            ->setCompletedDate($completedDate)
            ->setCostEstimate($costEstimate)
            ->setCreatedDate($createdDate)
            ->setCustomFields($customFields)
            ->setDateToEnter($dateToEnter)
            ->setDescription($description)
            ->setHourEstimate($hourEstimate)
            ->setLease($lease)
            ->setLocation($location)
            ->setNumber($number)
            ->setOwner($owner)
            ->setOwnerFullName($ownerFullName)
            ->setPortfolio($portfolio)
            ->setPriority($priority)
            ->setPriorityAsInt($priorityAsInt)
            ->setRequestedBy($requestedBy)
            ->setRequestedByContact($requestedByContact)
            ->setRequiredMaterials($requiredMaterials)
            ->setScheduledEndDate($scheduledEndDate)
            ->setServiceRequestBuilding($serviceRequestBuilding)
            ->setServiceRequestCompanyName($serviceRequestCompanyName)
            ->setServiceRequestContactEmail($serviceRequestContactEmail)
            ->setServiceRequestContactName($serviceRequestContactName)
            ->setServiceRequestContactPhone($serviceRequestContactPhone)
            ->setServiceRequestContactPhoneType($serviceRequestContactPhoneType)
            ->setServiceRequestUnit($serviceRequestUnit)
            ->setSource($source)
            ->setSpecificLocation($specificLocation)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setTotalCost($totalCost)
            ->setTotalHourWorked($totalHourWorked)
            ->setType($type)
            ->setUnitIDs($unitIDs)
            ->setVendorIDs($vendorIDs);
    }
    /**
     * Get approvalComment value
     * @return string|null
     */
    public function getApprovalComment()
    {
        return $this->approvalComment;
    }
    /**
     * Set approvalComment value
     * @param string $approvalComment
     * @return \StructType\WorkOrder
     */
    public function setApprovalComment($approvalComment = null)
    {
        // validation for constraint: string
        if (!is_null($approvalComment) && !is_string($approvalComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvalComment)), __LINE__);
        }
        $this->approvalComment = $approvalComment;
        return $this;
    }
    /**
     * Get approved value
     * @return bool|null
     */
    public function getApproved()
    {
        return $this->approved;
    }
    /**
     * Set approved value
     * @param bool $approved
     * @return \StructType\WorkOrder
     */
    public function setApproved($approved = null)
    {
        // validation for constraint: boolean
        if (!is_null($approved) && !is_bool($approved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($approved)), __LINE__);
        }
        $this->approved = $approved;
        return $this;
    }
    /**
     * Get approvedBy value
     * @return \StructType\User|null
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }
    /**
     * Set approvedBy value
     * @param \StructType\User $approvedBy
     * @return \StructType\WorkOrder
     */
    public function setApprovedBy(\StructType\User $approvedBy = null)
    {
        $this->approvedBy = $approvedBy;
        return $this;
    }
    /**
     * Get approvedDate value
     * @return string|null
     */
    public function getApprovedDate()
    {
        return $this->approvedDate;
    }
    /**
     * Set approvedDate value
     * @param string $approvedDate
     * @return \StructType\WorkOrder
     */
    public function setApprovedDate($approvedDate = null)
    {
        // validation for constraint: string
        if (!is_null($approvedDate) && !is_string($approvedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvedDate)), __LINE__);
        }
        $this->approvedDate = $approvedDate;
        return $this;
    }
    /**
     * Get authorizedToEnter value
     * @return string|null
     */
    public function getAuthorizedToEnter()
    {
        return $this->authorizedToEnter;
    }
    /**
     * Set authorizedToEnter value
     * @param string $authorizedToEnter
     * @return \StructType\WorkOrder
     */
    public function setAuthorizedToEnter($authorizedToEnter = null)
    {
        // validation for constraint: string
        if (!is_null($authorizedToEnter) && !is_string($authorizedToEnter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizedToEnter)), __LINE__);
        }
        $this->authorizedToEnter = $authorizedToEnter;
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
     * @return \StructType\WorkOrder
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \StructType\WorkOrder
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get closingComments value
     * @return string|null
     */
    public function getClosingComments()
    {
        return $this->closingComments;
    }
    /**
     * Set closingComments value
     * @param string $closingComments
     * @return \StructType\WorkOrder
     */
    public function setClosingComments($closingComments = null)
    {
        // validation for constraint: string
        if (!is_null($closingComments) && !is_string($closingComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closingComments)), __LINE__);
        }
        $this->closingComments = $closingComments;
        return $this;
    }
    /**
     * Get completedDate value
     * @return string|null
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }
    /**
     * Set completedDate value
     * @param string $completedDate
     * @return \StructType\WorkOrder
     */
    public function setCompletedDate($completedDate = null)
    {
        // validation for constraint: string
        if (!is_null($completedDate) && !is_string($completedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($completedDate)), __LINE__);
        }
        $this->completedDate = $completedDate;
        return $this;
    }
    /**
     * Get costEstimate value
     * @return float|null
     */
    public function getCostEstimate()
    {
        return $this->costEstimate;
    }
    /**
     * Set costEstimate value
     * @param float $costEstimate
     * @return \StructType\WorkOrder
     */
    public function setCostEstimate($costEstimate = null)
    {
        $this->costEstimate = $costEstimate;
        return $this;
    }
    /**
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \StructType\WorkOrder
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
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
     * @return \StructType\WorkOrder
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $workOrderCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$workOrderCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($workOrderCustomFieldsItem) ? get_class($workOrderCustomFieldsItem) : gettype($workOrderCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\WorkOrder
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
     * Get dateToEnter value
     * @return string|null
     */
    public function getDateToEnter()
    {
        return $this->dateToEnter;
    }
    /**
     * Set dateToEnter value
     * @param string $dateToEnter
     * @return \StructType\WorkOrder
     */
    public function setDateToEnter($dateToEnter = null)
    {
        // validation for constraint: string
        if (!is_null($dateToEnter) && !is_string($dateToEnter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateToEnter)), __LINE__);
        }
        $this->dateToEnter = $dateToEnter;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\WorkOrder
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get hourEstimate value
     * @return float|null
     */
    public function getHourEstimate()
    {
        return $this->hourEstimate;
    }
    /**
     * Set hourEstimate value
     * @param float $hourEstimate
     * @return \StructType\WorkOrder
     */
    public function setHourEstimate($hourEstimate = null)
    {
        $this->hourEstimate = $hourEstimate;
        return $this;
    }
    /**
     * Get lease value
     * @return \StructType\Lease|null
     */
    public function getLease()
    {
        return $this->lease;
    }
    /**
     * Set lease value
     * @param \StructType\Lease $lease
     * @return \StructType\WorkOrder
     */
    public function setLease(\StructType\Lease $lease = null)
    {
        $this->lease = $lease;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\WorkOrder
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \StructType\WorkOrder
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get owner value
     * @return \StructType\User|null
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param \StructType\User $owner
     * @return \StructType\WorkOrder
     */
    public function setOwner(\StructType\User $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * Get ownerFullName value
     * @return string|null
     */
    public function getOwnerFullName()
    {
        return $this->ownerFullName;
    }
    /**
     * Set ownerFullName value
     * @param string $ownerFullName
     * @return \StructType\WorkOrder
     */
    public function setOwnerFullName($ownerFullName = null)
    {
        // validation for constraint: string
        if (!is_null($ownerFullName) && !is_string($ownerFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ownerFullName)), __LINE__);
        }
        $this->ownerFullName = $ownerFullName;
        return $this;
    }
    /**
     * Get portfolio value
     * @return \StructType\Portfolio|null
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
    /**
     * Set portfolio value
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\WorkOrder
     */
    public function setPortfolio(\StructType\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
        return $this;
    }
    /**
     * Get priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param string $priority
     * @return \StructType\WorkOrder
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Get priorityAsInt value
     * @return int|null
     */
    public function getPriorityAsInt()
    {
        return $this->priorityAsInt;
    }
    /**
     * Set priorityAsInt value
     * @param int $priorityAsInt
     * @return \StructType\WorkOrder
     */
    public function setPriorityAsInt($priorityAsInt = null)
    {
        // validation for constraint: int
        if (!is_null($priorityAsInt) && !is_numeric($priorityAsInt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priorityAsInt)), __LINE__);
        }
        $this->priorityAsInt = $priorityAsInt;
        return $this;
    }
    /**
     * Get requestedBy value
     * @return string|null
     */
    public function getRequestedBy()
    {
        return $this->requestedBy;
    }
    /**
     * Set requestedBy value
     * @param string $requestedBy
     * @return \StructType\WorkOrder
     */
    public function setRequestedBy($requestedBy = null)
    {
        // validation for constraint: string
        if (!is_null($requestedBy) && !is_string($requestedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedBy)), __LINE__);
        }
        $this->requestedBy = $requestedBy;
        return $this;
    }
    /**
     * Get requestedByContact value
     * @return \StructType\Contact|null
     */
    public function getRequestedByContact()
    {
        return $this->requestedByContact;
    }
    /**
     * Set requestedByContact value
     * @param \StructType\Contact $requestedByContact
     * @return \StructType\WorkOrder
     */
    public function setRequestedByContact(\StructType\Contact $requestedByContact = null)
    {
        $this->requestedByContact = $requestedByContact;
        return $this;
    }
    /**
     * Get requiredMaterials value
     * @return string|null
     */
    public function getRequiredMaterials()
    {
        return $this->requiredMaterials;
    }
    /**
     * Set requiredMaterials value
     * @param string $requiredMaterials
     * @return \StructType\WorkOrder
     */
    public function setRequiredMaterials($requiredMaterials = null)
    {
        // validation for constraint: string
        if (!is_null($requiredMaterials) && !is_string($requiredMaterials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requiredMaterials)), __LINE__);
        }
        $this->requiredMaterials = $requiredMaterials;
        return $this;
    }
    /**
     * Get scheduledEndDate value
     * @return string|null
     */
    public function getScheduledEndDate()
    {
        return $this->scheduledEndDate;
    }
    /**
     * Set scheduledEndDate value
     * @param string $scheduledEndDate
     * @return \StructType\WorkOrder
     */
    public function setScheduledEndDate($scheduledEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledEndDate) && !is_string($scheduledEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduledEndDate)), __LINE__);
        }
        $this->scheduledEndDate = $scheduledEndDate;
        return $this;
    }
    /**
     * Get serviceRequestBuilding value
     * @return string|null
     */
    public function getServiceRequestBuilding()
    {
        return $this->serviceRequestBuilding;
    }
    /**
     * Set serviceRequestBuilding value
     * @param string $serviceRequestBuilding
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestBuilding($serviceRequestBuilding = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestBuilding) && !is_string($serviceRequestBuilding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestBuilding)), __LINE__);
        }
        $this->serviceRequestBuilding = $serviceRequestBuilding;
        return $this;
    }
    /**
     * Get serviceRequestCompanyName value
     * @return string|null
     */
    public function getServiceRequestCompanyName()
    {
        return $this->serviceRequestCompanyName;
    }
    /**
     * Set serviceRequestCompanyName value
     * @param string $serviceRequestCompanyName
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestCompanyName($serviceRequestCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestCompanyName) && !is_string($serviceRequestCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestCompanyName)), __LINE__);
        }
        $this->serviceRequestCompanyName = $serviceRequestCompanyName;
        return $this;
    }
    /**
     * Get serviceRequestContactEmail value
     * @return string|null
     */
    public function getServiceRequestContactEmail()
    {
        return $this->serviceRequestContactEmail;
    }
    /**
     * Set serviceRequestContactEmail value
     * @param string $serviceRequestContactEmail
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestContactEmail($serviceRequestContactEmail = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestContactEmail) && !is_string($serviceRequestContactEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestContactEmail)), __LINE__);
        }
        $this->serviceRequestContactEmail = $serviceRequestContactEmail;
        return $this;
    }
    /**
     * Get serviceRequestContactName value
     * @return string|null
     */
    public function getServiceRequestContactName()
    {
        return $this->serviceRequestContactName;
    }
    /**
     * Set serviceRequestContactName value
     * @param string $serviceRequestContactName
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestContactName($serviceRequestContactName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestContactName) && !is_string($serviceRequestContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestContactName)), __LINE__);
        }
        $this->serviceRequestContactName = $serviceRequestContactName;
        return $this;
    }
    /**
     * Get serviceRequestContactPhone value
     * @return string|null
     */
    public function getServiceRequestContactPhone()
    {
        return $this->serviceRequestContactPhone;
    }
    /**
     * Set serviceRequestContactPhone value
     * @param string $serviceRequestContactPhone
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestContactPhone($serviceRequestContactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestContactPhone) && !is_string($serviceRequestContactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestContactPhone)), __LINE__);
        }
        $this->serviceRequestContactPhone = $serviceRequestContactPhone;
        return $this;
    }
    /**
     * Get serviceRequestContactPhoneType value
     * @return string|null
     */
    public function getServiceRequestContactPhoneType()
    {
        return $this->serviceRequestContactPhoneType;
    }
    /**
     * Set serviceRequestContactPhoneType value
     * @param string $serviceRequestContactPhoneType
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestContactPhoneType($serviceRequestContactPhoneType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestContactPhoneType) && !is_string($serviceRequestContactPhoneType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestContactPhoneType)), __LINE__);
        }
        $this->serviceRequestContactPhoneType = $serviceRequestContactPhoneType;
        return $this;
    }
    /**
     * Get serviceRequestUnit value
     * @return string|null
     */
    public function getServiceRequestUnit()
    {
        return $this->serviceRequestUnit;
    }
    /**
     * Set serviceRequestUnit value
     * @param string $serviceRequestUnit
     * @return \StructType\WorkOrder
     */
    public function setServiceRequestUnit($serviceRequestUnit = null)
    {
        // validation for constraint: string
        if (!is_null($serviceRequestUnit) && !is_string($serviceRequestUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceRequestUnit)), __LINE__);
        }
        $this->serviceRequestUnit = $serviceRequestUnit;
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
     * @return \StructType\WorkOrder
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
     * Get specificLocation value
     * @return string|null
     */
    public function getSpecificLocation()
    {
        return $this->specificLocation;
    }
    /**
     * Set specificLocation value
     * @param string $specificLocation
     * @return \StructType\WorkOrder
     */
    public function setSpecificLocation($specificLocation = null)
    {
        // validation for constraint: string
        if (!is_null($specificLocation) && !is_string($specificLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specificLocation)), __LINE__);
        }
        $this->specificLocation = $specificLocation;
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
     * @return \StructType\WorkOrder
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
     * @return \StructType\WorkOrder
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
     * Get totalCost value
     * @return float|null
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }
    /**
     * Set totalCost value
     * @param float $totalCost
     * @return \StructType\WorkOrder
     */
    public function setTotalCost($totalCost = null)
    {
        $this->totalCost = $totalCost;
        return $this;
    }
    /**
     * Get totalHourWorked value
     * @return float|null
     */
    public function getTotalHourWorked()
    {
        return $this->totalHourWorked;
    }
    /**
     * Set totalHourWorked value
     * @param float $totalHourWorked
     * @return \StructType\WorkOrder
     */
    public function setTotalHourWorked($totalHourWorked = null)
    {
        $this->totalHourWorked = $totalHourWorked;
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
     * @return \StructType\WorkOrder
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
     * Get unitIDs value
     * @return int[]|null
     */
    public function getUnitIDs()
    {
        return $this->unitIDs;
    }
    /**
     * Set unitIDs value
     * @throws \InvalidArgumentException
     * @param int[] $unitIDs
     * @return \StructType\WorkOrder
     */
    public function setUnitIDs(array $unitIDs = array())
    {
        foreach ($unitIDs as $workOrderUnitIDsItem) {
            // validation for constraint: itemType
            if (!is_numeric($workOrderUnitIDsItem)) {
                throw new \InvalidArgumentException(sprintf('The unitIDs property can only contain items of long, "%s" given', is_object($workOrderUnitIDsItem) ? get_class($workOrderUnitIDsItem) : gettype($workOrderUnitIDsItem)), __LINE__);
            }
        }
        $this->unitIDs = $unitIDs;
        return $this;
    }
    /**
     * Add item to unitIDs value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\WorkOrder
     */
    public function addToUnitIDs($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The unitIDs property can only contain items of long, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->unitIDs[] = $item;
        return $this;
    }
    /**
     * Get vendorIDs value
     * @return int[]|null
     */
    public function getVendorIDs()
    {
        return $this->vendorIDs;
    }
    /**
     * Set vendorIDs value
     * @throws \InvalidArgumentException
     * @param int[] $vendorIDs
     * @return \StructType\WorkOrder
     */
    public function setVendorIDs(array $vendorIDs = array())
    {
        foreach ($vendorIDs as $workOrderVendorIDsItem) {
            // validation for constraint: itemType
            if (!is_numeric($workOrderVendorIDsItem)) {
                throw new \InvalidArgumentException(sprintf('The vendorIDs property can only contain items of long, "%s" given', is_object($workOrderVendorIDsItem) ? get_class($workOrderVendorIDsItem) : gettype($workOrderVendorIDsItem)), __LINE__);
            }
        }
        $this->vendorIDs = $vendorIDs;
        return $this;
    }
    /**
     * Add item to vendorIDs value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\WorkOrder
     */
    public function addToVendorIDs($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The vendorIDs property can only contain items of long, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->vendorIDs[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkOrder
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
