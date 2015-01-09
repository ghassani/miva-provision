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
 * ProductAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductAdd implements Model\StoreFragmentInterface
{

    public $productCode;

    public $groupCode;

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
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * @param mixed $groupCode
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;
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

        $xmlObject = new SimpleXmlElement('<ProductSalePrice>'.$this->getPrice().'</ProductSalePrice>');

        $xmlObject->addAttribute('product_code',  $this->getProductCode());
        $xmlObject->addAttribute('group_name',    $this->getGroupCode());

        return $xmlObject;
    }
}