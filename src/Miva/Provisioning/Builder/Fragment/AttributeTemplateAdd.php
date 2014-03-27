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
* AttributeTemplateAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeTemplateAdd implements Model\StoreFragmentInterface
{

    /** @var string */
    public $code;
    
    /** @var string */
    public $prompt;

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
     * @param string code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
 
    /**
     * getPrompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * setPrompt
     *
     * @param string prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <AttributeTemplate_Add code="spikes-armor" prompt="Armor Spikes" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplate_Add />');

        $xmlObject->addAttribute('code', $this->getCode());
        $xmlObject->addAttribute('prompt', $this->getPrompt());
        
        return $xmlObject;
    }     
}

