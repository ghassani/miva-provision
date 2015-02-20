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
 * ProductImageReplaceType
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductImageReplaceType implements Model\StoreFragmentInterface
{

    /** @var string */
    public $productCode;

    public $filePath;

    public $imageTypeCode;

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @param mixed $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageTypeCode()
    {
        return $this->imageTypeCode;
    }

    /**
     * @param mixed $imageTypeCode
     */
    public function setImageTypeCode($imageTypeCode)
    {
        $this->imageTypeCode = $imageTypeCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *   <ProductImage_Replace_Type login="BAR" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductImage_Replace_Type />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('filepath', $this->getFilePath());
        $xmlObject->addAttribute('imagetype_code', $this->getImageTypeCode());

        return $xmlObject;
    }

}