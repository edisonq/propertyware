<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorType StructType
 * @subpackage Structs
 */
class VendorType extends PWObject
{
    /**
     * The parentRef
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $parentRef;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for VendorType
     * @uses VendorType::setParentRef()
     * @uses VendorType::setType()
     * @param string $parentRef
     * @param string $type
     */
    public function __construct($parentRef = null, $type = null)
    {
        $this
            ->setParentRef($parentRef)
            ->setType($type);
    }
    /**
     * Get parentRef value
     * @return string|null
     */
    public function getParentRef()
    {
        return $this->parentRef;
    }
    /**
     * Set parentRef value
     * @param string $parentRef
     * @return \StructType\VendorType
     */
    public function setParentRef($parentRef = null)
    {
        // validation for constraint: string
        if (!is_null($parentRef) && !is_string($parentRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentRef)), __LINE__);
        }
        $this->parentRef = $parentRef;
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
     * @return \StructType\VendorType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VendorType
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
