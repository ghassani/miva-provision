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

/**
* UpsoldProductRequiredProduct
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsoldProductRequiredProduct implements FragmentInterface
{
    
    /** @var string */
    protected $upsoldProductCode;

    /** @var string */
    protected $requiredProductCode;


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
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }

}