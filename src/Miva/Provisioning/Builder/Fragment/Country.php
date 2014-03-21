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
* Country
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Country implements DomainFragmentInterface
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $isoCode;


    /**
     * Constructor
     * 
     * @param string $name
     * @param string $code
     * @param string $isoCode
     */
    public function __construct($name = null, $code = null, $isoCode = null)
    {
        $this->name = $name;
        $this->code = $code;
        $this->isoCode = $isoCode;
    }

    /**
    * setName
    *
    * @param string $name
    *
    * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
    * getName
    *
    * @return string
    */
    public function getName()
    {
        return $this->name;
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
    * getCode
    *
    * @return string
    */
    public function getCode()
    {
        return $this->code;
    }

    /**
    * setIsoCode
    *
    * @param string $isoCode
    *
    * @return self
    */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    /**
    * getIsoCode
    *
    * @return string
    */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Country_Add>
     *       <Name>Burchtopia</Name>
     *       <Code>BR</Code>
     *       <ISO_Code>123</ISO_Code>
     *   </Country_Add>
     *
     *  <Country_Update name="Burchtopia">
     *       <Name>Burchtopia is great</Name>
     *      <Code>BG</Code>
     *     <ISO_Code>321</ISO_Code>
     * </Country_Update>
     *
     *  <Country_Delete name="Burchtopia is great" />
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('ISO_Code', $this->getIsoCode());

        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }

}