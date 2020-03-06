<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagementFee StructType
 * @subpackage Structs
 */
class ManagementFee extends PWObject
{
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Account
     */
    public $account;
    /**
     * The manager
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $manager;
    /**
     * The managersCommissionPercentage
     * @var float
     */
    public $managersCommissionPercentage;
    /**
     * The passThrough
     * @var bool
     */
    public $passThrough;
    /**
     * The percentage
     * @var float
     */
    public $percentage;
    /**
     * Constructor method for ManagementFee
     * @uses ManagementFee::setAccount()
     * @uses ManagementFee::setManager()
     * @uses ManagementFee::setManagersCommissionPercentage()
     * @uses ManagementFee::setPassThrough()
     * @uses ManagementFee::setPercentage()
     * @param \StructType\Account $account
     * @param string $manager
     * @param float $managersCommissionPercentage
     * @param bool $passThrough
     * @param float $percentage
     */
    public function __construct(\StructType\Account $account = null, $manager = null, $managersCommissionPercentage = null, $passThrough = null, $percentage = null)
    {
        $this
            ->setAccount($account)
            ->setManager($manager)
            ->setManagersCommissionPercentage($managersCommissionPercentage)
            ->setPassThrough($passThrough)
            ->setPercentage($percentage);
    }
    /**
     * Get account value
     * @return \StructType\Account|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \StructType\Account $account
     * @return \StructType\ManagementFee
     */
    public function setAccount(\StructType\Account $account = null)
    {
        $this->account = $account;
        return $this;
    }
    /**
     * Get manager value
     * @return string|null
     */
    public function getManager()
    {
        return $this->manager;
    }
    /**
     * Set manager value
     * @param string $manager
     * @return \StructType\ManagementFee
     */
    public function setManager($manager = null)
    {
        // validation for constraint: string
        if (!is_null($manager) && !is_string($manager)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($manager)), __LINE__);
        }
        $this->manager = $manager;
        return $this;
    }
    /**
     * Get managersCommissionPercentage value
     * @return float|null
     */
    public function getManagersCommissionPercentage()
    {
        return $this->managersCommissionPercentage;
    }
    /**
     * Set managersCommissionPercentage value
     * @param float $managersCommissionPercentage
     * @return \StructType\ManagementFee
     */
    public function setManagersCommissionPercentage($managersCommissionPercentage = null)
    {
        $this->managersCommissionPercentage = $managersCommissionPercentage;
        return $this;
    }
    /**
     * Get passThrough value
     * @return bool|null
     */
    public function getPassThrough()
    {
        return $this->passThrough;
    }
    /**
     * Set passThrough value
     * @param bool $passThrough
     * @return \StructType\ManagementFee
     */
    public function setPassThrough($passThrough = null)
    {
        // validation for constraint: boolean
        if (!is_null($passThrough) && !is_bool($passThrough)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passThrough)), __LINE__);
        }
        $this->passThrough = $passThrough;
        return $this;
    }
    /**
     * Get percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param float $percentage
     * @return \StructType\ManagementFee
     */
    public function setPercentage($percentage = null)
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ManagementFee
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
