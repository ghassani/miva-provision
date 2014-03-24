<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* PageUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PageUpdate implements Model\StoreFragmentInterface
{

    /** @var string */
    protected $code;
    
    /** @var array */
    protected $items;
    
    /**
     * Constructor
     * 
     * @param string $code
     */
    public function __construct($code = null, array $items = array())
    {
        $this->code = $code;
        $this->setItems($items);
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
     * getItems
     *
     * @return array
    */
    public function getItems()
    {
    	return $this->items;
    }

    /**
     * setItems
     *
     * @param array items
     *
     * @return self
    */
    public function setItems(array $items)
    {
        foreach($items as $_items) {
            if (!$_items instanceof PageUpdateItem) {
                throw new \InvalidArgumentException('PageUpdate::setItems Requires an array of PageUpdateItem');
            }
        }
	    $this->items = $items;
	    return $this;
    }
    
    /**
     * addItem
     *
     * @param PageUpdateItem items
     *
     * @return self
    */
    public function addItem(PageUpdateItem $item)
    {
	    $this->items[] = $item;
	    return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Page_Update code="PROD">
     *      <Item code="product_display">
     *          <ImageDimensions constrain="no"/>
     *      </Item>
     * </Page_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Page_Update />');
        
        $xmlObject->addAttribute('code', $this->getCode());
        
        foreach ($this->getItems() as $item) {
            XmlHelper::appentToParent($xmlObject, $item->toXml($version, $options));
        }
        
        return $xmlObject;
    }

}

        
