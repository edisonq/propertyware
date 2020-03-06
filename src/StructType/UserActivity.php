<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserActivity StructType
 * @subpackage Structs
 */
class UserActivity extends PWObject
{
    /**
     * The actionPerformed
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $actionPerformed;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $content;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The endTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endTime;
    /**
     * The private
     * @var bool
     */
    public $private;
    /**
     * The startTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startTime;
    /**
     * Constructor method for UserActivity
     * @uses UserActivity::setActionPerformed()
     * @uses UserActivity::setContent()
     * @uses UserActivity::setDescription()
     * @uses UserActivity::setEndTime()
     * @uses UserActivity::setPrivate()
     * @uses UserActivity::setStartTime()
     * @param string $actionPerformed
     * @param string $content
     * @param string $description
     * @param string $endTime
     * @param bool $private
     * @param string $startTime
     */
    public function __construct($actionPerformed = null, $content = null, $description = null, $endTime = null, $private = null, $startTime = null)
    {
        $this
            ->setActionPerformed($actionPerformed)
            ->setContent($content)
            ->setDescription($description)
            ->setEndTime($endTime)
            ->setPrivate($private)
            ->setStartTime($startTime);
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
     * @return \StructType\UserActivity
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
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \StructType\UserActivity
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->content = $content;
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
     * @return \StructType\UserActivity
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
     * Get endTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \StructType\UserActivity
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Get private value
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->private;
    }
    /**
     * Set private value
     * @param bool $private
     * @return \StructType\UserActivity
     */
    public function setPrivate($private = null)
    {
        // validation for constraint: boolean
        if (!is_null($private) && !is_bool($private)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($private)), __LINE__);
        }
        $this->private = $private;
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \StructType\UserActivity
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UserActivity
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
