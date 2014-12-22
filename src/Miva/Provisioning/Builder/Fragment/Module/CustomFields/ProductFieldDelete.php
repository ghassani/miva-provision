<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\CustomFields;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* ProductFieldDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductFieldDelete implements StoreFragmentInterface
{

    public $code;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $$this;
    }

            
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="fields_prod">
     *      <ProductField_Delete code="code" />
     *  </Module>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_prod');
        
        $mainTag = $xmlObject->addChild('ProductField_Delete');
        
        $mainTag->addAttribute('Code', $this->getCode());

        
        return $xmlObject;
    }
}