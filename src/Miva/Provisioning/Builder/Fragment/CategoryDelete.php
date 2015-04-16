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
 * CategoryDelete
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class CategoryDelete implements StoreFragmentInterface
{
    /** @var string */
    protected $code;

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
     * getCode
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <Category_Delete code="bar">
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Category_Delete />');
        $xmlObject->addAttribute('code', $this->getCode());

        return $xmlObject;
    }

}