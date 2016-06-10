<?php
$row = Yii::app()->db->createCommand('SELECT * FROM tbl_local')->queryAll();

?>




<div id="map" style="height: 500px"></div>
<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: {lat: 50.4501, lng: 150.644}
		});
		var geocoder = new google.maps.Geocoder();

		var address = [ <? foreach ($row as $item){
			echo "'".$item[city]." ".$item[adress]."', ";
		} ?> ];

		var name = [ <? foreach ($row as $item){
			echo "'".$item[name]."', ";
		} ?> ];

		for(var i=0; i<address.length; i++) {
			geocodeAddress(geocoder, map,address[i], name[i]);
		}


	}

	function geocodeAddress(geocoder, resultsMap,address,name) {

		geocoder.geocode({'address': address}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {
				resultsMap.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: resultsMap,
					position: results[0].geometry.location,


				});
				var content = document.createElement('div');
				content.innerHTML = "<h3>"+name+"</h3><strong>"+address+"</strong>";
				var infowindow = new google.maps.InfoWindow({
					content: content
				});

				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(resultsMap, marker);
				});


			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmxyI1s38GgIEQmVzIi81J_r1ceS4GCnc&signed_in=true&callback=initMap"
		async defer></script>
