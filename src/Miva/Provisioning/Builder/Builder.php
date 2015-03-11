<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder;

use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;
use Miva\Provisioning\Builder\Fragment\Model\DomainFragmentInterface;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;
use Miva\Provisioning\Builder\Fragment\Model\FragmentInterface;
use Miva\Version;

/**
 * Builder
 * 
 * This class uses fragments to build a provisioning XML document
 * 
 * Usage:
 * 
 * <code>
 *  $builder = new Builder('STORE_A');
 *  
 *  $builder = new Builder('STORE_A', null, Miva\Version::FIVE_FIVE_PR8);
 * 
 *  $builder = new Builder('STORE_A', '<Provision><Domain></Domain></Provision>');
 * 
 *  $builder = new Builder('STORE_A', '/path/to/some/xml/file.xml');
 * 
 *  $fragment = new StoreAdd()
 *  // .. some object manipulation here
 * 
 *  $builder->addFragment($fragment);
 *  // or 
 *  // $builder->addFragmentToDomain($fragment);
 * 
 * </code>
 * 
 * @see /docs for more information and usage
 * @author Gassan Idriss <gidriss@miva.com>
*/
class Builder
{
    /** @var SimpleXMLElement */
    protected $root;

    /**
    * Constructor
     * 
     * @param string $storeCode
     * @param string $startFileOrInput - Load an existing file to work from or a whole xml string
     * @param float $version - A vaid version constant from Miva\Version
    */
    public function __construct($storeCode = null, $startFileOrInput = null, $version = Version::CURRENT)
    {
        
        if (!is_null($startFileOrInput)) {
            if(is_file($startFileOrInput) && !is_dir($startFileOrInput)) {
                $_xml = file_get_contents($startFileOrInput);
            } else {
                $_xml = $startFileOrInput;
            }
        } else {
            $_xml = '<Provision><Domain></Domain></Provision>';
        }
        
        $this->root = simplexml_load_string($_xml, '\\Miva\\Provisioning\\Builder\\SimpleXMLElement');
        
        $this->version = (float) $version;
        
        if (!is_null($storeCode)) {
            $this->addStore($storeCode);
        }
    }
    
    /**
     * getVersion
     * 
     * The version number of Miva Merchant this builder 
     * instance should build for
     *
     * @return float
     * @see Miva\Version
    */
    public function getVersion()
    {
    	return $this->version;
    }

    /**
     * setVersion
     *
     * @param float version
     *
     * @return self
    */
    public function setVersion($version)
    {
	    $this->version = (float) $version;
	    return $this;
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
     * @param StoreFragmentInterface $fragment
     * @param string $storeCode - If null, the first store in the document is used
     * 
     * @return self
     * @throws Exception - If no store is added or store not found by passed code
     */
    public function addFragmentToStore(StoreFragmentInterface $fragment, $storeCode = null)
    {
         $store = $this->getStore($storeCode);
         
         if (false === $store) {
            throw new \Exception(sprintf('Store Never Created or Store Not Found For Code %s', $storeCode));
         }
                  
         $fragmentXml = $fragment->toXml($this->getVersion(), array());
         
         XmlHelper::appendToParent($store, $fragmentXml);
         
         return $this;
    }
    
    /**
     * addFragmentToDomain
     * 
     * @param DomainFragmentInterface $fragment
     * 
     * @return self
     * @throws Exception - When domain not found in root document
     */
    public function addFragmentToDomain(DomainFragmentInterface $fragment)
    {
         $domain = $this->getDomain();
         
         if (false === $domain) {
            throw new \Exception('Domain Fragment Not Found');
         }
         
         $fragmentXml = $fragment->toXml($this->getVersion(), array());
         
         XmlHelper::appendToParent($domain, $fragmentXml);
         
         return $this;
    }

    /**
     * @param FragmentInterface $fragment
     * @param null $storeCode
     * @return mixed
     */
    public function add(FragmentInterface $fragment, $storeCode = null)
    {
        return $this->addFragment($fragment, $storeCode);
    }
    
    /**
     * addFragment
     * 
     * @param FragmentInterface $fragment
     * @param string $storeCode
     * 
     * @return self
     * @throws Exception
     */
     public function addFragment(FragmentInterface $fragment, $storeCode = null) 
     {
         if ($fragment instanceof StoreFragmentInterface && $fragment instanceof DomainFragmentInterface) {
             throw new \Exception('Passed fragtment is both of domain and store fragment iterface. Use desired method to add this fragment');
         }
         
         if($fragment instanceof ChildFragmentInterface) {
            throw new \Exception('Fragment is of FragmentFrgmentInterface as can\'t be added to the document directly, it belongs to some other fragment type');   
         }
         
         if ($fragment instanceof StoreFragmentInterface) {
            return $this->addFragmentToStore($fragment, $storeCode);
         } 
         
         if ($fragment instanceof DomainFragmentInterface) {
            return $this->addFragmentToDomain($fragment);
         } 
         
         throw new \Exception('Passed fragment could not be determined to a section of the document.');
    }
     
    /**
     * setOnComplete
     * 
     * Sets the Provision tag oncomplete attribute
     * 
     * @param string $onComplete - archive, delete, or null to unset
     * 
     * @return self
    */
    public function setOnComplete($onComplete)
    {    
         if(is_null($onComplete) && isset($this->root['oncomplete'])) {
            unset($this->root['oncomplete']);
            return;
         }
         
         $onComplete = strtolower($onComplete);
         
         if(!in_array($onComplete, array('archive','delete'))){
             throw new \InvalidArgumentException('Builder::setOnComplete requires a string of archive, delete, or null');
         }
         
         $this->root->addAttribute('oncomplete', $onComplete);
         return $this;
    }
    
    /**
     * query
     *
     * Run an XPath query against the current document
     *
     * @param string $xpathExpression
     * 
     * @return array
    */
    public function query($xpathExpression)
    {
        return $this->root->xpath($xpath);
    }
    
    /**
     * toXml
     *
     * Outputs current builder to a XML string
     *
     * @return string
    */
    public function toXml($formatted = false)
    {
        if(true === $formatted){
            $xml = $this->root->saveXml();
            $dom = new \DOMDocument('1.0');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadXML($xml);
            return $dom->saveXML();
        }
        return $this->root->saveXml();

    }
}