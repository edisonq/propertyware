<?php

namespace Edisonq\Propertyware\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractFinancialDocumentHolder StructType
 * @subpackage Structs
 */
abstract class AbstractFinancialDocumentHolder extends PWFinanceObject
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
     * Constructor method for AbstractFinancialDocumentHolder
     * @uses AbstractFinancialDocumentHolder::setDocuments()
     * @param \StructType\Document[] $documents
     */
    public function __construct(array $documents = array())
    {
        $this
            ->setDocuments($documents);
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
     * @return \StructType\AbstractFinancialDocumentHolder
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $abstractFinancialDocumentHolderDocumentsItem) {
            // validation for constraint: itemType
            if (!$abstractFinancialDocumentHolderDocumentsItem instanceof \StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The documents property can only contain items of \StructType\Document, "%s" given', is_object($abstractFinancialDocumentHolderDocumentsItem) ? get_class($abstractFinancialDocumentHolderDocumentsItem) : gettype($abstractFinancialDocumentHolderDocumentsItem)), __LINE__);
            }
        }
        $this->documents = $documents;
        return $this;
    }
    /**
     * Add item to documents value
     * @throws \InvalidArgumentException
     * @param \StructType\Document $item
     * @return \StructType\AbstractFinancialDocumentHolder
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AbstractFinancialDocumentHolder
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
