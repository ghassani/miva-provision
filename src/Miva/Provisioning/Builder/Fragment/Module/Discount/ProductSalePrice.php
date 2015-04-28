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
 * ProductSalePrice
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductSalePrice implements StoreFragmentInterface
{

    public $productCode;

    public $groupName;

    public $price;

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
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }




    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductSalePrice product_code="xxx" group_name="">xx.xx</ProductSalePrice>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        if ($version < Version::NINE) {
            return;
        }

        $xmlObject = new SimpleXmlElement('<Module />');

        $xmlObject->addAttribute('code',  'discount_saleprice');
        $xmlObject->addAttribute('feature',    'discount');

        $salePrice = $xmlObject->addChild('ProductSalePrice', $this->getPrice());

        $salePrice->addAttribute('product_code',  $this->getProductCode());
        $salePrice->addAttribute('group_name',    $this->getGroupName());

        return $xmlObject;
    }
}