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
* ImageTypeUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImageTypeUpdate implements FragmentInterface
{
    
    /** @var string */
    protected $code;

    /** @var string */
    protected $newCode;
    
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
     * getNewCode
     *
     * @return string
    */
    public function getNewCode()
    {
        return $this->newCode;
    }
    
    /**
     * setNewCode
     *
     * @param string $newCode
     *
     * @return self
    */
    public function setNewCode($newCode)
    {
    	$this->newCode = $newCode;
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
     * <ImageType_Update code="type_1">
     *       <Code>type_a</Code>
     * </ImageType_Update>
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<ImageType_Update></ImageType_Update>');
        
        $xmlObject->addAttribute('code', $this->getCode());
        $xmlObject->addChild('Description', $this->getDescription());
        
        if ($this->getNewCode()) {
            $xmlObject->addChild('Code', $this->getNewCode());
        }
                
        return $xmlObject;
    }
}
