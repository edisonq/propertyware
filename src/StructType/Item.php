<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends PWObject
{
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $account;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for Item
     * @uses Item::setAccount()
     * @uses Item::setName()
     * @param string $account
     * @param string $name
     */
    public function __construct($account = null, $name = null)
    {
        $this
            ->setAccount($account)
            ->setName($name);
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \StructType\Item
     */
    public function setAccount($account = null)
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account)), __LINE__);
        }
        $this->account = $account;
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
     * @return \StructType\Item
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
     * @return \StructType\Item
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
