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

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* ImageTypeDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImageTypeDelete implements StoreFragmentInterface
{
    
    /** @var string */
    protected $code;
    

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
     * {@inheritDoc}
     * 
     * Format:
     *
     * <ImageType_Delete code="type_a"/>
     *   
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ImageType_Delete></ImageType_Delete>');
        
        $xmlObject->addAttribute('code', $this->getCode());
        
        return $xmlObject;
    }
}
