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
* ProductKitDelete
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductKitDelete implements StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
        
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
     * @param string $productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }          

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductKit_Delete_All product_code="test"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductKit_Delete_All />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        return $xmlObject;
    }
}