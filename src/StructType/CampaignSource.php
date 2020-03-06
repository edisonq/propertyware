<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignSource StructType
 * @subpackage Structs
 */
class CampaignSource extends PWObject
{
    /**
     * The callTrackingGroupID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingGroupID;
    /**
     * The default
     * @var bool
     */
    public $default;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The referrerDomain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referrerDomain;
    /**
     * Constructor method for CampaignSource
     * @uses CampaignSource::setCallTrackingGroupID()
     * @uses CampaignSource::setDefault()
     * @uses CampaignSource::setName()
     * @uses CampaignSource::setReferrerDomain()
     * @param string $callTrackingGroupID
     * @param bool $default
     * @param string $name
     * @param string $referrerDomain
     */
    public function __construct($callTrackingGroupID = null, $default = null, $name = null, $referrerDomain = null)
    {
        $this
            ->setCallTrackingGroupID($callTrackingGroupID)
            ->setDefault($default)
            ->setName($name)
            ->setReferrerDomain($referrerDomain);
    }
    /**
     * Get callTrackingGroupID value
     * @return string|null
     */
    public function getCallTrackingGroupID()
    {
        return $this->callTrackingGroupID;
    }
    /**
     * Set callTrackingGroupID value
     * @param string $callTrackingGroupID
     * @return \StructType\CampaignSource
     */
    public function setCallTrackingGroupID($callTrackingGroupID = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingGroupID) && !is_string($callTrackingGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingGroupID)), __LINE__);
        }
        $this->callTrackingGroupID = $callTrackingGroupID;
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \StructType\CampaignSource
     */
    public function setDefault($default = null)
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($default)), __LINE__);
        }
        $this->default = $default;
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
     * @return \StructType\CampaignSource
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
     * Get referrerDomain value
     * @return string|null
     */
    public function getReferrerDomain()
    {
        return $this->referrerDomain;
    }
    /**
     * Set referrerDomain value
     * @param string $referrerDomain
     * @return \StructType\CampaignSource
     */
    public function setReferrerDomain($referrerDomain = null)
    {
        // validation for constraint: string
        if (!is_null($referrerDomain) && !is_string($referrerDomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referrerDomain)), __LINE__);
        }
        $this->referrerDomain = $referrerDomain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CampaignSource
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
