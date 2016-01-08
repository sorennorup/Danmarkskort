<?php
/*this Class is making connection with the podio API 
just include podio_connect.php in your script and you kan start interacting with Podio*/
require_once 'podio-php/PodioAPI.php'; 



  class podio_connect {
   private $allItems=array();
   private $itemArray=array();
   private  $allValue=array();
   private  $allExteral_ids=array();
   private  $app_id;
    private  $app_token;
    private  $client_id;
    private  $client_secret;
    
 
 //constructor for connecting with podio when creating the object
  function podio_connect($app_id,$app_token, $client_id,$client_secret){
    $this->app_id=$app_id;
    
    $this->app_token=$app_token;
    $this->client_id=$client_id;
    $this->client_secret=$client_secret;
    
    $this->setupConection($client_id,$client_secret);
    }
  

  function setupConection($client_id,$client_secret){
  
  Podio::setup($this->client_id, $this->client_secret);
 

try {
  Podio::authenticate('app', array('app_id' => $this->app_id, 'app_token' => $this->app_token));
   
   
}
catch (PodioError $e) {
  
}
 
 }
 
 
 
  public function getFieldValue($app_id,$external_id){

$items = PodioItem::filter($this->app_id,array('limit' => 59));
$items = $items['items'];
 
 for($i=0;$i<count($items);$i++){
$itemArray[$i]=$items[$i]->item_id;

}
for($j=0;$j<count($itemArray);$j++){
    $item=PodioItem::get($itemArray[$j]);
    $field=$item->field($external_id);
    if($field!=null){
    $value=$field->humanized_value();
    $values[$j] = $value;   } 
    
}

return $values;
}  
   
   
 
 public function getExternalId_values($allExteral_ids){
  $i=0;
  
   $items = PodioItem::filter($this->app_id,array('limit' => 60));
   
  
 
   foreach ($items['items'] as $item) {
  // Now you can extract values from the individual item. E.g.:
  
  for($j=0;$j<count($allExteral_ids);$j++){
  $field = $item->field($allExteral_ids[$j]);
  $allValue[$j] = $field->humanized_value();
 
  
  }
   $allItems[$i] = $allValue;
  $i++;
}

    return $allItems;
 }
 
    
    
  
  
       
}
 
  
  
  ?>