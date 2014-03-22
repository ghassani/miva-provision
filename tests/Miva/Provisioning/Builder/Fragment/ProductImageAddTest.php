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

use Miva\Provisioning\Builder\Fragment\ProductImageAdd;

/**
* ProductImageAddTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductImageAddTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductImageAdd();
        
        $fragment
          ->setProductCode('ProductCode')
          ->setFilePath('FilePath')
          ->setTypeCode('TypeCode');
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        $this->assertEquals($fragment->getFilePath(), 'FilePath');
        $this->assertEquals($fragment->getTypeCode(), 'TypeCode');
      

        $expectedXml = '<ProductImage_Add product_code="ProductCode" filepath="FilePath" type_code="TypeCode" />';
    }
}
        