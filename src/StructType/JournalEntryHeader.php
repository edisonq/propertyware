<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalEntryHeader StructType
 * @subpackage Structs
 */
abstract class JournalEntryHeader extends FinancialTransactionHeader
{
    /**
     * The journalEntryGroupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $journalEntryGroupId;
    /**
     * Constructor method for JournalEntryHeader
     * @uses JournalEntryHeader::setJournalEntryGroupId()
     * @param string $journalEntryGroupId
     */
    public function __construct($journalEntryGroupId = null)
    {
        $this
            ->setJournalEntryGroupId($journalEntryGroupId);
    }
    /**
     * Get journalEntryGroupId value
     * @return string|null
     */
    public function getJournalEntryGroupId()
    {
        return $this->journalEntryGroupId;
    }
    /**
     * Set journalEntryGroupId value
     * @param string $journalEntryGroupId
     * @return \StructType\JournalEntryHeader
     */
    public function setJournalEntryGroupId($journalEntryGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($journalEntryGroupId) && !is_string($journalEntryGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($journalEntryGroupId)), __LINE__);
        }
        $this->journalEntryGroupId = $journalEntryGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\JournalEntryHeader
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
