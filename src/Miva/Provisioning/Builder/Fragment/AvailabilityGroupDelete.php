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
* AvailabilityGroupDelete
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AvailabilityGroupDelete implements StoreFragmentInterface
{
    
    /** @var strint */
    public $name;
    
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
     * setName
     *
     * @param string name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <AvailabilityGroup_Delete name="Thief" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AvailabilityGroup_Delete />');
        
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }

}
    