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
* AvailabilityGroupUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupUpdate implements FragmentInterface
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
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<AvailabilityGroup_Update />');
        
        $xmlObject->setAttribute('name', $this->getName());
        
        return $xmlObject;
    }

}
    