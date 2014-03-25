Miva PHP Provision Tools
=========

These are a set of libraries and wrappers for dealing with Miva Merchant Enterprise Provisioning.

**Right now, only enterprise customers of Miva Merchant have access to use their provisioning API. This may or may not change in the future.**


XML & SOAP Client
----
This wrapper makes it super simple to programatically send your Miva Merchant Provisioning XML File to your Miva Merchant Installation.

**Usage Example:**
```
use Miva\Provisioning\Client;
use Miva\Provisioning\Request;

$client = new Client('https://www.mystorefront.com/mm5/', 'MYTOKENHERE');

$request = new Request();

$request->setContent('<Provision> ... </Provision>);

$response = $client->doRequest($request);
```

Provision XML Builder
----
This library allows you to programatically construct a valid Miva Merchant Provision XML File. 

**Usage Example:**
```
use Miva\Provisioning\Builder\Builder;
use Miva\Provisioning\Builder\Fragment\StoreCreate;
use Miva\Provisioning\Builder\Fragment\ProductAdd;

$storeCode = 'STORE_CODE';

$builder = new Builder($storeCode);

$storeCreate = new StoreCreate();

$builder->addFragmentToDomain($storeCreate);
// alternately:
// $builder->addFragment($storeCreate);

$productAdd = new ProductAdd();

$productAdd->setCode('some_code')
  ->setName('Product Name')
  ->setPrice(20.00)
  ->setCode(10.00)
  ->setWeight(1.00)
  ->setDescription('Product Description')
  ->setTaxable(true)
  ->setActive(true);

$builder->addFragmentToStore($productAdd, $storeCode)
// alternately:
// $builder->addFragment($productAdd, $storeCode);

$xml = $builder->toXml(); //completed XML Document

// you can then send it with the client

$client = new Client('https://www.mystorefront.com/mm5/', 'MYTOKENHERE');

$request = new Request($xml);

$response = $client->doRequest($request);

echo $response->getContent(); 
```

Installation
----
You can pull the source and use your own/existing class loader, or you can simply use composer.

**Via Composer**
```
    "require": {
        "ghassani/miva-provision" : "dev-master"
    }
```
**Via PHAR Package**

Eventually

Misc
----

**This is still a work in progress**

Enjoy! If you would like to contribute, feel free to send in pull requests.
