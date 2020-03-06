<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskList StructType
 * @subpackage Structs
 */
class TaskList extends PWObject
{
    /**
     * The dueDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dueDate;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The tasks
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: xsd:anyType[]
     * - ref: soapenc:arrayType
     * @var mixed[]
     */
    public $tasks;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * Constructor method for TaskList
     * @uses TaskList::setDueDate()
     * @uses TaskList::setStatus()
     * @uses TaskList::setTasks()
     * @uses TaskList::setTitle()
     * @param string $dueDate
     * @param string $status
     * @param mixed[] $tasks
     * @param string $title
     */
    public function __construct($dueDate = null, $status = null, array $tasks = array(), $title = null)
    {
        $this
            ->setDueDate($dueDate)
            ->setStatus($status)
            ->setTasks($tasks)
            ->setTitle($title);
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
     * @return \StructType\TaskList
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
     * @return \StructType\TaskList
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
     * Get tasks value
     * @return mixed[]|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @throws \InvalidArgumentException
     * @param mixed[] $tasks
     * @return \StructType\TaskList
     */
    public function setTasks(array $tasks = array())
    {
        foreach ($tasks as $taskListTasksItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The tasks property can only contain items of anyType, "%s" given', is_object($taskListTasksItem) ? get_class($taskListTasksItem) : gettype($taskListTasksItem)), __LINE__);
            }
        }
        $this->tasks = $tasks;
        return $this;
    }
    /**
     * Add item to tasks value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\TaskList
     */
    public function addToTasks($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The tasks property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tasks[] = $item;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\TaskList
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TaskList
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
