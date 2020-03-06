<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vector StructType
 * @subpackage Structs
 */
class Vector extends AbstractStructBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $item;
    /**
     * Constructor method for Vector
     * @uses Vector::setItem()
     * @param mixed[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return mixed[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param mixed[] $item
     * @return \StructType\Vector
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $vectorItemItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of anyType, "%s" given', is_object($vectorItemItem) ? get_class($vectorItemItem) : gettype($vectorItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Vector
     */
    public function addToItem($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Vector
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
