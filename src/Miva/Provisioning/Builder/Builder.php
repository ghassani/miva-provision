<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder;

/**
 * Builder
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Builder
{
    /** @var SimpleXMLElement */
    protected $root;

    /**
    * Constructor
    */
    public function __construct($storeCode = null)
    {
        $this->root = new \SimpleXMLElement('<Provision><Domain></Domain></Provision>');
        
        if (!is_null($storeCode)) {
            $this->addStore($storeCode);
        }
    }

    /**
     * getRoot
     * 
     * Gets the whole XML object 
     *
     * @return SimpleXMLElement
    */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * addStore
     * 
     * Adds a store by code and returns the node
     *
     * @return SimpleXMLElement
    */
    public function addStore($storeCode)
    {
        $store = $this->getStore($storeCode);

        // already exists?
        if ($store) {
            return $this;
        }

        $store = $this->getRoot()->addChild('Store');
        $store->addAttribute('code', $storeCode);

        return $store;
    }

    /**
     * getStore
     * 
     * Gets a store node
     * 
     * @param string $storeCode
     * 
     * @return SimpleXMLElement
     * @return false - if doesnt exist
     */
    public function getStore($storeCode)
    {
        if(empty($storeCode)){
            $store = $this->getRoot()->xpath(sprintf("/Provision/Store", $storeCode));
        } else {
            $store = $this->getRoot()->xpath(sprintf("/Provision/Store[@code='%s']", $storeCode));
        }

        if (!$store) {
            return false;
        }

        return reset($store);
    }

    /**
     * getDomain
     *
     * Gets the Domain node
     * 
     * @return SimpleXMLElement
    */
    public function getDomain()
    {
        $domain = $this->getRoot()->xpath('/Provision/Domain');

        if(!$domain) {
            $domain = $this->getRoot()->addChild('Domain');
        } else {
            $domain = end($domain);
        }

        return $domain;
    }
    
    /**
     * addFragmentToStore
     * 
     * @param Fragment\StoreFragmentInterface $fragment
     * @param string $storeCode - If null, the first store in the document is used
     * 
     * @return self
     * @throws Exception - If no store is added or store not found by passed code
     */
    public function addFragmentToStore(Fragment\StoreFragmentInterface $fragment, $storeCode = null)
    {
         $store = $this->getStore($storeCode);
         
         if (false === $store) {
            throw new \Exception(sprintf('Store Never Created or Store Not Found For Code %s', $storeCode));
         }
         
         $fragmentXml = $fragment->toXml();
         
         simplexml_import_xml($store, $fragmentXml->saveXml());
         
         return $this;
    }
    
    /**
     * addFragmentToDomain
     * 
     * @param Fragment\DomainFragmentInterface $fragment
     * 
     * @return self
     */
    public function addFragmentToDomain(Fragment\DomainFragmentInterface $fragment)
    {
         $domain = $this->getDomain();
         
         if (false === $domain) {
            throw new \Exception('Domain Fragment Not Found');
         }
         
         $fragmentXml = $fragment->toXml();
         
         simplexml_import_xml($domain, $fragmentXml->saveXml());
         
         return $this;
    }
    
    /**
     * toXml
     *
     * Outputs current builder to a XML string
     *
     * @return string
    */
    public function toXml()
    {
        return $this->root->saveXml();
    }
}