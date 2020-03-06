<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Activity StructType
 * @subpackage Structs
 */
class Activity extends PWObject
{
    /**
     * The actionPerformed
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $actionPerformed;
    /**
     * The pwEntityID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pwEntityID;
    /**
     * The qbListID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbListID;
    /**
     * The qbTxnID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbTxnID;
    /**
     * The qbTxnType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $qbTxnType;
    /**
     * Constructor method for Activity
     * @uses Activity::setActionPerformed()
     * @uses Activity::setPwEntityID()
     * @uses Activity::setQbListID()
     * @uses Activity::setQbTxnID()
     * @uses Activity::setQbTxnType()
     * @param string $actionPerformed
     * @param string $pwEntityID
     * @param string $qbListID
     * @param string $qbTxnID
     * @param string $qbTxnType
     */
    public function __construct($actionPerformed = null, $pwEntityID = null, $qbListID = null, $qbTxnID = null, $qbTxnType = null)
    {
        $this
            ->setActionPerformed($actionPerformed)
            ->setPwEntityID($pwEntityID)
            ->setQbListID($qbListID)
            ->setQbTxnID($qbTxnID)
            ->setQbTxnType($qbTxnType);
    }
    /**
     * Get actionPerformed value
     * @return string|null
     */
    public function getActionPerformed()
    {
        return $this->actionPerformed;
    }
    /**
     * Set actionPerformed value
     * @param string $actionPerformed
     * @return \StructType\Activity
     */
    public function setActionPerformed($actionPerformed = null)
    {
        // validation for constraint: string
        if (!is_null($actionPerformed) && !is_string($actionPerformed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionPerformed)), __LINE__);
        }
        $this->actionPerformed = $actionPerformed;
        return $this;
    }
    /**
     * Get pwEntityID value
     * @return string|null
     */
    public function getPwEntityID()
    {
        return $this->pwEntityID;
    }
    /**
     * Set pwEntityID value
     * @param string $pwEntityID
     * @return \StructType\Activity
     */
    public function setPwEntityID($pwEntityID = null)
    {
        // validation for constraint: string
        if (!is_null($pwEntityID) && !is_string($pwEntityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pwEntityID)), __LINE__);
        }
        $this->pwEntityID = $pwEntityID;
        return $this;
    }
    /**
     * Get qbListID value
     * @return string|null
     */
    public function getQbListID()
    {
        return $this->qbListID;
    }
    /**
     * Set qbListID value
     * @param string $qbListID
     * @return \StructType\Activity
     */
    public function setQbListID($qbListID = null)
    {
        // validation for constraint: string
        if (!is_null($qbListID) && !is_string($qbListID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbListID)), __LINE__);
        }
        $this->qbListID = $qbListID;
        return $this;
    }
    /**
     * Get qbTxnID value
     * @return string|null
     */
    public function getQbTxnID()
    {
        return $this->qbTxnID;
    }
    /**
     * Set qbTxnID value
     * @param string $qbTxnID
     * @return \StructType\Activity
     */
    public function setQbTxnID($qbTxnID = null)
    {
        // validation for constraint: string
        if (!is_null($qbTxnID) && !is_string($qbTxnID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbTxnID)), __LINE__);
        }
        $this->qbTxnID = $qbTxnID;
        return $this;
    }
    /**
     * Get qbTxnType value
     * @return string|null
     */
    public function getQbTxnType()
    {
        return $this->qbTxnType;
    }
    /**
     * Set qbTxnType value
     * @param string $qbTxnType
     * @return \StructType\Activity
     */
    public function setQbTxnType($qbTxnType = null)
    {
        // validation for constraint: string
        if (!is_null($qbTxnType) && !is_string($qbTxnType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qbTxnType)), __LINE__);
        }
        $this->qbTxnType = $qbTxnType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Activity
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
