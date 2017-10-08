(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Walking': [
			{
				name: 'Kambang Iwak',
				location_latitude: -2.989577, 
				location_longitude: 104.746275,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Kambang Iwak',
				description_point: 'kambang iwak palembang adalah tempat nongkrong dan olahraga di pusat kota palembang',
				get_directions_start_address: '',
				phone: '+3934245255',
				// url_point: 'single_tour.html'
			},
			{
				name: 'Kantor Walikota',
				location_latitude: -2.990871, 
				location_longitude: 104.756679,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'TKantor Walikota',
				description_point: 'kantor ini memiliki nilai sejarah yang dapat dilihat dari bangunan tuanya',
				// url_point: 'single_tour.html'
			},
			],
			'Hotels': [
			{
				name: 'Hotel Arya Duta',
				location_latitude: -2.976994, 
				location_longitude: 104.740972,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Arya Duta',
				description_point: 'salah satu hotel berkelas di kota palembang yang dikelilingi oleh berbagai tempat belanja',
				get_directions_start_address: '',
				// phone: '+3934245255',
				// url_point: 'single_tour.html'
			}
			],
			'Museums': [
			{
				name: 'Museum Balaputera Dewa',
				location_latitude: -2.9508304, 
				location_longitude: 104.7304425,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Museum Balaputera Dewa',
				description_point: 'merupakan museum yang pertama kali diresmikan tanggal 5 November 1984 dan mengambil nama Balaputra Dewa yang merupakan nama seorang raja yang membawa kerajaan Sriwijaya mencapai puncak kejayaannya.',
				get_directions_start_address: '',
				// phone: '+3934245255',
				// url_point: 'single_tour.html'
			},
			{
				name: 'Masjid Agung',
				location_latitude: -2.979360, 
				location_longitude: 104.745136,
				map_image_url: 'img/thumb_map_1.jpg',
				name_point: 'Masjid Agung',
				description_point: 'masjid agung merupakan masjid terbesar dan terletak di titik nol kota palembang.',
				get_directions_start_address: '',
				// phone: '+3934245255',
				// url_point: 'single_tour.html'
			}
			]

		};


			var mapOptions = {
				zoom: 13,
				center: new google.maps.LatLng(-2.9786144, 104.7614417),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				 scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [
											 {
					"featureType": "landscape",
					"stylers": [
						{
							"hue": "#FFBB00"
						},
						{
							"saturation": 43.400000000000006
						},
						{
							"lightness": 37.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.highway",
					"stylers": [
						{
							"hue": "#FFC200"
						},
						{
							"saturation": -61.8
						},
						{
							"lightness": 45.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.arterial",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 51.19999999999999
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.local",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 52
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "water",
					"stylers": [
						{
							"hue": "#0078FF"
						},
						{
							"saturation": -13.200000000000003
						},
						{
							"lightness": 2.4000000000000057
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "poi",
					"stylers": [
						{
							"hue": "#00FF6A"
						},
						{
							"saturation": -1.0989010989011234
						},
						{
							"lightness": 11.200000000000017
						},
						{
							"gamma": 1
						}
					]
				}
				]
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'img/pins/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));
					
	});
	

		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt="Image"/>' +
				'<h3>'+ item.name_point +'</h3>' +
				'<span>'+ item.description_point +'</span>' +
				'<div class="marker_tools">' +
				'<form action="http://maps.google.com/maps" method="get" target="_blank" style="display:inline-block""><input name="saddr" value="'+ item.get_directions_start_address +'" type="hidden"><input type="hidden" name="daddr" value="'+ item.location_latitude +',' +item.location_longitude +'"><button type="submit" value="Get directions" class="btn_infobox_get_directions">Directions</button></form>' +
					'<a href="tel://'+ item.phone +'" class="btn_infobox_phone">'+ item.phone +'</a>' +
					'</div>' +
					'<a href="'+ item.url_point + '" class="btn_infobox">Details</a>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 125),
				closeBoxMargin: '5px -20px 2px 2px',
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});


		};


