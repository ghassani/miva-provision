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
 * ProductDelete
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductDelete implements StoreFragmentInterface
{

    /** @var string */
    protected $code;

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
     * {@inheritDoc}
     *
     * Format:
     *
     * <Product_Delete product_code="test" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Product_Delete />');

        $xmlObject->addAttribute('product_code', $this->getCode());

        return $xmlObject;
    }

}

