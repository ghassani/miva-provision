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
* ImageTypeAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImageTypeAdd implements FragmentInterface
{
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $description;

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
     * {@inheritDoc}
     * 
     * Format:
     *
     * <ImageType_Add>
     *     <Code>type_1</Code>
     *     <Description>this is the description for type_1</Description>
     * </ImageType_Add>
     *   
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<ImageType_Add></ImageType_Add>');
        
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Description', $this->getDescription());
        
        return $xmlObject;
    }
}
