<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 * @subpackage Structs
 */
class Task extends PWObject
{
    /**
     * The assignedToID
     * @var int
     */
    public $assignedToID;
    /**
     * The completed
     * @var bool
     */
    public $completed;
    /**
     * The completedTimestamp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $completedTimestamp;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The dueDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dueDate;
    /**
     * The orderIndex
     * @var int
     */
    public $orderIndex;
    /**
     * The taskListID
     * @var int
     */
    public $taskListID;
    /**
     * Constructor method for Task
     * @uses Task::setAssignedToID()
     * @uses Task::setCompleted()
     * @uses Task::setCompletedTimestamp()
     * @uses Task::setDescription()
     * @uses Task::setDueDate()
     * @uses Task::setOrderIndex()
     * @uses Task::setTaskListID()
     * @param int $assignedToID
     * @param bool $completed
     * @param string $completedTimestamp
     * @param string $description
     * @param string $dueDate
     * @param int $orderIndex
     * @param int $taskListID
     */
    public function __construct($assignedToID = null, $completed = null, $completedTimestamp = null, $description = null, $dueDate = null, $orderIndex = null, $taskListID = null)
    {
        $this
            ->setAssignedToID($assignedToID)
            ->setCompleted($completed)
            ->setCompletedTimestamp($completedTimestamp)
            ->setDescription($description)
            ->setDueDate($dueDate)
            ->setOrderIndex($orderIndex)
            ->setTaskListID($taskListID);
    }
    /**
     * Get assignedToID value
     * @return int|null
     */
    public function getAssignedToID()
    {
        return $this->assignedToID;
    }
    /**
     * Set assignedToID value
     * @param int $assignedToID
     * @return \StructType\Task
     */
    public function setAssignedToID($assignedToID = null)
    {
        // validation for constraint: int
        if (!is_null($assignedToID) && !is_numeric($assignedToID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($assignedToID)), __LINE__);
        }
        $this->assignedToID = $assignedToID;
        return $this;
    }
    /**
     * Get completed value
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->completed;
    }
    /**
     * Set completed value
     * @param bool $completed
     * @return \StructType\Task
     */
    public function setCompleted($completed = null)
    {
        // validation for constraint: boolean
        if (!is_null($completed) && !is_bool($completed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($completed)), __LINE__);
        }
        $this->completed = $completed;
        return $this;
    }
    /**
     * Get completedTimestamp value
     * @return string|null
     */
    public function getCompletedTimestamp()
    {
        return $this->completedTimestamp;
    }
    /**
     * Set completedTimestamp value
     * @param string $completedTimestamp
     * @return \StructType\Task
     */
    public function setCompletedTimestamp($completedTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($completedTimestamp) && !is_string($completedTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($completedTimestamp)), __LINE__);
        }
        $this->completedTimestamp = $completedTimestamp;
        return $this;
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
     * @return \StructType\Task
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
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \StructType\Task
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
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
     * @return \StructType\Task
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
     * Get taskListID value
     * @return int|null
     */
    public function getTaskListID()
    {
        return $this->taskListID;
    }
    /**
     * Set taskListID value
     * @param int $taskListID
     * @return \StructType\Task
     */
    public function setTaskListID($taskListID = null)
    {
        // validation for constraint: int
        if (!is_null($taskListID) && !is_numeric($taskListID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($taskListID)), __LINE__);
        }
        $this->taskListID = $taskListID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Task
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
