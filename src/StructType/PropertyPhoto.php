<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyPhoto StructType
 * @subpackage Structs
 */
class PropertyPhoto extends PWObject
{
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The fileType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fileType;
    /**
     * The orderIndex
     * @var int
     */
    public $orderIndex;
    /**
     * The originalUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $originalUrl;
    /**
     * The smallUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smallUrl;
    /**
     * The thumbUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $thumbUrl;
    /**
     * Constructor method for PropertyPhoto
     * @uses PropertyPhoto::setDescription()
     * @uses PropertyPhoto::setFileType()
     * @uses PropertyPhoto::setOrderIndex()
     * @uses PropertyPhoto::setOriginalUrl()
     * @uses PropertyPhoto::setSmallUrl()
     * @uses PropertyPhoto::setThumbUrl()
     * @param string $description
     * @param string $fileType
     * @param int $orderIndex
     * @param string $originalUrl
     * @param string $smallUrl
     * @param string $thumbUrl
     */
    public function __construct($description = null, $fileType = null, $orderIndex = null, $originalUrl = null, $smallUrl = null, $thumbUrl = null)
    {
        $this
            ->setDescription($description)
            ->setFileType($fileType)
            ->setOrderIndex($orderIndex)
            ->setOriginalUrl($originalUrl)
            ->setSmallUrl($smallUrl)
            ->setThumbUrl($thumbUrl);
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
     * @return \StructType\PropertyPhoto
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
     * Get fileType value
     * @return string|null
     */
    public function getFileType()
    {
        return $this->fileType;
    }
    /**
     * Set fileType value
     * @param string $fileType
     * @return \StructType\PropertyPhoto
     */
    public function setFileType($fileType = null)
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileType)), __LINE__);
        }
        $this->fileType = $fileType;
        return $this;
    }
    /**
     * Get orderIndex value
     * @return int|null
     */
    public function getOrderIndex()
    {
        return $this->orderIndex;
    }
    /**
     * Set orderIndex value
     * @param int $orderIndex
     * @return \StructType\PropertyPhoto
     */
    public function setOrderIndex($orderIndex = null)
    {
        // validation for constraint: int
        if (!is_null($orderIndex) && !is_numeric($orderIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderIndex)), __LINE__);
        }
        $this->orderIndex = $orderIndex;
        return $this;
    }
    /**
     * Get originalUrl value
     * @return string|null
     */
    public function getOriginalUrl()
    {
        return $this->originalUrl;
    }
    /**
     * Set originalUrl value
     * @param string $originalUrl
     * @return \StructType\PropertyPhoto
     */
    public function setOriginalUrl($originalUrl = null)
    {
        // validation for constraint: string
        if (!is_null($originalUrl) && !is_string($originalUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalUrl)), __LINE__);
        }
        $this->originalUrl = $originalUrl;
        return $this;
    }
    /**
     * Get smallUrl value
     * @return string|null
     */
    public function getSmallUrl()
    {
        return $this->smallUrl;
    }
    /**
     * Set smallUrl value
     * @param string $smallUrl
     * @return \StructType\PropertyPhoto
     */
    public function setSmallUrl($smallUrl = null)
    {
        // validation for constraint: string
        if (!is_null($smallUrl) && !is_string($smallUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smallUrl)), __LINE__);
        }
        $this->smallUrl = $smallUrl;
        return $this;
    }
    /**
     * Get thumbUrl value
     * @return string|null
     */
    public function getThumbUrl()
    {
        return $this->thumbUrl;
    }
    /**
     * Set thumbUrl value
     * @param string $thumbUrl
     * @return \StructType\PropertyPhoto
     */
    public function setThumbUrl($thumbUrl = null)
    {
        // validation for constraint: string
        if (!is_null($thumbUrl) && !is_string($thumbUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($thumbUrl)), __LINE__);
        }
        $this->thumbUrl = $thumbUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PropertyPhoto
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
