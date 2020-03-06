<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuditableDTOSearchCriteria StructType
 * @subpackage Structs
 */
abstract class AuditableDTOSearchCriteria extends BaseDTOSearchCriteria
{
    /**
     * The createdAfter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdAfter;
    /**
     * The createdBefore
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdBefore;
    /**
     * The createdOn
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdOn;
    /**
     * The createdOnOrAfter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdOnOrAfter;
    /**
     * The createdOnOrBefore
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $createdOnOrBefore;
    /**
     * The lastModifiedAfter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastModifiedAfter;
    /**
     * The lastModifiedBefore
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastModifiedBefore;
    /**
     * The lastModifiedOn
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastModifiedOn;
    /**
     * The lastModifiedOnOrAfter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastModifiedOnOrAfter;
    /**
     * The lastModifiedOnOrBefore
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lastModifiedOnOrBefore;
    /**
     * Constructor method for AuditableDTOSearchCriteria
     * @uses AuditableDTOSearchCriteria::setCreatedAfter()
     * @uses AuditableDTOSearchCriteria::setCreatedBefore()
     * @uses AuditableDTOSearchCriteria::setCreatedOn()
     * @uses AuditableDTOSearchCriteria::setCreatedOnOrAfter()
     * @uses AuditableDTOSearchCriteria::setCreatedOnOrBefore()
     * @uses AuditableDTOSearchCriteria::setLastModifiedAfter()
     * @uses AuditableDTOSearchCriteria::setLastModifiedBefore()
     * @uses AuditableDTOSearchCriteria::setLastModifiedOn()
     * @uses AuditableDTOSearchCriteria::setLastModifiedOnOrAfter()
     * @uses AuditableDTOSearchCriteria::setLastModifiedOnOrBefore()
     * @param string $createdAfter
     * @param string $createdBefore
     * @param string $createdOn
     * @param string $createdOnOrAfter
     * @param string $createdOnOrBefore
     * @param string $lastModifiedAfter
     * @param string $lastModifiedBefore
     * @param string $lastModifiedOn
     * @param string $lastModifiedOnOrAfter
     * @param string $lastModifiedOnOrBefore
     */
    public function __construct($createdAfter = null, $createdBefore = null, $createdOn = null, $createdOnOrAfter = null, $createdOnOrBefore = null, $lastModifiedAfter = null, $lastModifiedBefore = null, $lastModifiedOn = null, $lastModifiedOnOrAfter = null, $lastModifiedOnOrBefore = null)
    {
        $this
            ->setCreatedAfter($createdAfter)
            ->setCreatedBefore($createdBefore)
            ->setCreatedOn($createdOn)
            ->setCreatedOnOrAfter($createdOnOrAfter)
            ->setCreatedOnOrBefore($createdOnOrBefore)
            ->setLastModifiedAfter($lastModifiedAfter)
            ->setLastModifiedBefore($lastModifiedBefore)
            ->setLastModifiedOn($lastModifiedOn)
            ->setLastModifiedOnOrAfter($lastModifiedOnOrAfter)
            ->setLastModifiedOnOrBefore($lastModifiedOnOrBefore);
    }
    /**
     * Get createdAfter value
     * @return string|null
     */
    public function getCreatedAfter()
    {
        return $this->createdAfter;
    }
    /**
     * Set createdAfter value
     * @param string $createdAfter
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setCreatedAfter($createdAfter = null)
    {
        // validation for constraint: string
        if (!is_null($createdAfter) && !is_string($createdAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdAfter)), __LINE__);
        }
        $this->createdAfter = $createdAfter;
        return $this;
    }
    /**
     * Get createdBefore value
     * @return string|null
     */
    public function getCreatedBefore()
    {
        return $this->createdBefore;
    }
    /**
     * Set createdBefore value
     * @param string $createdBefore
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setCreatedBefore($createdBefore = null)
    {
        // validation for constraint: string
        if (!is_null($createdBefore) && !is_string($createdBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdBefore)), __LINE__);
        }
        $this->createdBefore = $createdBefore;
        return $this;
    }
    /**
     * Get createdOn value
     * @return string|null
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }
    /**
     * Set createdOn value
     * @param string $createdOn
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setCreatedOn($createdOn = null)
    {
        // validation for constraint: string
        if (!is_null($createdOn) && !is_string($createdOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdOn)), __LINE__);
        }
        $this->createdOn = $createdOn;
        return $this;
    }
    /**
     * Get createdOnOrAfter value
     * @return string|null
     */
    public function getCreatedOnOrAfter()
    {
        return $this->createdOnOrAfter;
    }
    /**
     * Set createdOnOrAfter value
     * @param string $createdOnOrAfter
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setCreatedOnOrAfter($createdOnOrAfter = null)
    {
        // validation for constraint: string
        if (!is_null($createdOnOrAfter) && !is_string($createdOnOrAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdOnOrAfter)), __LINE__);
        }
        $this->createdOnOrAfter = $createdOnOrAfter;
        return $this;
    }
    /**
     * Get createdOnOrBefore value
     * @return string|null
     */
    public function getCreatedOnOrBefore()
    {
        return $this->createdOnOrBefore;
    }
    /**
     * Set createdOnOrBefore value
     * @param string $createdOnOrBefore
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setCreatedOnOrBefore($createdOnOrBefore = null)
    {
        // validation for constraint: string
        if (!is_null($createdOnOrBefore) && !is_string($createdOnOrBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdOnOrBefore)), __LINE__);
        }
        $this->createdOnOrBefore = $createdOnOrBefore;
        return $this;
    }
    /**
     * Get lastModifiedAfter value
     * @return string|null
     */
    public function getLastModifiedAfter()
    {
        return $this->lastModifiedAfter;
    }
    /**
     * Set lastModifiedAfter value
     * @param string $lastModifiedAfter
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setLastModifiedAfter($lastModifiedAfter = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedAfter) && !is_string($lastModifiedAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedAfter)), __LINE__);
        }
        $this->lastModifiedAfter = $lastModifiedAfter;
        return $this;
    }
    /**
     * Get lastModifiedBefore value
     * @return string|null
     */
    public function getLastModifiedBefore()
    {
        return $this->lastModifiedBefore;
    }
    /**
     * Set lastModifiedBefore value
     * @param string $lastModifiedBefore
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setLastModifiedBefore($lastModifiedBefore = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedBefore) && !is_string($lastModifiedBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedBefore)), __LINE__);
        }
        $this->lastModifiedBefore = $lastModifiedBefore;
        return $this;
    }
    /**
     * Get lastModifiedOn value
     * @return string|null
     */
    public function getLastModifiedOn()
    {
        return $this->lastModifiedOn;
    }
    /**
     * Set lastModifiedOn value
     * @param string $lastModifiedOn
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setLastModifiedOn($lastModifiedOn = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedOn) && !is_string($lastModifiedOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedOn)), __LINE__);
        }
        $this->lastModifiedOn = $lastModifiedOn;
        return $this;
    }
    /**
     * Get lastModifiedOnOrAfter value
     * @return string|null
     */
    public function getLastModifiedOnOrAfter()
    {
        return $this->lastModifiedOnOrAfter;
    }
    /**
     * Set lastModifiedOnOrAfter value
     * @param string $lastModifiedOnOrAfter
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setLastModifiedOnOrAfter($lastModifiedOnOrAfter = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedOnOrAfter) && !is_string($lastModifiedOnOrAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedOnOrAfter)), __LINE__);
        }
        $this->lastModifiedOnOrAfter = $lastModifiedOnOrAfter;
        return $this;
    }
    /**
     * Get lastModifiedOnOrBefore value
     * @return string|null
     */
    public function getLastModifiedOnOrBefore()
    {
        return $this->lastModifiedOnOrBefore;
    }
    /**
     * Set lastModifiedOnOrBefore value
     * @param string $lastModifiedOnOrBefore
     * @return \StructType\AuditableDTOSearchCriteria
     */
    public function setLastModifiedOnOrBefore($lastModifiedOnOrBefore = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedOnOrBefore) && !is_string($lastModifiedOnOrBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedOnOrBefore)), __LINE__);
        }
        $this->lastModifiedOnOrBefore = $lastModifiedOnOrBefore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AuditableDTOSearchCriteria
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
