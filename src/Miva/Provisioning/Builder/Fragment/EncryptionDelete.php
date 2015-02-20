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
 * EncryptionDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class EncryptionDelete implements Model\StoreFragmentInterface
{

    /** @var string */
    public $prompt;

    /**
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * @param string $prompt
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
     *  <Encryption_Delete prompt="BAR" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Encryption_Delete />');

        $xmlObject->addAttribute('prompt', $this->getPrompt());

        return $xmlObject;
    }

}