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
* AvailabilityGroupDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupDelete implements FragmentInterface
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
     * <AvailabilityGroup_Delete name="Thief" />
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<AvailabilityGroup_Delete />');
        
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }

}
    