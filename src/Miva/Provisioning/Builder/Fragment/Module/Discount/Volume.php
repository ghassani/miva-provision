<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\Discount;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
 * Volume
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class Volume implements StoreFragmentInterface
{

    public $productPricingTables = array();

    /**
     * @return array
     */
    public function getProductPricingTables()
    {
        return $this->productPricingTables;
    }

    /**
     * @param array $productPricingTables
     */
    public function setProductPricingTables(array $productPricingTables)
    {
        $this->productPricingTables = $productPricingTables;
        return $this;
    }

    public function addProductPricingTable(ProductPricingTable $productPricingTable)
    {
        $this->productPricingTables[] = $productPricingTable;
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <Module code="discount_volume" feature="discount">
     *      <!-- Non-existent product -->
     *      <ProductPricingTable group_name="Volume Pricing Product Provisioning Test 01" product_code="non-existent" />
     *  </Module>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');

        $xmlObject->addAttribute('code',    'discount_volume');
        $xmlObject->addAttribute('feature', 'discount');

        foreach ($this->getProductPricingTables() as $productPricingTable)
        {
            XmlHelper::appendToParent($xmlObject, $productPricingTable->toXml($version, $options));
        }

        return $xmlObject;
    }
}