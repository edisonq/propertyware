<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Applicant StructType
 * @subpackage Structs
 */
class Applicant extends Contact
{
    /**
     * The applicantType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $applicantType;
    /**
     * The currentResidenceAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceAddress;
    /**
     * The currentResidenceAddressCont
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceAddressCont;
    /**
     * The currentResidenceCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceCity;
    /**
     * The currentResidenceEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceEndDate;
    /**
     * The currentResidenceLandlordName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceLandlordName;
    /**
     * The currentResidenceLandlordPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceLandlordPhone;
    /**
     * The currentResidenceRent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceRent;
    /**
     * The currentResidenceRentPeriod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceRentPeriod;
    /**
     * The currentResidenceStartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceStartDate;
    /**
     * The currentResidenceState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceState;
    /**
     * The currentResidenceZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentResidenceZip;
    /**
     * The driversLicenseState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $driversLicenseState;
    /**
     * The employmentHistory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:EmploymentHistory[]
     * - ref: soapenc:arrayType
     * @var \StructType\EmploymentHistory[]
     */
    public $employmentHistory;
    /**
     * The maidenName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $maidenName;
    /**
     * The primaryContactSpouse
     * @var bool
     */
    public $primaryContactSpouse;
    /**
     * The question1
     * @var bool
     */
    public $question1;
    /**
     * The question2
     * @var bool
     */
    public $question2;
    /**
     * The question3
     * @var bool
     */
    public $question3;
    /**
     * The question4
     * @var bool
     */
    public $question4;
    /**
     * The referencesName1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referencesName1;
    /**
     * The referencesName2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referencesName2;
    /**
     * The referencesPhone1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referencesPhone1;
    /**
     * The referencesPhone2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referencesPhone2;
    /**
     * The residenceHistoryAddress
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryAddress;
    /**
     * The residenceHistoryAddressCont
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryAddressCont;
    /**
     * The residenceHistoryCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryCity;
    /**
     * The residenceHistoryEndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryEndDate;
    /**
     * The residenceHistoryLandlordName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryLandlordName;
    /**
     * The residenceHistoryLandlordPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryLandlordPhone;
    /**
     * The residenceHistoryPeriod
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryPeriod;
    /**
     * The residenceHistoryReasonForLeaving
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryReasonForLeaving;
    /**
     * The residenceHistoryRent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryRent;
    /**
     * The residenceHistoryStartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryStartDate;
    /**
     * The residenceHistoryState
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryState;
    /**
     * The residenceHistoryType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryType;
    /**
     * The residenceHistoryZip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $residenceHistoryZip;
    /**
     * Constructor method for Applicant
     * @uses Applicant::setApplicantType()
     * @uses Applicant::setCurrentResidenceAddress()
     * @uses Applicant::setCurrentResidenceAddressCont()
     * @uses Applicant::setCurrentResidenceCity()
     * @uses Applicant::setCurrentResidenceEndDate()
     * @uses Applicant::setCurrentResidenceLandlordName()
     * @uses Applicant::setCurrentResidenceLandlordPhone()
     * @uses Applicant::setCurrentResidenceRent()
     * @uses Applicant::setCurrentResidenceRentPeriod()
     * @uses Applicant::setCurrentResidenceStartDate()
     * @uses Applicant::setCurrentResidenceState()
     * @uses Applicant::setCurrentResidenceZip()
     * @uses Applicant::setDriversLicenseState()
     * @uses Applicant::setEmploymentHistory()
     * @uses Applicant::setMaidenName()
     * @uses Applicant::setPrimaryContactSpouse()
     * @uses Applicant::setQuestion1()
     * @uses Applicant::setQuestion2()
     * @uses Applicant::setQuestion3()
     * @uses Applicant::setQuestion4()
     * @uses Applicant::setReferencesName1()
     * @uses Applicant::setReferencesName2()
     * @uses Applicant::setReferencesPhone1()
     * @uses Applicant::setReferencesPhone2()
     * @uses Applicant::setResidenceHistoryAddress()
     * @uses Applicant::setResidenceHistoryAddressCont()
     * @uses Applicant::setResidenceHistoryCity()
     * @uses Applicant::setResidenceHistoryEndDate()
     * @uses Applicant::setResidenceHistoryLandlordName()
     * @uses Applicant::setResidenceHistoryLandlordPhone()
     * @uses Applicant::setResidenceHistoryPeriod()
     * @uses Applicant::setResidenceHistoryReasonForLeaving()
     * @uses Applicant::setResidenceHistoryRent()
     * @uses Applicant::setResidenceHistoryStartDate()
     * @uses Applicant::setResidenceHistoryState()
     * @uses Applicant::setResidenceHistoryType()
     * @uses Applicant::setResidenceHistoryZip()
     * @param string $applicantType
     * @param string $currentResidenceAddress
     * @param string $currentResidenceAddressCont
     * @param string $currentResidenceCity
     * @param string $currentResidenceEndDate
     * @param string $currentResidenceLandlordName
     * @param string $currentResidenceLandlordPhone
     * @param string $currentResidenceRent
     * @param string $currentResidenceRentPeriod
     * @param string $currentResidenceStartDate
     * @param string $currentResidenceState
     * @param string $currentResidenceZip
     * @param string $driversLicenseState
     * @param \StructType\EmploymentHistory[] $employmentHistory
     * @param string $maidenName
     * @param bool $primaryContactSpouse
     * @param bool $question1
     * @param bool $question2
     * @param bool $question3
     * @param bool $question4
     * @param string $referencesName1
     * @param string $referencesName2
     * @param string $referencesPhone1
     * @param string $referencesPhone2
     * @param string $residenceHistoryAddress
     * @param string $residenceHistoryAddressCont
     * @param string $residenceHistoryCity
     * @param string $residenceHistoryEndDate
     * @param string $residenceHistoryLandlordName
     * @param string $residenceHistoryLandlordPhone
     * @param string $residenceHistoryPeriod
     * @param string $residenceHistoryReasonForLeaving
     * @param string $residenceHistoryRent
     * @param string $residenceHistoryStartDate
     * @param string $residenceHistoryState
     * @param string $residenceHistoryType
     * @param string $residenceHistoryZip
     */
    public function __construct($applicantType = null, $currentResidenceAddress = null, $currentResidenceAddressCont = null, $currentResidenceCity = null, $currentResidenceEndDate = null, $currentResidenceLandlordName = null, $currentResidenceLandlordPhone = null, $currentResidenceRent = null, $currentResidenceRentPeriod = null, $currentResidenceStartDate = null, $currentResidenceState = null, $currentResidenceZip = null, $driversLicenseState = null, array $employmentHistory = array(), $maidenName = null, $primaryContactSpouse = null, $question1 = null, $question2 = null, $question3 = null, $question4 = null, $referencesName1 = null, $referencesName2 = null, $referencesPhone1 = null, $referencesPhone2 = null, $residenceHistoryAddress = null, $residenceHistoryAddressCont = null, $residenceHistoryCity = null, $residenceHistoryEndDate = null, $residenceHistoryLandlordName = null, $residenceHistoryLandlordPhone = null, $residenceHistoryPeriod = null, $residenceHistoryReasonForLeaving = null, $residenceHistoryRent = null, $residenceHistoryStartDate = null, $residenceHistoryState = null, $residenceHistoryType = null, $residenceHistoryZip = null)
    {
        $this
            ->setApplicantType($applicantType)
            ->setCurrentResidenceAddress($currentResidenceAddress)
            ->setCurrentResidenceAddressCont($currentResidenceAddressCont)
            ->setCurrentResidenceCity($currentResidenceCity)
            ->setCurrentResidenceEndDate($currentResidenceEndDate)
            ->setCurrentResidenceLandlordName($currentResidenceLandlordName)
            ->setCurrentResidenceLandlordPhone($currentResidenceLandlordPhone)
            ->setCurrentResidenceRent($currentResidenceRent)
            ->setCurrentResidenceRentPeriod($currentResidenceRentPeriod)
            ->setCurrentResidenceStartDate($currentResidenceStartDate)
            ->setCurrentResidenceState($currentResidenceState)
            ->setCurrentResidenceZip($currentResidenceZip)
            ->setDriversLicenseState($driversLicenseState)
            ->setEmploymentHistory($employmentHistory)
            ->setMaidenName($maidenName)
            ->setPrimaryContactSpouse($primaryContactSpouse)
            ->setQuestion1($question1)
            ->setQuestion2($question2)
            ->setQuestion3($question3)
            ->setQuestion4($question4)
            ->setReferencesName1($referencesName1)
            ->setReferencesName2($referencesName2)
            ->setReferencesPhone1($referencesPhone1)
            ->setReferencesPhone2($referencesPhone2)
            ->setResidenceHistoryAddress($residenceHistoryAddress)
            ->setResidenceHistoryAddressCont($residenceHistoryAddressCont)
            ->setResidenceHistoryCity($residenceHistoryCity)
            ->setResidenceHistoryEndDate($residenceHistoryEndDate)
            ->setResidenceHistoryLandlordName($residenceHistoryLandlordName)
            ->setResidenceHistoryLandlordPhone($residenceHistoryLandlordPhone)
            ->setResidenceHistoryPeriod($residenceHistoryPeriod)
            ->setResidenceHistoryReasonForLeaving($residenceHistoryReasonForLeaving)
            ->setResidenceHistoryRent($residenceHistoryRent)
            ->setResidenceHistoryStartDate($residenceHistoryStartDate)
            ->setResidenceHistoryState($residenceHistoryState)
            ->setResidenceHistoryType($residenceHistoryType)
            ->setResidenceHistoryZip($residenceHistoryZip);
    }
    /**
     * Get applicantType value
     * @return string|null
     */
    public function getApplicantType()
    {
        return $this->applicantType;
    }
    /**
     * Set applicantType value
     * @param string $applicantType
     * @return \StructType\Applicant
     */
    public function setApplicantType($applicantType = null)
    {
        // validation for constraint: string
        if (!is_null($applicantType) && !is_string($applicantType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicantType)), __LINE__);
        }
        $this->applicantType = $applicantType;
        return $this;
    }
    /**
     * Get currentResidenceAddress value
     * @return string|null
     */
    public function getCurrentResidenceAddress()
    {
        return $this->currentResidenceAddress;
    }
    /**
     * Set currentResidenceAddress value
     * @param string $currentResidenceAddress
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceAddress($currentResidenceAddress = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceAddress) && !is_string($currentResidenceAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceAddress)), __LINE__);
        }
        $this->currentResidenceAddress = $currentResidenceAddress;
        return $this;
    }
    /**
     * Get currentResidenceAddressCont value
     * @return string|null
     */
    public function getCurrentResidenceAddressCont()
    {
        return $this->currentResidenceAddressCont;
    }
    /**
     * Set currentResidenceAddressCont value
     * @param string $currentResidenceAddressCont
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceAddressCont($currentResidenceAddressCont = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceAddressCont) && !is_string($currentResidenceAddressCont)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceAddressCont)), __LINE__);
        }
        $this->currentResidenceAddressCont = $currentResidenceAddressCont;
        return $this;
    }
    /**
     * Get currentResidenceCity value
     * @return string|null
     */
    public function getCurrentResidenceCity()
    {
        return $this->currentResidenceCity;
    }
    /**
     * Set currentResidenceCity value
     * @param string $currentResidenceCity
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceCity($currentResidenceCity = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceCity) && !is_string($currentResidenceCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceCity)), __LINE__);
        }
        $this->currentResidenceCity = $currentResidenceCity;
        return $this;
    }
    /**
     * Get currentResidenceEndDate value
     * @return string|null
     */
    public function getCurrentResidenceEndDate()
    {
        return $this->currentResidenceEndDate;
    }
    /**
     * Set currentResidenceEndDate value
     * @param string $currentResidenceEndDate
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceEndDate($currentResidenceEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceEndDate) && !is_string($currentResidenceEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceEndDate)), __LINE__);
        }
        $this->currentResidenceEndDate = $currentResidenceEndDate;
        return $this;
    }
    /**
     * Get currentResidenceLandlordName value
     * @return string|null
     */
    public function getCurrentResidenceLandlordName()
    {
        return $this->currentResidenceLandlordName;
    }
    /**
     * Set currentResidenceLandlordName value
     * @param string $currentResidenceLandlordName
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceLandlordName($currentResidenceLandlordName = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceLandlordName) && !is_string($currentResidenceLandlordName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceLandlordName)), __LINE__);
        }
        $this->currentResidenceLandlordName = $currentResidenceLandlordName;
        return $this;
    }
    /**
     * Get currentResidenceLandlordPhone value
     * @return string|null
     */
    public function getCurrentResidenceLandlordPhone()
    {
        return $this->currentResidenceLandlordPhone;
    }
    /**
     * Set currentResidenceLandlordPhone value
     * @param string $currentResidenceLandlordPhone
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceLandlordPhone($currentResidenceLandlordPhone = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceLandlordPhone) && !is_string($currentResidenceLandlordPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceLandlordPhone)), __LINE__);
        }
        $this->currentResidenceLandlordPhone = $currentResidenceLandlordPhone;
        return $this;
    }
    /**
     * Get currentResidenceRent value
     * @return string|null
     */
    public function getCurrentResidenceRent()
    {
        return $this->currentResidenceRent;
    }
    /**
     * Set currentResidenceRent value
     * @param string $currentResidenceRent
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceRent($currentResidenceRent = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceRent) && !is_string($currentResidenceRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceRent)), __LINE__);
        }
        $this->currentResidenceRent = $currentResidenceRent;
        return $this;
    }
    /**
     * Get currentResidenceRentPeriod value
     * @return string|null
     */
    public function getCurrentResidenceRentPeriod()
    {
        return $this->currentResidenceRentPeriod;
    }
    /**
     * Set currentResidenceRentPeriod value
     * @param string $currentResidenceRentPeriod
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceRentPeriod($currentResidenceRentPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceRentPeriod) && !is_string($currentResidenceRentPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceRentPeriod)), __LINE__);
        }
        $this->currentResidenceRentPeriod = $currentResidenceRentPeriod;
        return $this;
    }
    /**
     * Get currentResidenceStartDate value
     * @return string|null
     */
    public function getCurrentResidenceStartDate()
    {
        return $this->currentResidenceStartDate;
    }
    /**
     * Set currentResidenceStartDate value
     * @param string $currentResidenceStartDate
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceStartDate($currentResidenceStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceStartDate) && !is_string($currentResidenceStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceStartDate)), __LINE__);
        }
        $this->currentResidenceStartDate = $currentResidenceStartDate;
        return $this;
    }
    /**
     * Get currentResidenceState value
     * @return string|null
     */
    public function getCurrentResidenceState()
    {
        return $this->currentResidenceState;
    }
    /**
     * Set currentResidenceState value
     * @param string $currentResidenceState
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceState($currentResidenceState = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceState) && !is_string($currentResidenceState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceState)), __LINE__);
        }
        $this->currentResidenceState = $currentResidenceState;
        return $this;
    }
    /**
     * Get currentResidenceZip value
     * @return string|null
     */
    public function getCurrentResidenceZip()
    {
        return $this->currentResidenceZip;
    }
    /**
     * Set currentResidenceZip value
     * @param string $currentResidenceZip
     * @return \StructType\Applicant
     */
    public function setCurrentResidenceZip($currentResidenceZip = null)
    {
        // validation for constraint: string
        if (!is_null($currentResidenceZip) && !is_string($currentResidenceZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentResidenceZip)), __LINE__);
        }
        $this->currentResidenceZip = $currentResidenceZip;
        return $this;
    }
    /**
     * Get driversLicenseState value
     * @return string|null
     */
    public function getDriversLicenseState()
    {
        return $this->driversLicenseState;
    }
    /**
     * Set driversLicenseState value
     * @param string $driversLicenseState
     * @return \StructType\Applicant
     */
    public function setDriversLicenseState($driversLicenseState = null)
    {
        // validation for constraint: string
        if (!is_null($driversLicenseState) && !is_string($driversLicenseState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driversLicenseState)), __LINE__);
        }
        $this->driversLicenseState = $driversLicenseState;
        return $this;
    }
    /**
     * Get employmentHistory value
     * @return \StructType\EmploymentHistory[]|null
     */
    public function getEmploymentHistory()
    {
        return $this->employmentHistory;
    }
    /**
     * Set employmentHistory value
     * @throws \InvalidArgumentException
     * @param \StructType\EmploymentHistory[] $employmentHistory
     * @return \StructType\Applicant
     */
    public function setEmploymentHistory(array $employmentHistory = array())
    {
        foreach ($employmentHistory as $applicantEmploymentHistoryItem) {
            // validation for constraint: itemType
            if (!$applicantEmploymentHistoryItem instanceof \StructType\EmploymentHistory) {
                throw new \InvalidArgumentException(sprintf('The employmentHistory property can only contain items of \StructType\EmploymentHistory, "%s" given', is_object($applicantEmploymentHistoryItem) ? get_class($applicantEmploymentHistoryItem) : gettype($applicantEmploymentHistoryItem)), __LINE__);
            }
        }
        $this->employmentHistory = $employmentHistory;
        return $this;
    }
    /**
     * Add item to employmentHistory value
     * @throws \InvalidArgumentException
     * @param \StructType\EmploymentHistory $item
     * @return \StructType\Applicant
     */
    public function addToEmploymentHistory(\StructType\EmploymentHistory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmploymentHistory) {
            throw new \InvalidArgumentException(sprintf('The employmentHistory property can only contain items of \StructType\EmploymentHistory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->employmentHistory[] = $item;
        return $this;
    }
    /**
     * Get maidenName value
     * @return string|null
     */
    public function getMaidenName()
    {
        return $this->maidenName;
    }
    /**
     * Set maidenName value
     * @param string $maidenName
     * @return \StructType\Applicant
     */
    public function setMaidenName($maidenName = null)
    {
        // validation for constraint: string
        if (!is_null($maidenName) && !is_string($maidenName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maidenName)), __LINE__);
        }
        $this->maidenName = $maidenName;
        return $this;
    }
    /**
     * Get primaryContactSpouse value
     * @return bool|null
     */
    public function getPrimaryContactSpouse()
    {
        return $this->primaryContactSpouse;
    }
    /**
     * Set primaryContactSpouse value
     * @param bool $primaryContactSpouse
     * @return \StructType\Applicant
     */
    public function setPrimaryContactSpouse($primaryContactSpouse = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryContactSpouse) && !is_bool($primaryContactSpouse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryContactSpouse)), __LINE__);
        }
        $this->primaryContactSpouse = $primaryContactSpouse;
        return $this;
    }
    /**
     * Get question1 value
     * @return bool|null
     */
    public function getQuestion1()
    {
        return $this->question1;
    }
    /**
     * Set question1 value
     * @param bool $question1
     * @return \StructType\Applicant
     */
    public function setQuestion1($question1 = null)
    {
        // validation for constraint: boolean
        if (!is_null($question1) && !is_bool($question1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($question1)), __LINE__);
        }
        $this->question1 = $question1;
        return $this;
    }
    /**
     * Get question2 value
     * @return bool|null
     */
    public function getQuestion2()
    {
        return $this->question2;
    }
    /**
     * Set question2 value
     * @param bool $question2
     * @return \StructType\Applicant
     */
    public function setQuestion2($question2 = null)
    {
        // validation for constraint: boolean
        if (!is_null($question2) && !is_bool($question2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($question2)), __LINE__);
        }
        $this->question2 = $question2;
        return $this;
    }
    /**
     * Get question3 value
     * @return bool|null
     */
    public function getQuestion3()
    {
        return $this->question3;
    }
    /**
     * Set question3 value
     * @param bool $question3
     * @return \StructType\Applicant
     */
    public function setQuestion3($question3 = null)
    {
        // validation for constraint: boolean
        if (!is_null($question3) && !is_bool($question3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($question3)), __LINE__);
        }
        $this->question3 = $question3;
        return $this;
    }
    /**
     * Get question4 value
     * @return bool|null
     */
    public function getQuestion4()
    {
        return $this->question4;
    }
    /**
     * Set question4 value
     * @param bool $question4
     * @return \StructType\Applicant
     */
    public function setQuestion4($question4 = null)
    {
        // validation for constraint: boolean
        if (!is_null($question4) && !is_bool($question4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($question4)), __LINE__);
        }
        $this->question4 = $question4;
        return $this;
    }
    /**
     * Get referencesName1 value
     * @return string|null
     */
    public function getReferencesName1()
    {
        return $this->referencesName1;
    }
    /**
     * Set referencesName1 value
     * @param string $referencesName1
     * @return \StructType\Applicant
     */
    public function setReferencesName1($referencesName1 = null)
    {
        // validation for constraint: string
        if (!is_null($referencesName1) && !is_string($referencesName1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referencesName1)), __LINE__);
        }
        $this->referencesName1 = $referencesName1;
        return $this;
    }
    /**
     * Get referencesName2 value
     * @return string|null
     */
    public function getReferencesName2()
    {
        return $this->referencesName2;
    }
    /**
     * Set referencesName2 value
     * @param string $referencesName2
     * @return \StructType\Applicant
     */
    public function setReferencesName2($referencesName2 = null)
    {
        // validation for constraint: string
        if (!is_null($referencesName2) && !is_string($referencesName2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referencesName2)), __LINE__);
        }
        $this->referencesName2 = $referencesName2;
        return $this;
    }
    /**
     * Get referencesPhone1 value
     * @return string|null
     */
    public function getReferencesPhone1()
    {
        return $this->referencesPhone1;
    }
    /**
     * Set referencesPhone1 value
     * @param string $referencesPhone1
     * @return \StructType\Applicant
     */
    public function setReferencesPhone1($referencesPhone1 = null)
    {
        // validation for constraint: string
        if (!is_null($referencesPhone1) && !is_string($referencesPhone1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referencesPhone1)), __LINE__);
        }
        $this->referencesPhone1 = $referencesPhone1;
        return $this;
    }
    /**
     * Get referencesPhone2 value
     * @return string|null
     */
    public function getReferencesPhone2()
    {
        return $this->referencesPhone2;
    }
    /**
     * Set referencesPhone2 value
     * @param string $referencesPhone2
     * @return \StructType\Applicant
     */
    public function setReferencesPhone2($referencesPhone2 = null)
    {
        // validation for constraint: string
        if (!is_null($referencesPhone2) && !is_string($referencesPhone2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referencesPhone2)), __LINE__);
        }
        $this->referencesPhone2 = $referencesPhone2;
        return $this;
    }
    /**
     * Get residenceHistoryAddress value
     * @return string|null
     */
    public function getResidenceHistoryAddress()
    {
        return $this->residenceHistoryAddress;
    }
    /**
     * Set residenceHistoryAddress value
     * @param string $residenceHistoryAddress
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryAddress($residenceHistoryAddress = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryAddress) && !is_string($residenceHistoryAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryAddress)), __LINE__);
        }
        $this->residenceHistoryAddress = $residenceHistoryAddress;
        return $this;
    }
    /**
     * Get residenceHistoryAddressCont value
     * @return string|null
     */
    public function getResidenceHistoryAddressCont()
    {
        return $this->residenceHistoryAddressCont;
    }
    /**
     * Set residenceHistoryAddressCont value
     * @param string $residenceHistoryAddressCont
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryAddressCont($residenceHistoryAddressCont = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryAddressCont) && !is_string($residenceHistoryAddressCont)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryAddressCont)), __LINE__);
        }
        $this->residenceHistoryAddressCont = $residenceHistoryAddressCont;
        return $this;
    }
    /**
     * Get residenceHistoryCity value
     * @return string|null
     */
    public function getResidenceHistoryCity()
    {
        return $this->residenceHistoryCity;
    }
    /**
     * Set residenceHistoryCity value
     * @param string $residenceHistoryCity
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryCity($residenceHistoryCity = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryCity) && !is_string($residenceHistoryCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryCity)), __LINE__);
        }
        $this->residenceHistoryCity = $residenceHistoryCity;
        return $this;
    }
    /**
     * Get residenceHistoryEndDate value
     * @return string|null
     */
    public function getResidenceHistoryEndDate()
    {
        return $this->residenceHistoryEndDate;
    }
    /**
     * Set residenceHistoryEndDate value
     * @param string $residenceHistoryEndDate
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryEndDate($residenceHistoryEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryEndDate) && !is_string($residenceHistoryEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryEndDate)), __LINE__);
        }
        $this->residenceHistoryEndDate = $residenceHistoryEndDate;
        return $this;
    }
    /**
     * Get residenceHistoryLandlordName value
     * @return string|null
     */
    public function getResidenceHistoryLandlordName()
    {
        return $this->residenceHistoryLandlordName;
    }
    /**
     * Set residenceHistoryLandlordName value
     * @param string $residenceHistoryLandlordName
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryLandlordName($residenceHistoryLandlordName = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryLandlordName) && !is_string($residenceHistoryLandlordName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryLandlordName)), __LINE__);
        }
        $this->residenceHistoryLandlordName = $residenceHistoryLandlordName;
        return $this;
    }
    /**
     * Get residenceHistoryLandlordPhone value
     * @return string|null
     */
    public function getResidenceHistoryLandlordPhone()
    {
        return $this->residenceHistoryLandlordPhone;
    }
    /**
     * Set residenceHistoryLandlordPhone value
     * @param string $residenceHistoryLandlordPhone
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryLandlordPhone($residenceHistoryLandlordPhone = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryLandlordPhone) && !is_string($residenceHistoryLandlordPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryLandlordPhone)), __LINE__);
        }
        $this->residenceHistoryLandlordPhone = $residenceHistoryLandlordPhone;
        return $this;
    }
    /**
     * Get residenceHistoryPeriod value
     * @return string|null
     */
    public function getResidenceHistoryPeriod()
    {
        return $this->residenceHistoryPeriod;
    }
    /**
     * Set residenceHistoryPeriod value
     * @param string $residenceHistoryPeriod
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryPeriod($residenceHistoryPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryPeriod) && !is_string($residenceHistoryPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryPeriod)), __LINE__);
        }
        $this->residenceHistoryPeriod = $residenceHistoryPeriod;
        return $this;
    }
    /**
     * Get residenceHistoryReasonForLeaving value
     * @return string|null
     */
    public function getResidenceHistoryReasonForLeaving()
    {
        return $this->residenceHistoryReasonForLeaving;
    }
    /**
     * Set residenceHistoryReasonForLeaving value
     * @param string $residenceHistoryReasonForLeaving
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryReasonForLeaving($residenceHistoryReasonForLeaving = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryReasonForLeaving) && !is_string($residenceHistoryReasonForLeaving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryReasonForLeaving)), __LINE__);
        }
        $this->residenceHistoryReasonForLeaving = $residenceHistoryReasonForLeaving;
        return $this;
    }
    /**
     * Get residenceHistoryRent value
     * @return string|null
     */
    public function getResidenceHistoryRent()
    {
        return $this->residenceHistoryRent;
    }
    /**
     * Set residenceHistoryRent value
     * @param string $residenceHistoryRent
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryRent($residenceHistoryRent = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryRent) && !is_string($residenceHistoryRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryRent)), __LINE__);
        }
        $this->residenceHistoryRent = $residenceHistoryRent;
        return $this;
    }
    /**
     * Get residenceHistoryStartDate value
     * @return string|null
     */
    public function getResidenceHistoryStartDate()
    {
        return $this->residenceHistoryStartDate;
    }
    /**
     * Set residenceHistoryStartDate value
     * @param string $residenceHistoryStartDate
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryStartDate($residenceHistoryStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryStartDate) && !is_string($residenceHistoryStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryStartDate)), __LINE__);
        }
        $this->residenceHistoryStartDate = $residenceHistoryStartDate;
        return $this;
    }
    /**
     * Get residenceHistoryState value
     * @return string|null
     */
    public function getResidenceHistoryState()
    {
        return $this->residenceHistoryState;
    }
    /**
     * Set residenceHistoryState value
     * @param string $residenceHistoryState
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryState($residenceHistoryState = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryState) && !is_string($residenceHistoryState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryState)), __LINE__);
        }
        $this->residenceHistoryState = $residenceHistoryState;
        return $this;
    }
    /**
     * Get residenceHistoryType value
     * @return string|null
     */
    public function getResidenceHistoryType()
    {
        return $this->residenceHistoryType;
    }
    /**
     * Set residenceHistoryType value
     * @param string $residenceHistoryType
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryType($residenceHistoryType = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryType) && !is_string($residenceHistoryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryType)), __LINE__);
        }
        $this->residenceHistoryType = $residenceHistoryType;
        return $this;
    }
    /**
     * Get residenceHistoryZip value
     * @return string|null
     */
    public function getResidenceHistoryZip()
    {
        return $this->residenceHistoryZip;
    }
    /**
     * Set residenceHistoryZip value
     * @param string $residenceHistoryZip
     * @return \StructType\Applicant
     */
    public function setResidenceHistoryZip($residenceHistoryZip = null)
    {
        // validation for constraint: string
        if (!is_null($residenceHistoryZip) && !is_string($residenceHistoryZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residenceHistoryZip)), __LINE__);
        }
        $this->residenceHistoryZip = $residenceHistoryZip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Applicant
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
