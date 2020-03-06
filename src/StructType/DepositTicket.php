<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositTicket StructType
 * @subpackage Structs
 */
class DepositTicket extends PWObject
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bankAccount;
    /**
     * The cleared
     * @var bool
     */
    public $cleared;
    /**
     * The closedBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $closedBy;
    /**
     * The createdBy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdBy;
    /**
     * The createdDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdDate;
    /**
     * The depositName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositName;
    /**
     * The depositedDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $depositedDate;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The leasePayments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:LeasePayment[]
     * - ref: soapenc:arrayType
     * @var \StructType\LeasePayment[]
     */
    public $leasePayments;
    /**
     * The ownerContributions
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:OwnerContribution[]
     * - ref: soapenc:arrayType
     * @var \StructType\OwnerContribution[]
     */
    public $ownerContributions;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * Constructor method for DepositTicket
     * @uses DepositTicket::setBankAccount()
     * @uses DepositTicket::setCleared()
     * @uses DepositTicket::setClosedBy()
     * @uses DepositTicket::setCreatedBy()
     * @uses DepositTicket::setCreatedDate()
     * @uses DepositTicket::setDepositName()
     * @uses DepositTicket::setDepositedDate()
     * @uses DepositTicket::setDescription()
     * @uses DepositTicket::setLeasePayments()
     * @uses DepositTicket::setOwnerContributions()
     * @uses DepositTicket::setStatus()
     * @param \StructType\Bank $bankAccount
     * @param bool $cleared
     * @param string $closedBy
     * @param string $createdBy
     * @param string $createdDate
     * @param string $depositName
     * @param string $depositedDate
     * @param string $description
     * @param \StructType\LeasePayment[] $leasePayments
     * @param \StructType\OwnerContribution[] $ownerContributions
     * @param string $status
     */
    public function __construct(\StructType\Bank $bankAccount = null, $cleared = null, $closedBy = null, $createdBy = null, $createdDate = null, $depositName = null, $depositedDate = null, $description = null, array $leasePayments = array(), array $ownerContributions = array(), $status = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setCleared($cleared)
            ->setClosedBy($closedBy)
            ->setCreatedBy($createdBy)
            ->setCreatedDate($createdDate)
            ->setDepositName($depositName)
            ->setDepositedDate($depositedDate)
            ->setDescription($description)
            ->setLeasePayments($leasePayments)
            ->setOwnerContributions($ownerContributions)
            ->setStatus($status);
    }
    /**
     * Get bankAccount value
     * @return \StructType\Bank|null
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }
    /**
     * Set bankAccount value
     * @param \StructType\Bank $bankAccount
     * @return \StructType\DepositTicket
     */
    public function setBankAccount(\StructType\Bank $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }
    /**
     * Get cleared value
     * @return bool|null
     */
    public function getCleared()
    {
        return $this->cleared;
    }
    /**
     * Set cleared value
     * @param bool $cleared
     * @return \StructType\DepositTicket
     */
    public function setCleared($cleared = null)
    {
        // validation for constraint: boolean
        if (!is_null($cleared) && !is_bool($cleared)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cleared)), __LINE__);
        }
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * Get closedBy value
     * @return string|null
     */
    public function getClosedBy()
    {
        return $this->closedBy;
    }
    /**
     * Set closedBy value
     * @param string $closedBy
     * @return \StructType\DepositTicket
     */
    public function setClosedBy($closedBy = null)
    {
        // validation for constraint: string
        if (!is_null($closedBy) && !is_string($closedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closedBy)), __LINE__);
        }
        $this->closedBy = $closedBy;
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
     * @return \StructType\DepositTicket
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
     * @return \StructType\DepositTicket
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
     * Get depositName value
     * @return string|null
     */
    public function getDepositName()
    {
        return $this->depositName;
    }
    /**
     * Set depositName value
     * @param string $depositName
     * @return \StructType\DepositTicket
     */
    public function setDepositName($depositName = null)
    {
        // validation for constraint: string
        if (!is_null($depositName) && !is_string($depositName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositName)), __LINE__);
        }
        $this->depositName = $depositName;
        return $this;
    }
    /**
     * Get depositedDate value
     * @return string|null
     */
    public function getDepositedDate()
    {
        return $this->depositedDate;
    }
    /**
     * Set depositedDate value
     * @param string $depositedDate
     * @return \StructType\DepositTicket
     */
    public function setDepositedDate($depositedDate = null)
    {
        // validation for constraint: string
        if (!is_null($depositedDate) && !is_string($depositedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositedDate)), __LINE__);
        }
        $this->depositedDate = $depositedDate;
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
     * @return \StructType\DepositTicket
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
     * Get leasePayments value
     * @return \StructType\LeasePayment[]|null
     */
    public function getLeasePayments()
    {
        return $this->leasePayments;
    }
    /**
     * Set leasePayments value
     * @throws \InvalidArgumentException
     * @param \StructType\LeasePayment[] $leasePayments
     * @return \StructType\DepositTicket
     */
    public function setLeasePayments(array $leasePayments = array())
    {
        foreach ($leasePayments as $depositTicketLeasePaymentsItem) {
            // validation for constraint: itemType
            if (!$depositTicketLeasePaymentsItem instanceof \StructType\LeasePayment) {
                throw new \InvalidArgumentException(sprintf('The leasePayments property can only contain items of \StructType\LeasePayment, "%s" given', is_object($depositTicketLeasePaymentsItem) ? get_class($depositTicketLeasePaymentsItem) : gettype($depositTicketLeasePaymentsItem)), __LINE__);
            }
        }
        $this->leasePayments = $leasePayments;
        return $this;
    }
    /**
     * Add item to leasePayments value
     * @throws \InvalidArgumentException
     * @param \StructType\LeasePayment $item
     * @return \StructType\DepositTicket
     */
    public function addToLeasePayments(\StructType\LeasePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LeasePayment) {
            throw new \InvalidArgumentException(sprintf('The leasePayments property can only contain items of \StructType\LeasePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->leasePayments[] = $item;
        return $this;
    }
    /**
     * Get ownerContributions value
     * @return \StructType\OwnerContribution[]|null
     */
    public function getOwnerContributions()
    {
        return $this->ownerContributions;
    }
    /**
     * Set ownerContributions value
     * @throws \InvalidArgumentException
     * @param \StructType\OwnerContribution[] $ownerContributions
     * @return \StructType\DepositTicket
     */
    public function setOwnerContributions(array $ownerContributions = array())
    {
        foreach ($ownerContributions as $depositTicketOwnerContributionsItem) {
            // validation for constraint: itemType
            if (!$depositTicketOwnerContributionsItem instanceof \StructType\OwnerContribution) {
                throw new \InvalidArgumentException(sprintf('The ownerContributions property can only contain items of \StructType\OwnerContribution, "%s" given', is_object($depositTicketOwnerContributionsItem) ? get_class($depositTicketOwnerContributionsItem) : gettype($depositTicketOwnerContributionsItem)), __LINE__);
            }
        }
        $this->ownerContributions = $ownerContributions;
        return $this;
    }
    /**
     * Add item to ownerContributions value
     * @throws \InvalidArgumentException
     * @param \StructType\OwnerContribution $item
     * @return \StructType\DepositTicket
     */
    public function addToOwnerContributions(\StructType\OwnerContribution $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OwnerContribution) {
            throw new \InvalidArgumentException(sprintf('The ownerContributions property can only contain items of \StructType\OwnerContribution, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ownerContributions[] = $item;
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
     * @return \StructType\DepositTicket
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DepositTicket
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
