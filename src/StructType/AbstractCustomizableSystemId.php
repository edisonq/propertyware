<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractCustomizableSystemId StructType
 * @subpackage Structs
 */
abstract class AbstractCustomizableSystemId extends AbstractCustomizableDTO
{
    /**
     * The systemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $systemId;
    /**
     * Constructor method for AbstractCustomizableSystemId
     * @uses AbstractCustomizableSystemId::setSystemId()
     * @param int $systemId
     */
    public function __construct($systemId = null)
    {
        $this
            ->setSystemId($systemId);
    }
    /**
     * Get systemId value
     * @return int|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param int $systemId
     * @return \StructType\AbstractCustomizableSystemId
     */
    public function setSystemId($systemId = null)
    {
        // validation for constraint: int
        if (!is_null($systemId) && !is_numeric($systemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AbstractCustomizableSystemId
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
