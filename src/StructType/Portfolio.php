<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Portfolio StructType
 * @subpackage Structs
 */
class Portfolio extends AbstractDocumentHolder
{
    /**
     * The abbreviation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abbreviation;
    /**
     * The active
     * @var bool
     */
    public $active;
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
     * The defaultBankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $defaultBankAccount;
    /**
     * The defaultSecurityDepositBankAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $defaultSecurityDepositBankAccount;
    /**
     * The managementCompany
     * @var bool
     */
    public $managementCompany;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The owners
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $owners;
    /**
     * The targetOperatingReserve
     * @var float
     */
    public $targetOperatingReserve;
    /**
     * Constructor method for Portfolio
     * @uses Portfolio::setAbbreviation()
     * @uses Portfolio::setActive()
     * @uses Portfolio::setCustomFields()
     * @uses Portfolio::setDefaultBankAccount()
     * @uses Portfolio::setDefaultSecurityDepositBankAccount()
     * @uses Portfolio::setManagementCompany()
     * @uses Portfolio::setName()
     * @uses Portfolio::setOwners()
     * @uses Portfolio::setTargetOperatingReserve()
     * @param string $abbreviation
     * @param bool $active
     * @param \StructType\CustomField[] $customFields
     * @param \StructType\Bank $defaultBankAccount
     * @param \StructType\Bank $defaultSecurityDepositBankAccount
     * @param bool $managementCompany
     * @param string $name
     * @param mixed[] $owners
     * @param float $targetOperatingReserve
     */
    public function __construct($abbreviation = null, $active = null, array $customFields = array(), \StructType\Bank $defaultBankAccount = null, \StructType\Bank $defaultSecurityDepositBankAccount = null, $managementCompany = null, $name = null, array $owners = array(), $targetOperatingReserve = null)
    {
        $this
            ->setAbbreviation($abbreviation)
            ->setActive($active)
            ->setCustomFields($customFields)
            ->setDefaultBankAccount($defaultBankAccount)
            ->setDefaultSecurityDepositBankAccount($defaultSecurityDepositBankAccount)
            ->setManagementCompany($managementCompany)
            ->setName($name)
            ->setOwners($owners)
            ->setTargetOperatingReserve($targetOperatingReserve);
    }
    /**
     * Get abbreviation value
     * @return string|null
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
    /**
     * Set abbreviation value
     * @param string $abbreviation
     * @return \StructType\Portfolio
     */
    public function setAbbreviation($abbreviation = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviation) && !is_string($abbreviation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abbreviation)), __LINE__);
        }
        $this->abbreviation = $abbreviation;
        return $this;
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
     * @return \StructType\Portfolio
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
     * @return \StructType\Portfolio
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $portfolioCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$portfolioCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($portfolioCustomFieldsItem) ? get_class($portfolioCustomFieldsItem) : gettype($portfolioCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Portfolio
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
     * @return \StructType\Portfolio
     */
    public function setDefaultBankAccount(\StructType\Bank $defaultBankAccount = null)
    {
        $this->defaultBankAccount = $defaultBankAccount;
        return $this;
    }
    /**
     * Get defaultSecurityDepositBankAccount value
     * @return \StructType\Bank|null
     */
    public function getDefaultSecurityDepositBankAccount()
    {
        return $this->defaultSecurityDepositBankAccount;
    }
    /**
     * Set defaultSecurityDepositBankAccount value
     * @param \StructType\Bank $defaultSecurityDepositBankAccount
     * @return \StructType\Portfolio
     */
    public function setDefaultSecurityDepositBankAccount(\StructType\Bank $defaultSecurityDepositBankAccount = null)
    {
        $this->defaultSecurityDepositBankAccount = $defaultSecurityDepositBankAccount;
        return $this;
    }
    /**
     * Get managementCompany value
     * @return bool|null
     */
    public function getManagementCompany()
    {
        return $this->managementCompany;
    }
    /**
     * Set managementCompany value
     * @param bool $managementCompany
     * @return \StructType\Portfolio
     */
    public function setManagementCompany($managementCompany = null)
    {
        // validation for constraint: boolean
        if (!is_null($managementCompany) && !is_bool($managementCompany)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($managementCompany)), __LINE__);
        }
        $this->managementCompany = $managementCompany;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Portfolio
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get owners value
     * @return mixed[]|null
     */
    public function getOwners()
    {
        return $this->owners;
    }
    /**
     * Set owners value
     * @throws \InvalidArgumentException
     * @param mixed[] $owners
     * @return \StructType\Portfolio
     */
    public function setOwners(array $owners = array())
    {
        foreach ($owners as $portfolioOwnersItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The owners property can only contain items of anyType, "%s" given', is_object($portfolioOwnersItem) ? get_class($portfolioOwnersItem) : gettype($portfolioOwnersItem)), __LINE__);
            }
        }
        $this->owners = $owners;
        return $this;
    }
    /**
     * Add item to owners value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Portfolio
     */
    public function addToOwners($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The owners property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->owners[] = $item;
        return $this;
    }
    /**
     * Get targetOperatingReserve value
     * @return float|null
     */
    public function getTargetOperatingReserve()
    {
        return $this->targetOperatingReserve;
    }
    /**
     * Set targetOperatingReserve value
     * @param float $targetOperatingReserve
     * @return \StructType\Portfolio
     */
    public function setTargetOperatingReserve($targetOperatingReserve = null)
    {
        $this->targetOperatingReserve = $targetOperatingReserve;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Portfolio
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
