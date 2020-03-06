<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientDataItem StructType
 * @subpackage Structs
 */
class ClientDataItem extends AbstractStructBase
{
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $key;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $value;
    /**
     * Constructor method for ClientDataItem
     * @uses ClientDataItem::setKey()
     * @uses ClientDataItem::setValue()
     * @param string $key
     * @param mixed $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \StructType\ClientDataItem
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get value value
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param mixed $value
     * @return \StructType\ClientDataItem
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ClientDataItem
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
