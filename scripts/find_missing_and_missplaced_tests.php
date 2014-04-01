<?php
require_once(dirname(__FILE__).'/functions.php');


$srcDir = dirname(__FILE__).'/../src/Miva/Provisioning/Builder/Fragment';
$testsDir = dirname(__FILE__).'/../tests/Miva/Provisioning/Builder/Fragment';

if(!is_dir($srcDir) || !is_dir($testsDir)){
    die('Invalid Dirs');
}

$missingTests = array();
$testsWithoutFragments = array();
$srcDirFiles = glob($srcDir.'/*.php');
$testsDirFiles = glob($testsDir.'/*.php');
$createMissingTests = isset($argv[1]) && $argv[1] === 'true' ? true : false;
$deleteTestsWithoutFragments = isset($argv[2]) && $argv[2] === 'true' ? true : false;

foreach($srcDirFiles as $srcDirFile) {
    $filename = @end(explode('/', $srcDirFile));
    
    $testFileName = str_replace('.php', 'Test.php', $filename);
    if(!file_exists($testsDir.DIRECTORY_SEPARATOR.$testFileName)){
        $missingTests[] = $testFileName;
    }
}


foreach($testsDirFiles as $testsDirFile) {
    $filename = @end(explode('/', $testsDirFile));
    
    $fragFileName = str_replace('Test.php', '.php', $filename);
    if(!file_exists($srcDir.DIRECTORY_SEPARATOR.$fragFileName)){
        $testsWithoutFragments[] = $fragFileName;
    }
}


array_walk($missingTests, function($v, $k){
   global $createMissingTests, $deleteTestsWithoutFragments, $srcDir, $testsDir;
   print_line('Missing Test: '.$v); 
   if(true === $createMissingTests) {
       print_line('Created Missing Test: '.$v); 
       file_put_contents($testsDir.DIRECTORY_SEPARATOR.$v, '');
   }
});


array_walk($testsWithoutFragments, function($v, $k){
   global $createMissingTests, $deleteTestsWithoutFragments, $srcDir, $testsDir;
   print_line('Test Missing Fragment: '.$v); 
   
   if(true === $deleteTestsWithoutFragments) {
       print_line('Removed Test Without Fragment: '.$v); 
       @unlink($testsDir.DIRECTORY_SEPARATOR.$v);
   }
});

/*
print_r($testsWithoutFragments);

print_r($missingTests);*/




