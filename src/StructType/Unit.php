<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Unit StructType
 * @subpackage Structs
 */
class Unit extends AbstractDocumentHolder
{
    /**
     * The abbreviation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abbreviation;
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The address2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address2;
    /**
     * The areaUnits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $areaUnits;
    /**
     * The availableDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $availableDate;
    /**
     * The buildingID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $buildingID;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The county
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $county;
    /**
     * The customFields
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:CustomField[]
     * - ref: soapenc:arrayType
     * @var \StructType\CustomField[]
     */
    public $customFields;
    /**
     * The drivingDirections
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $drivingDirections;
    /**
     * The featured
     * @var bool
     */
    public $featured;
    /**
     * The featuredForRent
     * @var bool
     */
    public $featuredForRent;
    /**
     * The featuredForSale
     * @var bool
     */
    public $featuredForSale;
    /**
     * The floorNumber
     * @var int
     */
    public $floorNumber;
    /**
     * The forSale
     * @var bool
     */
    public $forSale;
    /**
     * The latitude
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $latitude;
    /**
     * The leaseTerms
     * @var int
     */
    public $leaseTerms;
    /**
     * The leaseTermsUnits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leaseTermsUnits;
    /**
     * The leasingAgents
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $leasingAgents;
    /**
     * The longitude
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $longitude;
    /**
     * The maintenanceNotice
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $maintenanceNotice;
    /**
     * The marketingName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $marketingName;
    /**
     * The mlsLeaseNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mlsLeaseNumber;
    /**
     * The mlsNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mlsNumber;
    /**
     * The multiUnit
     * @var bool
     */
    public $multiUnit;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The neighborhood
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $neighborhood;
    /**
     * The numberBathrooms
     * @var float
     */
    public $numberBathrooms;
    /**
     * The numberBedrooms
     * @var int
     */
    public $numberBedrooms;
    /**
     * The numberFloors
     * @var int
     */
    public $numberFloors;
    /**
     * The otherTenantCharges
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $otherTenantCharges;
    /**
     * The parcelNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $parcelNumber;
    /**
     * The petsAllowed
     * @var bool
     */
    public $petsAllowed;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $portfolio;
    /**
     * The postingTitle
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $postingTitle;
    /**
     * The published
     * @var bool
     */
    public $published;
    /**
     * The publishedForRent
     * @var bool
     */
    public $publishedForRent;
    /**
     * The publishedForSale
     * @var bool
     */
    public $publishedForSale;
    /**
     * The ready
     * @var bool
     */
    public $ready;
    /**
     * The salePrice
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $salePrice;
    /**
     * The saleTerms
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $saleTerms;
    /**
     * The searchTag
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $searchTag;
    /**
     * The shortDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shortDescription;
    /**
     * The smokingAllowed
     * @var bool
     */
    public $smokingAllowed;
    /**
     * The specials
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $specials;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The syndicate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $syndicate;
    /**
     * The targetDeposit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetDeposit;
    /**
     * The targetRent
     * @var float
     */
    public $targetRent;
    /**
     * The targetRentUnits
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetRentUnits;
    /**
     * The totalArea
     * @var float
     */
    public $totalArea;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The unitAmenities
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unitAmenities;
    /**
     * The website
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $website;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * Constructor method for Unit
     * @uses Unit::setAbbreviation()
     * @uses Unit::setActive()
     * @uses Unit::setAddress()
     * @uses Unit::setAddress2()
     * @uses Unit::setAreaUnits()
     * @uses Unit::setAvailableDate()
     * @uses Unit::setBuildingID()
     * @uses Unit::setCategory()
     * @uses Unit::setCity()
     * @uses Unit::setComments()
     * @uses Unit::setCountry()
     * @uses Unit::setCounty()
     * @uses Unit::setCustomFields()
     * @uses Unit::setDrivingDirections()
     * @uses Unit::setFeatured()
     * @uses Unit::setFeaturedForRent()
     * @uses Unit::setFeaturedForSale()
     * @uses Unit::setFloorNumber()
     * @uses Unit::setForSale()
     * @uses Unit::setLatitude()
     * @uses Unit::setLeaseTerms()
     * @uses Unit::setLeaseTermsUnits()
     * @uses Unit::setLeasingAgents()
     * @uses Unit::setLongitude()
     * @uses Unit::setMaintenanceNotice()
     * @uses Unit::setMarketingName()
     * @uses Unit::setMlsLeaseNumber()
     * @uses Unit::setMlsNumber()
     * @uses Unit::setMultiUnit()
     * @uses Unit::setName()
     * @uses Unit::setNeighborhood()
     * @uses Unit::setNumberBathrooms()
     * @uses Unit::setNumberBedrooms()
     * @uses Unit::setNumberFloors()
     * @uses Unit::setOtherTenantCharges()
     * @uses Unit::setParcelNumber()
     * @uses Unit::setPetsAllowed()
     * @uses Unit::setPortfolio()
     * @uses Unit::setPostingTitle()
     * @uses Unit::setPublished()
     * @uses Unit::setPublishedForRent()
     * @uses Unit::setPublishedForSale()
     * @uses Unit::setReady()
     * @uses Unit::setSalePrice()
     * @uses Unit::setSaleTerms()
     * @uses Unit::setSearchTag()
     * @uses Unit::setShortDescription()
     * @uses Unit::setSmokingAllowed()
     * @uses Unit::setSpecials()
     * @uses Unit::setState()
     * @uses Unit::setStatus()
     * @uses Unit::setSyndicate()
     * @uses Unit::setTargetDeposit()
     * @uses Unit::setTargetRent()
     * @uses Unit::setTargetRentUnits()
     * @uses Unit::setTotalArea()
     * @uses Unit::setType()
     * @uses Unit::setUnitAmenities()
     * @uses Unit::setWebsite()
     * @uses Unit::setZip()
     * @param string $abbreviation
     * @param bool $active
     * @param string $address
     * @param string $address2
     * @param string $areaUnits
     * @param string $availableDate
     * @param int $buildingID
     * @param string $category
     * @param string $city
     * @param string $comments
     * @param string $country
     * @param string $county
     * @param \StructType\CustomField[] $customFields
     * @param string $drivingDirections
     * @param bool $featured
     * @param bool $featuredForRent
     * @param bool $featuredForSale
     * @param int $floorNumber
     * @param bool $forSale
     * @param float $latitude
     * @param int $leaseTerms
     * @param string $leaseTermsUnits
     * @param string $leasingAgents
     * @param float $longitude
     * @param string $maintenanceNotice
     * @param string $marketingName
     * @param string $mlsLeaseNumber
     * @param string $mlsNumber
     * @param bool $multiUnit
     * @param string $name
     * @param string $neighborhood
     * @param float $numberBathrooms
     * @param int $numberBedrooms
     * @param int $numberFloors
     * @param string $otherTenantCharges
     * @param string $parcelNumber
     * @param bool $petsAllowed
     * @param string $portfolio
     * @param string $postingTitle
     * @param bool $published
     * @param bool $publishedForRent
     * @param bool $publishedForSale
     * @param bool $ready
     * @param float $salePrice
     * @param string $saleTerms
     * @param string $searchTag
     * @param string $shortDescription
     * @param bool $smokingAllowed
     * @param string $specials
     * @param string $state
     * @param string $status
     * @param string $syndicate
     * @param string $targetDeposit
     * @param float $targetRent
     * @param string $targetRentUnits
     * @param float $totalArea
     * @param string $type
     * @param string $unitAmenities
     * @param string $website
     * @param string $zip
     */
    public function __construct($abbreviation = null, $active = null, $address = null, $address2 = null, $areaUnits = null, $availableDate = null, $buildingID = null, $category = null, $city = null, $comments = null, $country = null, $county = null, array $customFields = array(), $drivingDirections = null, $featured = null, $featuredForRent = null, $featuredForSale = null, $floorNumber = null, $forSale = null, $latitude = null, $leaseTerms = null, $leaseTermsUnits = null, $leasingAgents = null, $longitude = null, $maintenanceNotice = null, $marketingName = null, $mlsLeaseNumber = null, $mlsNumber = null, $multiUnit = null, $name = null, $neighborhood = null, $numberBathrooms = null, $numberBedrooms = null, $numberFloors = null, $otherTenantCharges = null, $parcelNumber = null, $petsAllowed = null, $portfolio = null, $postingTitle = null, $published = null, $publishedForRent = null, $publishedForSale = null, $ready = null, $salePrice = null, $saleTerms = null, $searchTag = null, $shortDescription = null, $smokingAllowed = null, $specials = null, $state = null, $status = null, $syndicate = null, $targetDeposit = null, $targetRent = null, $targetRentUnits = null, $totalArea = null, $type = null, $unitAmenities = null, $website = null, $zip = null)
    {
        $this
            ->setAbbreviation($abbreviation)
            ->setActive($active)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setAreaUnits($areaUnits)
            ->setAvailableDate($availableDate)
            ->setBuildingID($buildingID)
            ->setCategory($category)
            ->setCity($city)
            ->setComments($comments)
            ->setCountry($country)
            ->setCounty($county)
            ->setCustomFields($customFields)
            ->setDrivingDirections($drivingDirections)
            ->setFeatured($featured)
            ->setFeaturedForRent($featuredForRent)
            ->setFeaturedForSale($featuredForSale)
            ->setFloorNumber($floorNumber)
            ->setForSale($forSale)
            ->setLatitude($latitude)
            ->setLeaseTerms($leaseTerms)
            ->setLeaseTermsUnits($leaseTermsUnits)
            ->setLeasingAgents($leasingAgents)
            ->setLongitude($longitude)
            ->setMaintenanceNotice($maintenanceNotice)
            ->setMarketingName($marketingName)
            ->setMlsLeaseNumber($mlsLeaseNumber)
            ->setMlsNumber($mlsNumber)
            ->setMultiUnit($multiUnit)
            ->setName($name)
            ->setNeighborhood($neighborhood)
            ->setNumberBathrooms($numberBathrooms)
            ->setNumberBedrooms($numberBedrooms)
            ->setNumberFloors($numberFloors)
            ->setOtherTenantCharges($otherTenantCharges)
            ->setParcelNumber($parcelNumber)
            ->setPetsAllowed($petsAllowed)
            ->setPortfolio($portfolio)
            ->setPostingTitle($postingTitle)
            ->setPublished($published)
            ->setPublishedForRent($publishedForRent)
            ->setPublishedForSale($publishedForSale)
            ->setReady($ready)
            ->setSalePrice($salePrice)
            ->setSaleTerms($saleTerms)
            ->setSearchTag($searchTag)
            ->setShortDescription($shortDescription)
            ->setSmokingAllowed($smokingAllowed)
            ->setSpecials($specials)
            ->setState($state)
            ->setStatus($status)
            ->setSyndicate($syndicate)
            ->setTargetDeposit($targetDeposit)
            ->setTargetRent($targetRent)
            ->setTargetRentUnits($targetRentUnits)
            ->setTotalArea($totalArea)
            ->setType($type)
            ->setUnitAmenities($unitAmenities)
            ->setWebsite($website)
            ->setZip($zip);
    }
    /**
     * Get abbreviation value
     * @return string|null
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
    /**
     * Set abbreviation value
     * @param string $abbreviation
     * @return \StructType\Unit
     */
    public function setAbbreviation($abbreviation = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviation) && !is_string($abbreviation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abbreviation)), __LINE__);
        }
        $this->abbreviation = $abbreviation;
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \StructType\Unit
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \StructType\Unit
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }
    /**
     * Set address2 value
     * @param string $address2
     * @return \StructType\Unit
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->address2 = $address2;
        return $this;
    }
    /**
     * Get areaUnits value
     * @return string|null
     */
    public function getAreaUnits()
    {
        return $this->areaUnits;
    }
    /**
     * Set areaUnits value
     * @param string $areaUnits
     * @return \StructType\Unit
     */
    public function setAreaUnits($areaUnits = null)
    {
        // validation for constraint: string
        if (!is_null($areaUnits) && !is_string($areaUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaUnits)), __LINE__);
        }
        $this->areaUnits = $areaUnits;
        return $this;
    }
    /**
     * Get availableDate value
     * @return string|null
     */
    public function getAvailableDate()
    {
        return $this->availableDate;
    }
    /**
     * Set availableDate value
     * @param string $availableDate
     * @return \StructType\Unit
     */
    public function setAvailableDate($availableDate = null)
    {
        // validation for constraint: string
        if (!is_null($availableDate) && !is_string($availableDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availableDate)), __LINE__);
        }
        $this->availableDate = $availableDate;
        return $this;
    }
    /**
     * Get buildingID value
     * @return int|null
     */
    public function getBuildingID()
    {
        return $this->buildingID;
    }
    /**
     * Set buildingID value
     * @param int $buildingID
     * @return \StructType\Unit
     */
    public function setBuildingID($buildingID = null)
    {
        // validation for constraint: int
        if (!is_null($buildingID) && !is_numeric($buildingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingID)), __LINE__);
        }
        $this->buildingID = $buildingID;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \StructType\Unit
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \StructType\Unit
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \StructType\Unit
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \StructType\Unit
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get county value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->county;
    }
    /**
     * Set county value
     * @param string $county
     * @return \StructType\Unit
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        $this->county = $county;
        return $this;
    }
    /**
     * Get customFields value
     * @return \StructType\CustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }
    /**
     * Set customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField[] $customFields
     * @return \StructType\Unit
     */
    public function setCustomFields(array $customFields = array())
    {
        foreach ($customFields as $unitCustomFieldsItem) {
            // validation for constraint: itemType
            if (!$unitCustomFieldsItem instanceof \StructType\CustomField) {
                throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($unitCustomFieldsItem) ? get_class($unitCustomFieldsItem) : gettype($unitCustomFieldsItem)), __LINE__);
            }
        }
        $this->customFields = $customFields;
        return $this;
    }
    /**
     * Add item to customFields value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomField $item
     * @return \StructType\Unit
     */
    public function addToCustomFields(\StructType\CustomField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomField) {
            throw new \InvalidArgumentException(sprintf('The customFields property can only contain items of \StructType\CustomField, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->customFields[] = $item;
        return $this;
    }
    /**
     * Get drivingDirections value
     * @return string|null
     */
    public function getDrivingDirections()
    {
        return $this->drivingDirections;
    }
    /**
     * Set drivingDirections value
     * @param string $drivingDirections
     * @return \StructType\Unit
     */
    public function setDrivingDirections($drivingDirections = null)
    {
        // validation for constraint: string
        if (!is_null($drivingDirections) && !is_string($drivingDirections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($drivingDirections)), __LINE__);
        }
        $this->drivingDirections = $drivingDirections;
        return $this;
    }
    /**
     * Get featured value
     * @return bool|null
     */
    public function getFeatured()
    {
        return $this->featured;
    }
    /**
     * Set featured value
     * @param bool $featured
     * @return \StructType\Unit
     */
    public function setFeatured($featured = null)
    {
        // validation for constraint: boolean
        if (!is_null($featured) && !is_bool($featured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($featured)), __LINE__);
        }
        $this->featured = $featured;
        return $this;
    }
    /**
     * Get featuredForRent value
     * @return bool|null
     */
    public function getFeaturedForRent()
    {
        return $this->featuredForRent;
    }
    /**
     * Set featuredForRent value
     * @param bool $featuredForRent
     * @return \StructType\Unit
     */
    public function setFeaturedForRent($featuredForRent = null)
    {
        // validation for constraint: boolean
        if (!is_null($featuredForRent) && !is_bool($featuredForRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($featuredForRent)), __LINE__);
        }
        $this->featuredForRent = $featuredForRent;
        return $this;
    }
    /**
     * Get featuredForSale value
     * @return bool|null
     */
    public function getFeaturedForSale()
    {
        return $this->featuredForSale;
    }
    /**
     * Set featuredForSale value
     * @param bool $featuredForSale
     * @return \StructType\Unit
     */
    public function setFeaturedForSale($featuredForSale = null)
    {
        // validation for constraint: boolean
        if (!is_null($featuredForSale) && !is_bool($featuredForSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($featuredForSale)), __LINE__);
        }
        $this->featuredForSale = $featuredForSale;
        return $this;
    }
    /**
     * Get floorNumber value
     * @return int|null
     */
    public function getFloorNumber()
    {
        return $this->floorNumber;
    }
    /**
     * Set floorNumber value
     * @param int $floorNumber
     * @return \StructType\Unit
     */
    public function setFloorNumber($floorNumber = null)
    {
        // validation for constraint: int
        if (!is_null($floorNumber) && !is_numeric($floorNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($floorNumber)), __LINE__);
        }
        $this->floorNumber = $floorNumber;
        return $this;
    }
    /**
     * Get forSale value
     * @return bool|null
     */
    public function getForSale()
    {
        return $this->forSale;
    }
    /**
     * Set forSale value
     * @param bool $forSale
     * @return \StructType\Unit
     */
    public function setForSale($forSale = null)
    {
        // validation for constraint: boolean
        if (!is_null($forSale) && !is_bool($forSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forSale)), __LINE__);
        }
        $this->forSale = $forSale;
        return $this;
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \StructType\Unit
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get leaseTerms value
     * @return int|null
     */
    public function getLeaseTerms()
    {
        return $this->leaseTerms;
    }
    /**
     * Set leaseTerms value
     * @param int $leaseTerms
     * @return \StructType\Unit
     */
    public function setLeaseTerms($leaseTerms = null)
    {
        // validation for constraint: int
        if (!is_null($leaseTerms) && !is_numeric($leaseTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leaseTerms)), __LINE__);
        }
        $this->leaseTerms = $leaseTerms;
        return $this;
    }
    /**
     * Get leaseTermsUnits value
     * @return string|null
     */
    public function getLeaseTermsUnits()
    {
        return $this->leaseTermsUnits;
    }
    /**
     * Set leaseTermsUnits value
     * @param string $leaseTermsUnits
     * @return \StructType\Unit
     */
    public function setLeaseTermsUnits($leaseTermsUnits = null)
    {
        // validation for constraint: string
        if (!is_null($leaseTermsUnits) && !is_string($leaseTermsUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leaseTermsUnits)), __LINE__);
        }
        $this->leaseTermsUnits = $leaseTermsUnits;
        return $this;
    }
    /**
     * Get leasingAgents value
     * @return string|null
     */
    public function getLeasingAgents()
    {
        return $this->leasingAgents;
    }
    /**
     * Set leasingAgents value
     * @param string $leasingAgents
     * @return \StructType\Unit
     */
    public function setLeasingAgents($leasingAgents = null)
    {
        // validation for constraint: string
        if (!is_null($leasingAgents) && !is_string($leasingAgents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leasingAgents)), __LINE__);
        }
        $this->leasingAgents = $leasingAgents;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \StructType\Unit
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get maintenanceNotice value
     * @return string|null
     */
    public function getMaintenanceNotice()
    {
        return $this->maintenanceNotice;
    }
    /**
     * Set maintenanceNotice value
     * @param string $maintenanceNotice
     * @return \StructType\Unit
     */
    public function setMaintenanceNotice($maintenanceNotice = null)
    {
        // validation for constraint: string
        if (!is_null($maintenanceNotice) && !is_string($maintenanceNotice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maintenanceNotice)), __LINE__);
        }
        $this->maintenanceNotice = $maintenanceNotice;
        return $this;
    }
    /**
     * Get marketingName value
     * @return string|null
     */
    public function getMarketingName()
    {
        return $this->marketingName;
    }
    /**
     * Set marketingName value
     * @param string $marketingName
     * @return \StructType\Unit
     */
    public function setMarketingName($marketingName = null)
    {
        // validation for constraint: string
        if (!is_null($marketingName) && !is_string($marketingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingName)), __LINE__);
        }
        $this->marketingName = $marketingName;
        return $this;
    }
    /**
     * Get mlsLeaseNumber value
     * @return string|null
     */
    public function getMlsLeaseNumber()
    {
        return $this->mlsLeaseNumber;
    }
    /**
     * Set mlsLeaseNumber value
     * @param string $mlsLeaseNumber
     * @return \StructType\Unit
     */
    public function setMlsLeaseNumber($mlsLeaseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($mlsLeaseNumber) && !is_string($mlsLeaseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mlsLeaseNumber)), __LINE__);
        }
        $this->mlsLeaseNumber = $mlsLeaseNumber;
        return $this;
    }
    /**
     * Get mlsNumber value
     * @return string|null
     */
    public function getMlsNumber()
    {
        return $this->mlsNumber;
    }
    /**
     * Set mlsNumber value
     * @param string $mlsNumber
     * @return \StructType\Unit
     */
    public function setMlsNumber($mlsNumber = null)
    {
        // validation for constraint: string
        if (!is_null($mlsNumber) && !is_string($mlsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mlsNumber)), __LINE__);
        }
        $this->mlsNumber = $mlsNumber;
        return $this;
    }
    /**
     * Get multiUnit value
     * @return bool|null
     */
    public function getMultiUnit()
    {
        return $this->multiUnit;
    }
    /**
     * Set multiUnit value
     * @param bool $multiUnit
     * @return \StructType\Unit
     */
    public function setMultiUnit($multiUnit = null)
    {
        // validation for constraint: boolean
        if (!is_null($multiUnit) && !is_bool($multiUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($multiUnit)), __LINE__);
        }
        $this->multiUnit = $multiUnit;
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
     * @return \StructType\Unit
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
     * Get neighborhood value
     * @return string|null
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }
    /**
     * Set neighborhood value
     * @param string $neighborhood
     * @return \StructType\Unit
     */
    public function setNeighborhood($neighborhood = null)
    {
        // validation for constraint: string
        if (!is_null($neighborhood) && !is_string($neighborhood)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($neighborhood)), __LINE__);
        }
        $this->neighborhood = $neighborhood;
        return $this;
    }
    /**
     * Get numberBathrooms value
     * @return float|null
     */
    public function getNumberBathrooms()
    {
        return $this->numberBathrooms;
    }
    /**
     * Set numberBathrooms value
     * @param float $numberBathrooms
     * @return \StructType\Unit
     */
    public function setNumberBathrooms($numberBathrooms = null)
    {
        $this->numberBathrooms = $numberBathrooms;
        return $this;
    }
    /**
     * Get numberBedrooms value
     * @return int|null
     */
    public function getNumberBedrooms()
    {
        return $this->numberBedrooms;
    }
    /**
     * Set numberBedrooms value
     * @param int $numberBedrooms
     * @return \StructType\Unit
     */
    public function setNumberBedrooms($numberBedrooms = null)
    {
        // validation for constraint: int
        if (!is_null($numberBedrooms) && !is_numeric($numberBedrooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberBedrooms)), __LINE__);
        }
        $this->numberBedrooms = $numberBedrooms;
        return $this;
    }
    /**
     * Get numberFloors value
     * @return int|null
     */
    public function getNumberFloors()
    {
        return $this->numberFloors;
    }
    /**
     * Set numberFloors value
     * @param int $numberFloors
     * @return \StructType\Unit
     */
    public function setNumberFloors($numberFloors = null)
    {
        // validation for constraint: int
        if (!is_null($numberFloors) && !is_numeric($numberFloors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberFloors)), __LINE__);
        }
        $this->numberFloors = $numberFloors;
        return $this;
    }
    /**
     * Get otherTenantCharges value
     * @return string|null
     */
    public function getOtherTenantCharges()
    {
        return $this->otherTenantCharges;
    }
    /**
     * Set otherTenantCharges value
     * @param string $otherTenantCharges
     * @return \StructType\Unit
     */
    public function setOtherTenantCharges($otherTenantCharges = null)
    {
        // validation for constraint: string
        if (!is_null($otherTenantCharges) && !is_string($otherTenantCharges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherTenantCharges)), __LINE__);
        }
        $this->otherTenantCharges = $otherTenantCharges;
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \StructType\Unit
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
    /**
     * Get petsAllowed value
     * @return bool|null
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }
    /**
     * Set petsAllowed value
     * @param bool $petsAllowed
     * @return \StructType\Unit
     */
    public function setPetsAllowed($petsAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($petsAllowed) && !is_bool($petsAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($petsAllowed)), __LINE__);
        }
        $this->petsAllowed = $petsAllowed;
        return $this;
    }
    /**
     * Get portfolio value
     * @return string|null
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
    /**
     * Set portfolio value
     * @param string $portfolio
     * @return \StructType\Unit
     */
    public function setPortfolio($portfolio = null)
    {
        // validation for constraint: string
        if (!is_null($portfolio) && !is_string($portfolio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portfolio)), __LINE__);
        }
        $this->portfolio = $portfolio;
        return $this;
    }
    /**
     * Get postingTitle value
     * @return string|null
     */
    public function getPostingTitle()
    {
        return $this->postingTitle;
    }
    /**
     * Set postingTitle value
     * @param string $postingTitle
     * @return \StructType\Unit
     */
    public function setPostingTitle($postingTitle = null)
    {
        // validation for constraint: string
        if (!is_null($postingTitle) && !is_string($postingTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postingTitle)), __LINE__);
        }
        $this->postingTitle = $postingTitle;
        return $this;
    }
    /**
     * Get published value
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->published;
    }
    /**
     * Set published value
     * @param bool $published
     * @return \StructType\Unit
     */
    public function setPublished($published = null)
    {
        // validation for constraint: boolean
        if (!is_null($published) && !is_bool($published)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($published)), __LINE__);
        }
        $this->published = $published;
        return $this;
    }
    /**
     * Get publishedForRent value
     * @return bool|null
     */
    public function getPublishedForRent()
    {
        return $this->publishedForRent;
    }
    /**
     * Set publishedForRent value
     * @param bool $publishedForRent
     * @return \StructType\Unit
     */
    public function setPublishedForRent($publishedForRent = null)
    {
        // validation for constraint: boolean
        if (!is_null($publishedForRent) && !is_bool($publishedForRent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($publishedForRent)), __LINE__);
        }
        $this->publishedForRent = $publishedForRent;
        return $this;
    }
    /**
     * Get publishedForSale value
     * @return bool|null
     */
    public function getPublishedForSale()
    {
        return $this->publishedForSale;
    }
    /**
     * Set publishedForSale value
     * @param bool $publishedForSale
     * @return \StructType\Unit
     */
    public function setPublishedForSale($publishedForSale = null)
    {
        // validation for constraint: boolean
        if (!is_null($publishedForSale) && !is_bool($publishedForSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($publishedForSale)), __LINE__);
        }
        $this->publishedForSale = $publishedForSale;
        return $this;
    }
    /**
     * Get ready value
     * @return bool|null
     */
    public function getReady()
    {
        return $this->ready;
    }
    /**
     * Set ready value
     * @param bool $ready
     * @return \StructType\Unit
     */
    public function setReady($ready = null)
    {
        // validation for constraint: boolean
        if (!is_null($ready) && !is_bool($ready)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ready)), __LINE__);
        }
        $this->ready = $ready;
        return $this;
    }
    /**
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \StructType\Unit
     */
    public function setSalePrice($salePrice = null)
    {
        $this->salePrice = $salePrice;
        return $this;
    }
    /**
     * Get saleTerms value
     * @return string|null
     */
    public function getSaleTerms()
    {
        return $this->saleTerms;
    }
    /**
     * Set saleTerms value
     * @param string $saleTerms
     * @return \StructType\Unit
     */
    public function setSaleTerms($saleTerms = null)
    {
        // validation for constraint: string
        if (!is_null($saleTerms) && !is_string($saleTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saleTerms)), __LINE__);
        }
        $this->saleTerms = $saleTerms;
        return $this;
    }
    /**
     * Get searchTag value
     * @return string|null
     */
    public function getSearchTag()
    {
        return $this->searchTag;
    }
    /**
     * Set searchTag value
     * @param string $searchTag
     * @return \StructType\Unit
     */
    public function setSearchTag($searchTag = null)
    {
        // validation for constraint: string
        if (!is_null($searchTag) && !is_string($searchTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchTag)), __LINE__);
        }
        $this->searchTag = $searchTag;
        return $this;
    }
    /**
     * Get shortDescription value
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    /**
     * Set shortDescription value
     * @param string $shortDescription
     * @return \StructType\Unit
     */
    public function setShortDescription($shortDescription = null)
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortDescription)), __LINE__);
        }
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * Get smokingAllowed value
     * @return bool|null
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }
    /**
     * Set smokingAllowed value
     * @param bool $smokingAllowed
     * @return \StructType\Unit
     */
    public function setSmokingAllowed($smokingAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($smokingAllowed) && !is_bool($smokingAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($smokingAllowed)), __LINE__);
        }
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }
    /**
     * Get specials value
     * @return string|null
     */
    public function getSpecials()
    {
        return $this->specials;
    }
    /**
     * Set specials value
     * @param string $specials
     * @return \StructType\Unit
     */
    public function setSpecials($specials = null)
    {
        // validation for constraint: string
        if (!is_null($specials) && !is_string($specials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specials)), __LINE__);
        }
        $this->specials = $specials;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \StructType\Unit
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \StructType\Unit
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get syndicate value
     * @return string|null
     */
    public function getSyndicate()
    {
        return $this->syndicate;
    }
    /**
     * Set syndicate value
     * @param string $syndicate
     * @return \StructType\Unit
     */
    public function setSyndicate($syndicate = null)
    {
        // validation for constraint: string
        if (!is_null($syndicate) && !is_string($syndicate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($syndicate)), __LINE__);
        }
        $this->syndicate = $syndicate;
        return $this;
    }
    /**
     * Get targetDeposit value
     * @return string|null
     */
    public function getTargetDeposit()
    {
        return $this->targetDeposit;
    }
    /**
     * Set targetDeposit value
     * @param string $targetDeposit
     * @return \StructType\Unit
     */
    public function setTargetDeposit($targetDeposit = null)
    {
        // validation for constraint: string
        if (!is_null($targetDeposit) && !is_string($targetDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetDeposit)), __LINE__);
        }
        $this->targetDeposit = $targetDeposit;
        return $this;
    }
    /**
     * Get targetRent value
     * @return float|null
     */
    public function getTargetRent()
    {
        return $this->targetRent;
    }
    /**
     * Set targetRent value
     * @param float $targetRent
     * @return \StructType\Unit
     */
    public function setTargetRent($targetRent = null)
    {
        $this->targetRent = $targetRent;
        return $this;
    }
    /**
     * Get targetRentUnits value
     * @return string|null
     */
    public function getTargetRentUnits()
    {
        return $this->targetRentUnits;
    }
    /**
     * Set targetRentUnits value
     * @param string $targetRentUnits
     * @return \StructType\Unit
     */
    public function setTargetRentUnits($targetRentUnits = null)
    {
        // validation for constraint: string
        if (!is_null($targetRentUnits) && !is_string($targetRentUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetRentUnits)), __LINE__);
        }
        $this->targetRentUnits = $targetRentUnits;
        return $this;
    }
    /**
     * Get totalArea value
     * @return float|null
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }
    /**
     * Set totalArea value
     * @param float $totalArea
     * @return \StructType\Unit
     */
    public function setTotalArea($totalArea = null)
    {
        $this->totalArea = $totalArea;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\Unit
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get unitAmenities value
     * @return string|null
     */
    public function getUnitAmenities()
    {
        return $this->unitAmenities;
    }
    /**
     * Set unitAmenities value
     * @param string $unitAmenities
     * @return \StructType\Unit
     */
    public function setUnitAmenities($unitAmenities = null)
    {
        // validation for constraint: string
        if (!is_null($unitAmenities) && !is_string($unitAmenities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitAmenities)), __LINE__);
        }
        $this->unitAmenities = $unitAmenities;
        return $this;
    }
    /**
     * Get website value
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * Set website value
     * @param string $website
     * @return \StructType\Unit
     */
    public function setWebsite($website = null)
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($website)), __LINE__);
        }
        $this->website = $website;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \StructType\Unit
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Unit
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
