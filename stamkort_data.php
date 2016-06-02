<?php
require_once'podio_connect.php';
try{
    // insert your Authorization values from Podio
            $podio_data=new podio_connect(
                  $app_id,    /* your app id*/
                  $app_token, /*your app token*/
                  $client_id, /*your client_id*/
                  $client_secret, /* your client_secret*/ 
);
                     // array containing the external ids og the fields from the podio app
      
                   $exId = array('centernavn','centerleder','google-map2','lat2','lng3','telefonnummer','mail-til-center-2','hjemmeside','daekker-komunerne');
      
                  // Creates an array of the values of the fields from the podio app
      
                   $exValues=$podio_data->getExternalId_values($exId);

}
            // If the data wasn't loaded
catch(PodioError $e) {
            echo 'Kortet blev ikke indlæst. <a href="http://uudanmark.dk/uucenter_oversigt2/danmarkskort.php">Prøv igen</a>';
    
}

 
   
 
 
 
?>