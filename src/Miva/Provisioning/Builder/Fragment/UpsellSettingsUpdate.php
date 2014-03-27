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
* UpsellSettingsUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsellSettingsUpdate implements Model\StoreFragmentInterface
{
    
    
    /** @var int */
    public $productsToShow;
    
    /** @var int */
    public $maxProductsToSelect;
    

    
    /**
     * getProductsToShow
     *
     * @return int
    */
    public function getProductsToShow()
    {
        return $this->productsToShow;
    }
    
    /**
     * setProductsToShow
     *
     * @param int $productsToShow
     *
     * @return self
    */
    public function setProductsToShow($productsToShow)
    {
        $this->productsToShow = $productsToShow;
        return $this;
    }
    
    /**
     * getMaxProductsToSelect
     *
     * @return int
    */
    public function getMaxProductsToSelect()
    {
        return $this->maxProductsToSelect;
    }
    
    /**
     * setMaxProductsToSelect
     *
     * @param int $maxProductsToSelect
     *
     * @return self
    */
    public function setMaxProductsToSelect($maxProductsToSelect)
    {
        $this->maxProductsToSelect = $maxProductsToSelect;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <UpsellSettings_Update>
     *     <ProductsToShow>3</ProductsToShow>
     *     <MaxProductsToSelect>3</MaxProductsToSelect>
     * </UpsellSettings_Update>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<UpsellSettings_Update></UpsellSettings_Update>');

        $xmlObject->addChild('ProductsToShow', $this->getProductsToShow());
        $xmlObject->addChild('MaxProductsToSelect', $this->getMaxProductsToSelect());

        return $xmlObject;
    }
}