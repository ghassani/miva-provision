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
* UpsoldProductRequiredProductAssign
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class UpsoldProductRequiredProductAssign implements StoreFragmentInterface
{
    
    /** @var string */
    public $upsoldProductCode;

    /** @var string */
    public $requiredProductCode;


    /**
     * Constructor
     * 
     * @param string $upsoldProductCode
     * @param string $requiredProductCode
     */
    public function __construct($upsoldProductCode = null, $requiredProductCode = null)
    {
        $this->upsoldProductCode = $upsoldProductCode;
        $this->requiredProductCode = $requiredProductCode;
    }

    /**
     * getUpsoldProductCode
     *
     * @return string
    */
    public function getUpsoldProductCode()
    {
        return $this->upsoldProductCode;
    }
    
    /**
     * setUpsoldProductCode
     *
     * @param string $upsoldProductCode
     *
     * @return self
    */
    public function setUpsoldProductCode($upsoldProductCode)
    {
        $this->upsoldProductCode = $upsoldProductCode;
        return $this;
    }

    /**
     * getRequiredProductCode
     *
     * @return string
    */
    public function getRequiredProductCode()
    {
        return $this->requiredProductCode;
    }
    
    /**
     * setRequiredProductCode
     *
     * @param string $requiredProductCode
     *
     * @return self
    */
    public function setRequiredProductCode($requiredProductCode)
    {
        $this->requiredProductCode = $requiredProductCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <UpsoldProductRequiredProduct_Assign upsoldproduct_code="shield-large" requiredproduct_code="mail-chain" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<UpsoldProductRequiredProduct_Assign></UpsoldProductRequiredProduct_Assign>');

        $xmlObject->addAttribute('upsoldproduct_code', $this->getUpsoldProductCode());
        $xmlObject->addAttribute('requiredproduct_code', $this->getRequiredProductCode());
        
        return $xmlObject;
    }

}