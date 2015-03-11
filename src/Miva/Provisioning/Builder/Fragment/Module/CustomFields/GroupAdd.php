<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\CustomFields;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* GroupAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class GroupAdd implements StoreFragmentInterface
{

    public $code;
    
    public $name;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $$this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $$this;
    }
            
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="util">
     *   <Group_Add>
     *      <Code>group_code</Code>
     *      <Name>Group Name</Name>
     *  </Group_Add>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'util');
        
        
        $mainTag = $xmlObject->addChild('Group_Add');
        
        $mainTag->addChild('Code', $this->getCode());
        $mainTag->addChild('Name', $this->getName())->addAttribute('method-call', 'addCDATA');

        
        return $xmlObject;
    }
}