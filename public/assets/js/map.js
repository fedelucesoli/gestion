
			var map; // Global declaration of the map
			var lat_longs_map = new Array();
			var markers_map = new Array();
            var iw_map;
			
			iw_map = new google.maps.InfoWindow();

				 function initialize_map() {

				var myLatlng = new google.maps.LatLng(-35.1771057, -59.0930571);
				var myOptions = {
			  		zoom: 15,
					center: myLatlng,
			  		mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			var myLatlng = new google.maps.LatLng(-35.1771057, -59.0930571);
			
			var markerOptions = {
				map: map,
				position: myLatlng
			};
			marker_0 = createMarker_map(markerOptions);
			

			}

		
		function createMarker_map(markerOptions) {
			var marker = new google.maps.Marker(markerOptions);
			markers_map.push(marker);
			lat_longs_map.push(marker.getPosition());
			return marker;
		}
		
			google.maps.event.addDomListener(window, "load", initialize_map);
			