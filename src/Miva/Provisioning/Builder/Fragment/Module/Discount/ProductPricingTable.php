<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\Discount;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;

/**
 * ProductPricingTable
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductPricingTable implements ChildFragmentInterface
{

    public $groupName;

    public $productCode;

    public $entries = array();

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }



    /**
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param array $entries
     */
    public function setEntries(array $entries = array())
    {
        $this->entries = $entries;
        return $this;
    }

    /**
     * @param $quantity
     * @param $type
     * @param $amount
     * @return $this
     */
    public function addEntry($quantity, $type, $amount)
    {
        $this->entries[] = array(
            'quantity'  => $quantity,
            'type'      => $type,
            'amount'    => $amount
        );
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <ProductPricingTable group_name="Volume Pricing Product Provisioning Test 01" product_code="discount_volume_provisioning_product">
     *      <Entry quantity="99" type="absolute" amount="99.98" />
     *      <Entry quantity="10" type="percent" amount="10" />
     *      <Entry quantity="5" type="fixed" amount="5" />
     *      <Entry quantity="101" type="fixed" amount="0" />
     *  </ProductPricingTable>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        if ($version < Version::NINE) {
            return;
        }

        $xmlObject = new SimpleXMLElement('<ProductPricingTable />');

        $xmlObject->addAttribute('group_name',   $this->getGroupName());
        $xmlObject->addAttribute('product_code', $this->getProductCode());

        if (count($this->getEntries())) {
            $entriesXml = $xmlObject->addChild('Entries');
            foreach ($this->getEntries() as $entry) {
                $entryXml = $entriesXml->addChild('Entry');
                $entryXml->addAttribute('quantity', $entry['quantity']);
                $entryXml->addAttribute('type', $entry['type']);
                $entryXml->addAttribute('amount', $entry['amount']);
            }
        }

        return $xmlObject;
    }
}