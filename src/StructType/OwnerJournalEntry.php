<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerJournalEntry StructType
 * @subpackage Structs
 */
class OwnerJournalEntry extends JournalEntryHeader
{
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * Constructor method for OwnerJournalEntry
     * @uses OwnerJournalEntry::setBuilding()
     * @param \StructType\Building $building
     */
    public function __construct(\StructType\Building $building = null)
    {
        $this
            ->setBuilding($building);
    }
    /**
     * Get building value
     * @return \StructType\Building|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \StructType\Building $building
     * @return \StructType\OwnerJournalEntry
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OwnerJournalEntry
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
