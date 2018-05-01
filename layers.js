//load layers apo geoserver


var Januarymax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:January-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Februarymax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:February-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Marchmax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:March-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Aprilmax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:April-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Maymax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:May-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Junemax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:June-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Julymax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:July-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Augustmax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:August-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Septembermax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:September-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Octobermax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:October-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Novembermax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:November-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Decembermax = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:December-max',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Januarymean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:January-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Februarymean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:February-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Marchmean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:March-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Aprilmean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:April-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Maymean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:May-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Junemean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:June-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Julymean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:July-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Augustmean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:August-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Septembermean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:September-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Octobermean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:October-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Novembermean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:November-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Decembermean = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:December-mean',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Januarymin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:January-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Februarymin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:February-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Marchmin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:March-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Aprilmin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:April-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Maymin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:May-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Junemin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:June-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Julymin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:July-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Augustmin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:August-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Septembermin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:September-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Octobermin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:October-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Novembermin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:November-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

var Decembermin = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
layers: 'Atlas_Temperatures:December-min',
format: 'image/png',
transparent: true,
version: '1.1.0',
attribution: "myattribution"
});

//layer group - orismos ID's

var Layers = {
    "Januarymax": Januarymax,
    "Februarymax": Februarymax,
    "Marchmax": Marchmax,
    "Aprilmax": Aprilmax,
	"Maymax": Maymax,
    "Junemax": Junemax,
    "Julymax": Julymax,
    "Augustmax": Augustmax,
	"Septembermax": Septembermax,
    "Octobermax": Octobermax,
    "Novembermax": Novembermax,
    "Decembermax": Decembermax,
	"Januarymean": Januarymean,
    "Februarymean": Februarymean,
    "Marchmean": Marchmean,
    "Aprilmean": Aprilmean,
	"Maymean": Maymean,
    "Junemean": Junemean,
    "Julymean": Julymean,
    "Augustmean": Augustmean,
	"Septembermean": Septembermean,
    "Octobermean": Octobermean,
    "Novembermean": Novembermean,
    "Decembermean": Decembermean,
	"Januarymin": Januarymin,
    "Februarymin": Februarymin,
    "Marchmin": Marchmin,
    "Aprilmin": Aprilmin,
	"Maymin": Maymin,
    "Junemin": Junemin,
    "Julymin": Julymin,
    "Augustmin": Augustmin,
	"Septembermin": Septembermin,
    "Octobermin": Octobermin,
    "Novembermin": Novembermin,
    "Decembermin": Decembermin
};

var allLayers = L.layerGroup([Januarymax,
Februarymax,
Marchmax,
Aprilmax,
Maymax,
Junemax,
Julymax,
Augustmax,
Septembermax,
Octobermax,
Novembermax,
Decembermax,
Januarymean,
Februarymean,
Marchmean,
Aprilmean,
Maymean,
Junemean,
Julymean,
Augustmean,
Septembermean,
Octobermean,
Novembermean,
Decembermean,
Januarymin,
Februarymin,
Marchmin,
Aprilmin,
Maymin,
Junemin,
Julymin,
Augustmin,
Septembermin,
Octobermin,
Novembermin,
Decembermin]);


group = L.layerGroup();
Januarymax.addTo(group);
Februarymax.addTo(group);
Marchmax.addTo(group);
Aprilmax.addTo(group);
Maymax.addTo(group);
Junemax.addTo(group);
Julymax.addTo(group);
Augustmax.addTo(group);
Septembermax.addTo(group);
Octobermax.addTo(group);
Novembermax.addTo(group);
Decembermax.addTo(group);
Januarymean.addTo(group);
Februarymean.addTo(group);
Marchmean.addTo(group);
Aprilmean.addTo(group);
Maymean.addTo(group);
Junemean.addTo(group);
Julymean.addTo(group);
Augustmean.addTo(group);
Septembermean.addTo(group);
Octobermean.addTo(group);
Novembermean.addTo(group);
Decembermean.addTo(group);
Januarymin.addTo(group);
Februarymin.addTo(group);
Marchmin.addTo(group);
Aprilmin.addTo(group);
Maymin.addTo(group);
Junemin.addTo(group);
Julymin.addTo(group);
Augustmin.addTo(group);
Septembermin.addTo(group);
Octobermin.addTo(group);
Novembermin.addTo(group);
Decembermin.addTo(group);


