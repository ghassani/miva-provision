<?php
require_once(dirname(__FILE__).'/functions.php');

$masterXml = simplexml_load_file(dirname(__FILE__).'/../doc/master_provide_clean.xml');
$fragmentsLocation = dirname(__FILE__).'/../src/Miva/Provisioning/Builder/Fragment';

if(!is_dir($fragmentsLocation)) {
    print_line('Fragments Path Not Found or Not Directory');
    print_line($fragmentsLocation,true);
}

$domainNames = array();
$storeNames = array();

foreach($masterXml->xpath('/Provision/Domain') as $d) {
    foreach($d->children() as $c) {
        $domainNames[$c->getName()] = $c;
    }
}


foreach($masterXml->xpath('/Provision/Store') as $s) {
    foreach($s->children() as $c) {
        $storeNames[$c->getName()] = $c;
    }
}


foreach($storeNames as $s => $e){
    $_s = str_replace('_','', $s);
    $path = sprintf('%s/%s.php', $fragmentsLocation, $_s);
    if(!file_exists($path)){
        file_put_contents($path, $e->asXml());
    }
}

foreach($domainNames as $s){
    #print_line($s);
}
