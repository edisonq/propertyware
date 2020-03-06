<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Building StructType
 * @subpackage Structs
 */
class Building extends Unit
{
    /**
     * The defaultBankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $defaultBankAccount;
    /**
     * The defaultSecurityDepositAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $defaultSecurityDepositAccount;
    /**
     * The insuranceCarriers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:BuildingInsuranceCarrier[]
     * - ref: soapenc:arrayType
     * @var \StructType\BuildingInsuranceCarrier[]
     */
    public $insuranceCarriers;
    /**
     * The managementContractEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $managementContractEndDate;
    /**
     * The managementContractStartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $managementContractStartDate;
    /**
     * The managementFeeType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $managementFeeType;
    /**
     * The managementFlatFee
     * @var float
     */
    public $managementFlatFee;
    /**
     * The managmentFees
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ManagementFee[]
     * - ref: soapenc:arrayType
     * @var \StructType\ManagementFee[]
     */
    public $managmentFees;
    /**
     * The propertyManagerList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $propertyManagerList;
    /**
     * The rentable
     * @var bool
     */
    public $rentable;
    /**
     * The units
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $units;
    /**
     * The yearBuilt
     * @var int
     */
    public $yearBuilt;
    /**
     * Constructor method for Building
     * @uses Building::setDefaultBankAccount()
     * @uses Building::setDefaultSecurityDepositAccount()
     * @uses Building::setInsuranceCarriers()
     * @uses Building::setManagementContractEndDate()
     * @uses Building::setManagementContractStartDate()
     * @uses Building::setManagementFeeType()
     * @uses Building::setManagementFlatFee()
     * @uses Building::setManagmentFees()
     * @uses Building::setPropertyManagerList()
     * @uses Building::setRentable()
     * @uses Building::setUnits()
     * @uses Building::setYearBuilt()
     * @param \StructType\Bank $defaultBankAccount
     * @param \StructType\Bank $defaultSecurityDepositAccount
     * @param \StructType\BuildingInsuranceCarrier[] $insuranceCarriers
     * @param string $managementContractEndDate
     * @param string $managementContractStartDate
     * @param string $managementFeeType
     * @param float $managementFlatFee
     * @param \StructType\ManagementFee[] $managmentFees
     * @param mixed[] $propertyManagerList
     * @param bool $rentable
     * @param mixed[] $units
     * @param int $yearBuilt
     */
    public function __construct(\StructType\Bank $defaultBankAccount = null, \StructType\Bank $defaultSecurityDepositAccount = null, array $insuranceCarriers = array(), $managementContractEndDate = null, $managementContractStartDate = null, $managementFeeType = null, $managementFlatFee = null, array $managmentFees = array(), array $propertyManagerList = array(), $rentable = null, array $units = array(), $yearBuilt = null)
    {
        $this
            ->setDefaultBankAccount($defaultBankAccount)
            ->setDefaultSecurityDepositAccount($defaultSecurityDepositAccount)
            ->setInsuranceCarriers($insuranceCarriers)
            ->setManagementContractEndDate($managementContractEndDate)
            ->setManagementContractStartDate($managementContractStartDate)
            ->setManagementFeeType($managementFeeType)
            ->setManagementFlatFee($managementFlatFee)
            ->setManagmentFees($managmentFees)
            ->setPropertyManagerList($propertyManagerList)
            ->setRentable($rentable)
            ->setUnits($units)
            ->setYearBuilt($yearBuilt);
    }
    /**
     * Get defaultBankAccount value
     * @return \StructType\Bank|null
     */
    public function getDefaultBankAccount()
    {
        return $this->defaultBankAccount;
    }
    /**
     * Set defaultBankAccount value
     * @param \StructType\Bank $defaultBankAccount
     * @return \StructType\Building
     */
    public function setDefaultBankAccount(\StructType\Bank $defaultBankAccount = null)
    {
        $this->defaultBankAccount = $defaultBankAccount;
        return $this;
    }
    /**
     * Get defaultSecurityDepositAccount value
     * @return \StructType\Bank|null
     */
    public function getDefaultSecurityDepositAccount()
    {
        return $this->defaultSecurityDepositAccount;
    }
    /**
     * Set defaultSecurityDepositAccount value
     * @param \StructType\Bank $defaultSecurityDepositAccount
     * @return \StructType\Building
     */
    public function setDefaultSecurityDepositAccount(\StructType\Bank $defaultSecurityDepositAccount = null)
    {
        $this->defaultSecurityDepositAccount = $defaultSecurityDepositAccount;
        return $this;
    }
    /**
     * Get insuranceCarriers value
     * @return \StructType\BuildingInsuranceCarrier[]|null
     */
    public function getInsuranceCarriers()
    {
        return $this->insuranceCarriers;
    }
    /**
     * Set insuranceCarriers value
     * @throws \InvalidArgumentException
     * @param \StructType\BuildingInsuranceCarrier[] $insuranceCarriers
     * @return \StructType\Building
     */
    public function setInsuranceCarriers(array $insuranceCarriers = array())
    {
        foreach ($insuranceCarriers as $buildingInsuranceCarriersItem) {
            // validation for constraint: itemType
            if (!$buildingInsuranceCarriersItem instanceof \StructType\BuildingInsuranceCarrier) {
                throw new \InvalidArgumentException(sprintf('The insuranceCarriers property can only contain items of \StructType\BuildingInsuranceCarrier, "%s" given', is_object($buildingInsuranceCarriersItem) ? get_class($buildingInsuranceCarriersItem) : gettype($buildingInsuranceCarriersItem)), __LINE__);
            }
        }
        $this->insuranceCarriers = $insuranceCarriers;
        return $this;
    }
    /**
     * Add item to insuranceCarriers value
     * @throws \InvalidArgumentException
     * @param \StructType\BuildingInsuranceCarrier $item
     * @return \StructType\Building
     */
    public function addToInsuranceCarriers(\StructType\BuildingInsuranceCarrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BuildingInsuranceCarrier) {
            throw new \InvalidArgumentException(sprintf('The insuranceCarriers property can only contain items of \StructType\BuildingInsuranceCarrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->insuranceCarriers[] = $item;
        return $this;
    }
    /**
     * Get managementContractEndDate value
     * @return string|null
     */
    public function getManagementContractEndDate()
    {
        return $this->managementContractEndDate;
    }
    /**
     * Set managementContractEndDate value
     * @param string $managementContractEndDate
     * @return \StructType\Building
     */
    public function setManagementContractEndDate($managementContractEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($managementContractEndDate) && !is_string($managementContractEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($managementContractEndDate)), __LINE__);
        }
        $this->managementContractEndDate = $managementContractEndDate;
        return $this;
    }
    /**
     * Get managementContractStartDate value
     * @return string|null
     */
    public function getManagementContractStartDate()
    {
        return $this->managementContractStartDate;
    }
    /**
     * Set managementContractStartDate value
     * @param string $managementContractStartDate
     * @return \StructType\Building
     */
    public function setManagementContractStartDate($managementContractStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($managementContractStartDate) && !is_string($managementContractStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($managementContractStartDate)), __LINE__);
        }
        $this->managementContractStartDate = $managementContractStartDate;
        return $this;
    }
    /**
     * Get managementFeeType value
     * @return string|null
     */
    public function getManagementFeeType()
    {
        return $this->managementFeeType;
    }
    /**
     * Set managementFeeType value
     * @param string $managementFeeType
     * @return \StructType\Building
     */
    public function setManagementFeeType($managementFeeType = null)
    {
        // validation for constraint: string
        if (!is_null($managementFeeType) && !is_string($managementFeeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($managementFeeType)), __LINE__);
        }
        $this->managementFeeType = $managementFeeType;
        return $this;
    }
    /**
     * Get managementFlatFee value
     * @return float|null
     */
    public function getManagementFlatFee()
    {
        return $this->managementFlatFee;
    }
    /**
     * Set managementFlatFee value
     * @param float $managementFlatFee
     * @return \StructType\Building
     */
    public function setManagementFlatFee($managementFlatFee = null)
    {
        $this->managementFlatFee = $managementFlatFee;
        return $this;
    }
    /**
     * Get managmentFees value
     * @return \StructType\ManagementFee[]|null
     */
    public function getManagmentFees()
    {
        return $this->managmentFees;
    }
    /**
     * Set managmentFees value
     * @throws \InvalidArgumentException
     * @param \StructType\ManagementFee[] $managmentFees
     * @return \StructType\Building
     */
    public function setManagmentFees(array $managmentFees = array())
    {
        foreach ($managmentFees as $buildingManagmentFeesItem) {
            // validation for constraint: itemType
            if (!$buildingManagmentFeesItem instanceof \StructType\ManagementFee) {
                throw new \InvalidArgumentException(sprintf('The managmentFees property can only contain items of \StructType\ManagementFee, "%s" given', is_object($buildingManagmentFeesItem) ? get_class($buildingManagmentFeesItem) : gettype($buildingManagmentFeesItem)), __LINE__);
            }
        }
        $this->managmentFees = $managmentFees;
        return $this;
    }
    /**
     * Add item to managmentFees value
     * @throws \InvalidArgumentException
     * @param \StructType\ManagementFee $item
     * @return \StructType\Building
     */
    public function addToManagmentFees(\StructType\ManagementFee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ManagementFee) {
            throw new \InvalidArgumentException(sprintf('The managmentFees property can only contain items of \StructType\ManagementFee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->managmentFees[] = $item;
        return $this;
    }
    /**
     * Get propertyManagerList value
     * @return mixed[]|null
     */
    public function getPropertyManagerList()
    {
        return $this->propertyManagerList;
    }
    /**
     * Set propertyManagerList value
     * @throws \InvalidArgumentException
     * @param mixed[] $propertyManagerList
     * @return \StructType\Building
     */
    public function setPropertyManagerList(array $propertyManagerList = array())
    {
        foreach ($propertyManagerList as $buildingPropertyManagerListItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The propertyManagerList property can only contain items of anyType, "%s" given', is_object($buildingPropertyManagerListItem) ? get_class($buildingPropertyManagerListItem) : gettype($buildingPropertyManagerListItem)), __LINE__);
            }
        }
        $this->propertyManagerList = $propertyManagerList;
        return $this;
    }
    /**
     * Add item to propertyManagerList value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Building
     */
    public function addToPropertyManagerList($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The propertyManagerList property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->propertyManagerList[] = $item;
        return $this;
    }
    /**
     * Get rentable value
     * @return bool|null
     */
    public function getRentable()
    {
        return $this->rentable;
    }
    /**
     * Set rentable value
     * @param bool $rentable
     * @return \StructType\Building
     */
    public function setRentable($rentable = null)
    {
        // validation for constraint: boolean
        if (!is_null($rentable) && !is_bool($rentable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rentable)), __LINE__);
        }
        $this->rentable = $rentable;
        return $this;
    }
    /**
     * Get units value
     * @return mixed[]|null
     */
    public function getUnits()
    {
        return $this->units;
    }
    /**
     * Set units value
     * @throws \InvalidArgumentException
     * @param mixed[] $units
     * @return \StructType\Building
     */
    public function setUnits(array $units = array())
    {
        foreach ($units as $buildingUnitsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The units property can only contain items of anyType, "%s" given', is_object($buildingUnitsItem) ? get_class($buildingUnitsItem) : gettype($buildingUnitsItem)), __LINE__);
            }
        }
        $this->units = $units;
        return $this;
    }
    /**
     * Add item to units value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Building
     */
    public function addToUnits($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The units property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->units[] = $item;
        return $this;
    }
    /**
     * Get yearBuilt value
     * @return int|null
     */
    public function getYearBuilt()
    {
        return $this->yearBuilt;
    }
    /**
     * Set yearBuilt value
     * @param int $yearBuilt
     * @return \StructType\Building
     */
    public function setYearBuilt($yearBuilt = null)
    {
        // validation for constraint: int
        if (!is_null($yearBuilt) && !is_numeric($yearBuilt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yearBuilt)), __LINE__);
        }
        $this->yearBuilt = $yearBuilt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Building
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
