<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* BoxAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class BoxAdd implements StoreFragmentInterface
{
    
    /** @var string */
    protected $description;
    
    /** @var boolean */
    protected $enabled = true;    
    
    /** @var float */
    protected $width;    
    
    /** @var float */
    protected $length;    
    
    /** @var float */
    protected $height;
    
    /** @var array */
    protected $boxPackingSettings = array(
        'MaxWeight' => null, 
        'MaxQuantity' => null,
    );

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
     * @param string description
     *
     * @return self
    */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * getEnabled
     *
     * @return boolean
    */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * setEnabled
     *
     * @param string enabled
     *
     * @return self
    */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }
        
    /**
     * getWidth
     *
     * @return float
    */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * setWidth
     *
     * @param float width
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
     * @return float
    */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * setLength
     *
     * @param float length
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
     * @return float
    */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * setHeight
     *
     * @param float height
     *
     * @return self
    */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
    
    /**
     * getBoxPackingSettings
     *
     * @return array
    */
    public function getBoxPackingSettings()
    {
        return $this->boxPackingSettings;
    }

    /**
     * setBoxPackingSettings
     *
     * @param array boxPackingSettings
     *
     * @return self
    */
    public function setBoxPackingSettings($maxWeight, $maxQuantity)
    {
        $this->boxPackingSettings = array($maxWeight,$maxQuantity);
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *     <Box_Add>
     *        <Description>Box</Description>
     *        <Enabled>Yes</Enabled>
     *        <Width>10.11</Width>
     *        <Length>10.11</Length>
     *        <Height>10.11</Height>
     *
     *        <BoxPackingSettings>                -- optional
     *            <MaxWeight>1.23</MaxWeight>     -- packbyweight
     *            <MaxQuantity>5</MaxQuantity>    -- packbyquantity
     *        </BoxPackingSettings>
     *    </Box_Add>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Box_Add />');
                
        $xmlObject->addChild('Enabled', $this->getEnabled() ? 'Yes' : 'No');
        $xmlObject->addChild('Width',   $this->getWidth());
        $xmlObject->addChild('Length',  $this->getLength());
        $xmlObject->addChild('Height',  $this->getHeight());
        $xmlObject->addChild('Description', $this->getDescription());
        
        $boxPackingSettings = $this->getBoxPackingSettings();
        
        if(implode('',$boxPackingSettings)) {
            $boxPackingSettingsXml = $xmlObject->addChild('BoxPackingSettings');
            foreach($boxPackingSettings as $name => $value) {
                $boxPackingSettingsXml->addChild($name, $value);
            }
        }
 
        return $xmlObject;
    }

}
    