<?php include "stamkort_data.php";// test ?> 

<script type="text/javascript">var jArray= <?php echo json_encode($exValues ); ?>;
function printInfo(a){
  print(a);
  
}

</script>

<!DOCTYPE html>
<html>
<head>
    
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCnCH6jSQb-BkkDGFriXjaImHSob6YaVNU&sensor=false"></script>
<script type="text/javascript" src="centerObjectconstruct.js"></script>
<script type="text/javascript">
  

     google.maps.event.addDomListener(window, 'load', initialize);
     
     
     function createCenterObject(){
       var centerObject=new Array();
            
 for (var i=0;i<jArray.length;i++) {                  
          centerObject[i]=new uuCenter(
          
          jArray[i][0],
          jArray[i][1],
          jArray[i][2],
          jArray[i][3],
          jArray[i][4],
          jArray[i][5],
          jArray[i][6],
          jArray[i][7],
          jArray[i][8],
          jArray[i][9],
          jArray[i][10] 
                                           );       
           }     
      return centerObject;
      
     }
    function zoominOnCenter(zoom){
      
      var latLng = onIndexClicked();
   splitStr = latLng.split(",");
   var center =new google.maps.LatLng(parseFloat(splitStr[0]),parseFloat(splitStr[1]));
    var zoom = zoom;
    
    var mapProp = {
     center:center,
     zoomControl:false,  
     scaleControl:false,
     scrollwheel:false,
     keyboardShortcuts:false,
     disableDefaultUI: false,
     zoom:zoom,

  };
  
       
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    
//styling the map
map.setOptions({zoomControl:true, scrollwheel: false ,navigationControl: false,
    mapTypeControl: true,
    scaleControl: true,
    draggable: true,
    zooom:true,
    //styles: styles
    
    }  
    );
    
   var obj = createCenterObject();
 
 for(var i=0;i<jArray.length;i++){
          obj[i].marker(map).setMap(map);
           
            }         
   
              center.marker.setMap(map);
           
    }

 function initialize(zoom,place)
{
  
  var place = place;
  if (place=="1") {
    var center=new google.maps.LatLng(56.266427,10.292759);
    var zoom = zoom;
  }
 else if (place=="2"){
  var center=new google.maps.LatLng(55.635889, 12.623913899999934);
  var zoom = zoom;
 }
 else if (place=="3"){
  var center=new google.maps.LatLng(56.633072, 9.811927999999966);
  var zoom = zoom;
 }
  else if (place=="4"){
  var center=new google.maps.LatLng(55.472174, 9.134411);
  var zoom = zoom;
 }
 
 
 
 else{
  var center=new google.maps.LatLng(56.266427,10.292759);
 }
  var mapProp = {
     center:center,
     zoomControl:false,  
     scaleControl:false,
     scrollwheel:false,
     keyboardShortcuts:false,
     disableDefaultUI: false,
     zoom:zoom,

  };  
     var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

     var styles = [
  { "featureType": "administrative", "elementType": "labels", "stylers": [ { "visibility": "simple" },  { "color": "" } ] },
  { "featureType": "road", "elementType": "labels", "stylers": [ { "visibility": "on" } ] },
  { "featureType": "portrait", "stylers": [ { "color": "#fffff" },{ "hue": "#00aaff" },  ] },
          { "featureType": "road", "stylers": [ { "visibility": "off" } ] },
          { "featureType": "poi", "stylers": [ { "visibility": "off" } ] },
          { "featureType": "poi", "stylers": [ { "visibility": "off" } ] },
          {"featureType":"transit","stylers":[{"visibility":"off"}]},
          { "featureType": "water","stylers": [ { "visibility": "on" },{color:"#ffffff"}] },
            
           
];
//styling the map
map.setOptions({zoomControl:true, scrollwheel: false ,navigationControl: false,
    mapTypeControl: true,
    scaleControl: true,
    draggable: true,
    zooom:true,
    styles: styles
    
    }  
    );
  
 
  var obj = createCenterObject();
 
 for(var i=0;i<jArray.length;i++){
          obj[i].marker(map).setMap(map);
           
            }         
   
              center.marker.setMap(map);
        

  
}   
</script>

</head>
<body onload="initialize(7,'1')"> 
          

  
  <button onclick="initialize(7,'1')">Danmark</button>
   <button onclick="initialize(8,'2')">Sjælland/Hovedstaden</button>
    <button onclick="initialize(8,'3')">Nord og MidtJylland</button>
      <button onclick="initialize(8,'4')">Midtjylland og Syddanmark</button>
    
  
    
   <select id="names" onclick="zoominOnCenter(18)"></select>
<div id="googleMap" style="width:100%;height:600px; "> </div>

<script>

var obj2 = createCenterObject();
for (var i=0; i<obj2.length; i++) {
    document.getElementById("names").options[i] = new Option(obj2[i].centerName, obj2[i].lat+","+obj2[i].lng);
   
}
function onIndexClicked(){
 
  var elementId =  document.getElementById("names");
 var space = elementId.options[elementId.selectedIndex].value;
  return space;
  
}
function zoomToPosition(){
 
  
}
 
</script>

     
         
</body>
<script type=text/javascript>
  
   function myfunction(id){
    alert(id);
    
   }
   
  


     }
</script>
</html>
