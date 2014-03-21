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
* PackagingRulesUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PackagingRulesUpdate implements FragmentInterface
{
    
    
    /** @var array */
    protected $fallbackPackage = array(null,null,null);
    
    /** @var array */
    protected $boxPacking = array(null, null);
   

    
    /**
     * getFallbackPackage
     *
     * @return array
    */
    public function getFallbackPackage()
    {
        return $this->fallbackPackage;
    }
    
    /**
     * setFallbackPackage
     *
     * @param float $width
     * @param float $length
     * @param float $height
     *
     * @return self
    */
    public function setFallbackPackage($width, $length, $height)
    {
        $this->fallbackPackage = array($width, $length, $height);
        return $this;
    }
    
    /**
     * getBoxPacking
     *
     * @return array
    */
    public function getBoxPacking()
    {
        return $this->boxPacking;
    }
    
    /**
     * setBoxPacking
     *
     * @param string $type
     * @param string $moduleCode
     *
     * @return self
    */
    public function setBoxPacking($type, $moduleCode = null)
    {
        $this->boxPacking = array($type, $moduleCode);        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <PackagingRules_Update>
     *       <FallbackPackage>
     *           <Width>1.23</Width>
     *           <Length>1.23</Length>
     *           <Height>1.23</Height>
     *       </FallbackPackage>
     *
     *       <BoxPacking type="fallback" />
     *           - or -
     *       <BoxPacking type="module" module_code="packbyweight" />
     *   </PackagingRules_Update>
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
        
        