<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Child;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;

/**
 * PageUpdateItem
 * 
 * Since these items vary from item to item we just use an array to xml
 * to make a generic item. Maybe in the future something for specific
 * item types can be added
 * 
 * @author Gassan Idriss <gidriss@miva.com>
*/
class PageUpdateItem implements ChildFragmentInterface
{

    /** @var string */
    public $code;
    
    /** @var array */
    public $data = array();

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
     * @param string code
     *
     * @return self
    */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * getData
     * 
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * setData
     * 
     * @param array $data
     * 
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Item code="product_display">
     *      <ImageDimensions constrain="no"/>
     * </Item>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Item />');
        
        $xmlObject->addAttribute('code', $this->getCode());
        
        XmlHelper::appendArrayToParent($xmlObject, $this->getData());
                
        return $xmlObject;
    }

}

        
