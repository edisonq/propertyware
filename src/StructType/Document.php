<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @subpackage Structs
 */
class Document extends PWObject
{
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The fileData
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fileData;
    /**
     * The fileType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fileType;
    /**
     * The filename
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filename;
    /**
     * The privateFile
     * @var bool
     */
    public $privateFile;
    /**
     * The publishToOwnerPortal
     * @var bool
     */
    public $publishToOwnerPortal;
    /**
     * The publishToTenantPortal
     * @var bool
     */
    public $publishToTenantPortal;
    /**
     * Constructor method for Document
     * @uses Document::setDescription()
     * @uses Document::setFileData()
     * @uses Document::setFileType()
     * @uses Document::setFilename()
     * @uses Document::setPrivateFile()
     * @uses Document::setPublishToOwnerPortal()
     * @uses Document::setPublishToTenantPortal()
     * @param string $description
     * @param string $fileData
     * @param string $fileType
     * @param string $filename
     * @param bool $privateFile
     * @param bool $publishToOwnerPortal
     * @param bool $publishToTenantPortal
     */
    public function __construct($description = null, $fileData = null, $fileType = null, $filename = null, $privateFile = null, $publishToOwnerPortal = null, $publishToTenantPortal = null)
    {
        $this
            ->setDescription($description)
            ->setFileData($fileData)
            ->setFileType($fileType)
            ->setFilename($filename)
            ->setPrivateFile($privateFile)
            ->setPublishToOwnerPortal($publishToOwnerPortal)
            ->setPublishToTenantPortal($publishToTenantPortal);
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
     * @return \StructType\Document
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
     * Get fileData value
     * @return string|null
     */
    public function getFileData()
    {
        return $this->fileData;
    }
    /**
     * Set fileData value
     * @param string $fileData
     * @return \StructType\Document
     */
    public function setFileData($fileData = null)
    {
        // validation for constraint: string
        if (!is_null($fileData) && !is_string($fileData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileData)), __LINE__);
        }
        $this->fileData = $fileData;
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
     * @return \StructType\Document
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
     * Get filename value
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \StructType\Document
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Get privateFile value
     * @return bool|null
     */
    public function getPrivateFile()
    {
        return $this->privateFile;
    }
    /**
     * Set privateFile value
     * @param bool $privateFile
     * @return \StructType\Document
     */
    public function setPrivateFile($privateFile = null)
    {
        // validation for constraint: boolean
        if (!is_null($privateFile) && !is_bool($privateFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($privateFile)), __LINE__);
        }
        $this->privateFile = $privateFile;
        return $this;
    }
    /**
     * Get publishToOwnerPortal value
     * @return bool|null
     */
    public function getPublishToOwnerPortal()
    {
        return $this->publishToOwnerPortal;
    }
    /**
     * Set publishToOwnerPortal value
     * @param bool $publishToOwnerPortal
     * @return \StructType\Document
     */
    public function setPublishToOwnerPortal($publishToOwnerPortal = null)
    {
        // validation for constraint: boolean
        if (!is_null($publishToOwnerPortal) && !is_bool($publishToOwnerPortal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($publishToOwnerPortal)), __LINE__);
        }
        $this->publishToOwnerPortal = $publishToOwnerPortal;
        return $this;
    }
    /**
     * Get publishToTenantPortal value
     * @return bool|null
     */
    public function getPublishToTenantPortal()
    {
        return $this->publishToTenantPortal;
    }
    /**
     * Set publishToTenantPortal value
     * @param bool $publishToTenantPortal
     * @return \StructType\Document
     */
    public function setPublishToTenantPortal($publishToTenantPortal = null)
    {
        // validation for constraint: boolean
        if (!is_null($publishToTenantPortal) && !is_bool($publishToTenantPortal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($publishToTenantPortal)), __LINE__);
        }
        $this->publishToTenantPortal = $publishToTenantPortal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Document
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
