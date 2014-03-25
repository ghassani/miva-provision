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
* UserAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UserAdd implements Model\DomainFragmentInterface
{
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <User_Update name="username">
            <Name>Test</Name>
            <Password>password</Password>
            <DefaultPagination>10</DefaultPagination>
            <Administrator>Yes</Administrator>
            <CanCreateUsers>No</CanCreateUsers>
            <StartInSimpleMode>No</StartInSimpleMode>
            <ForcePasswordChange>Yes</ForcePasswordChange>

            <ExpiresIn units="minutes,hours,days">10</ExpiresIn>
                - or -
            <ExpirationDate>
                <Year>2012</Year>
                <Month>7</Month>
                <Day>5</Day>
                <Hour>13</Hour>
                <Minute>50</Minute>
                <Second>23</Second>
            </ExpirationDate>
        </User_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<User_Update />');

        return $xmlObject;
    }
}
        

        