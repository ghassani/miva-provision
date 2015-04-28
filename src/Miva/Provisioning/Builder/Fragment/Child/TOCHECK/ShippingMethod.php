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

/**
 * ShippingMethod
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ShippingMethod implements Model\ChildFragmentInterface
{

    /** @var string */
    public $moduleCode;
    
    /** @var string */
    public $methodCode;

    /**
     * @return mixed
     */
    public function getMethodCode()
    {
        return $this->methodCode;
    }

    /**
     * @param mixed $methodCode
     */
    public function setMethodCode($methodCode)
    {
        $this->methodCode = $methodCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModuleCode()
    {
        return $this->moduleCode;
    }

    /**
     * @param mixed $moduleCode
     */
    public function setModuleCode($moduleCode)
    {
        $this->moduleCode = $moduleCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ShippingMethod module_code="upsxml" method_code="02" />
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ShippingMethod />');

        $xmlObject->addAttribute('module_code', $this->getModuleCode());
        $xmlObject->addAttribute('method_code', $this->getMethodCode());

        return $xmlObject;
    }
}
