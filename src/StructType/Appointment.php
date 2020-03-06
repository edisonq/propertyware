<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Appointment StructType
 * @subpackage Structs
 */
class Appointment extends PWObject
{
    /**
     * The allDayAppointment
     * @var bool
     */
    public $allDayAppointment;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The dirty
     * @var bool
     */
    public $dirty;
    /**
     * The endTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endTime;
    /**
     * The eventId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $eventId;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The parentEventID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $parentEventID;
    /**
     * The recurrenceType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $recurrenceType;
    /**
     * The remindUsers
     * @var bool
     */
    public $remindUsers;
    /**
     * The reminderDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reminderDate;
    /**
     * The reminderParam
     * @var int
     */
    public $reminderParam;
    /**
     * The reminderValue
     * @var int
     */
    public $reminderValue;
    /**
     * The startTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startTime;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subject;
    /**
     * The syncToGoogle
     * @var bool
     */
    public $syncToGoogle;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The users
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:User[]
     * - ref: soapenc:arrayType
     * @var \StructType\User[]
     */
    public $users;
    /**
     * Constructor method for Appointment
     * @uses Appointment::setAllDayAppointment()
     * @uses Appointment::setComments()
     * @uses Appointment::setDirty()
     * @uses Appointment::setEndTime()
     * @uses Appointment::setEventId()
     * @uses Appointment::setLocation()
     * @uses Appointment::setParentEventID()
     * @uses Appointment::setRecurrenceType()
     * @uses Appointment::setRemindUsers()
     * @uses Appointment::setReminderDate()
     * @uses Appointment::setReminderParam()
     * @uses Appointment::setReminderValue()
     * @uses Appointment::setStartTime()
     * @uses Appointment::setSubject()
     * @uses Appointment::setSyncToGoogle()
     * @uses Appointment::setType()
     * @uses Appointment::setUsers()
     * @param bool $allDayAppointment
     * @param string $comments
     * @param bool $dirty
     * @param string $endTime
     * @param string $eventId
     * @param string $location
     * @param int $parentEventID
     * @param string $recurrenceType
     * @param bool $remindUsers
     * @param string $reminderDate
     * @param int $reminderParam
     * @param int $reminderValue
     * @param string $startTime
     * @param string $subject
     * @param bool $syncToGoogle
     * @param string $type
     * @param \StructType\User[] $users
     */
    public function __construct($allDayAppointment = null, $comments = null, $dirty = null, $endTime = null, $eventId = null, $location = null, $parentEventID = null, $recurrenceType = null, $remindUsers = null, $reminderDate = null, $reminderParam = null, $reminderValue = null, $startTime = null, $subject = null, $syncToGoogle = null, $type = null, array $users = array())
    {
        $this
            ->setAllDayAppointment($allDayAppointment)
            ->setComments($comments)
            ->setDirty($dirty)
            ->setEndTime($endTime)
            ->setEventId($eventId)
            ->setLocation($location)
            ->setParentEventID($parentEventID)
            ->setRecurrenceType($recurrenceType)
            ->setRemindUsers($remindUsers)
            ->setReminderDate($reminderDate)
            ->setReminderParam($reminderParam)
            ->setReminderValue($reminderValue)
            ->setStartTime($startTime)
            ->setSubject($subject)
            ->setSyncToGoogle($syncToGoogle)
            ->setType($type)
            ->setUsers($users);
    }
    /**
     * Get allDayAppointment value
     * @return bool|null
     */
    public function getAllDayAppointment()
    {
        return $this->allDayAppointment;
    }
    /**
     * Set allDayAppointment value
     * @param bool $allDayAppointment
     * @return \StructType\Appointment
     */
    public function setAllDayAppointment($allDayAppointment = null)
    {
        // validation for constraint: boolean
        if (!is_null($allDayAppointment) && !is_bool($allDayAppointment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allDayAppointment)), __LINE__);
        }
        $this->allDayAppointment = $allDayAppointment;
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
     * @return \StructType\Appointment
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
     * Get dirty value
     * @return bool|null
     */
    public function getDirty()
    {
        return $this->dirty;
    }
    /**
     * Set dirty value
     * @param bool $dirty
     * @return \StructType\Appointment
     */
    public function setDirty($dirty = null)
    {
        // validation for constraint: boolean
        if (!is_null($dirty) && !is_bool($dirty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dirty)), __LINE__);
        }
        $this->dirty = $dirty;
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \StructType\Appointment
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Get eventId value
     * @return string|null
     */
    public function getEventId()
    {
        return $this->eventId;
    }
    /**
     * Set eventId value
     * @param string $eventId
     * @return \StructType\Appointment
     */
    public function setEventId($eventId = null)
    {
        // validation for constraint: string
        if (!is_null($eventId) && !is_string($eventId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventId)), __LINE__);
        }
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\Appointment
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Get parentEventID value
     * @return int|null
     */
    public function getParentEventID()
    {
        return $this->parentEventID;
    }
    /**
     * Set parentEventID value
     * @param int $parentEventID
     * @return \StructType\Appointment
     */
    public function setParentEventID($parentEventID = null)
    {
        // validation for constraint: int
        if (!is_null($parentEventID) && !is_numeric($parentEventID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parentEventID)), __LINE__);
        }
        $this->parentEventID = $parentEventID;
        return $this;
    }
    /**
     * Get recurrenceType value
     * @return string|null
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }
    /**
     * Set recurrenceType value
     * @param string $recurrenceType
     * @return \StructType\Appointment
     */
    public function setRecurrenceType($recurrenceType = null)
    {
        // validation for constraint: string
        if (!is_null($recurrenceType) && !is_string($recurrenceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recurrenceType)), __LINE__);
        }
        $this->recurrenceType = $recurrenceType;
        return $this;
    }
    /**
     * Get remindUsers value
     * @return bool|null
     */
    public function getRemindUsers()
    {
        return $this->remindUsers;
    }
    /**
     * Set remindUsers value
     * @param bool $remindUsers
     * @return \StructType\Appointment
     */
    public function setRemindUsers($remindUsers = null)
    {
        // validation for constraint: boolean
        if (!is_null($remindUsers) && !is_bool($remindUsers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($remindUsers)), __LINE__);
        }
        $this->remindUsers = $remindUsers;
        return $this;
    }
    /**
     * Get reminderDate value
     * @return string|null
     */
    public function getReminderDate()
    {
        return $this->reminderDate;
    }
    /**
     * Set reminderDate value
     * @param string $reminderDate
     * @return \StructType\Appointment
     */
    public function setReminderDate($reminderDate = null)
    {
        // validation for constraint: string
        if (!is_null($reminderDate) && !is_string($reminderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reminderDate)), __LINE__);
        }
        $this->reminderDate = $reminderDate;
        return $this;
    }
    /**
     * Get reminderParam value
     * @return int|null
     */
    public function getReminderParam()
    {
        return $this->reminderParam;
    }
    /**
     * Set reminderParam value
     * @param int $reminderParam
     * @return \StructType\Appointment
     */
    public function setReminderParam($reminderParam = null)
    {
        // validation for constraint: int
        if (!is_null($reminderParam) && !is_numeric($reminderParam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reminderParam)), __LINE__);
        }
        $this->reminderParam = $reminderParam;
        return $this;
    }
    /**
     * Get reminderValue value
     * @return int|null
     */
    public function getReminderValue()
    {
        return $this->reminderValue;
    }
    /**
     * Set reminderValue value
     * @param int $reminderValue
     * @return \StructType\Appointment
     */
    public function setReminderValue($reminderValue = null)
    {
        // validation for constraint: int
        if (!is_null($reminderValue) && !is_numeric($reminderValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reminderValue)), __LINE__);
        }
        $this->reminderValue = $reminderValue;
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \StructType\Appointment
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \StructType\Appointment
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
    /**
     * Get syncToGoogle value
     * @return bool|null
     */
    public function getSyncToGoogle()
    {
        return $this->syncToGoogle;
    }
    /**
     * Set syncToGoogle value
     * @param bool $syncToGoogle
     * @return \StructType\Appointment
     */
    public function setSyncToGoogle($syncToGoogle = null)
    {
        // validation for constraint: boolean
        if (!is_null($syncToGoogle) && !is_bool($syncToGoogle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($syncToGoogle)), __LINE__);
        }
        $this->syncToGoogle = $syncToGoogle;
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
     * @return \StructType\Appointment
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
     * Get users value
     * @return \StructType\User[]|null
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * Set users value
     * @throws \InvalidArgumentException
     * @param \StructType\User[] $users
     * @return \StructType\Appointment
     */
    public function setUsers(array $users = array())
    {
        foreach ($users as $appointmentUsersItem) {
            // validation for constraint: itemType
            if (!$appointmentUsersItem instanceof \StructType\User) {
                throw new \InvalidArgumentException(sprintf('The users property can only contain items of \StructType\User, "%s" given', is_object($appointmentUsersItem) ? get_class($appointmentUsersItem) : gettype($appointmentUsersItem)), __LINE__);
            }
        }
        $this->users = $users;
        return $this;
    }
    /**
     * Add item to users value
     * @throws \InvalidArgumentException
     * @param \StructType\User $item
     * @return \StructType\Appointment
     */
    public function addToUsers(\StructType\User $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\User) {
            throw new \InvalidArgumentException(sprintf('The users property can only contain items of \StructType\User, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->users[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Appointment
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
