<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuildingInsuranceCarrier StructType
 * @subpackage Structs
 */
class BuildingInsuranceCarrier extends PWObject
{
    /**
     * The company
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $company;
    /**
     * The coverageAmount
     * @var float
     */
    public $coverageAmount;
    /**
     * The expirationDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $expirationDate;
    /**
     * The insuranceContactID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $insuranceContactID;
    /**
     * The insuranceID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceID;
    /**
     * The insuranceType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insuranceType;
    /**
     * The notes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notes;
    /**
     * The policyNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $policyNumber;
    /**
     * The premiumAmount
     * @var float
     */
    public $premiumAmount;
    /**
     * Constructor method for BuildingInsuranceCarrier
     * @uses BuildingInsuranceCarrier::setCompany()
     * @uses BuildingInsuranceCarrier::setCoverageAmount()
     * @uses BuildingInsuranceCarrier::setExpirationDate()
     * @uses BuildingInsuranceCarrier::setInsuranceContactID()
     * @uses BuildingInsuranceCarrier::setInsuranceID()
     * @uses BuildingInsuranceCarrier::setInsuranceType()
     * @uses BuildingInsuranceCarrier::setNotes()
     * @uses BuildingInsuranceCarrier::setPolicyNumber()
     * @uses BuildingInsuranceCarrier::setPremiumAmount()
     * @param string $company
     * @param float $coverageAmount
     * @param string $expirationDate
     * @param int $insuranceContactID
     * @param string $insuranceID
     * @param string $insuranceType
     * @param string $notes
     * @param string $policyNumber
     * @param float $premiumAmount
     */
    public function __construct($company = null, $coverageAmount = null, $expirationDate = null, $insuranceContactID = null, $insuranceID = null, $insuranceType = null, $notes = null, $policyNumber = null, $premiumAmount = null)
    {
        $this
            ->setCompany($company)
            ->setCoverageAmount($coverageAmount)
            ->setExpirationDate($expirationDate)
            ->setInsuranceContactID($insuranceContactID)
            ->setInsuranceID($insuranceID)
            ->setInsuranceType($insuranceType)
            ->setNotes($notes)
            ->setPolicyNumber($policyNumber)
            ->setPremiumAmount($premiumAmount);
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->company = $company;
        return $this;
    }
    /**
     * Get coverageAmount value
     * @return float|null
     */
    public function getCoverageAmount()
    {
        return $this->coverageAmount;
    }
    /**
     * Set coverageAmount value
     * @param float $coverageAmount
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setCoverageAmount($coverageAmount = null)
    {
        $this->coverageAmount = $coverageAmount;
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get insuranceContactID value
     * @return int|null
     */
    public function getInsuranceContactID()
    {
        return $this->insuranceContactID;
    }
    /**
     * Set insuranceContactID value
     * @param int $insuranceContactID
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setInsuranceContactID($insuranceContactID = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceContactID) && !is_numeric($insuranceContactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceContactID)), __LINE__);
        }
        $this->insuranceContactID = $insuranceContactID;
        return $this;
    }
    /**
     * Get insuranceID value
     * @return string|null
     */
    public function getInsuranceID()
    {
        return $this->insuranceID;
    }
    /**
     * Set insuranceID value
     * @param string $insuranceID
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setInsuranceID($insuranceID = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceID) && !is_string($insuranceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceID)), __LINE__);
        }
        $this->insuranceID = $insuranceID;
        return $this;
    }
    /**
     * Get insuranceType value
     * @return string|null
     */
    public function getInsuranceType()
    {
        return $this->insuranceType;
    }
    /**
     * Set insuranceType value
     * @param string $insuranceType
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setInsuranceType($insuranceType = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceType) && !is_string($insuranceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceType)), __LINE__);
        }
        $this->insuranceType = $insuranceType;
        return $this;
    }
    /**
     * Get notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @param string $notes
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->notes = $notes;
        return $this;
    }
    /**
     * Get policyNumber value
     * @return string|null
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }
    /**
     * Set policyNumber value
     * @param string $policyNumber
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyNumber)), __LINE__);
        }
        $this->policyNumber = $policyNumber;
        return $this;
    }
    /**
     * Get premiumAmount value
     * @return float|null
     */
    public function getPremiumAmount()
    {
        return $this->premiumAmount;
    }
    /**
     * Set premiumAmount value
     * @param float $premiumAmount
     * @return \StructType\BuildingInsuranceCarrier
     */
    public function setPremiumAmount($premiumAmount = null)
    {
        $this->premiumAmount = $premiumAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BuildingInsuranceCarrier
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
