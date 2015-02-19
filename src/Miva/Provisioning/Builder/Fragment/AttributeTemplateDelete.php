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
 * AttributeTemplateDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class AttributeTemplateDelete implements Model\StoreFragmentInterface
{

    /** @var string */
    public $code;

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
     * {@inheritDoc}
     *
     * Format:
     *
     * <AttributeTemplate_Delete code="Armor Spikes" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplate_Delete />');

        $xmlObject->addAttribute('code', $this->getCode());

        return $xmlObject;
    }
}

