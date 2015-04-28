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
* AvailabilityGroupUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AvailabilityGroupUpdate implements StoreFragmentInterface
{
    
    /** @var strint */
    protected $name;
    
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
     * <AvailabilityGroup_Update name="Thief" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AvailabilityGroup_Update />');
        
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }

}
    