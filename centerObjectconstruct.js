
  //uucenter object 
 var size;
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var pinColor = "336699";
 
 function uuCenter(centerName,leader,adress,lat,lng,telefon,email,url,covers,space,marker){
   var text_url = url.substring(11);
this.centerName=centerName;
this.leader=leader;
this.adress=adress;

this.lat=lat;
this.lng=lng;
this.telefon=telefon;
this.email=email;
this.url= url+ ' target="_blank" >';
this.covers = covers;
this.space=
function(){
   var pos=new google.maps.LatLng(this.lat,this.lng);
    return pos;
}
/*this.popUp=
function(){
    
    google.maps.event.addListener(mark, "mouseover", function() {
         infoW.open(map,this.marker());
    });
     return infoW;
}*/
this.marker=
function(map){
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|"+pinColor);
    var mark=new google.maps.Marker({
        icon: pinImage,
        position:this.space(),
        url:this.url,
    

    })
    mark.setAnimation();
     /*google.maps.event.addListener(mark, "click", function() {
       window.location.href = this.url;
        
      });  */
   var infoW = new google.maps.InfoWindow({
         maxWidth:500,
       
        content:" <div style='width:auto;height:100px;font-family:calibri;z-index:-1;'> <b>Centernavn:</b> "+this.centerName+"<br> "+"<b>Centerleder:</b> "+this.leader+"<br/> "+"<b>Adresse:</b> "+this.adress
        +"<br/>"+"<b>Dækker:</b> "+this.covers +"<br/> "+"<b>Telefon:</b> "+this.telefon+"<br/> "+"<b>Email:</b> "+this.email+"<br/> "+"<b>Hjemmeside:</b> <a href = "+this.url+ text_url+" </a>"+"<br/> </div>"
       
});
       google.maps.event.addListener(mark, "click", function() {
            
           infoW.open(map,mark);
          
          
           
           
    });
     
     
       /*google.maps.event.addListener(mark,"click",function(){
       
           infoW.close();
           count= 0 ;
          
         
       });*/
     google.maps.event.addListener(mark,"click",function(){
   
           //window.location.href=this.url;
         
        });
    return mark
}


 }
