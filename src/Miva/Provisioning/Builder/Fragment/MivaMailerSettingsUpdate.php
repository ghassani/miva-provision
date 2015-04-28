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
* MivaMailerSettingsUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class MivaMailerSettingsUpdate implements StoreFragmentInterface
{
    
    
    /** @var string */
    protected $account;
    
    /** @var string */
    protected $server;
    

    
    /**
     * getAccount
     *
     * @return string
    */
    public function getAccount()
    {
        return $this->account;
    }
    
    /**
     * setAccount
     *
     * @param string $account
     *
     * @return self
    */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }
    
    /**
     * getServer
     *
     * @return string
    */
    public function getServer()
    {
        return $this->server;
    }
    
    /**
     * setServer
     *
     * @param string $server
     *
     * @return self
    */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *   <MivaMailerSettings_Update>
     *       <Account/>
     *       <Server/>
     *   </MivaMailerSettings_Update>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<MivaMailerSettings_Update></MivaMailerSettings_Update>');

        $xmlObject->addChild('Account', $this->getAccount());
        $xmlObject->addChild('Server', $this->getServer());
        
        return $xmlObject;
    }
}