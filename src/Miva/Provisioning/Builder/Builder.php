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

use Miva\Provisioning\Builder\Helper\XmlHelper;

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
            $store = $this->getRoot()->xpath("/Provision/Store");
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
                  
         XmlHelper::appendToParent($store, $fragment);
         
         return $this;
    }
    
    /**
     * addFragmentToDomain
     * 
     * @param Fragment\DomainFragmentInterface $fragment
     * 
     * @return self
     * @throws Exception - When domain not found in root document
     */
    public function addFragmentToDomain(Fragment\DomainFragmentInterface $fragment)
    {
         $domain = $this->getDomain();
         
         if (false === $domain) {
            throw new \Exception('Domain Fragment Not Found');
         }
         
         XmlHelper::appendToParent($domain, $fragment);
         
         return $this;
    }
    
    /**
     * addFragment
     * 
     * @param Fragment\FragmentInterface $fragment
     * @param string $storeCode
     * 
     * @return self
     * @throws Exception
     */
     public function addFragment(Fragment\FragmentInterface $fragment, $storeCode = null) 
     {
         if ($fragment instanceof Fragment\StoreFragmentInterface && $fragment instanceof DomainFragmentInterface) {
             throw new \Exception('Passed fragtment is both of domain and store fragment iterface. Use desired method to add this fragment');
         }
         
         if($fragment instanceof Fragment\FragmentFragmentInterface) {
            throw new \Exception('Fragment is of FragmentFrgmentInterface as can\'t be added to the document directly, it belongs to some other fragment type');   
         }
         
         if ($fragment instanceof Fragment\StoreFragmentInterface) {
            return $this->addFragmentToStore($fragment, $storeCode);
         } 
         
         if ($fragment instanceof Fragment\DomainFragmentInterface) {
            return $this->addFragmentToDomain($fragment);
         } 
         
         throw new \Exception('Passed fragment could not be determined to a section of the document.');
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