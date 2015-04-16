<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
 * ProductAttributeAddTemplate
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class ProductAttributeAddTemplate implements StoreFragmentInterface
{
    
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $prompt;
    
    /** @var string */
    protected $attributeTemplateCode;
    
    /**
     * getProductCode
     *
     * @return string
    */
    public function getProductCode()
    {
    	return $this->productCode;
    }

    /**
     * setProductCode
     *
     * @param string productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
	    $this->productCode = $productCode;
	    return $this;
    }    
    
    /**
     * getCode
     *
     * @return string
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * setCode
     *
     * @param string $code
     *
     * @return self
    */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    
    /**
     * getPrompt
     *
     * @return string
    */
    public function getPrompt()
    {
        return $this->prompt;
    }
    
    /**
     * setPrompt
     *
     * @param string $prompt
     *
     * @return self
    */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }
    
    /**
     * getAttributeTemplateCode
     *
     * @return string
    */
    public function getAttributeTemplateCode()
    {
        return $this->attributeTemplateCode;
    }
    
    /**
     * setAttributeTemplateCode
     *
     * @param string $attributeTemplateCode
     *
     * @return self
    */
    public function setAttributeTemplateCode($attributeTemplateCode)
    {
        $this->attributeTemplateCode = $attributeTemplateCode;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductAttribute_Add_Template product_code="shield-small">
     *      <Code>att_spikes</Code>
     *      <Prompt><![CDATA[Fear Factor]]></Prompt>
     *      <AttributeTemplateCode>spikes-shield</AttributeTemplateCode>
     * </ProductAttribute_Add_Template>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductAttribute_Add_Template />');
        
        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Prompt', $this->getPrompt())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('AttributeTemplateCode', $this->getAttributeTemplateCode());
               
        
        return $xmlObject;
    }
}
        