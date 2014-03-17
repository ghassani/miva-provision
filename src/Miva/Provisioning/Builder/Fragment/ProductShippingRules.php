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
* ProductShippingRules
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductShippingRules implements FragmentInterface
{

    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $shipsInOwnPackaging;
    
    /** @var int */
    protected $width;
    
    /** @var int */
    protected $length;
    
    /** @var int */
    protected $height;
    
    /** @var string */
    protected $limitShippingMethods;
    
    /** @var array */
    protected $shippingMethods = array();
     
     
    /**
     * getProductCode
     *
     * @return string
    */
    public function getProductCode()
    {
        return $this->productCode;
    }
    
    /**
     * setProductCode
     *
     * @param string $productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
    	$this->productCode = $productCode;
        return $this;
    }
   
    /**
     * getShipsInOwnPackaging
     *
     * @return string
    */
    public function getShipsInOwnPackaging()
    {
        return $this->shipsInOwnPackaging;
    }
    
    /**
     * setShipsInOwnPackaging
     *
     * @param string $shipsInOwnPackaging
     *
     * @return self
    */
    public function setShipsInOwnPackaging($shipsInOwnPackaging)
    {
        $this->shipsInOwnPackaging = $shipsInOwnPackaging;
        return $this;
    }
    
    /**
     * getWidth
     *
     * @return int
    */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * setWidth
     *
     * @param int $width
     *
     * @return self
    */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
    
    /**
     * getLength
     *
     * @return int
    */
    public function getLength()
    {
        return $this->length;
    }
    
    /**
     * setLength
     *
     * @param int $length
     *
     * @return self
    */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }
    
    /**
     * getHeight
     *
     * @return int
    */
    public function getHeight()
    {
        return $this->height;
    }
    
    /**
     * setHeight
     *
     * @param int $height
     *
     * @return self
    */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
    
    /**
     * getLimitShippingMethods
     *
     * @return string
    */
    public function getLimitShippingMethods()
    {
        return $this->limitShippingMethods;
    }
    
    /**
     * setLimitShippingMethods
     *
     * @param string $limitShippingMethods
     *
     * @return self
    */
    public function setLimitShippingMethods($limitShippingMethods)
    {
        $this->limitShippingMethods = $limitShippingMethods;
        return $this;
    }
    
    /**
     * getShippingMethods
     *
     * @return array
    */
    public function getShippingMethods()
    {
        return $this->shippingMethods;
    }
    
    /**
     * setShippingMethods
     *
     * @param array $shippingMethods
     *
     * @return self
    */
    public function setShippingMethods(array $shippingMethods)
    {
        $this->shippingMethods = $shippingMethods;
        return $this;
    }
    
    /**
     * addShippingMethod
     *
     * @param ShippingMethod $shippingMethod
     *
     * @return self
    */
    public function addShippingMethod(ShippingMethod $shippingMethod)
    {
        $this->shippingMethods[] = $shippingMethod;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductShippingRules_Update product_code="prod">
     *       <ShipsInOwnPackaging>Yes</ShipsInOwnPackaging>
     *       <Width>1.23</Width>
     *       <Length>1.23</Length>
     *       <Height>1.23</Height>
     *       <LimitShippingMethods>No</LimitShippingMethods>
     *       <ShippingMethods>
     *           <ShippingMethod module_code="upsxml" method_code="02" />    (multiple allowed)
     *       </ShippingMethods>
     *   </ProductShippingRules_Update>
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