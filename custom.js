
var map = L.map('map').setView([37.58, 23.43], 6);
L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png', {
//crs: L.CRS.EPSG4326,
attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo( map );


//Layer Switcher
           
$("#refresh").click(function( event ) {
	   //dimiourgia layer name apo ta select boxes
       var month1 = document.getElementById("monthcontrol1").value;
	   var type1 = document.getElementById("typecontrol1").value;
	   var newlayer = month1 + type1 ;
	    
		//tautisi meso id me to layer group
       var searchLayer = Layers[newlayer];
        map.addLayer(searchLayer);
		
		$(".container").hide();
        document.getElementById(newlayer).style.display = "block";
		//switching layers
		/*
           if (map.hasLayer(searchLayer)) {
                map.removeLayer(searchLayer);  
           }
          else{
              map.addLayer(searchLayer);
          } ; */
});



$("#clear").click(function( event ) {
group.eachLayer(function (layer) {
    map.removeLayer(layer)
});    
 $(".container").hide();
});

$("#scale").click(function( event ) {

//klimaka.style.display = "block"; 
    var month1 = document.getElementById("monthcontrol1").value;
	var type1 = document.getElementById("typecontrol1").value;
	var klimaka = month1 + type1 ;  
    //alert(klimaka); 	
	//document.getElementById(b).innerHTML = 'none';
	$(".container").hide();
    document.getElementById(klimaka).style.display = "block";
});

//prosthiki control ston xarti

L.control.mousePosition().addTo(map);



//oria, grid

var bounds = [[41.7750000000, 19.3666666667], [34.4750000000, 29.6500000000]];
var grid = L.rectangle(bounds, { weight: 1});
//grid.addTo(map);


//popups for stations
function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
		popupContent = feature.properties.popupContent;
		}
	layer.bindPopup(popupContent);
}



var c = new L.Control.Coordinates(); // you can send options to the constructor if you want to, otherwise default values are used

c.addTo(map);







