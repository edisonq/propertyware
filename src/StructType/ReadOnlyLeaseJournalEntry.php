<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadOnlyLeaseJournalEntry StructType
 * @subpackage Structs
 */
class ReadOnlyLeaseJournalEntry extends ReadOnlyLeaseLedgerItem
{
    /**
     * The details
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ReadOnlyLeaseJournalEntryDetail[]
     * - ref: soapenc:arrayType
     * @var \StructType\ReadOnlyLeaseJournalEntryDetail[]
     */
    public $details;
    /**
     * Constructor method for ReadOnlyLeaseJournalEntry
     * @uses ReadOnlyLeaseJournalEntry::setDetails()
     * @param \StructType\ReadOnlyLeaseJournalEntryDetail[] $details
     */
    public function __construct(array $details = array())
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get details value
     * @return \StructType\ReadOnlyLeaseJournalEntryDetail[]|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyLeaseJournalEntryDetail[] $details
     * @return \StructType\ReadOnlyLeaseJournalEntry
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $readOnlyLeaseJournalEntryDetailsItem) {
            // validation for constraint: itemType
            if (!$readOnlyLeaseJournalEntryDetailsItem instanceof \StructType\ReadOnlyLeaseJournalEntryDetail) {
                throw new \InvalidArgumentException(sprintf('The details property can only contain items of \StructType\ReadOnlyLeaseJournalEntryDetail, "%s" given', is_object($readOnlyLeaseJournalEntryDetailsItem) ? get_class($readOnlyLeaseJournalEntryDetailsItem) : gettype($readOnlyLeaseJournalEntryDetailsItem)), __LINE__);
            }
        }
        $this->details = $details;
        return $this;
    }
    /**
     * Add item to details value
     * @throws \InvalidArgumentException
     * @param \StructType\ReadOnlyLeaseJournalEntryDetail $item
     * @return \StructType\ReadOnlyLeaseJournalEntry
     */
    public function addToDetails(\StructType\ReadOnlyLeaseJournalEntryDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReadOnlyLeaseJournalEntryDetail) {
            throw new \InvalidArgumentException(sprintf('The details property can only contain items of \StructType\ReadOnlyLeaseJournalEntryDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->details[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReadOnlyLeaseJournalEntry
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
