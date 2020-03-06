<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ledger StructType
 * @subpackage Structs
 */
abstract class Ledger extends ClientDataContainer
{
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:LedgerItem[]
     * - ref: soapenc:arrayType
     * @var \StructType\LedgerItem[]
     */
    public $items;
    /**
     * Constructor method for Ledger
     * @uses Ledger::setItems()
     * @param \StructType\LedgerItem[] $items
     */
    public function __construct(array $items = array())
    {
        $this
            ->setItems($items);
    }
    /**
     * Get items value
     * @return \StructType\LedgerItem[]|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @throws \InvalidArgumentException
     * @param \StructType\LedgerItem[] $items
     * @return \StructType\Ledger
     */
    public function setItems(array $items = array())
    {
        foreach ($items as $ledgerItemsItem) {
            // validation for constraint: itemType
            if (!$ledgerItemsItem instanceof \StructType\LedgerItem) {
                throw new \InvalidArgumentException(sprintf('The items property can only contain items of \StructType\LedgerItem, "%s" given', is_object($ledgerItemsItem) ? get_class($ledgerItemsItem) : gettype($ledgerItemsItem)), __LINE__);
            }
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Add item to items value
     * @throws \InvalidArgumentException
     * @param \StructType\LedgerItem $item
     * @return \StructType\Ledger
     */
    public function addToItems(\StructType\LedgerItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LedgerItem) {
            throw new \InvalidArgumentException(sprintf('The items property can only contain items of \StructType\LedgerItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\Ledger
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
