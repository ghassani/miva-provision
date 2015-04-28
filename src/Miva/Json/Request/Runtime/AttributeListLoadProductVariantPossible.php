<?php

namespace Miva\Json\Request\Runtime;

use Symfony\Component\HttpFoundation\ParameterBag;

class AttributeListLoadProductVariantPossible extends Request
{
    const JSON_FUNCTION = 'Runtime_AttributeList_Load_ProductVariant_Possible';


    public function __construct(ParameterBag $parameters = null)
    {
        if (is_null($parameters)) {
            $parameters = new ParameterBag();
        }

        $parameters->set('Session_Type', self::SESSION_TYPE_RUNTIME)
          ->set('Function', $this->getFunction());

        parent::__construct($parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFunction()
    {
        return static::JSON_FUNCTION;
    }

    /**
     * @return mixed
     */
    public function getDependencyResolution()
    {
        return $this->parameters->get('Dependency_Resolution');
    }

    /**
     * @param mixed $dependencyResolution
     */
    public function setDependencyResolution($dependencyResolution)
    {
        $this->parameters->set('Dependency_Resolution', $dependencyResolution);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastSelectedAttributeId()
    {
        return $this->parameters->get('Last_Selected_Attribute_ID');
    }

    /**
     * @param mixed $lastSelectedAttributeId
     */
    public function setLastSelectedAttributeId($lastSelectedAttributeId)
    {
        $this->parameters->set('Last_Selected_Attribute_ID', $lastSelectedAttributeId);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastSelectedOptionId()
    {
        return $this->parameters->get('Last_Selected_Option_ID');
    }

    /**
     * @param mixed $lastSelectedOptionId
     */
    public function setLastSelectedOptionId($lastSelectedOptionId)
    {
        $this->parameters->set('Last_Selected_Option_ID', $lastSelectedOptionId);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelectedAttributeIds()
    {
        return $this->selectedAttributeIds;
    }

    /**
     * @param mixed $selectedAttributeIds
     */
    public function setSelectedAttributeIds($selectedAttributeIds)
    {
        $this->selectedAttributeIds = $selectedAttributeIds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelectedOptionIds()
    {
        return $this->selectedOptionIds;
    }

    /**
     * @param mixed $selectedOptionIds
     */
    public function setSelectedOptionIds($selectedOptionIds)
    {
        $this->selectedOptionIds = $selectedOptionIds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnselectedAttributeIds()
    {
        return $this->unselectedAttributeIds;
    }

    /**
     * @param mixed $unselectedAttributeIds
     */
    public function setUnselectedAttributeIds($unselectedAttributeIds)
    {
        $this->unselectedAttributeIds = $unselectedAttributeIds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnselectedAttributeTemplateAttributeIds()
    {
        return $this->unselectedAttributeTemplateAttributeIds;
    }

    /**
     * @param mixed $unselectedAttributeTemplateAttributeIds
     */
    public function setUnselectedAttributeTemplateAttributeIds($unselectedAttributeTemplateAttributeIds)
    {
        $this->unselectedAttributeTemplateAttributeIds = $unselectedAttributeTemplateAttributeIds;
        return $this;
    }
    
    

}