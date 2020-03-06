<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyManager StructType
 * @subpackage Structs
 */
class PropertyManager extends PWObject
{
    /**
     * The buildingID
     * @var int
     */
    public $buildingID;
    /**
     * The primary
     * @var bool
     */
    public $primary;
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $role;
    /**
     * The user
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\User
     */
    public $user;
    /**
     * Constructor method for PropertyManager
     * @uses PropertyManager::setBuildingID()
     * @uses PropertyManager::setPrimary()
     * @uses PropertyManager::setRole()
     * @uses PropertyManager::setUser()
     * @param int $buildingID
     * @param bool $primary
     * @param string $role
     * @param \StructType\User $user
     */
    public function __construct($buildingID = null, $primary = null, $role = null, \StructType\User $user = null)
    {
        $this
            ->setBuildingID($buildingID)
            ->setPrimary($primary)
            ->setRole($role)
            ->setUser($user);
    }
    /**
     * Get buildingID value
     * @return int|null
     */
    public function getBuildingID()
    {
        return $this->buildingID;
    }
    /**
     * Set buildingID value
     * @param int $buildingID
     * @return \StructType\PropertyManager
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !is_numeric($buildingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingID)), __LINE__);
        }
        $this->buildingID = $buildingID;
        return $this;
    }
    /**
     * Get primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->primary;
    }
    /**
     * Set primary value
     * @param bool $primary
     * @return \StructType\PropertyManager
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primary)), __LINE__);
        }
        $this->primary = $primary;
        return $this;
    }
    /**
     * Get role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \StructType\PropertyManager
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->role = $role;
        return $this;
    }
    /**
     * Get user value
     * @return \StructType\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param \StructType\User $user
     * @return \StructType\PropertyManager
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PropertyManager
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
