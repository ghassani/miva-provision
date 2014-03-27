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
* PackagingRulesUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PackagingRulesUpdate implements Model\StoreFragmentInterface
{
    
    
    /** @var array */
    public $fallbackPackage = array(
        'Width' => null,
        'Length' => null,
        'Height' => null,
    );
    
    /** @var array */
    public $boxPacking = array(
        'type' => null,
        'module_code' => null,
    );
   

    
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
        $this->fallbackPackage = array(
            'Width' => $width,
            'Length' => $length,
            'Height' => $height,
        );
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
        $this->boxPacking = array(
            'type' => $type,
            'module_code' => $moduleCode,
        );    
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
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<PackagingRules_Update></PackagingRules_Update>');

        $fallbackPackage = $this->getFallbackPackage();
        $fallbackXml = $xmlObject->addChild('FallbackPackage');
        
        $fallbackXml->addChild('', $fallbackPackage['Width']);
        $fallbackXml->addChild('', $fallbackPackage['Length']);
        $fallbackXml->addChild('', $fallbackPackage['Height']);
        
        $boxPacking = $this->getBoxPacking();
        $boxPackingXml = $xmlObject->addChild('BoxPacking');
        $boxPackingXml->addAttribute('type', $boxPacking['type']);
        
        if(isset($boxPacking['module_code']) && $boxPacking['module_code']) {
            $boxPackingXml->addAttribute('module_code', $boxPacking['module_code']);
        }
        
        return $xmlObject;
    }
}
        
        