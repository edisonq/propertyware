<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItem StructType
 * @subpackage Structs
 */
class LineItem extends PWFinanceObject
{
    /**
     * The cr
     * @var float
     */
    public $cr;
    /**
     * The dr
     * @var float
     */
    public $dr;
    /**
     * Constructor method for LineItem
     * @uses LineItem::setCr()
     * @uses LineItem::setDr()
     * @param float $cr
     * @param float $dr
     */
    public function __construct($cr = null, $dr = null)
    {
        $this
            ->setCr($cr)
            ->setDr($dr);
    }
    /**
     * Get cr value
     * @return float|null
     */
    public function getCr()
    {
        return $this->cr;
    }
    /**
     * Set cr value
     * @param float $cr
     * @return \StructType\LineItem
     */
    public function setCr($cr = null)
    {
        $this->cr = $cr;
        return $this;
    }
    /**
     * Get dr value
     * @return float|null
     */
    public function getDr()
    {
        return $this->dr;
    }
    /**
     * Set dr value
     * @param float $dr
     * @return \StructType\LineItem
     */
    public function setDr($dr = null)
    {
        $this->dr = $dr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LineItem
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
