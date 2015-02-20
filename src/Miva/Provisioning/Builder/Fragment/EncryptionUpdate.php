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
 * EncryptionUpdate
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class EncryptionUpdate implements Model\StoreFragmentInterface
{

    /** @var string */
    public $prompt;

    public $newPrompt;

    public $passphrase;

    public $current = false;

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
     * @return mixed
     */
    public function getPassphrase()
    {
        return $this->passphrase;
    }

    /**
     * @param mixed $passphrase
     */
    public function setPassphrase($passphrase)
    {
        $this->passphrase = $passphrase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewPrompt()
    {
        return $this->newPrompt;
    }

    /**
     * @param mixed $newPrompt
     */
    public function setNewPrompt($newPrompt)
    {
        $this->newPrompt = $newPrompt;
        return $this;
    }



    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <Encryption_Update prompt="BAR">
     *      <Prompt</Prompt>
     *      <Passphrase></Passphrase>
     *      <Current>Yes|No</Current>
     *  </Encryption_Update>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Encryption_Update />');

        $xmlObject->addAttribute('prompt', $this->getPrompt());

        if ($this->getNewPrompt()) {
            $xmlObject->addChild('Prompt', $this->getNewPrompt());
        }

        if ($this->getPassphrase()) {
            $xmlObject->addChild('Passphrase', $this->getPassphrase());
        }

        $xmlObject->addChild('Current', $this->getCurrent() ? 'Yes' : 'No');


        return $xmlObject;
    }

}