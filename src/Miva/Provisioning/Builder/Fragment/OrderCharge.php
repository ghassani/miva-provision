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
* OrderCharge
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderCharge implements FragmentInterface
{
    
    
    /** @var string */
    protected $type;
    
    /** @var string */
    protected $description;
    
    /** @var int */
    protected $amount;
        
    /**
     * getType
     *
     * @return string
    */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * setType
     *
     * @param string $type
     *
     * @return self
    */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    /**
     * getDescription
     *
     * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * setDescription
     *
     * @param string $description
     *
     * @return self
    */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * <Charge>
     *      <Type>Type</Type>
     *      <Description>Description</Description>
     *      <Amount>Amount</Amount>
     * </Charge>
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
        