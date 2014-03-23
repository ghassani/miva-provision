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
* ProductListProduct
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductListProduct implements FragmentFragmentInterface
{
    
    /** @var string */
    protected $code;
    
    /** @var int */
    protected $quantity;

    /** @var DateTime|null */
    protected $dateInStock;
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
     * getQuantity
     *
     * @return int
    */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * setQuantity
     *
     * @param int $quantity
     *
     * @return self
    */
    public function setQuantity($quantity)
    {
    	$this->quantity = $quantity;
        return $this;
    }
 
    /**
     * getDateInStock
     *
     * @return DateTime
    */
    public function getDateInStock()
    {
        return $this->dateInStock;
    }
    
    /**
     * setDateInStock
     *
     * @param DateTime $dateInStock
     *
     * @return self
    */
    public function setDateInStock(\DateTime $dateInStock = null)
    {
    	$this->dateInStock = $dateInStock;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Product>                                       (required)
     *      <Code>p1</Code>                             (required)
     *      <Quantity>1</Quantity>                      (required)
     *      <DateInStock>                               (optional)
     *          <Day>01</Day>                                   (required)
     *          <Month>01</Month>                               (required)
     *          <Year>1970</Year>                               (required)
     *          <Hour>00</Hour>                                 (optional)
     *          <Minute>01</Minute>                             (optional)
     *       </DateInStock>
     * </Product>
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


