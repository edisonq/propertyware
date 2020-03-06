<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomField StructType
 * @subpackage Structs
 */
class CustomField extends PWObject
{
    /**
     * The dataType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dataType;
    /**
     * The fieldName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fieldName;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for CustomField
     * @uses CustomField::setDataType()
     * @uses CustomField::setFieldName()
     * @uses CustomField::setValue()
     * @param string $dataType
     * @param string $fieldName
     * @param string $value
     */
    public function __construct($dataType = null, $fieldName = null, $value = null)
    {
        $this
            ->setDataType($dataType)
            ->setFieldName($fieldName)
            ->setValue($value);
    }
    /**
     * Get dataType value
     * @return string|null
     */
    public function getDataType()
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param string $dataType
     * @return \StructType\CustomField
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: string
        if (!is_null($dataType) && !is_string($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
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
     * @return \StructType\CustomField
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\CustomField
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomField
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
