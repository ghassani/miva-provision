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
 * ImportAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImportAdd implements FragmentInterface
{
    
    /** @var string */
    protected $module;
    
    /** @var string */
    protected $description;
    
    /** @var string */
    protected $delimiter;
    
    /** @var string */
    protected $delimiterOther;
    
    /** @var string */
    protected $header;
    
    /** @var string */
    protected $autoMap;
    
    /** @var array */
    protected $map = array();
    
    /** @var array */
    protected $settings = array();
    
    /** @var array */
    protected $allowedDelimiters = array('tab','comma','semicolon','space','other');
    
    /**
     * Constructor
     * 
     * @param string $module
     */
     public function __construct($module = null)
     {
         $this->module = $module;
     }

    /**
     * getModule
     *
     * @return string
    */
    public function getModule()
    {
    	return $this->module;
    }

    /**
     * setModule
     *
     * @param string module
     *
     * @return self
    */
    public function setModule($module)
    {
	    $this->module = $module;
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
     * getDelimiter
     *
     * @return string
    */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    
    /**
     * setDelimiter
     *
     * @param string $delimiter
     *
     * @return self
    */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }
    
    /**
     * getDelimiterOther
     *
     * @return string
    */
    public function getDelimiterOther()
    {
        return $this->delimiterOther;
    }
    
    /**
     * setDelimiterOther
     *
     * @param string $delimiterOther
     *
     * @return self
    */
    public function setDelimiter_Other($delimiterOther)
    {
        $this->delimiter_Other = $delimiterOther;
        return $this;
    }
    
    /**
     * getHeader
     *
     * @return string
    */
    public function getHeader()
    {
        return $this->header;
    }
    
    /**
     * setHeader
     *
     * @param string $header
     *
     * @return self
    */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }
    
    /**
     * getAutoMap
     *
     * @return string
    */
    public function getAutoMap()
    {
        return $this->autoMap;
    }
    
    /**
     * setAutoMap
     *
     * @param string $autoMap
     *
     * @return self
    */
    public function setAutoMap($autoMap)
    {
        $this->autoMap = $autoMap;
        return $this;
    }
    
    /**
     * getMap
     *
     * @return array
    */
    public function getMap()
    {
        return $this->map;
    }
    
    /**
     * setMap
     *
     * @param array $map
     *
     * @return self
    */
    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }
    
    /**
     * getSettings
     *
     * @return array
    */
    public function getSettings()
    {
        return $this->settings;
    }
    
    /**
     * setSettings
     *
     * @param array $settings
     *
     * @return self
    */
    public function setSettings(array $settings)
    {
        $this->settings = $settings;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Import_Add module="productimport">
     *      <Description>Test Import</Description>
     *      <Delimiter>tab|comma|semicolon|space|other</Delimiter>  <!-- If module format is delimited, these fields are required -->
     *      <Delimiter_Other>value</Delimiter_Other>                <!-- Required if Delimiter is "other" -->
     * 
     *      <Header/>  
     *                                             
     *      <AutoMap/>
     * 
     *      <Map>                                                   <!-- Required if AutoMap is not present, not allowed if it is present -->
     *          <Field id="field"/>                                <!-- One or more fields are required  -->
     *      </Map>
     *      <Settings>
     *           <!-- Module specific data -->
     * 
     *          <!-- categoryimport -->
     *           <Categories>add|update|addupdate|replace|addreplace</Categories>    <!-- Required -->
     *           <CustomFields>retain|delete</CustomFields>                          <!-- Required -->
     * 
     *           <!-- productimport -->
     *           <Products>add|update|addupdate|replace|addreplace</Products>        <!-- Required -->
     *           <CustomFields>retain|delete</CustomFields>                          <!-- Required -->
     *           <AttributeTemplates>use|copy</AttributeTemplates>                   <!-- Required -->
     * 
     *           <!-- customerimport -->
     *           <Customers>add|update|addupdate|replace|addreplace</Customers>      <!-- Required -->
     *           <CustomFields>retain|delete</CustomFields>                          <!-- Required -->
     * 
     *          <!-- provisioningimport -->
     *          <Groups>                                                            <!-- Optional, default is no group restrictions -->
     *              <Group name="x"/>
     *          </Groups>
     * 
     *          <Tags>                                                              <!-- Optional, default is to allow all tags -->
     *              <Tag element="x"/>                     
     *          </Tags>
     *      </Settings>
     *  </Import_Add>
     *
    */
    public function toXml()
    {
        $xmlObject = new \SimpleXmlElement('<Import_Add />');
        
        $xmlObject->addAttribute('module', $this->getModule());
        return $xmlObject;
    }
}
        