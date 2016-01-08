<?php include "stamkort_data.php";?>

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
  
  /*var zoom= 8;
  var b = "bob";
  if (b=="bob") {
    var center=new google.maps.LatLng(56.266427,10.292759);
    var zoom = 7;
  }
 else{
  var center=new google.maps.LatLng(55.6739462, 12.562308700000017);
  var zoom = 8;
 }*/

     google.maps.event.addDomListener(window, 'load', initialize);

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
    mapTypeControl: false,
    scaleControl: true,
    draggable: true,
    zooom:true,
    styles: styles
    
    }  
    );
  
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
 for(var i=0;i<jArray.length;i++){
          centerObject[i].marker(map).setMap(map);

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
    
  
    
    <!--<a style="color:#336699;font-family:calibri;position: absolute;top:50px;left:25%;z-index:1;" href="http://uudanmark.dk">Tilbage til forsiden</a>
    <a style="color:#336699;font-family:calibri;position: absolute;top:50px;left:40%;z-index:1;" href="http://uudanmark.dk/wp-content/uploads/2014/03/Liste-over-UU-centre-til-hjemmesiden_4_Marts_-2014.pdf">UU_CENTRE 20. Feb 2014 </a> <br/><a style="color:#336699;font-family:calibri;position: absolute;top:50px;left:55%;z-index:1;" href="mailto:uudk@uudanmark.dk"> (Rettelser sendes til: uudk@uudanmark.dk)</a>
     
    <p style="position: absolute;top:100px;left:25%;z-index:1;"><img src="uudk_logo.png" width="250"/></p>
    <p style="color:#336699; position: absolute; top:60px; left:25%;z-index: 1;font-family:calibri;font-style:normal; font-size:30px;">UU-centre 2014</h3>
    
    <!--   <img style="position: absolute; z-index:1; right:200px; width:500px;height:200px;"src="cover.png" />-->
<div id="googleMap" style="width:100%;height:600px; "> </div>
 <!--<p style="border:3px solid;border-color: #336699;position: absolute;right:45%;z-index: 2;top:-10px;"><a href="google_map2.php"><img src="bornholm.png" width="100"></a></p>-->


</body>
<script type=text/javascript>
  
   function myfunction(id){
    alert(id);
    
   }
</script>
</html>
