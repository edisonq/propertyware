<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerDraw StructType
 * @subpackage Structs
 */
class OwnerDraw extends OwnerLedgerItem
{
    /**
     * The bank
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Bank
     */
    public $bank;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Portfolio
     */
    public $portfolio;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceNumber;
    /**
     * Constructor method for OwnerDraw
     * @uses OwnerDraw::setBank()
     * @uses OwnerDraw::setComments()
     * @uses OwnerDraw::setDate()
     * @uses OwnerDraw::setPortfolio()
     * @uses OwnerDraw::setReferenceNumber()
     * @param \StructType\Bank $bank
     * @param string $comments
     * @param string $date
     * @param \StructType\Portfolio $portfolio
     * @param string $referenceNumber
     */
    public function __construct(\StructType\Bank $bank = null, $comments = null, $date = null, \StructType\Portfolio $portfolio = null, $referenceNumber = null)
    {
        $this
            ->setBank($bank)
            ->setComments($comments)
            ->setDate($date)
            ->setPortfolio($portfolio)
            ->setReferenceNumber($referenceNumber);
    }
    /**
     * Get bank value
     * @return \StructType\Bank|null
     */
    public function getBank()
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param \StructType\Bank $bank
     * @return \StructType\OwnerDraw
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->bank = $bank;
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
     * @return \StructType\OwnerDraw
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
     * @return \StructType\OwnerDraw
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
     * Get portfolio value
     * @return \StructType\Portfolio|null
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
    /**
     * Set portfolio value
     * @param \StructType\Portfolio $portfolio
     * @return \StructType\OwnerDraw
     */
    public function setPortfolio(\StructType\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
        return $this;
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $referenceNumber
     * @return \StructType\OwnerDraw
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OwnerDraw
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
