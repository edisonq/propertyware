<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncGroup StructType
 * @subpackage Structs
 */
class SyncGroup extends PWObject
{
    /**
     * The idList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $idList;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * Constructor method for SyncGroup
     * @uses SyncGroup::setIdList()
     * @uses SyncGroup::setTitle()
     * @param string $idList
     * @param string $title
     */
    public function __construct($idList = null, $title = null)
    {
        $this
            ->setIdList($idList)
            ->setTitle($title);
    }
    /**
     * Get idList value
     * @return string|null
     */
    public function getIdList()
    {
        return $this->idList;
    }
    /**
     * Set idList value
     * @param string $idList
     * @return \StructType\SyncGroup
     */
    public function setIdList($idList = null)
    {
        // validation for constraint: string
        if (!is_null($idList) && !is_string($idList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idList)), __LINE__);
        }
        $this->idList = $idList;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\SyncGroup
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SyncGroup
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
