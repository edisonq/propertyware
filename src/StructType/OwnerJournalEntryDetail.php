<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerJournalEntryDetail StructType
 * @subpackage Structs
 */
class OwnerJournalEntryDetail extends OwnerLedgerItem
{
    /**
     * The journalEntry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\OwnerJournalEntry
     */
    public $journalEntry;
    /**
     * Constructor method for OwnerJournalEntryDetail
     * @uses OwnerJournalEntryDetail::setJournalEntry()
     * @param \StructType\OwnerJournalEntry $journalEntry
     */
    public function __construct(\StructType\OwnerJournalEntry $journalEntry = null)
    {
        $this
            ->setJournalEntry($journalEntry);
    }
    /**
     * Get journalEntry value
     * @return \StructType\OwnerJournalEntry|null
     */
    public function getJournalEntry()
    {
        return $this->journalEntry;
    }
    /**
     * Set journalEntry value
     * @param \StructType\OwnerJournalEntry $journalEntry
     * @return \StructType\OwnerJournalEntryDetail
     */
    public function setJournalEntry(\StructType\OwnerJournalEntry $journalEntry = null)
    {
        $this->journalEntry = $journalEntry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OwnerJournalEntryDetail
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
