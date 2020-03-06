<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InspectionArea StructType
 * @subpackage Structs
 */
class InspectionArea extends PWObject
{
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $items;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for InspectionArea
     * @uses InspectionArea::setItems()
     * @uses InspectionArea::setName()
     * @param mixed[] $items
     * @param string $name
     */
    public function __construct(array $items = array(), $name = null)
    {
        $this
            ->setItems($items)
            ->setName($name);
    }
    /**
     * Get items value
     * @return mixed[]|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @throws \InvalidArgumentException
     * @param mixed[] $items
     * @return \StructType\InspectionArea
     */
    public function setItems(array $items = array())
    {
        foreach ($items as $inspectionAreaItemsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The items property can only contain items of anyType, "%s" given', is_object($inspectionAreaItemsItem) ? get_class($inspectionAreaItemsItem) : gettype($inspectionAreaItemsItem)), __LINE__);
            }
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Add item to items value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\InspectionArea
     */
    public function addToItems($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The items property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->items[] = $item;
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
     * @return \StructType\InspectionArea
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InspectionArea
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
