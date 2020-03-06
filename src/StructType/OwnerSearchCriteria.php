<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerSearchCriteria StructType
 * @subpackage Structs
 */
class OwnerSearchCriteria extends AuditableDTOSearchCriteria
{
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The portfolioID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $portfolioID;
    /**
     * Constructor method for OwnerSearchCriteria
     * @uses OwnerSearchCriteria::setEmail()
     * @uses OwnerSearchCriteria::setPortfolioID()
     * @param string $email
     * @param int $portfolioID
     */
    public function __construct($email = null, $portfolioID = null)
    {
        $this
            ->setEmail($email)
            ->setPortfolioID($portfolioID);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \StructType\OwnerSearchCriteria
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get portfolioID value
     * @return int|null
     */
    public function getPortfolioID()
    {
        return $this->portfolioID;
    }
    /**
     * Set portfolioID value
     * @param int $portfolioID
     * @return \StructType\OwnerSearchCriteria
     */
    public function setPortfolioID($portfolioID = null)
    {
        // validation for constraint: int
        if (!is_null($portfolioID) && !is_numeric($portfolioID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portfolioID)), __LINE__);
        }
        $this->portfolioID = $portfolioID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OwnerSearchCriteria
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
