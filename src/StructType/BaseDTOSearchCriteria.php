<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseDTOSearchCriteria StructType
 * @subpackage Structs
 */
abstract class BaseDTOSearchCriteria extends AbstractStructBase
{
    /**
     * The ids
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:long[]
     * - ref: soapenc:arrayType
     * @var int[]
     */
    public $ids;
    /**
     * The pageNumber
     * @var int
     */
    public $pageNumber;
    /**
     * The results
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $results;
    /**
     * Constructor method for BaseDTOSearchCriteria
     * @uses BaseDTOSearchCriteria::setIds()
     * @uses BaseDTOSearchCriteria::setPageNumber()
     * @uses BaseDTOSearchCriteria::setResults()
     * @param int[] $ids
     * @param int $pageNumber
     * @param mixed[] $results
     */
    public function __construct(array $ids = array(), $pageNumber = null, array $results = array())
    {
        $this
            ->setIds($ids)
            ->setPageNumber($pageNumber)
            ->setResults($results);
    }
    /**
     * Get ids value
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @throws \InvalidArgumentException
     * @param int[] $ids
     * @return \StructType\BaseDTOSearchCriteria
     */
    public function setIds(array $ids = array())
    {
        foreach ($ids as $baseDTOSearchCriteriaIdsItem) {
            // validation for constraint: itemType
            if (!is_numeric($baseDTOSearchCriteriaIdsItem)) {
                throw new \InvalidArgumentException(sprintf('The ids property can only contain items of long, "%s" given', is_object($baseDTOSearchCriteriaIdsItem) ? get_class($baseDTOSearchCriteriaIdsItem) : gettype($baseDTOSearchCriteriaIdsItem)), __LINE__);
            }
        }
        $this->ids = $ids;
        return $this;
    }
    /**
     * Add item to ids value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\BaseDTOSearchCriteria
     */
    public function addToIds($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The ids property can only contain items of long, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ids[] = $item;
        return $this;
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $pageNumber
     * @return \StructType\BaseDTOSearchCriteria
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->pageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get results value
     * @return mixed[]|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @throws \InvalidArgumentException
     * @param mixed[] $results
     * @return \StructType\BaseDTOSearchCriteria
     */
    public function setResults(array $results = array())
    {
        foreach ($results as $baseDTOSearchCriteriaResultsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The results property can only contain items of anyType, "%s" given', is_object($baseDTOSearchCriteriaResultsItem) ? get_class($baseDTOSearchCriteriaResultsItem) : gettype($baseDTOSearchCriteriaResultsItem)), __LINE__);
            }
        }
        $this->results = $results;
        return $this;
    }
    /**
     * Add item to results value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\BaseDTOSearchCriteria
     */
    public function addToResults($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The results property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->results[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BaseDTOSearchCriteria
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
