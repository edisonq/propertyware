<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Inspection StructType
 * @subpackage Structs
 */
class Inspection extends AbstractDocumentHolder
{
    /**
     * The areas
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $areas;
    /**
     * The building
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Building
     */
    public $building;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * The dateInspected
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateInspected;
    /**
     * The dateScheduled
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dateScheduled;
    /**
     * The inspector
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\User
     */
    public $inspector;
    /**
     * The lease
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Lease
     */
    public $lease;
    /**
     * The number
     * @var int
     */
    public $number;
    /**
     * The portfolio
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Portfolio
     */
    public $portfolio;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The templateName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $templateName;
    /**
     * The timeInspected
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $timeInspected;
    /**
     * The timeScheduled
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $timeScheduled;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Unit
     */
    public $unit;
    /**
     * Constructor method for Inspection
     * @uses Inspection::setAreas()
     * @uses Inspection::setBuilding()
     * @uses Inspection::setComment()
     * @uses Inspection::setDateInspected()
     * @uses Inspection::setDateScheduled()
     * @uses Inspection::setInspector()
     * @uses Inspection::setLease()
     * @uses Inspection::setNumber()
     * @uses Inspection::setPortfolio()
     * @uses Inspection::setStatus()
     * @uses Inspection::setTemplateName()
     * @uses Inspection::setTimeInspected()
     * @uses Inspection::setTimeScheduled()
     * @uses Inspection::setType()
     * @uses Inspection::setUnit()
     * @param mixed[] $areas
     * @param \StructType\Building $building
     * @param string $comment
     * @param string $dateInspected
     * @param string $dateScheduled
     * @param \StructType\User $inspector
     * @param \StructType\Lease $lease
     * @param int $number
     * @param \StructType\Portfolio $portfolio
     * @param string $status
     * @param string $templateName
     * @param string $timeInspected
     * @param string $timeScheduled
     * @param string $type
     * @param \StructType\Unit $unit
     */
    public function __construct(array $areas = array(), \StructType\Building $building = null, $comment = null, $dateInspected = null, $dateScheduled = null, \StructType\User $inspector = null, \StructType\Lease $lease = null, $number = null, \StructType\Portfolio $portfolio = null, $status = null, $templateName = null, $timeInspected = null, $timeScheduled = null, $type = null, \StructType\Unit $unit = null)
    {
        $this
            ->setAreas($areas)
            ->setBuilding($building)
            ->setComment($comment)
            ->setDateInspected($dateInspected)
            ->setDateScheduled($dateScheduled)
            ->setInspector($inspector)
            ->setLease($lease)
            ->setNumber($number)
            ->setPortfolio($portfolio)
            ->setStatus($status)
            ->setTemplateName($templateName)
            ->setTimeInspected($timeInspected)
            ->setTimeScheduled($timeScheduled)
            ->setType($type)
            ->setUnit($unit);
    }
    /**
     * Get areas value
     * @return mixed[]|null
     */
    public function getAreas()
    {
        return $this->areas;
    }
    /**
     * Set areas value
     * @throws \InvalidArgumentException
     * @param mixed[] $areas
     * @return \StructType\Inspection
     */
    public function setAreas(array $areas = array())
    {
        foreach ($areas as $inspectionAreasItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The areas property can only contain items of anyType, "%s" given', is_object($inspectionAreasItem) ? get_class($inspectionAreasItem) : gettype($inspectionAreasItem)), __LINE__);
            }
        }
        $this->areas = $areas;
        return $this;
    }
    /**
     * Add item to areas value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Inspection
     */
    public function addToAreas($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The areas property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->areas[] = $item;
        return $this;
    }
    /**
     * Get building value
     * @return \StructType\Building|null
     */
    public function getBuilding()
    {
        return $this->building;
    }
    /**
     * Set building value
     * @param \StructType\Building $building
     * @return \StructType\Inspection
     */
    public function setBuilding(\StructType\Building $building = null)
    {
        $this->building = $building;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \StructType\Inspection
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get dateInspected value
     * @return string|null
     */
    public function getDateInspected()
    {
        return $this->dateInspected;
    }
    /**
     * Set dateInspected value
     * @param string $dateInspected
     * @return \StructType\Inspection
     */
    public function setDateInspected($dateInspected = null)
    {
        // validation for constraint: string
        if (!is_null($dateInspected) && !is_string($dateInspected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateInspected)), __LINE__);
        }
        $this->dateInspected = $dateInspected;
        return $this;
    }
    /**
     * Get dateScheduled value
     * @return string|null
     */
    public function getDateScheduled()
    {
        return $this->dateScheduled;
    }
    /**
     * Set dateScheduled value
     * @param string $dateScheduled
     * @return \StructType\Inspection
     */
    public function setDateScheduled($dateScheduled = null)
    {
        // validation for constraint: string
        if (!is_null($dateScheduled) && !is_string($dateScheduled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateScheduled)), __LINE__);
        }
        $this->dateScheduled = $dateScheduled;
        return $this;
    }
    /**
     * Get inspector value
     * @return \StructType\User|null
     */
    public function getInspector()
    {
        return $this->inspector;
    }
    /**
     * Set inspector value
     * @param \StructType\User $inspector
     * @return \StructType\Inspection
     */
    public function setInspector(\StructType\User $inspector = null)
    {
        $this->inspector = $inspector;
        return $this;
    }
    /**
     * Get lease value
     * @return \StructType\Lease|null
     */
    public function getLease()
    {
        return $this->lease;
    }
    /**
     * Set lease value
     * @param \StructType\Lease $lease
     * @return \StructType\Inspection
     */
    public function setLease(\StructType\Lease $lease = null)
    {
        $this->lease = $lease;
        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \StructType\Inspection
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
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
     * @return \StructType\Inspection
     */
    public function setPortfolio(\StructType\Portfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
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
     * @return \StructType\Inspection
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
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \StructType\Inspection
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        return $this;
    }
    /**
     * Get timeInspected value
     * @return string|null
     */
    public function getTimeInspected()
    {
        return $this->timeInspected;
    }
    /**
     * Set timeInspected value
     * @param string $timeInspected
     * @return \StructType\Inspection
     */
    public function setTimeInspected($timeInspected = null)
    {
        // validation for constraint: string
        if (!is_null($timeInspected) && !is_string($timeInspected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeInspected)), __LINE__);
        }
        $this->timeInspected = $timeInspected;
        return $this;
    }
    /**
     * Get timeScheduled value
     * @return string|null
     */
    public function getTimeScheduled()
    {
        return $this->timeScheduled;
    }
    /**
     * Set timeScheduled value
     * @param string $timeScheduled
     * @return \StructType\Inspection
     */
    public function setTimeScheduled($timeScheduled = null)
    {
        // validation for constraint: string
        if (!is_null($timeScheduled) && !is_string($timeScheduled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeScheduled)), __LINE__);
        }
        $this->timeScheduled = $timeScheduled;
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
     * @return \StructType\Inspection
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
     * Get unit value
     * @return \StructType\Unit|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param \StructType\Unit $unit
     * @return \StructType\Inspection
     */
    public function setUnit(\StructType\Unit $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Inspection
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
