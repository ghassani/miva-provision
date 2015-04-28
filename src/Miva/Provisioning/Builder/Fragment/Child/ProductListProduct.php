<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Child;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;

/**
* ProductListProduct
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductListProduct implements ChildFragmentInterface
{
    
    /** @var string */
    public $code;
    
    /** @var int */
    public $quantity;

    /** @var DateTime|null */
    public $dateInStock;
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
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Product />');
        
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Quantity', $this->getQuantity());
        
        if ($this->getDateInStock() instanceof \DateTime) {
            $dateInStockXml = $xmlObject->addChild('DateInStock');
            XmlHelper::dateTimeToXml($dateInStockXml, $this->getDateInStock());
        }
        
        return $xmlObject;
    }
}


