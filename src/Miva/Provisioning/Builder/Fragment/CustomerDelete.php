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
 * CustomerDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class CustomerDelete implements Model\StoreFragmentInterface
{

    /** @var string */
    public $login;

    /**
     * getLogin
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * setLogin
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }



    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *   <Customer_Delete login="BAR" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Customer_Delete />');

        $xmlObject->addAttribute('login', $this->getLogin());

        return $xmlObject;
    }

}