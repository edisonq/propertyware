<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomFieldDefinition StructType
 * @subpackage Structs
 */
class CustomFieldDefinition extends PWObject
{
    /**
     * The dataType
     * @var int
     */
    public $dataType;
    /**
     * The defaultValue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $defaultValue;
    /**
     * The entityType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $entityType;
    /**
     * The fieldName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fieldName;
    /**
     * The groupName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupName;
    /**
     * The optionList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $optionList;
    /**
     * The orderIndex
     * @var int
     */
    public $orderIndex;
    /**
     * The required
     * @var bool
     */
    public $required;
    /**
     * The templateID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $templateID;
    /**
     * Constructor method for CustomFieldDefinition
     * @uses CustomFieldDefinition::setDataType()
     * @uses CustomFieldDefinition::setDefaultValue()
     * @uses CustomFieldDefinition::setEntityType()
     * @uses CustomFieldDefinition::setFieldName()
     * @uses CustomFieldDefinition::setGroupName()
     * @uses CustomFieldDefinition::setOptionList()
     * @uses CustomFieldDefinition::setOrderIndex()
     * @uses CustomFieldDefinition::setRequired()
     * @uses CustomFieldDefinition::setTemplateID()
     * @param int $dataType
     * @param string $defaultValue
     * @param string $entityType
     * @param string $fieldName
     * @param string $groupName
     * @param mixed $optionList
     * @param int $orderIndex
     * @param bool $required
     * @param int $templateID
     */
    public function __construct($dataType = null, $defaultValue = null, $entityType = null, $fieldName = null, $groupName = null, $optionList = null, $orderIndex = null, $required = null, $templateID = null)
    {
        $this
            ->setDataType($dataType)
            ->setDefaultValue($defaultValue)
            ->setEntityType($entityType)
            ->setFieldName($fieldName)
            ->setGroupName($groupName)
            ->setOptionList($optionList)
            ->setOrderIndex($orderIndex)
            ->setRequired($required)
            ->setTemplateID($templateID);
    }
    /**
     * Get dataType value
     * @return int|null
     */
    public function getDataType()
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param int $dataType
     * @return \StructType\CustomFieldDefinition
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: int
        if (!is_null($dataType) && !is_numeric($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
        return $this;
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \StructType\CustomFieldDefinition
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get entityType value
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->entityType;
    }
    /**
     * Set entityType value
     * @param string $entityType
     * @return \StructType\CustomFieldDefinition
     */
    public function setEntityType($entityType = null)
    {
        // validation for constraint: string
        if (!is_null($entityType) && !is_string($entityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($entityType)), __LINE__);
        }
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \StructType\CustomFieldDefinition
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $groupName
     * @return \StructType\CustomFieldDefinition
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Get optionList value
     * @return mixed|null
     */
    public function getOptionList()
    {
        return $this->optionList;
    }
    /**
     * Set optionList value
     * @param mixed $optionList
     * @return \StructType\CustomFieldDefinition
     */
    public function setOptionList($optionList = null)
    {
        $this->optionList = $optionList;
        return $this;
    }
    /**
     * Get orderIndex value
     * @return int|null
     */
    public function getOrderIndex()
    {
        return $this->orderIndex;
    }
    /**
     * Set orderIndex value
     * @param int $orderIndex
     * @return \StructType\CustomFieldDefinition
     */
    public function setOrderIndex($orderIndex = null)
    {
        // validation for constraint: int
        if (!is_null($orderIndex) && !is_numeric($orderIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderIndex)), __LINE__);
        }
        $this->orderIndex = $orderIndex;
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \StructType\CustomFieldDefinition
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Get templateID value
     * @return int|null
     */
    public function getTemplateID()
    {
        return $this->templateID;
    }
    /**
     * Set templateID value
     * @param int $templateID
     * @return \StructType\CustomFieldDefinition
     */
    public function setTemplateID($templateID = null)
    {
        // validation for constraint: int
        if (!is_null($templateID) && !is_numeric($templateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($templateID)), __LINE__);
        }
        $this->templateID = $templateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomFieldDefinition
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
