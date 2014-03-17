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
* PriceGroup
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroup implements FragmentInterface
{
    
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $pricing;
    
    /** @var int */
    protected $amount;

    /**
     * getName
     *
     * @return string
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param string $name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * getPricing
     *
     * @return string
    */
    public function getPricing()
    {
        return $this->pricing;
    }
    
    /**
     * setPricing
     *
     * @param string $pricing
     *
     * @return self
    */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
        return $this;
    }
    
    /**
     * getAmount
     *
     * @return int
    */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * setAmount
     *
     * @param int $amount
     *
     * @return self
    */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <PriceGroup_Add>
     *      <Name>Warrior</Name>
     *      <Pricing>Discount</Pricing>
     *      <Amount>10.00</Amount>
     *  </PriceGroup_Add>
     *
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
                