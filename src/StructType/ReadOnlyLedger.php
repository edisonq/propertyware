<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyLedger StructType
 * @subpackage Structs
 */
abstract class ReadOnlyLedger extends ClientDataContainer
{
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ReadOnlyLedgerItem[]
     * - ref: soapenc:arrayType
     * @var \StructType\ReadOnlyLedgerItem[]
     */
    public $items;
    /**
     * Constructor method for ReadOnlyLedger
     * @uses ReadOnlyLedger::setItems()
     * @param \StructType\ReadOnlyLedgerItem[] $items
     */
    public function __construct(array $items = array())
    {
        $this
            ->setItems($items);
    }
    /**
     * Get items value
     * @return \StructType\ReadOnlyLedgerItem[]|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyLedgerItem[] $items
     * @return \StructType\ReadOnlyLedger
     */
    public function setItems(array $items = array())
    {
        foreach ($items as $readOnlyLedgerItemsItem) {
            // validation for constraint: itemType
            if (!$readOnlyLedgerItemsItem instanceof \StructType\ReadOnlyLedgerItem) {
                throw new \InvalidArgumentException(sprintf('The items property can only contain items of \StructType\ReadOnlyLedgerItem, "%s" given', is_object($readOnlyLedgerItemsItem) ? get_class($readOnlyLedgerItemsItem) : gettype($readOnlyLedgerItemsItem)), __LINE__);
            }
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Add item to items value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyLedgerItem $item
     * @return \StructType\ReadOnlyLedger
     */
    public function addToItems(\StructType\ReadOnlyLedgerItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReadOnlyLedgerItem) {
            throw new \InvalidArgumentException(sprintf('The items property can only contain items of \StructType\ReadOnlyLedgerItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->items[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyLedger
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
