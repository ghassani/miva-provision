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

/**
* ProductVariantOption
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductVariantOption implements FragmentFragmentInterface
{
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *     <Options>
                <Attribute_Option attribute_code="select" option_code="s1" />
                <Attribute_Boolean attribute_code="text" present="true" />
                <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false" />
                <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2" />
            </Options>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }

}
    