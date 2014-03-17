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
* AvailabilityGroupProduct
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupProduct implements FragmentInterface
{
	
	/** @var string */
	protected $description;
	
	/** @var string */
	protected $enabled;	
	
	/** @var float */
	protected $width;	
	
	/** @var float */
	protected $length;	
	
	/** @var float */
	protected $height;
	
	/** @var array */
	protected $boxPackageSettings = array(null, null);
	
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
     * @return string
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
     * getBoxPackageSettings
     *
     * @return array
    */
    public function getBoxPackageSettings()
    {
    	return $this->boxPackageSettings;
    }

    /**
     * setBoxPackageSettings
     *
     * @param array boxPackageSettings
     *
     * @return self
    */
    public function setBoxPackageSettings($maxWeight, $maxQuantity)
    {
	    $this->boxPackageSettings = array($maxWeight,$maxQuantity);
	    return $this;
    }
    

	/**
	 * {@inheritDoc}
	 * 
	 * Format:
	 * 
	 * 	<Box_Add>
	 *		<Description>Box</Description>
	 *		<Enabled>Yes</Enabled>
	 *		<Width>10.11</Width>
	 * 		<Length>10.11</Length>
	 *		<Height>10.11</Height>
	 *
	 *		<BoxPackingSettings>				-- optional
	 *			<MaxWeight>1.23</MaxWeight>		-- packbyweight
	 *			<MaxQuantity>5</MaxQuantity>	-- packbyquantity
	 *		</BoxPackingSettings>
	 *	</Box_Add>
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
	