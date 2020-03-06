<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientDataContainer StructType
 * @subpackage Structs
 */
abstract class ClientDataContainer extends AbstractStructBase
{
    /**
     * The clientData
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:ClientDataItem[]
     * - ref: soapenc:arrayType
     * @var \StructType\ClientDataItem[]
     */
    public $clientData;
    /**
     * Constructor method for ClientDataContainer
     * @uses ClientDataContainer::setClientData()
     * @param \StructType\ClientDataItem[] $clientData
     */
    public function __construct(array $clientData = array())
    {
        $this
            ->setClientData($clientData);
    }
    /**
     * Get clientData value
     * @return \StructType\ClientDataItem[]|null
     */
    public function getClientData()
    {
        return $this->clientData;
    }
    /**
     * Set clientData value
     * @throws \InvalidArgumentException
     * @param \StructType\ClientDataItem[] $clientData
     * @return \StructType\ClientDataContainer
     */
    public function setClientData(array $clientData = array())
    {
        foreach ($clientData as $clientDataContainerClientDataItem) {
            // validation for constraint: itemType
            if (!$clientDataContainerClientDataItem instanceof \StructType\ClientDataItem) {
                throw new \InvalidArgumentException(sprintf('The clientData property can only contain items of \StructType\ClientDataItem, "%s" given', is_object($clientDataContainerClientDataItem) ? get_class($clientDataContainerClientDataItem) : gettype($clientDataContainerClientDataItem)), __LINE__);
            }
        }
        $this->clientData = $clientData;
        return $this;
    }
    /**
     * Add item to clientData value
     * @throws \InvalidArgumentException
     * @param \StructType\ClientDataItem $item
     * @return \StructType\ClientDataContainer
     */
    public function addToClientData(\StructType\ClientDataItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClientDataItem) {
            throw new \InvalidArgumentException(sprintf('The clientData property can only contain items of \StructType\ClientDataItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->clientData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ClientDataContainer
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
