<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Utility;


/**
* MivaArraySerializer
 * 
 * Takes a PHP array and serializes it for use in MivaScript
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class MivaArraySerializer
{
   
   /**
    * serialize
    * 
    * @param array $data
    * @return string
    */
   public static function serialize(array $data)
   {
       return static::isAssociativeArray($data) ? 
        static::serializeStructure($data) : static::serializeArray($data);

   }
    
   /**
    * isAssociativeArray
    * 
    * @param array $test
    * @return bool
    */
   public static function isAssociativeArray(array $test)
   {
       return (bool)count(array_filter(array_keys($test), 'is_string'));
   }
   
   /**
    * serializeStructure
    *
    * @param array $data
    * @param string $owningMember
    *
    * @return string
    */
   public static function serializeStructure(array $data, $owningMember = '')
   {
       $serializedData = array();
       
       foreach($data as $key => $value) {
           $_key = $owningMember.':'.$key;           
           if( is_array($value) ) {
               $dataToMerge = static::serializeArray($value, $_key);
               if ($dataToMerge) {
                   $serializedData[] = $dataToMerge;
               }
           } else {
               $serializedData[] = $_key.'='.urlencode($value);
           }
       }
              
       return implode(',', $serializedData);
   }
   
   /**
    * serializeArray
    *
    * @param array $data
    * @param string $owningMember
    * 
    * @return string
    */
   public static function serializeArray(array $data, $owningMember = '')
   {
       if (static::isAssociativeArray($data)) {
           return static::serializeStructure($data, $owningMember);
       }
       
       $serializedData = array();
       
       foreach ($data as $key => $value) {
           $_key = $owningMember.'['.($key+1).']';
           if (is_array($value)){
               if (static::isAssociativeArray($value)) {
                   $dataToMerge = static::serializeStructure($value, $_key);
                   if ($dataToMerge) {
                       $serializedData[] = $dataToMerge;
                   }
               } else {
                    $dataToMerge = static::serializeArray($value, $_key);
                   if ($dataToMerge) {
                       $serializedData[] = $dataToMerge;
                   }
               }      
           } else {
               $serializedData[] = $_key.'='.urlencode($value);
           }
       }
       
       return implode(',', $serializedData);
   }
   
}