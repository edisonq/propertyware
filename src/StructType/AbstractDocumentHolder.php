<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractDocumentHolder StructType
 * @subpackage Structs
 */
abstract class AbstractDocumentHolder extends PWObject
{
    /**
     * The documents
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Document[]
     * - ref: soapenc:arrayType
     * @var \StructType\Document[]
     */
    public $documents;
    /**
     * The notes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - arrayType: tns1:Note[]
     * - ref: soapenc:arrayType
     * @var \StructType\Note[]
     */
    public $notes;
    /**
     * Constructor method for AbstractDocumentHolder
     * @uses AbstractDocumentHolder::setDocuments()
     * @uses AbstractDocumentHolder::setNotes()
     * @param \StructType\Document[] $documents
     * @param \StructType\Note[] $notes
     */
    public function __construct(array $documents = array(), array $notes = array())
    {
        $this
            ->setDocuments($documents)
            ->setNotes($notes);
    }
    /**
     * Get documents value
     * @return \StructType\Document[]|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @throws \InvalidArgumentException
     * @param \StructType\Document[] $documents
     * @return \StructType\AbstractDocumentHolder
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $abstractDocumentHolderDocumentsItem) {
            // validation for constraint: itemType
            if (!$abstractDocumentHolderDocumentsItem instanceof \StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The documents property can only contain items of \StructType\Document, "%s" given', is_object($abstractDocumentHolderDocumentsItem) ? get_class($abstractDocumentHolderDocumentsItem) : gettype($abstractDocumentHolderDocumentsItem)), __LINE__);
            }
        }
        $this->documents = $documents;
        return $this;
    }
    /**
     * Add item to documents value
     * @throws \InvalidArgumentException
     * @param \StructType\Document $item
     * @return \StructType\AbstractDocumentHolder
     */
    public function addToDocuments(\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The documents property can only contain items of \StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->documents[] = $item;
        return $this;
    }
    /**
     * Get notes value
     * @return \StructType\Note[]|null
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @throws \InvalidArgumentException
     * @param \StructType\Note[] $notes
     * @return \StructType\AbstractDocumentHolder
     */
    public function setNotes(array $notes = array())
    {
        foreach ($notes as $abstractDocumentHolderNotesItem) {
            // validation for constraint: itemType
            if (!$abstractDocumentHolderNotesItem instanceof \StructType\Note) {
                throw new \InvalidArgumentException(sprintf('The notes property can only contain items of \StructType\Note, "%s" given', is_object($abstractDocumentHolderNotesItem) ? get_class($abstractDocumentHolderNotesItem) : gettype($abstractDocumentHolderNotesItem)), __LINE__);
            }
        }
        $this->notes = $notes;
        return $this;
    }
    /**
     * Add item to notes value
     * @throws \InvalidArgumentException
     * @param \StructType\Note $item
     * @return \StructType\AbstractDocumentHolder
     */
    public function addToNotes(\StructType\Note $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Note) {
            throw new \InvalidArgumentException(sprintf('The notes property can only contain items of \StructType\Note, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AbstractDocumentHolder
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
