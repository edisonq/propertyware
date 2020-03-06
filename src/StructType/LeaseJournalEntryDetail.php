<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaseJournalEntryDetail StructType
 * @subpackage Structs
 */
class LeaseJournalEntryDetail extends LeaseLedgerItem
{
    /**
     * The journalEntry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\LeaseJournalEntry
     */
    public $journalEntry;
    /**
     * Constructor method for LeaseJournalEntryDetail
     * @uses LeaseJournalEntryDetail::setJournalEntry()
     * @param \StructType\LeaseJournalEntry $journalEntry
     */
    public function __construct(\StructType\LeaseJournalEntry $journalEntry = null)
    {
        $this
            ->setJournalEntry($journalEntry);
    }
    /**
     * Get journalEntry value
     * @return \StructType\LeaseJournalEntry|null
     */
    public function getJournalEntry()
    {
        return $this->journalEntry;
    }
    /**
     * Set journalEntry value
     * @param \StructType\LeaseJournalEntry $journalEntry
     * @return \StructType\LeaseJournalEntryDetail
     */
    public function setJournalEntry(\StructType\LeaseJournalEntry $journalEntry = null)
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
     * @return \StructType\LeaseJournalEntryDetail
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
