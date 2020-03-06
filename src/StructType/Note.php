<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Note StructType
 * @subpackage Structs
 */
class Note extends PWObject
{
    /**
     * The body
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $body;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The private
     * @var bool
     */
    public $private;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subject;
    /**
     * Constructor method for Note
     * @uses Note::setBody()
     * @uses Note::setDate()
     * @uses Note::setPrivate()
     * @uses Note::setSubject()
     * @param string $body
     * @param string $date
     * @param bool $private
     * @param string $subject
     */
    public function __construct($body = null, $date = null, $private = null, $subject = null)
    {
        $this
            ->setBody($body)
            ->setDate($date)
            ->setPrivate($private)
            ->setSubject($subject);
    }
    /**
     * Get body value
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * Set body value
     * @param string $body
     * @return \StructType\Note
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body)), __LINE__);
        }
        $this->body = $body;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\Note
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
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
     * @return \StructType\Note
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
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \StructType\Note
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Note
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
