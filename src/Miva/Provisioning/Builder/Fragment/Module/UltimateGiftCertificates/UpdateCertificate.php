<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\UltimateGiftCertificates;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* UpdateCertificate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpdateCertificate implements StoreFragmentInterface
{
    
    public $code;

    public $amount;

    public $expires;

    public $tax = false;

    public $shipping = false;

    public $product;

    public $template;

    public $html;

    public $subect;

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
     * getAmount
     *
     * @return float
    */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * setAmount
     *
     * @param float $amount
     *
     * @return self
    */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * getExpires
     *
     * @return \DateTime
    */
    public function getExpires()
    {
        return $this->expires;
    }
    
    /**
     * setExpires
     *
     * @param \DateTime $expires
     *
     * @return self
    */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }
    
    /**
     * getTax
     *
     * @return bool
    */
    public function getTax()
    {
        return $this->tax;
    }
    
    /**
     * setTax
     *
     * @param bool $tax
     *
     * @return self
    */
    public function setTax($tax)
    {
        $this->tax = (bool) $tax;
        return $this;
    }


    /**
     * getShipping
     *
     * @return bool
    */
    public function getShipping()
    {
        return $this->shipping;
    }
    
    /**
     * setShipping
     *
     * @param bool $shipping
     *
     * @return self
    */
    public function setShipping($shipping)
    {
        $this->shipping = (bool) $shipping;
        return $this;
    }
    
    /**
     * getProduct
     *
     * @return string
    */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * setProduct
     *
     * @param string $product
     *
     * @return self
    */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * getTemplate
     *
     * @return string
    */
    public function getTemplate()
    {
        return $this->template;
    }
    
    /**
     * setTemplate
     *
     * @param string $template
     *
     * @return self
    */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * getHtml
     *
     * @return string
    */
    public function getHtml()
    {
        return $this->html;
    }
    
    /**
     * setHtml
     *
     * @param string $html
     *
     * @return self
    */
    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }
    
    /**
     * getSubject
     *
     * @return string
    */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * setSubject
     *
     * @param string $subject
     *
     * @return self
    */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:    
     *                    
     * <UltimateGiftCertificates_UpdateCertificate code="TEST_ADD"> 
     *      <Amount>50.00</Amount> <!-- REQUIRED -->
     *      <Expires>360</Expires> <!-- REQUIRED NUMBER OF DAYS -->                        
     *      <Tax>Yes</Tax> <!-- Optional, BOOL -->      
     *      <Shipping>Yes</Shipping> <!-- Optional, BOOL -->     
     *      <Product>TEST</Product> <!-- Optional, Product Code to Vendor for GC -->     
     *      <Template>TEST</Template> <!-- Optional, Text --> 
     *      <Html>TEST</Html> <!-- Optional, Text --> 
     *      <Subject>TEST</Subject> <!-- Optional, Text -->  
     * </UltimateGiftCertificates_UpdateCertificate> 
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<UltimateGiftCertificates_UpdateCertificate />');

        $xmlObject->addAttribute('code', $this->getCode());
        
        $xmlObject->addChild('Amount',  $this->getAmount());
        $xmlObject->addChild('Expires', $this->getExpires());
        
        return $xmlObject;
    }     
}