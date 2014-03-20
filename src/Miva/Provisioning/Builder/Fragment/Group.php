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
* Group
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Group implements FragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var array */
    protected $privileges = array();
    
    /**
    * setName
    *
    * @param string $name
    *
    * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

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
    * setPrivilege
    *
    * @param array $privileges
    *
    * @return self
    */
    public function setPrivileges(array $privileges)
    {
        $this->privileges = $privileges;
        return $this;
    }

    /**
    * getPrivileges
    *
    * @return array
    */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * addPrivilege
     * 
     * @param string $code
     * @param int $view
     * @param int $add
     * @param int $modify
     * @param int $delete 
     *
     * @return array
    */
    public function addPrivilege($code, $view = 0, $add = 0, $modify = 0, $delete = 0)
    {
        $this->privileges[$code] = array(
            'code' => $code,
            'view' => $view,
            'add' => $add,
            'modify' => $modify,
            'delete' => $delete,
        );
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Group_Add name="View">
     *       <Privilege code="AFLT" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="AGRP" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="ATMP" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="CRYP" view="0" add="0" modify="0" delete="0" />
     *       <Privilege code="CTGY" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="CURR" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="CUST" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="FUFL" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="INVT" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="LOGM" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="MMCF" view="0" add="0" modify="0" delete="0" />
     *       <Privilege code="MMPD" view="0" add="0" modify="0" delete="0" />
     *       <Privilege code="MMRP" view="0" add="0" modify="0" delete="0" />
     *       <Privilege code="MONY" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="ORDR" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="PGRP" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="PMNT" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="PROD" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="SHIP" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="STAT" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="STAX" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="STCT" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="STOR" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="SUTL" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="SYSM" view="1" add="0" modify="0" delete="0" />
     *       <Privilege code="UPSL" view="1" add="0" modify="0" delete="0" />
     *   </Group_Add>
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }

}