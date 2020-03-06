<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportConfiguration StructType
 * @subpackage Structs
 */
class ReportConfiguration extends AbstractStructBase
{
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $format;
    /**
     * The reportName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reportName;
    /**
     * The reportSettings
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ReportSetting[]
     * - ref: soapenc:arrayType
     * @var \StructType\ReportSetting[]
     */
    public $reportSettings;
    /**
     * Constructor method for ReportConfiguration
     * @uses ReportConfiguration::setFormat()
     * @uses ReportConfiguration::setReportName()
     * @uses ReportConfiguration::setReportSettings()
     * @param string $format
     * @param string $reportName
     * @param \StructType\ReportSetting[] $reportSettings
     */
    public function __construct($format = null, $reportName = null, array $reportSettings = array())
    {
        $this
            ->setFormat($format)
            ->setReportName($reportName)
            ->setReportSettings($reportSettings);
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \StructType\ReportConfiguration
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get reportName value
     * @return string|null
     */
    public function getReportName()
    {
        return $this->reportName;
    }
    /**
     * Set reportName value
     * @param string $reportName
     * @return \StructType\ReportConfiguration
     */
    public function setReportName($reportName = null)
    {
        // validation for constraint: string
        if (!is_null($reportName) && !is_string($reportName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reportName)), __LINE__);
        }
        $this->reportName = $reportName;
        return $this;
    }
    /**
     * Get reportSettings value
     * @return \StructType\ReportSetting[]|null
     */
    public function getReportSettings()
    {
        return $this->reportSettings;
    }
    /**
     * Set reportSettings value
     * @throws \InvalidArgumentException
     * @param \StructType\ReportSetting[] $reportSettings
     * @return \StructType\ReportConfiguration
     */
    public function setReportSettings(array $reportSettings = array())
    {
        foreach ($reportSettings as $reportConfigurationReportSettingsItem) {
            // validation for constraint: itemType
            if (!$reportConfigurationReportSettingsItem instanceof \StructType\ReportSetting) {
                throw new \InvalidArgumentException(sprintf('The reportSettings property can only contain items of \StructType\ReportSetting, "%s" given', is_object($reportConfigurationReportSettingsItem) ? get_class($reportConfigurationReportSettingsItem) : gettype($reportConfigurationReportSettingsItem)), __LINE__);
            }
        }
        $this->reportSettings = $reportSettings;
        return $this;
    }
    /**
     * Add item to reportSettings value
     * @throws \InvalidArgumentException
     * @param \StructType\ReportSetting $item
     * @return \StructType\ReportConfiguration
     */
    public function addToReportSettings(\StructType\ReportSetting $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReportSetting) {
            throw new \InvalidArgumentException(sprintf('The reportSettings property can only contain items of \StructType\ReportSetting, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->reportSettings[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportConfiguration
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
