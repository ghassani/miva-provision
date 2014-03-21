Miva PHP Provision Tools
=========

These are a set of libraries and wrappers for dealing with Miva Merchant Enterprise Provisioning.

XML & SOAP Client
----
This wrapper makes it super simple to programatically send your Miva Merchant 

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
use Miva\Provisioning\Builder\Builder\Fragment;

$builder = new Builder();

$storeCreate = new Fragment\StoreCreate();

$builder->createStore($storeCreate);

echo $builder->toXml();
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

Misc
----

**This is still a work in progress**

Enjoy! If you would like to contribute, feel free to send in pull requests.