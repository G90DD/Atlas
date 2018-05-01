<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />	
	<link rel="stylesheet" href="onclick/Control.Coordinates.css" type="text/css">
	<link rel="stylesheet" href="Leaflet.MousePosition/src/L.Control.MousePosition.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="Leaflet.MousePosition/src/L.Control.MousePosition.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="layers.js" type="text/javascript"></script>
    <script src="files.js" type="text/javascript"></script>
    <title>Κλιματικός Άτλαντας</title>
</head>
  
<body>

<div id="navbar">
  <ul id="navbar2">
  <li class="dropdown">
    <a href="#" class="dropbtn">Κλιματικοί χάρτες 1971-2000</a>
    <div id="climate maps" class="dropdown-content">
      <div id="layercontrol" class="layercontrol">
	  <label>
	  <select id="typecontrol1">
	   <option disabled selected value>Τύπος Χάρτη</option>
	   <option value="mean">Μέση Μηνιαία Θερμοκρασία</option>
       <option value="max">Μέση Μέγιστη Μηνιαία Θερμοκρασία</option>
       <option value="min">Μέση Ελάχιστη Μηνιαία Θερμοκρασία</option>
	  </select>
	  </label>
	  <label>
      <select id="monthcontrol1">
	   <option disabled selected value>Μήνας</option>
       <option value="January">Ιανουάριος</option>
       <option value="February">Φεβρουάριος</option>
       <option value="March">Μάρτιος</option>
       <option value="April">Απρίλιος</option>
	   <option value="May">Μάιος</option>
	   <option value="June">Ιούνιος</option>
	   <option value="July">Ιούλιος</option>
       <option value="August">Αύγουστος</option>
       <option value="September">Σεπτέμβριος</option>
       <option value="October">Οκτώβριος</option>
	   <option value="November">Νοέμβριος</option>
       <option value="December">Δεκέμβριος</option>
      </select>
	  </label>
	  <div>
	  <button type="button" id="refresh" class="button">Προσθήκη Χάρτη</button> 
	  <br><br><br><br><br><br>
	  <button type="button" id="clear" class="button">Αφαίρεση Χάρτη</button> 
	  </div>
	  <br><br><br><br>
	  <!-- <button type="button" id="scale" class="button">Κλίμακα</button> -->
	  <br><br><br><br><br><br><br><br><br>
	  <!-- <div id="klimaka" style="display: none">
	    <img src="klimaka/april-max.jpg" alt="april-max" height="200" width="300"> 
	   </div>-->
	   <div id="Januarymean" class="container" style="display: none">
	    <img src="klimaka/mean/january-mean.jpg" alt="january-mean" height="200" width="300">
	   </div>
	   <div id="Februarymean" class="container" style="display: none" >
	    <img src="klimaka/mean/february-mean.jpg" alt="february-mean" height="200" width="300">
	   </div>
	   <div id="Marchmean" class="container" style="display: none" >
	    <img src="klimaka/mean/march-mean.jpg" alt="march-mean" height="200" width="300">
	   </div>
	   <div id="Aprilmean" class="container" style="display: none" >
	    <img src="klimaka/mean/april-mean.jpg" alt="april-mean" height="200" width="300">
	   </div>
	   <div id="Maymean" class="container" style="display: none" >
	    <img src="klimaka/mean/may-mean.jpg" alt="may-mean" height="200" width="300">
	   </div>
	   <div id="Junemean" class="container" style="display: none" >
	    <img src="klimaka/mean/june-mean.jpg" alt="june-mean" height="200" width="300">
	   </div>
	   <div id="Julymean" class="container" style="display: none" >
	    <img src="klimaka/mean/july-mean.jpg" alt="july-mean" height="200" width="300">
	   </div>
	   <div id="Augustmean" class="container" style="display: none" >
	    <img src="klimaka/mean/august-mean.jpg" alt="august-mean" height="200" width="300">
	   </div>
	   <div id="Septembermean" class="container" style="display: none" >
	    <img src="klimaka/mean/september-mean.jpg" alt="september-mean" height="200" width="300">
	   </div>
	   <div id="Octobermean" class="container" style="display: none" >
	    <img src="klimaka/mean/october-mean.jpg" alt="october-mean" height="200" width="300">
	   </div>
	   <div id="Novembermean" class="container" style="display: none" >
	    <img src="klimaka/mean/november-mean.jpg" alt="november-mean" height="200" width="300">
	   </div>
	   <div id="Decembermean" class="container" style="display: none" >
	    <img src="klimaka/mean/december-mean.jpg" alt="december-mean" height="200" width="300">
	   </div>
	   <div id="Januarymax" class="container" style="display: none">
	    <img src="klimaka/max/january-max.jpg" alt="january-max" height="200" width="300">
	   </div>
	   <div id="Februarymax" class="container" style="display: none" >
	    <img src="klimaka/max/february-max.jpg" alt="february-max" height="200" width="300">
	   </div>
	   <div id="Marchmax" class="container" style="display: none" >
	    <img src="klimaka/max/march-max.jpg" alt="march-max" height="200" width="300">
	   </div>
	   <div id="Aprilmax" class="container" style="display: none" >
	    <img src="klimaka/max/april-max.jpg" alt="april-max" height="200" width="300">
	   </div>
	   <div id="Maymax" class="container" style="display: none" >
	    <img src="klimaka/max/may-max.jpg" alt="may-max" height="200" width="300">
	   </div>
	   <div id="Junemax" class="container" style="display: none" >
	    <img src="klimaka/max/june-max.jpg" alt="june-max" height="200" width="300">
	   </div>
	   <div id="Julymax" class="container" style="display: none" >
	    <img src="klimaka/max/july-max.jpg" alt="july-max" height="200" width="300">
	   </div>
	   <div id="Augustmax" class="container" style="display: none" >
	    <img src="klimaka/max/august-max.jpg" alt="august-max" height="200" width="300">
	   </div>
	   <div id="Septembermax" class="container" style="display: none" >
	    <img src="klimaka/max/september-max.jpg" alt="september-max" height="200" width="300">
	   </div>
	   <div id="Octobermax" class="container" style="display: none" >
	    <img src="klimaka/max/october-max.jpg" alt="october-max" height="200" width="300">
	   </div>
	   <div id="Novembermax" class="container" style="display: none" >
	    <img src="klimaka/max/november-max.jpg" alt="november-max" height="200" width="300">
	   </div>
	   <div id="Decembermax" class="container" style="display: none" >
	    <img src="klimaka/max/december-max.jpg" alt="december-max" height="200" width="300">
	   </div>
	   <div id="Januarymin" class="container" style="display: none">
	    <p>Κλίμακα μέσης ελάχιστης τιμής Ιανουαρίου</p>
	   </div>
	   <div id="Februarymin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Φεβρουαρίου</p>
	   </div>
	   <div id="Marchmin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Μαρτίου</p>
	   </div>
	   <div id="Aprilmin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Απριλίου</p>
	   </div>
	   <div id="Maymin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Μαϊου</p>
	   </div>
	   <div id="Junemin" class="container" style="display: none" >
	    <img src="klimaka/min/june-min.jpg" alt="march-mean" height="200" width="300">
	   </div>
	   <div id="Julymin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Ιουλίου</p>
	   </div>
	   <div id="Augustmin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Αυγούστου</p>
	   </div>
	   <div id="Septembermin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Σεπτεμβρίου</p>
	   </div>
	   <div id="Octobermin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Οκτωβρίου</p>
	   </div>
	   <div id="Novembermin" class="container" style="display: none" >
	    <p>Κλίμακα μέσης ελάχιστης τιμής Νοεμβρίου</p>
	   </div>
	   <div id="Decembermin" class="container" style="display: none" >
	    <img src="klimaka/min/december-min.jpg" alt="march-mean" height="200" width="300">
	   </div>
	  </div>
	  
    </div>
  </li>
  <li class="dropdown">
     <a href="#" class="dropdtn">Κλιματικά διαγράμματα</a>
	<div id="climate diagramms" class="dropdown-content">
	<form id="pdfdownload" method="POST" action="files.php" >
	  <label>
	  <select id="typecontrol2" name="typecontrol2" required>
	   <option disabled selected value>Τύπος Διαγράμματος</option>
	   <option value="mean">Μέση Μηνιαία Θερμοκρασία</option>
       <option value="max">Μέση Μέγιστη Μηνιαία Θερμοκρασία</option>
       <option value="min">Μέση Ελάχιστη Μηνιαία Θερμοκρασία</option>
	  </select>
	  </label>
	  <!--
	  <label>
	  <select id="monthcontrol2" name="monthcontrol2">
	   <option disabled selected value>Μήνας</option>
       <option value="january">Ιανουάριος</option>
       <option value="february">Φεβρουάριος</option>
       <option value="march">Μάρτιος</option>
       <option value="april">Απρίλιος</option>
	   <option value="may">Μάιος</option>
	   <option value="june">Ιούνιος</option>
	   <option value="july">Ιούλιος</option>
       <option value="august">Αύγουστος</option>
       <option value="september">Σεπτέμβριος</option>
       <option value="october">Οκτώβριος</option>
	   <option value="november">Νοέμβριος</option>
       <option value="december">Δεκέμβριος</option>
      </select>
	  </label>
	  -->
	  <label>
	  <select id="stationcontrol" name="stationcontrol" required>
	   <option disabled selected value>Σταθμός</option>
	   <option value="Alexandroupoli">Αλεξανδρούπολη</option>
       <option value="Athina">Αθήνα</option>
       <option value="Heraklio">Ηράκλειο</option>
	   <option value="Ioannina">Ιωάννινα</option>
       <option value="Kalamata">Καλαμάτα</option>
       <option value="Kerkyra">Κέρκυρα</option>
	   <option value="Kythira">Κύθηρα</option>
       <option value="Larissa">Λάρισσα</option>
       <option value="Limnos">Λήμνος</option>
	   <option value="Methoni">Μεθώνη</option>
       <option value="Mikra">Μίκρα</option>
       <option value="Milos">Μήλος</option>
	   <option value="Mytilini">Μυτιλήνη</option>
       <option value="Naxos">Νάξος</option>
       <option value="Patra">Πάτρα</option>
	   <option value="Rodos">Ρόδος</option>
       <option value="Samos">Σάμος</option>
       <option value="Skyros">Σκύρος</option>
	   <option value="Soyda">Σούδα</option>
       <option value="Tripoli">Τρίπολη</option>
       <option value="Zakynthos">Ζάκυνθος</option>
	  </select>
	  </label>
	   
	  
	    <input type="submit" value="Κατέβασμα αρχείων" class="button"></input>
	</form>

	</div>	 
  </li>
</ul> 
</div> 
<div id="map" class="map">
</div>
	
<script type="text/javascript" src="custom.js"></script>
	
	
    
<script type="text/javascript">
//on click ston xarti
map.on('click', function(e) {   
    //load lat,lng se metavlites 
    var lat = e.latlng.lat.toFixed(10);
	var lng = e.latlng.lng.toFixed(10);
	
	function reqListener () {
      console.log(this.responseText);
    }
	
	//apostoli se temperature.php me XMLHttpRequest request
	var sReq = new XMLHttpRequest();
	
	sReq.onreadystatechange = function() {
    if (sReq.readyState == 4 && sReq.status == 200) {
        var popup = new L.Popup();
	    var newLatLng = new L.LatLng(lat, lng);
        popup.setLatLng(newLatLng);
        popup.setContent(sReq.responseText);
        map.openPopup(popup);
    }
	}
	sReq.open("POST", "temperature.php", true);
    sReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    sReq.send("lat="+encodeURIComponent(lat)+
              "&lng="+encodeURIComponent(lng));
	
    
});

</script>	



</body>
</html>
