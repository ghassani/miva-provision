<?php 

namespace Miva\Utility;


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
               $serializedData[] = $_key.'='.$value;
           }
       }
       
       return implode(',', $serializedData);
   }
   
}