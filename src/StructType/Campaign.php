<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Campaign StructType
 * @subpackage Structs
 */
class Campaign extends PWObject
{
    /**
     * The acceptedCallTrackingTerms
     * @var bool
     */
    public $acceptedCallTrackingTerms;
    /**
     * The callTrackingCampaignID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingCampaignID;
    /**
     * The callTrackingEnabled
     * @var bool
     */
    public $callTrackingEnabled;
    /**
     * The callTrackingForwardTo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingForwardTo;
    /**
     * The callTrackingForwardToAfterHours
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingForwardToAfterHours;
    /**
     * The callTrackingPhoneNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingPhoneNumber;
    /**
     * The callTrackingReferrer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingReferrer;
    /**
     * The callTrackingSearchPhrase
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callTrackingSearchPhrase;
    /**
     * The campaignSource
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\CampaignSource
     */
    public $campaignSource;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The targetProspectType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetProspectType;
    /**
     * The timezone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $timezone;
    /**
     * Constructor method for Campaign
     * @uses Campaign::setAcceptedCallTrackingTerms()
     * @uses Campaign::setCallTrackingCampaignID()
     * @uses Campaign::setCallTrackingEnabled()
     * @uses Campaign::setCallTrackingForwardTo()
     * @uses Campaign::setCallTrackingForwardToAfterHours()
     * @uses Campaign::setCallTrackingPhoneNumber()
     * @uses Campaign::setCallTrackingReferrer()
     * @uses Campaign::setCallTrackingSearchPhrase()
     * @uses Campaign::setCampaignSource()
     * @uses Campaign::setCode()
     * @uses Campaign::setDescription()
     * @uses Campaign::setEndDate()
     * @uses Campaign::setName()
     * @uses Campaign::setStartDate()
     * @uses Campaign::setTargetProspectType()
     * @uses Campaign::setTimezone()
     * @param bool $acceptedCallTrackingTerms
     * @param string $callTrackingCampaignID
     * @param bool $callTrackingEnabled
     * @param string $callTrackingForwardTo
     * @param string $callTrackingForwardToAfterHours
     * @param string $callTrackingPhoneNumber
     * @param string $callTrackingReferrer
     * @param string $callTrackingSearchPhrase
     * @param \StructType\CampaignSource $campaignSource
     * @param string $code
     * @param string $description
     * @param string $endDate
     * @param string $name
     * @param string $startDate
     * @param string $targetProspectType
     * @param string $timezone
     */
    public function __construct($acceptedCallTrackingTerms = null, $callTrackingCampaignID = null, $callTrackingEnabled = null, $callTrackingForwardTo = null, $callTrackingForwardToAfterHours = null, $callTrackingPhoneNumber = null, $callTrackingReferrer = null, $callTrackingSearchPhrase = null, \StructType\CampaignSource $campaignSource = null, $code = null, $description = null, $endDate = null, $name = null, $startDate = null, $targetProspectType = null, $timezone = null)
    {
        $this
            ->setAcceptedCallTrackingTerms($acceptedCallTrackingTerms)
            ->setCallTrackingCampaignID($callTrackingCampaignID)
            ->setCallTrackingEnabled($callTrackingEnabled)
            ->setCallTrackingForwardTo($callTrackingForwardTo)
            ->setCallTrackingForwardToAfterHours($callTrackingForwardToAfterHours)
            ->setCallTrackingPhoneNumber($callTrackingPhoneNumber)
            ->setCallTrackingReferrer($callTrackingReferrer)
            ->setCallTrackingSearchPhrase($callTrackingSearchPhrase)
            ->setCampaignSource($campaignSource)
            ->setCode($code)
            ->setDescription($description)
            ->setEndDate($endDate)
            ->setName($name)
            ->setStartDate($startDate)
            ->setTargetProspectType($targetProspectType)
            ->setTimezone($timezone);
    }
    /**
     * Get acceptedCallTrackingTerms value
     * @return bool|null
     */
    public function getAcceptedCallTrackingTerms()
    {
        return $this->acceptedCallTrackingTerms;
    }
    /**
     * Set acceptedCallTrackingTerms value
     * @param bool $acceptedCallTrackingTerms
     * @return \StructType\Campaign
     */
    public function setAcceptedCallTrackingTerms($acceptedCallTrackingTerms = null)
    {
        // validation for constraint: boolean
        if (!is_null($acceptedCallTrackingTerms) && !is_bool($acceptedCallTrackingTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acceptedCallTrackingTerms)), __LINE__);
        }
        $this->acceptedCallTrackingTerms = $acceptedCallTrackingTerms;
        return $this;
    }
    /**
     * Get callTrackingCampaignID value
     * @return string|null
     */
    public function getCallTrackingCampaignID()
    {
        return $this->callTrackingCampaignID;
    }
    /**
     * Set callTrackingCampaignID value
     * @param string $callTrackingCampaignID
     * @return \StructType\Campaign
     */
    public function setCallTrackingCampaignID($callTrackingCampaignID = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingCampaignID) && !is_string($callTrackingCampaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingCampaignID)), __LINE__);
        }
        $this->callTrackingCampaignID = $callTrackingCampaignID;
        return $this;
    }
    /**
     * Get callTrackingEnabled value
     * @return bool|null
     */
    public function getCallTrackingEnabled()
    {
        return $this->callTrackingEnabled;
    }
    /**
     * Set callTrackingEnabled value
     * @param bool $callTrackingEnabled
     * @return \StructType\Campaign
     */
    public function setCallTrackingEnabled($callTrackingEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($callTrackingEnabled) && !is_bool($callTrackingEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($callTrackingEnabled)), __LINE__);
        }
        $this->callTrackingEnabled = $callTrackingEnabled;
        return $this;
    }
    /**
     * Get callTrackingForwardTo value
     * @return string|null
     */
    public function getCallTrackingForwardTo()
    {
        return $this->callTrackingForwardTo;
    }
    /**
     * Set callTrackingForwardTo value
     * @param string $callTrackingForwardTo
     * @return \StructType\Campaign
     */
    public function setCallTrackingForwardTo($callTrackingForwardTo = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingForwardTo) && !is_string($callTrackingForwardTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingForwardTo)), __LINE__);
        }
        $this->callTrackingForwardTo = $callTrackingForwardTo;
        return $this;
    }
    /**
     * Get callTrackingForwardToAfterHours value
     * @return string|null
     */
    public function getCallTrackingForwardToAfterHours()
    {
        return $this->callTrackingForwardToAfterHours;
    }
    /**
     * Set callTrackingForwardToAfterHours value
     * @param string $callTrackingForwardToAfterHours
     * @return \StructType\Campaign
     */
    public function setCallTrackingForwardToAfterHours($callTrackingForwardToAfterHours = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingForwardToAfterHours) && !is_string($callTrackingForwardToAfterHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingForwardToAfterHours)), __LINE__);
        }
        $this->callTrackingForwardToAfterHours = $callTrackingForwardToAfterHours;
        return $this;
    }
    /**
     * Get callTrackingPhoneNumber value
     * @return string|null
     */
    public function getCallTrackingPhoneNumber()
    {
        return $this->callTrackingPhoneNumber;
    }
    /**
     * Set callTrackingPhoneNumber value
     * @param string $callTrackingPhoneNumber
     * @return \StructType\Campaign
     */
    public function setCallTrackingPhoneNumber($callTrackingPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingPhoneNumber) && !is_string($callTrackingPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingPhoneNumber)), __LINE__);
        }
        $this->callTrackingPhoneNumber = $callTrackingPhoneNumber;
        return $this;
    }
    /**
     * Get callTrackingReferrer value
     * @return string|null
     */
    public function getCallTrackingReferrer()
    {
        return $this->callTrackingReferrer;
    }
    /**
     * Set callTrackingReferrer value
     * @param string $callTrackingReferrer
     * @return \StructType\Campaign
     */
    public function setCallTrackingReferrer($callTrackingReferrer = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingReferrer) && !is_string($callTrackingReferrer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingReferrer)), __LINE__);
        }
        $this->callTrackingReferrer = $callTrackingReferrer;
        return $this;
    }
    /**
     * Get callTrackingSearchPhrase value
     * @return string|null
     */
    public function getCallTrackingSearchPhrase()
    {
        return $this->callTrackingSearchPhrase;
    }
    /**
     * Set callTrackingSearchPhrase value
     * @param string $callTrackingSearchPhrase
     * @return \StructType\Campaign
     */
    public function setCallTrackingSearchPhrase($callTrackingSearchPhrase = null)
    {
        // validation for constraint: string
        if (!is_null($callTrackingSearchPhrase) && !is_string($callTrackingSearchPhrase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTrackingSearchPhrase)), __LINE__);
        }
        $this->callTrackingSearchPhrase = $callTrackingSearchPhrase;
        return $this;
    }
    /**
     * Get campaignSource value
     * @return \StructType\CampaignSource|null
     */
    public function getCampaignSource()
    {
        return $this->campaignSource;
    }
    /**
     * Set campaignSource value
     * @param \StructType\CampaignSource $campaignSource
     * @return \StructType\Campaign
     */
    public function setCampaignSource(\StructType\CampaignSource $campaignSource = null)
    {
        $this->campaignSource = $campaignSource;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \StructType\Campaign
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\Campaign
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\Campaign
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
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
     * @return \StructType\Campaign
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\Campaign
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get targetProspectType value
     * @return string|null
     */
    public function getTargetProspectType()
    {
        return $this->targetProspectType;
    }
    /**
     * Set targetProspectType value
     * @param string $targetProspectType
     * @return \StructType\Campaign
     */
    public function setTargetProspectType($targetProspectType = null)
    {
        // validation for constraint: string
        if (!is_null($targetProspectType) && !is_string($targetProspectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetProspectType)), __LINE__);
        }
        $this->targetProspectType = $targetProspectType;
        return $this;
    }
    /**
     * Get timezone value
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
    /**
     * Set timezone value
     * @param string $timezone
     * @return \StructType\Campaign
     */
    public function setTimezone($timezone = null)
    {
        // validation for constraint: string
        if (!is_null($timezone) && !is_string($timezone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timezone)), __LINE__);
        }
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Campaign
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
