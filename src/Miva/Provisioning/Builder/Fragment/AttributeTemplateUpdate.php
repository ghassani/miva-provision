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
 * AttributeTemplateUpdate
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class AttributeTemplateUpdate implements StoreFragmentInterface
{
    /** @var string */
    protected $templateCode;

    /** @var string */
    protected $code;

    /** @var string */
    protected $prompt;

    /**
     * @return string
     */
    public function getTemplateCode()
    {
        return $this->templateCode;
    }

    /**
     * @param string $templateCode
     */
    public function setTemplateCode($templateCode)
    {
        $this->templateCode = $templateCode;
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
     * <AttributeTemplate_Update template_code="Armor Spikes">
     *  <Template_Code></Tempalte_Code>
     *  <Prompt></Prompt>
     * </AttributeTemplate_Update>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplate_Update />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());

        if ($this->getCode()) {
            $xmlObject->addChild('Template_Code', $this->getCode());
        }

        if ($this->getPrompt()) {
            $xmlObject->addChild('Prompt', $this->getPrompt());
        }


        return $xmlObject;
    }
}

